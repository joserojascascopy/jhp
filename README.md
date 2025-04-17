# JHP Framework

JHP es un mini-framework en PHP puro con enfoque educativo y minimalista, ideal para aprender y construir aplicaciones modernas con una estructura limpia, soporte para rutas, controladores, vistas, modelos, y una base sólida para proyectos personalizados. Está inspirado en estructuras modernas como Laravel, pero con una implementación simple y clara.

## 📁 Estructura del proyecto

```
jhp/
├── app/
│   ├── controllers/       # Controladores del sistema
│   ├── helpers/           # Funciones auxiliares
│   ├── models/            # Modelos de base de datos
│   ├── views/             # Vistas del sistema
│   ├── src/               # Archivos fuente: SCSS, JS
│   └── routes/            # Rutas de la aplicación
├── config/                # Config global (base de datos, etc)
├── core/                  # Núcleo del framework (Router, etc)
├── public/                # Carpeta pública
│   ├── assets/            # Archivos compilados (CSS, JS, imágenes)
│   └── index.php          # Punto de entrada
├── .env.example           # Variables de entorno de ejemplo
├── .gitignore
├── composer.json
├── package.json
├── gulpfile.js
└── README.md
```

## 🚀 Requisitos

- PHP >= 8.0
- Composer
- MySQL o MariaDB
- Node.js y npm (para compilar assets)

## ⚙️ Instalación

1. **Clonar el repositorio:**

```bash
git clone https://github.com/joserojascascopy/jhp.git
cd jhp
```

2. **Instalar dependencias de PHP:**

```bash
composer install
```

3. **Instalar dependencias de Node (para assets):**

```bash
npm install
```

4. **Copiar el archivo de entorno:**

```bash
cp .env.example .env
```

5. **Compilar los assets:**

```bash
npm run dev
```

6. **Ejecutar el servidor:**

```bash
php -S localhost:8000 -t public
```

---

## 🛠️ Uso básico

- Las rutas están en: `app/routes/web.php`
- Controladores en: `app/controllers/`
- Vistas en: `app/views/`
- Modelos en: `app/models/`
- Lógica SCSS y JS en: `app/src/` (se compilan en `public/assets/`)

---

## 🧪 Testing

Proximamente se agregarán ejemplos de pruebas.

---

¡Listo para construir con PHP moderno y ligero!