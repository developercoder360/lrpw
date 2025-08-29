# Laravel Roles & Permissions (LRPW)

This project is a **Laravel-based application** with a role & permission management system.  
Using this project, you can:  
- Associate users with **roles**  
- Assign permissions to **roles**  
- Assign specific permissions directly to **users**  

---

## 🚀 Features
- User authentication system (Laravel Breeze / Jetstream if integrated)  
- Role-based access control (RBAC)  
- Assign multiple roles to a user  
- Assign permissions to roles  
- Assign specific permissions directly to users  
- Middleware protection for routes using roles & permissions  

---

## 🛠 Installation Guide

1. **Clone the repository**
   ```bash
   git clone https://github.com/developercoder360/lrpw.git
   cd lrpw
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Copy .env and set up environment**
   ```bash
   cp .env.example .env
   ```
   Update your database and other credentials in `.env`.

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Run migrations and seeders**
   ```bash
   php artisan migrate --seed
   ```

6. **(Optional) Install Laravel Breeze or Jetstream for authentication**
   ```bash
   composer require laravel/breeze --dev
   php artisan breeze:install
   npm install && npm run dev
   php artisan migrate
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

---

## 📚 Usage

- Assign roles and permissions via the web interface or artisan commands.
- Protect routes using middleware, e.g., `role:admin` or `permission:edit-post`.

---

## 🤝 Contributing

Pull requests are welcome! For major changes, please open an issue first to discuss what you would like to change.

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

## 🙏 Credits

- [Laravel](https://laravel.com/)
- Open-source community
