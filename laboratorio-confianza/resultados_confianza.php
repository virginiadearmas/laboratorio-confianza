<?php
include "db.php";

function h($s){
  return htmlspecialchars((string)$s, ENT_QUOTES, "UTF-8");
}

$sql = "SELECT id, fecha, puente_abierto, piedra_base, herida_escudo, brujula_interna, raiz_limite, total, perfil
        FROM resultados_confianza
        ORDER BY fecha DESC, id DESC";

$res = $conexion->query($sql);
$resultados = $res ? $res->fetch_all(MYSQLI_ASSOC) : [];

$total_tests = count($resultados);
$media_total = 0;

if ($total_tests > 0) {
  $suma_totales = array_sum(array_map(fn($r) => (int)$r["total"], $resultados));
  $media_total = $suma_totales / $total_tests;
}

$perfiles_count = [];
foreach ($resultados as $r) {
  $nombre = $r["perfil"];
  if (!isset($perfiles_count[$nombre])) {
    $perfiles_count[$nombre] = 0;
  }
  $perfiles_count[$nombre]++;
}

arsort($perfiles_count);
$perfil_mas_repetido = $perfiles_count ? array_key_first($perfiles_count) : "—";
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resultados del Test de Confianza</title>
  <style>
    :root{
      --bg:#0b0f16;
      --bg2:#0d121b;
      --line:rgba(255,255,255,.10);
      --text:#e9edf3;
      --muted:rgba(233,237,243,.70);
      --soft:rgba(233,237,243,.55);
      --accent:#7c4dff;
      --r:16px;
      --shadow:0 18px 60px rgba(0,0,0,.45);
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family:system-ui,Segoe UI,Roboto,Arial,sans-serif;
      color:var(--text);
      background:
        radial-gradient(900px 600px at 10% 10%, rgba(124,77,255,.14), transparent 60%),
        radial-gradient(900px 600px at 90% 20%, rgba(124,77,255,.08), transparent 60%),
        linear-gradient(180deg, var(--bg), var(--bg2));
    }
    .wrap{
      max-width:1200px;
      margin:0 auto;
      padding:28px 18px 60px;
    }
    .top{
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:12px;
      flex-wrap:wrap;
      margin-bottom:18px;
    }
    .pill{
      padding:10px 12px;
      border-radius:999px;
      border:1px solid var(--line);
      background:rgba(255,255,255,.03);
      font-size:13px;
      color:var(--text);
      text-decoration:none;
    }
    .hero,.card,.table-wrap{
      border:1px solid var(--line);
      background:rgba(255,255,255,.04);
      border-radius:var(--r);
      box-shadow:var(--shadow);
    }
    .hero{
      padding:20px;
      margin-bottom:18px;
    }
    h1{
      margin:0 0 8px;
      font-size:30px;
    }
    .sub{
      margin:0;
      color:var(--muted);
      line-height:1.7;
    }
    .stats{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:12px;
      margin-top:16px;
    }
    @media(max-width:800px){
      .stats{grid-template-columns:1fr}
    }
    .card{
      padding:16px;
    }
    .card strong{
      display:block;
      margin-bottom:6px;
      font-size:15px;
    }
    .card .value{
      font-size:24px;
      font-weight:800;
    }
    .card .mini{
      margin-top:4px;
      color:var(--soft);
      font-size:13px;
    }
    .table-wrap{
      overflow:auto;
      padding:0;
    }
    table{
      width:100%;
      border-collapse:collapse;
      min-width:980px;
    }
    th,td{
      padding:14px 12px;
      border-bottom:1px solid var(--line);
      text-align:left;
      vertical-align:top;
      font-size:14px;
    }
    th{
      background:rgba(255,255,255,.04);
      color:#fff;
      position:sticky;
      top:0;
      z-index:1;
    }
    tr:hover td{
      background:rgba(255,255,255,.03);
    }
    .perfil{
      font-weight:700;
    }
    .empty{
      padding:20px;
      color:var(--muted);
    }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="top">
      <a class="pill" href="http://ranking.local:8080/test_confianza.php">← Volver al test</a>
      <a class="pill" href="http://ranking.local:8080">Ranking</a>
      <a class="pill" href="http://portfolio.local:8080" target="_blank">Portfolio</a>
    </div>

    <div class="hero">
      <h1>Resultados guardados del Test de Confianza</h1>
      <p class="sub">
        Aquí puedes ver el histórico de resultados almacenados en MariaDB, con perfil, puntuación total y bloques.
      </p>

      <div class="stats">
        <div class="card">
          <strong>Tests guardados</strong>
          <div class="value"><?php echo h($total_tests); ?></div>
          <div class="mini">Número total de resultados almacenados</div>
        </div>

        <div class="card">
          <strong>Media total</strong>
          <div class="value"><?php echo $total_tests ? number_format($media_total, 2) : "0.00"; ?>/200</div>
          <div class="mini">Promedio de puntuación total</div>
        </div>

        <div class="card">
          <strong>Perfil más repetido</strong>
          <div class="value" style="font-size:18px;"><?php echo h($perfil_mas_repetido); ?></div>
          <div class="mini">Perfil que más veces aparece</div>
        </div>
      </div>
    </div>

    <div class="table-wrap">
      <?php if (!$resultados): ?>
        <div class="empty">Todavía no hay resultados guardados.</div>
      <?php else: ?>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Fecha</th>
              <th>Perfil</th>
              <th>Total</th>
              <th>Puente Abierto</th>
              <th>Piedra Base</th>
              <th>Herida y Escudo</th>
              <th>Brújula Interna</th>
              <th>Raíz y Límite</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($resultados as $r): ?>
              <tr>
                <td><?php echo h($r["id"]); ?></td>
                <td><?php echo h($r["fecha"]); ?></td>
                <td class="perfil"><?php echo h($r["perfil"]); ?></td>
                <td><b><?php echo h($r["total"]); ?>/200</b></td>
                <td><?php echo h($r["puente_abierto"]); ?>/40</td>
                <td><?php echo h($r["piedra_base"]); ?>/40</td>
                <td><?php echo h($r["herida_escudo"]); ?>/40</td>
                <td><?php echo h($r["brujula_interna"]); ?>/40</td>
                <td><?php echo h($r["raiz_limite"]); ?>/40</td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>