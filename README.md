# Task Manager - Laravel 11

A simple task management application built with **Laravel 11**. It allows users to add, edit, delete, and mark tasks as completed.

## Technologies

- **Laravel 11** (PHP)
- **Alpine.js** (lightweight frontend interactions)
- **Tailwind CSS** (interface styling)

## Installation and Setup

1. **Clone the repository**
   ```sh
   git clone https://github.com/KrzysztofWeichert/LaravelTasksApp.git
   ```

2. **Configure environment**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
   - Set database credentials in the `.env` file:
     ```env
     DB_CONNECTION=
     DB_HOST=
     DB_PORT=
     DB_DATABASE=
     DB_USERNAME=
     DB_PASSWORD=
     ```

3. **Run database migrations**
   ```sh
   php artisan migrate
   ```

4. **Start the development server**
   ```sh
   php artisan serve
   ```

## Features

- Add new tasks
- Edit existing tasks
- Delete tasks
- Mark tasks as completed

## Author

Krzysztof Weichert

