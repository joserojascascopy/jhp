# JHP Framework

JHP es un mini-framework en PHP puro con enfoque educativo y minimalista. Está inspirado en estructuras modernas como Laravel, pero con una implementación simple y clara.

## 📁 Estructura del proyecto

```
jhp/
├── app/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   └── routes/
├── config/
│   └── database.php
├── core/
│   └── Router.php
├── includes/
│   └── helpers/
├── public/
│   ├── assets/
│   └── index.php
├── src/
│   ├── scss/
│   └── js/
├── .env
├── .env.example
├── composer.json
├── package.json
├── README.md
```

## 🚀 Requisitos

- PHP >= 8.0
- Composer
- MySQL o MariaDB
- Node.js y npm (para compilar assets)

## 🔧 Instalación

1. Clona el repositorio:

```bash
git clone https://github.com/tu-usuario/jhp.git
```

2. Instala dependencias:

```bash
composer install
npm install
```

3. Copia el archivo `.env.example` y renómbralo como `.env`. Configura tus credenciales de base de datos.

4. Compila los assets:

```bash
npm run dev
```

5. Levanta un servidor local:

```bash
php -S localhost:8000 -t public
```

## 📌 Uso

Define tus rutas en `app/routes/web.php`, tus controladores en `app/controllers` y modelos en `app/models`.