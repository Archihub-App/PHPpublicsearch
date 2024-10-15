# Interfaz PHP para consulta pública del contenido de ArchiHUB

Este repositorio proporciona un ejemplo práctico de cómo utilizar la API de ArchiHUB en un proyecto desarrollado en PHP. El código presentado aquí está diseñado como una plantilla que puede servir de base para proyectos más complejos o para integrarse en desarrollos más amplios.

El proyecto está configurado para ejecutarse fácilmente utilizando Docker Compose. Para desplegarlo, simplemente ejecuta el siguiente comando desde la raíz del proyecto:

`docker compose up -d`

Este proceso iniciará los servicios necesarios para que el aplicativo funcione de manera local. Cuando hay terminado puedes navegar a [localhost](http://localhost/) para acceder al aplicativo.

En este documento se detallarán los pasos adicionales para conectar el aplicativo a una instancia de ArchiHUB, realizar consultas de búsqueda, visualizar resultados, acceder a recursos y descargar documentos.

## Conectar con ArchiHUB

ArchiHUB ofrece la posibilidad de configurar una API pública, la cual facilita la consulta de su contenido. Esta API abre las puertas a un vasto mundo de exploración, permitiendo que los usuarios accedan y naveguen por los recursos de manera flexible, adaptándose a las necesidades específicas de cada uno.