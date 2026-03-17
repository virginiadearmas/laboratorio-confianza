<?php
include "db.php";

$questions = [
  ["id" => 1,  "bloque" => "puente_abierto", "titulo_bloque" => "Puente Abierto", "pregunta" => "Me resulta fácil confiar en las personas cuando las conozco.", "inversa" => false],
  ["id" => 2,  "bloque" => "puente_abierto", "titulo_bloque" => "Puente Abierto", "pregunta" => "Suelo pensar que la mayoría de la gente tiene segundas intenciones.", "inversa" => true],
  ["id" => 3,  "bloque" => "puente_abierto", "titulo_bloque" => "Puente Abierto", "pregunta" => "Me siento cómoda compartiendo aspectos personales con alguien cuando siento cercanía.", "inversa" => false],
  ["id" => 4,  "bloque" => "puente_abierto", "titulo_bloque" => "Puente Abierto", "pregunta" => "Prefiero mantener distancia emocional incluso con personas que me tratan bien.", "inversa" => true],
  ["id" => 5,  "bloque" => "puente_abierto", "titulo_bloque" => "Puente Abierto", "pregunta" => "Cuando alguien me demuestra constancia, me permito confiar más.", "inversa" => false],
  ["id" => 6,  "bloque" => "puente_abierto", "titulo_bloque" => "Puente Abierto", "pregunta" => "Me cuesta creer que alguien pueda quererme sin buscar algo a cambio.", "inversa" => true],
  ["id" => 7,  "bloque" => "puente_abierto", "titulo_bloque" => "Puente Abierto", "pregunta" => "Disfruto construyendo vínculos donde puedo ser yo misma.", "inversa" => false],
  ["id" => 8,  "bloque" => "puente_abierto", "titulo_bloque" => "Puente Abierto", "pregunta" => "Aunque alguien sea amable conmigo, suelo esperar que me falle.", "inversa" => true],

  ["id" => 9,  "bloque" => "piedra_base", "titulo_bloque" => "Piedra Base", "pregunta" => "Siento que puedo sostenerme emocionalmente incluso cuando las cosas van mal.", "inversa" => false],
  ["id" => 10, "bloque" => "piedra_base", "titulo_bloque" => "Piedra Base", "pregunta" => "Necesito que otros me confirmen constantemente que lo estoy haciendo bien.", "inversa" => true],
  ["id" => 11, "bloque" => "piedra_base", "titulo_bloque" => "Piedra Base", "pregunta" => "Confío en mi criterio cuando tengo que tomar decisiones importantes.", "inversa" => false],
  ["id" => 12, "bloque" => "piedra_base", "titulo_bloque" => "Piedra Base", "pregunta" => "Dudo de mí misma incluso en cosas que sé hacer bien.", "inversa" => true],
  ["id" => 13, "bloque" => "piedra_base", "titulo_bloque" => "Piedra Base", "pregunta" => "Cuando cometo un error, no dejo de sentir que valgo como persona.", "inversa" => false],
  ["id" => 14, "bloque" => "piedra_base", "titulo_bloque" => "Piedra Base", "pregunta" => "Si alguien me cuestiona, mi seguridad se derrumba con facilidad.", "inversa" => true],
  ["id" => 15, "bloque" => "piedra_base", "titulo_bloque" => "Piedra Base", "pregunta" => "Puedo estar sola sin sentir que me estoy desmoronando.", "inversa" => false],
  ["id" => 16, "bloque" => "piedra_base", "titulo_bloque" => "Piedra Base", "pregunta" => "Mi bienestar depende demasiado de cómo me miran los demás.", "inversa" => true],

  ["id" => 17, "bloque" => "herida_escudo", "titulo_bloque" => "Herida y Escudo", "pregunta" => "Las decepciones del pasado siguen influyendo en cómo me relaciono.", "inversa" => true],
  ["id" => 18, "bloque" => "herida_escudo", "titulo_bloque" => "Herida y Escudo", "pregunta" => "Me cuesta bajar la guardia incluso cuando no hay señales de peligro.", "inversa" => true],
  ["id" => 19, "bloque" => "herida_escudo", "titulo_bloque" => "Herida y Escudo", "pregunta" => "He aprendido a protegerme sin cerrarme por completo.", "inversa" => false],
  ["id" => 20, "bloque" => "herida_escudo", "titulo_bloque" => "Herida y Escudo", "pregunta" => "Cuando alguien se acerca demasiado, me pongo en alerta.", "inversa" => true],
  ["id" => 21, "bloque" => "herida_escudo", "titulo_bloque" => "Herida y Escudo", "pregunta" => "Puedo distinguir entre una amenaza real y un miedo heredado de experiencias pasadas.", "inversa" => false],
  ["id" => 22, "bloque" => "herida_escudo", "titulo_bloque" => "Herida y Escudo", "pregunta" => "A veces reacciono como si fueran a herirme aunque no haya pruebas.", "inversa" => true],
  ["id" => 23, "bloque" => "herida_escudo", "titulo_bloque" => "Herida y Escudo", "pregunta" => "Siento que he podido sanar parte de mis heridas relacionales.", "inversa" => false],
  ["id" => 24, "bloque" => "herida_escudo", "titulo_bloque" => "Herida y Escudo", "pregunta" => "Prefiero no confiar para no volver a sufrir.", "inversa" => true],

  ["id" => 25, "bloque" => "brujula_interna", "titulo_bloque" => "Brújula Interna", "pregunta" => "Intento actuar de acuerdo con lo que realmente pienso y siento.", "inversa" => false],
  ["id" => 26, "bloque" => "brujula_interna", "titulo_bloque" => "Brújula Interna", "pregunta" => "A menudo digo una cosa aunque por dentro sienta otra muy distinta.", "inversa" => true],
  ["id" => 27, "bloque" => "brujula_interna", "titulo_bloque" => "Brújula Interna", "pregunta" => "Reconozco mis emociones incluso cuando no me gustan.", "inversa" => false],
  ["id" => 28, "bloque" => "brujula_interna", "titulo_bloque" => "Brújula Interna", "pregunta" => "Me engaño a mí misma para evitar enfrentar ciertas verdades.", "inversa" => true],
  ["id" => 29, "bloque" => "brujula_interna", "titulo_bloque" => "Brújula Interna", "pregunta" => "Valoro mucho la coherencia entre lo que alguien dice y lo que hace.", "inversa" => false],
  ["id" => 30, "bloque" => "brujula_interna", "titulo_bloque" => "Brújula Interna", "pregunta" => "Cambio demasiado lo que muestro según con quién esté.", "inversa" => true],
  ["id" => 31, "bloque" => "brujula_interna", "titulo_bloque" => "Brújula Interna", "pregunta" => "Me siento en paz cuando actúo en línea con mis valores.", "inversa" => false],
  ["id" => 32, "bloque" => "brujula_interna", "titulo_bloque" => "Brújula Interna", "pregunta" => "Me cuesta saber qué quiero de verdad cuando hay presión emocional.", "inversa" => true],

  ["id" => 33, "bloque" => "raiz_limite", "titulo_bloque" => "Raíz y Límite", "pregunta" => "Puedo querer mucho a alguien sin perderme a mí misma en la relación.", "inversa" => false],
  ["id" => 34, "bloque" => "raiz_limite", "titulo_bloque" => "Raíz y Límite", "pregunta" => "Me cuesta poner límites por miedo a que me abandonen.", "inversa" => true],
  ["id" => 35, "bloque" => "raiz_limite", "titulo_bloque" => "Raíz y Límite", "pregunta" => "Sé reconocer cuándo una relación me está haciendo daño.", "inversa" => false],
  ["id" => 36, "bloque" => "raiz_limite", "titulo_bloque" => "Raíz y Límite", "pregunta" => "Soporto más de lo que debería para no sentirme sola.", "inversa" => true],
  ["id" => 37, "bloque" => "raiz_limite", "titulo_bloque" => "Raíz y Límite", "pregunta" => "Puedo decir “no” sin sentirme una mala persona.", "inversa" => false],
  ["id" => 38, "bloque" => "raiz_limite", "titulo_bloque" => "Raíz y Límite", "pregunta" => "Cuando alguien se aleja, siento que me quedo sin suelo.", "inversa" => true],
  ["id" => 39, "bloque" => "raiz_limite", "titulo_bloque" => "Raíz y Límite", "pregunta" => "Me siento más segura cuando una relación respeta mis límites.", "inversa" => false],
  ["id" => 40, "bloque" => "raiz_limite", "titulo_bloque" => "Raíz y Límite", "pregunta" => "A veces necesito tanto cariño o validación que ignoro mis propias necesidades.", "inversa" => true]
];

function h($s){
  return htmlspecialchars((string)$s, ENT_QUOTES, "UTF-8");
}

function normalize_answer(int $value, bool $inversa): int {
  if (!$inversa) return $value;
  return 6 - $value;
}

function rango_bloque(int $score): string {
  if ($score <= 17) return "Bajo";
  if ($score <= 27) return "Medio";
  return "Alto";
}

function detectar_perfil(array $rangos): array {
  $pa = $rangos["puente_abierto"] ?? "";
  $pb = $rangos["piedra_base"] ?? "";
  $he = $rangos["herida_escudo"] ?? "";
  $bi = $rangos["brujula_interna"] ?? "";
  $rl = $rangos["raiz_limite"] ?? "";

  // Perfiles muy definidos
  if ($pa === "Alto" && $pb === "Alto" && $he === "Alto" && $bi === "Alto" && $rl === "Alto") {
    return [
      "nombre" => "Pies Descalzos",
      "descripcion" => "Tu forma de confiar parece brotar desde un lugar amplio, vivo y profundo. Hay apertura hacia los demás, una base interna fuerte y una capacidad notable para sostenerte sin endurecerte por completo. Incluso si has vivido dolor, no has dejado que eso cierre del todo tu mundo emocional.\n\nEste perfil habla de una confianza integrada. Puedes vincularte, sentir, entregarte y al mismo tiempo conservar una noción bastante clara de quién eres. No significa perfección ni ausencia de miedo, sino una relación más sana con la vulnerabilidad: abrirte no equivale automáticamente a perderte."
    ];
  }

  if ($pa === "Bajo" && $pb === "Bajo" && $he === "Alto") {
    return [
      "nombre" => "Murallas Altas",
      "descripcion" => "Tu sistema emocional parece muy orientado a protegerse. Hay señales de desconfianza, fragilidad interna y heridas que todavía pesan mucho en la forma en que te relacionas. Este perfil no indica debilidad, sino defensa: tu mundo interno ha aprendido que abrirse puede doler.\n\nLas murallas protegen, sí, pero también aíslan. Aquí el reto no es obligarte a confiar sin filtros, sino empezar a distinguir mejor entre el peligro real y el miedo heredado. La confianza, en tu caso, probablemente necesita reconstruirse despacio, con pruebas, consistencia y mucho respeto por tus tiempos."
    ];
  }

  if ($pa === "Alto" && $pb === "Bajo") {
    return [
      "nombre" => "Ancla Externa",
      "descripcion" => "Tu tendencia natural parece ser la apertura: vincularte, acercarte y confiar en otras personas te sale con más facilidad que sostenerte internamente en soledad o incertidumbre. Eso puede hacerte cálida y disponible, pero también más expuesta cuando el apoyo externo falla.\n\nEste perfil suele reflejar que la confianza está muy colocada fuera: en el vínculo, en la validación, en la respuesta del otro. El crecimiento aquí pasa por construir una base más tuya, para que confiar en otros sea una elección bonita y no una necesidad desesperada de sostén."
    ];
  }

  if ($pa === "Bajo" && $pb === "Alto") {
    return [
      "nombre" => "Isla Fortificada",
      "descripcion" => "Hay bastante fuerza interna, pero poca disposición a apoyarte emocionalmente en otros. Confías más en tu propia capacidad de sostén que en la posibilidad de encontrar un vínculo seguro. Este perfil suele aparecer cuando una persona ha aprendido a sobrevivir sola.\n\nEso tiene una parte admirable: resiliencia, autonomía y capacidad de mantenerse en pie. Pero también puede convertir la autosuficiencia en una fortaleza cerrada. El reto no es perder independencia, sino permitir que exista también algo de apoyo compartido."
    ];
  }

  if ($pa === "Alto" && $pb === "Medio" && $he === "Medio") {
    return [
      "nombre" => "Refugio Estratégico",
      "descripcion" => "Tu confianza parece moverse desde una lógica selectiva. Puedes abrirte, acercarte y construir vínculo, pero no de cualquier manera ni con cualquiera. Hay una mezcla de receptividad y prudencia: no estás cerrada, pero tampoco te entregas sin observar.\n\nNo se trata de frialdad, sino de criterio. La memoria emocional existe, y ciertas heridas o dudas siguen presentes, pero no mandan del todo. Tu confianza no es impulsiva: es elegida."
    ];
  }

  if ($pa === "Alto" && $pb === "Bajo" && $he === "Alto") {
    return [
      "nombre" => "Cuerda Floja",
      "descripcion" => "Aquí conviven dos fuerzas opuestas: por un lado, una tendencia a buscar vínculo, apoyo y cercanía; por otro, una base interna que aún se tambalea y unas heridas que siguen condicionando la experiencia de confiar. Esto genera una confianza inestable.\n\nEste perfil suele vivir la relación de forma intensa: se necesita cercanía, pero también hay mucha sensibilidad al daño. El trabajo aquí suele estar en fortalecer el propio sostén para que el encuentro con el otro no se viva desde tanto vértigo."
    ];
  }

  if ($pa === "Bajo" && $pb === "Alto" && $he === "Alto") {
    return [
      "nombre" => "Fortaleza Errante",
      "descripcion" => "Tu interior parece tener bastante capacidad de sostén, pero la herida sigue ocupando espacio y eso vuelve difícil el reposo dentro del vínculo. Hay fortaleza, sí, pero también mucha cautela.\n\nEste perfil puede dar la impresión de una autosuficiencia robusta, aunque por dentro siga habiendo alarma. El desafío no es volverte menos fuerte, sino permitir que esa fuerza no se convierta siempre en aislamiento."
    ];
  }

  if ($pa === "Alto" && $pb === "Alto" && $he === "Bajo") {
    return [
      "nombre" => "Lienzo Abierto",
      "descripcion" => "Tu confianza parece estar bastante viva y bien integrada. Hay apertura hacia los demás, una base interna sólida y menos peso defensivo del dolor pasado. Esto sugiere una forma de vincularte donde la cercanía no se vive necesariamente como amenaza.\n\nEste perfil habla de elasticidad emocional. Puedes abrirte, confiar y conectar sin que eso borre tus límites o tu identidad. No es una confianza ingenua, sino una confianza con espacio, respiración y flexibilidad."
    ];
  }

  if ($pa === "Alto" && $pb === "Medio" && $he === "Bajo") {
    return [
      "nombre" => "Puerta Giratoria",
      "descripcion" => "Hay una apertura real al vínculo, y las heridas no parecen dominar demasiado, pero la confianza todavía oscila. En algunos contextos puedes sentirte bastante disponible y cercana; en otros, más dubitativa o ambivalente.\n\nLa clave aquí está en la variabilidad. No parece que vivas la confianza desde un cierre profundo, pero sí desde cierta oscilación interna. Tu trabajo no es abrirte más, sino entender mejor qué condiciones hacen que esa puerta se sienta segura al girar."
    ];
  }

  if ($pa === "Medio" && $pb === "Medio" && $he === "Medio" && $bi === "Medio" && $rl === "Medio") {
    return [
      "nombre" => "Puente Condicional",
      "descripcion" => "Tu confianza parece moverse en una zona intermedia. No hay un cierre radical, pero tampoco una entrega amplia o relajada. Puede que te abras según el contexto, la persona o el momento.\n\nEso no te hace incoherente; te hace sensible a las condiciones del entorno y del vínculo. La confianza aquí no está ausente, pero sí condicionada. El paso siguiente suele ser ganar claridad interna sobre qué necesitas para sentir seguridad de verdad."
    ];
  }

  if ($he === "Alto" && ($pa === "Medio" || $pb === "Medio")) {
    return [
      "nombre" => "Herida Viva",
      "descripcion" => "Hay una marca emocional que sigue muy presente en tu forma de confiar. Aunque otras dimensiones no estén especialmente bajas, el peso de la herida sigue coloreando cómo te acercas al vínculo y cuánto riesgo sientes al abrirte.\n\nLa confianza existe, pero no descansa. Es posible que necesites mucha evidencia, mucha constancia o mucho control para sentir que algo no va a romperse. Aquí el movimiento importante no es exigirte superarlo, sino reconocer que la herida todavía tiene voz y merece cuidado."
    ];
  }

  // Perfiles mixtos más finos
  if ($bi === "Alto" && $rl === "Alto" && $pa === "Medio") {
    return [
      "nombre" => "Refugio Lúcido",
      "descripcion" => "Tu mundo interno tiene bastante claridad, coherencia y capacidad de poner límites. Sabes leerte, identificar lo que te hace bien y distinguir mejor qué cruza tus fronteras emocionales. No pareces perdida dentro de ti, sino bastante consciente de tus valores, emociones y necesidades.\n\nSin embargo, la confianza hacia fuera no aparece completamente suelta. Hay apertura, sí, pero medida; no un cierre total, pero tampoco abandono confiado. Este perfil refleja una forma de vincularte en la que la lucidez interna va por delante del salto relacional: primero entiendes, observas y cuidas el terreno; luego, si hay seguridad, te acercas."
    ];
  }

  if (($pa === "Medio" || $pa === "Alto") && ($he === "Medio" || $he === "Alto")) {
    return [
      "nombre" => "Apertura Vigilante",
      "descripcion" => "Existe deseo de vínculo y capacidad de abrirte, pero las heridas aún siguen activando cierta alerta. Puedes acercarte, confiar e implicarte, aunque una parte de ti continúa escaneando el terreno por si algo se rompe.\n\nEste perfil suele vivir la confianza como una mezcla de esperanza y cautela. No hay cierre completo, pero sí memoria emocional. Te permites el puente, aunque sin olvidar del todo lo que dolió antes."
    ];
  }

  if ($pb === "Alto" && $he === "Medio" && $pa === "Medio") {
    return [
      "nombre" => "Fortaleza Sensible",
      "descripcion" => "Tienes recursos internos bastante sólidos, pero eso no elimina la sensibilidad. Sabes sostenerte, pero no por ello eres inmune a la herida o a la decepción. La diferencia es que no te desarmas con tanta facilidad como antes.\n\nEste perfil combina fuerza con sensibilidad relacional. Puedes sentir mucho y, aun así, no perder tu centro del todo. El reto aquí no es endurecerte más, sino permitir que la fortaleza no se convierta siempre en control."
    ];
  }

  if ($pa === "Medio" && $pb === "Medio" && ($he === "Medio" || $he === "Bajo")) {
    return [
      "nombre" => "Puente Prudente",
      "descripcion" => "Te vinculas con cautela, pero sin vivir en estado de alarma. No eres una persona lanzada, aunque tampoco estás completamente cerrada. Necesitas tiempo, señales y consistencia para que la confianza crezca.\n\nEste perfil refleja una forma de abrirse pausada, madura y selectiva. La confianza no surge de golpe, sino por acumulación de pruebas. No suele haber extremos, sino construcción lenta."
    ];
  }

  if (($bi === "Medio" || $bi === "Alto") && $pb === "Medio" && $rl === "Medio") {
    return [
      "nombre" => "Centro en Construcción",
      "descripcion" => "Hay bastante trabajo interno hecho, pero aún no se siente del todo asentado. Intuyes tus necesidades, detectas bastantes cosas y empiezas a dibujar límites, aunque todavía puede haber dudas o vaivenes al sostenerlos.\n\nEste perfil sugiere proceso. No habla de ausencia de recursos, sino de una base que se está formando. Lo importante aquí no es la perfección, sino la dirección: ya no estás igual que antes, aunque todavía no sientas plena estabilidad."
    ];
  }

  if (($pa === "Medio" || $pa === "Alto") && ($rl === "Bajo" || $rl === "Medio") && ($pb === "Bajo" || $pb === "Medio")) {
    return [
      "nombre" => "Vínculo Ambivalente",
      "descripcion" => "Hay deseo de cercanía y apertura, pero el sostén interno y los límites no siempre acompañan con la misma fuerza. Eso puede hacer que el vínculo se vuelva más intenso, confuso o absorbente de lo que te gustaría.\n\nEste perfil refleja una confianza que busca afuera algo que aún no termina de afirmarse dentro. No significa debilidad, sino necesidad de consolidar el propio suelo para que el encuentro con el otro no se vuelva tan desestabilizador."
    ];
  }

  if ($bi === "Alto" && $he === "Alto") {
    return [
      "nombre" => "Claridad Protectora",
      "descripcion" => "Te entiendes bastante bien por dentro, pero la herida sigue presente. Sabes leer lo que te pasa, identificar contradicciones y reconocer patrones, pero eso no implica que el dolor relacional haya perdido fuerza.\n\nEste perfil suele ser muy consciente, incluso demasiado consciente a veces. Hay lucidez, pero no siempre alivio. La mente entiende, el corazón todavía se protege. Aquí el aprendizaje suele consistir en pasar de la comprensión al permiso para bajar defensa."
    ];
  }

  if ($rl === "Alto" && ($pb === "Medio" || $pb === "Alto") && $pa === "Medio") {
    return [
      "nombre" => "Raíz Despierta",
      "descripcion" => "Tus límites están bastante despiertos: sabes detectar mejor cuándo algo no te sienta bien y ya no te resulta tan fácil disolverte dentro del vínculo. Puede que la confianza no fluya del todo, pero hay una base más firme que impide que te pierdas fácilmente.\n\nEste perfil habla de una recuperación importante del propio terreno. La confianza quizá no sea total, pero ya no nace desde la indefensión. Hay más raíz, más aquí estoy yo, y eso cambia mucho la forma de vincularte."
    ];
  }

  return [
    "nombre" => "Perfil Mixto",
    "descripcion" => "Tus resultados no encajan del todo en un único patrón claro, y eso también dice algo importante: tu relación con la confianza es compleja, cambiante y probablemente muy dependiente del contexto. Puede haber áreas donde te sientes fuerte y abierta, y otras donde todavía aparecen reservas, dolor o contradicción.\n\nLejos de ser un problema, este perfil mixto puede reflejar una experiencia humana más realista. No siempre somos un bloque uniforme. A veces convivimos con apertura y miedo, con fuerza y necesidad, con claridad y oscilación. Este resultado invita a mirar tu mapa con más matices y menos juicio."
  ];
}

$errors = [];
$resultado = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $scores = [
    "puente_abierto" => 0,
    "piedra_base" => 0,
    "herida_escudo" => 0,
    "brujula_interna" => 0,
    "raiz_limite" => 0
  ];

  $titulos = [
    "puente_abierto" => "Puente Abierto",
    "piedra_base" => "Piedra Base",
    "herida_escudo" => "Herida y Escudo",
    "brujula_interna" => "Brújula Interna",
    "raiz_limite" => "Raíz y Límite"
  ];

  foreach ($questions as $q) {
    $key = "q_" . $q["id"];
    if (!isset($_POST[$key])) {
      $errors[] = "Falta responder la pregunta " . $q["id"] . ".";
      continue;
    }

    $respuesta = (int)$_POST[$key];
    if ($respuesta < 1 || $respuesta > 5) {
      $errors[] = "La respuesta de la pregunta " . $q["id"] . " no es válida.";
      continue;
    }

    $valor = normalize_answer($respuesta, $q["inversa"]);
    $scores[$q["bloque"]] += $valor;
  }

  if (!$errors) {
    $total = array_sum($scores);
    $rangos = [];
    foreach ($scores as $bloque => $score) {
      $rangos[$bloque] = rango_bloque($score);
    }

    $perfil = detectar_perfil($rangos);
    $stmt = $conexion->prepare("INSERT INTO resultados_confianza
      (puente_abierto, piedra_base, herida_escudo, brujula_interna, raiz_limite, total, perfil)
      VALUES (?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param(
      "iiiiiis",
      $scores["puente_abierto"],
      $scores["piedra_base"],
      $scores["herida_escudo"],
      $scores["brujula_interna"],
      $scores["raiz_limite"],
      $total,
      $perfil["nombre"]
    );

    $stmt->execute();
    $resultado = [
      "scores" => $scores,
      "titulos" => $titulos,
      "rangos" => $rangos,
      "total" => $total,
      "perfil" => $perfil
    ];
  }
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test de Confianza</title>
  <style>
    :root{
      --bg:#0b0f16;
      --bg2:#0d121b;
      --line:rgba(255,255,255,.10);
      --text:#e9edf3;
      --muted:rgba(233,237,243,.70);
      --soft:rgba(233,237,243,.55);
      --accent:#7c4dff;
      --danger:#ff4d6d;
      --ok:#20c997;
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
    .wrap{max-width:980px;margin:0 auto;padding:28px 18px 60px}
    .top{display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap;margin-bottom:18px}
    .pill{
      padding:10px 12px;border-radius:999px;border:1px solid var(--line);
      background:rgba(255,255,255,.03);font-size:13px;color:var(--text);text-decoration:none
    }
    .hero,.card,.result-box,.error-box{
      border:1px solid var(--line);
      background:rgba(255,255,255,.04);
      border-radius:var(--r);
      box-shadow:var(--shadow);
    }
    .hero{padding:20px;margin-bottom:18px}
    h1{margin:0 0 8px;font-size:30px}
    .sub{margin:0;color:var(--muted);line-height:1.7}
    .legend{
      margin-top:14px;
      display:flex;
      gap:10px;
      flex-wrap:wrap;
      color:var(--soft);
      font-size:13px;
    }
    .legend span{
      padding:8px 10px;
      border:1px solid var(--line);
      border-radius:999px;
      background:rgba(0,0,0,.18);
    }
    .card{
      padding:16px;
      margin-bottom:12px;
    }
    .q-number{
      font-size:12px;
      color:var(--soft);
      margin-bottom:6px;
    }
    .q-text{
      font-size:16px;
      line-height:1.5;
      margin-bottom:14px;
    }
    .options{
      display:grid;
      grid-template-columns:repeat(5,1fr);
      gap:8px;
    }
    @media(max-width:700px){
      .options{grid-template-columns:1fr}
    }
    .option{
      display:flex;
      align-items:center;
      gap:8px;
      border:1px solid var(--line);
      border-radius:12px;
      padding:10px 12px;
      background:rgba(255,255,255,.03);
    }
    .bottom{
      margin-top:20px;
      display:flex;
      gap:10px;
      flex-wrap:wrap;
    }
    .btn{
      display:inline-flex;
      align-items:center;
      justify-content:center;
      padding:12px 16px;
      border-radius:12px;
      border:1px solid var(--line);
      background:rgba(255,255,255,.06);
      color:var(--text);
      font-weight:800;
      text-decoration:none;
      cursor:pointer;
    }
    .btn.primary{
      background:var(--accent);
      color:#0b0f16;
      border-color:rgba(255,255,255,.10);
    }
    .error-box{
      padding:14px 16px;
      margin-bottom:18px;
      border-color:rgba(255,77,109,.35);
      background:rgba(255,77,109,.12);
      color:#ffd6de;
    }
    .result-box{
      padding:20px;
      margin-bottom:18px;
      border-color:rgba(32,201,151,.35);
      background:rgba(32,201,151,.08);
    }
    .result-box h2{
      margin:0 0 10px;
      font-size:24px;
    }
    .perfil-box{
      margin-top:12px;
      margin-bottom:18px;
      padding:16px;
      border:1px solid var(--line);
      border-radius:14px;
      background:rgba(255,255,255,.05);
    }
    .perfil-box h3{
      margin:0 0 10px;
      font-size:22px;
    }
    .perfil-box p{
      margin:0;
      line-height:1.8;
      color:var(--text);
      white-space:pre-line;
    }
    .result-grid{
      display:grid;
      grid-template-columns:repeat(2,1fr);
      gap:12px;
      margin-top:14px;
    }
    @media(max-width:700px){
      .result-grid{grid-template-columns:1fr}
    }
    .result-card{
      border:1px solid var(--line);
      border-radius:14px;
      padding:14px;
      background:rgba(255,255,255,.04);
    }
    .result-card strong{
      display:block;
      margin-bottom:6px;
      font-size:16px;
    }
    .total{
      margin-top:10px;
      font-size:18px;
      color:#fff;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="top">
      <a class="pill" href="http://ranking.local:8080">← Volver al ranking</a>
      <a class="pill" href="http://portfolio.local:8080" target="_blank">Portfolio</a>
    </div>

    <div class="hero">
      <h1>Test de Confianza</h1>
      <p class="sub">
        Responde con sinceridad usando una escala de 1 a 5. Al enviar, verás tu puntuación por dimensiones y un perfil principal.
      </p>

      <div class="legend">
        <span>1 = Nunca</span>
        <span>2 = Rara vez</span>
        <span>3 = A veces</span>
        <span>4 = A menudo</span>
        <span>5 = Siempre</span>
      </div>
    </div>

    <?php if ($errors): ?>
      <div class="error-box">
        <?php foreach ($errors as $e): ?>
          <div>• <?php echo h($e); ?></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if ($resultado): ?>
      <div class="result-box">
        <h2>Resultado del test</h2>

        <div class="perfil-box">
          <h3><?php echo h($resultado["perfil"]["nombre"]); ?></h3>
          <p><?php echo h($resultado["perfil"]["descripcion"]); ?></p>
        </div>

        <p>Estas son tus puntuaciones por bloque en esta versión del sistema.</p>

        <div class="result-grid">
          <?php foreach ($resultado["scores"] as $bloque => $score): ?>
            <div class="result-card">
              <strong><?php echo h($resultado["titulos"][$bloque]); ?></strong>
              Puntuación: <b><?php echo h($score); ?>/40</b><br>
              Nivel: <b><?php echo h($resultado["rangos"][$bloque]); ?></b>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="total">
          Puntuación total: <b><?php echo h($resultado["total"]); ?>/200</b>
        </div>
      </div>
    <?php endif; ?>

    <form method="post" action="">
      <?php foreach ($questions as $q): ?>
        <div class="card">
          <div class="q-number">Ítem <?php echo $q["id"]; ?></div>
          <div class="q-text"><?php echo h($q["pregunta"]); ?></div>

          <div class="options">
            <?php for ($i = 1; $i <= 5; $i++): ?>
              <label class="option">
                <input
                  type="radio"
                  name="q_<?php echo $q["id"]; ?>"
                  value="<?php echo $i; ?>"
                  <?php echo (isset($_POST["q_" . $q["id"]]) && (int)$_POST["q_" . $q["id"]] === $i) ? "checked" : ""; ?>
                >
                <?php
                  if ($i === 1) echo "Nunca";
                  elseif ($i === 2) echo "Rara vez";
                  elseif ($i === 3) echo "A veces";
                  elseif ($i === 4) echo "A menudo";
                  else echo "Siempre";
                ?>
              </label>
            <?php endfor; ?>
          </div>
        </div>
      <?php endforeach; ?>

      <div class="bottom">
        <button class="btn primary" type="submit">Calcular resultado</button>
        <a class="btn" href="http://ranking.local:8080">Cancelar</a>
      </div>
    </form>
  </div>
</body>
</html>