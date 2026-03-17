# 🧠 Laboratorio de Confianza

Aplicación web desarrollada en **PHP + MariaDB**, integrada con **Joomla**, que permite realizar un test psicométrico de confianza basado en múltiples dimensiones y generar un perfil interpretativo automático.

---

## ✨ Descripción

Este proyecto nace como un sistema de autoexploración psicológica que evalúa distintas áreas de la confianza personal mediante un test de 40 preguntas.

El sistema calcula puntuaciones por bloques, genera perfiles narrativos personalizados y almacena los resultados en una base de datos para su análisis posterior.

---

## 🚀 Funcionalidades

- Test de 40 preguntas
- Escala Likert (1–5)
- Preguntas directas e inversas
- Cálculo automático por bloques:
  - Puente Abierto
  - Piedra Base
  - Herida y Escudo
  - Brújula Interna
  - Raíz y Límite
- Generación de perfil interpretativo automático
- Guardado de resultados en base de datos
- Panel de visualización de resultados
- Integración dentro de Joomla (iframe)

---

## 🛠️ Tecnologías utilizadas

- PHP
- MariaDB / MySQL
- HTML + CSS
- XAMPP (entorno local)
- Joomla (integración frontend)

---

## 📁 Estructura del proyecto
laboratorio-confianza/
├── test_confianza.php
├── resultados_confianza.php
├── db.example.php
├── resultados_confianza.sql
├── README.md
└── screenshots/

---

## ⚙️ Instalación en local

1. Copiar los archivos en `htdocs`
2. Renombrar:db.example.php → db.php
3. Configurar credenciales de base de datos
4. Ejecutar el archivo:resultados_confianza.sql
5. Abrir en el navegador:http://localhost/test_confianza.php
## 📸 Capturas

### 🧩 Test
![Test](screenshots/test_inicio.png)

### 📊 Resultado
![Resultado](screenshots/resultado.png)

### 🗄️ Base de datos
![Base de datos](screenshots/base_datos.png)

### 🌐 Integración en Joomla
![Joomla](screenshots/joomla.png)

---

## 🧠 Lógica del sistema

El test evalúa cinco dimensiones clave de la confianza:

- **Puente Abierto** → confianza hacia los demás  
- **Piedra Base** → seguridad interna  
- **Herida y Escudo** → impacto de experiencias pasadas  
- **Brújula Interna** → coherencia personal  
- **Raíz y Límite** → capacidad de establecer límites  

A partir de estas dimensiones se generan perfiles interpretativos narrativos.

---

## 📌 Estado del proyecto

✔ Funcional en entorno local  
✔ Persistencia en base de datos  
✔ Visualización de resultados  
✔ Integración en CMS  

🔜 Próximas mejoras:
- Despliegue en hosting real
- Dashboard avanzado de resultados
- Sistema de usuarios
- Visualización gráfica (charts)

---

## 👩‍💻 Autoría

Desarrollado por **Virginia Armas**  
Proyecto personal dentro de su aprendizaje en desarrollo web y sistemas (ASIR)

---
