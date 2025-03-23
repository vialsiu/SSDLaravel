## 🎨 Paint Across the World — Laravel Tourism Art Blog

**Author:** Sofia Fedane <br>


## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>
•   PHP 8.x
•   Composer
•   MySQL (via XAMPP)
•   Laravel 8 or higher


## 📁 Project Setup Instructions

Follow the steps below to get this Laravel project running on your local machine using **XAMPP** or any other local development environment.

---

### 🧰 1. Clone or Download the Project

Place the project folder inside your `htdocs` directory (for XAMPP):

```bash
C:\xampp\htdocs\Paint-Across-The-World
```

---

### 🧪 2. Install PHP Dependencies

Open a terminal in the project root and run:

```bash
composer install
```

---

### 💡 3. Create and Configure the `.env` File

Duplicate `.env.example` and rename it to `.env`. Then configure your database credentials:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=paintings_blog
DB_USERNAME=root
DB_PASSWORD=
```

Then generate the app key:

```bash
php artisan key:generate
```

---

### 🧱 4. Set Up the Database

1. Open **phpMyAdmin**.
2. Create a new database named: `paintings_blog`

---

### 🧮 5. Run Migrations

This will create all necessary tables:

```bash
php artisan migrate
```

---

### 🌱 6. Seed the Database with Sample Data

To populate the `users` and `posts` tables (all artworks and users), run:

```bash
php artisan db:seed
```

**Advised**: to run the specific seeder:

```bash
php artisan db:seed --class=PostsTableSeeder
```

If you don't want to create your own user, you can use my seeder:
```bash
php artisan db:seed --class=PostsTableSeeder
```


---

### 🎨 7. Compile Frontend Assets

Install Node dependencies and compile CSS/JS:

```bash
npm install
npm run dev
```

If using TailwindCSS and SCSS, this step is essential for proper styling.

---

### 🔗 8. Start the Local Development Server

Run:

```bash
php artisan serve
```

Visit your browser at:

```
http://localhost:8000
```

---


## Contributing/References:
For the Quiz API, I learned part of the implementation from  [this youtube playlist](https://www.youtube.com/watch?v=sDFR9aJkDSQ&list=PLa9jxxDE6i_2d0ENH4OjTYWP7ZavN1py3&index=2&ab_channel=LaraPhant) and put my own spin on it.

For the images and descriptions for the blogs, I used [this open source website](https://www.nga.gov/open-access-images.html)
