CREATE TABLE resultados_confianza (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    puente_abierto INT NOT NULL,
    piedra_base INT NOT NULL,
    herida_escudo INT NOT NULL,
    brujula_interna INT NOT NULL,
    raiz_limite INT NOT NULL,
    total INT NOT NULL,
    perfil VARCHAR(100) NOT NULL
);