# ৻ꪆ Paint Across the World — Laravel Tourism Art Blog

**Author:** Sofia Fedane  

---

## 𓂃۶ৎ Project Requirements

Ensure your environment meets these prerequisites:

- ✅ PHP 8.x (minimum 7.3)
- ✅ Composer
- ✅ Node.js 12.13.0 or higher
- ✅ MySQL (via XAMPP recommended)
- ✅ Laravel 8 or higher

---

## 📂ᰔᩚ Installation & Setup Guide

Follow these steps to set up **Paint Across the World** locally:

### 1. 🚀ྀི  Clone or Download Project

Clone the project into your XAMPP's `htdocs` folder:

```bash
git clone <repository-url> C:\xampp\htdocs\Paint-Across-The-World
```

Or download and extract the project manually.

---

### 2. ⚙️ᥫ᭡. Install PHP Dependencies

Open your terminal within the project directory and run:

```bash
composer install
```

---

### 3. 🔧ꨄ Configure `.env` File

Duplicate `.env.example` as `.env`, then configure the database:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=paintings_blog
DB_USERNAME=root
DB_PASSWORD=
```

Next, generate your application key:

```bash
php artisan key:generate
```

---

### 4. 📦𖦹 Set Up Database

- Open **phpMyAdmin** and create a new database named:

```
paintings_blog
```

---

### 5. 📌ᯓ★ Run Database Migrations

Create the necessary tables by running:

```bash
php artisan migrate
```

---

### 6. 🌱ᝰ.ᐟ Database Seeding

Seed the database with posts and user data:

```bash
php artisan db:seed
```

Or specifically seed only the posts:

```bash
php artisan db:seed --class=PostsTableSeeder
```

---

### 7. 🎨ᯤ Compile Frontend Assets

To install dependencies and compile assets (TailwindCSS & SCSS):

```bash
npm install
npm run dev
```

---

### 8. 🛠️-`♡´- Start Local Server

Launch the Laravel development server:

```bash
php artisan serve
```

Then open your browser:

```
http://localhost:8000
```

---

## 🌐𐙚 Contributing & References

### 🔖 Quiz API Implementation

Learned and adapted similar to how it was implemented in this [YouTube Playlist by LaraPhant](https://www.youtube.com/watch?v=sDFR9aJkDSQ&list=PLa9jxxDE6i_2d0ENH4OjTYWP7ZavN1py3&index=2&ab_channel=LaraPhant).

### 🖼️જ⁀➴ Images & Art Content

- Historical artwork and descriptions sourced from the [National Gallery of Art Open Access](https://www.nga.gov/open-access-images.html).
- Modern artwork sourced from [The Artling](https://theartling.com/en/).

---

Thank you for reading! ♡

