## [LARAVEL]

## 1. Introduction

Laravel is a free, open-source PHP web framework designed for building modern web applications using an expressive, elegant syntax. It follows the Model-View-Controller (MVC) architectural pattern, which separates application logic, data, and presentation, making projects easier to build, maintain, and scale.

Client-server technologies are the backbone of modern web development. In this model, the **client** (usually a web browser) sends requests to a **server**, which processes those requests, interacts with a database if needed, and returns a response. Understanding this interaction is essential for building functional, real-world web applications.

The purpose of this project is to set up a Laravel development environment from scratch, understand its folder structure, and document the entire process — including the tools required, challenges faced, and solutions applied — as a foundation for future full-stack development activities.

## 2. Objectives

By the end of this activity, the following objectives were achieved:

1. Successfully installed and configured all prerequisites (PHP, Composer, Git, MySQL) needed to run Laravel.
2. Installed Laravel and created a new Laravel project using Composer.
3. Understood the purpose and function of Laravel's core folder structure.
4. Configured the local development environment and ran the Laravel application successfully using `php artisan serve`.
5. Connected the project to a version control system (Git) and pushed it to a remote GitHub repository.
6. Identified and resolved common setup issues encountered during installation.

## 3. Development Environment

| Tool | Version |
|---|---|
| Operating System | *e.g., Windows 11 / macOS Sonoma* |
| PHP Version | *e.g., PHP 8.3.x* |
| Laravel Version | *e.g., Laravel 11.x* |
| Composer Version | *e.g., Composer 2.7.x* |
| Git Version | *e.g., Git 2.45.x* |
| MySQL Version | *e.g., MySQL 8.0.x* |
| VS Code Version | *e.g., 1.9x.x* |

> Run these commands to check your own versions, then replace the placeholders above:
> `php -v`, `composer -V`, `git --version`, `mysql --version`, and check VS Code via **Help > About**.

## 4. Installation Steps

1. **Install PHP** — Download and install PHP from the official site, then add it to your system's PATH.
   *(Insert screenshot here — e.g., PHP version check in terminal)*

2. **Install Composer** — Download Composer, run the installer, and verify installation with `composer -V`.
   *(Insert screenshot here)*

3. **Install Git** — Download and install Git, then verify with `git --version`.
   *(Insert screenshot here)*

4. **Install MySQL** — Install MySQL Server and ensure the MySQL service is running.
   *(Insert screenshot here)*

5. **Install Laravel via Composer** — Run:
   ```bash
   composer create-project laravel/laravel client-server-week02-laravel-setup
   ```
   *(Insert screenshot here)*

6. **Run the Laravel development server**:
   ```bash
   cd client-server-week02-laravel-setup
   php artisan serve
   ```
   *(Insert screenshot here — browser showing the Laravel welcome page)*

7. **Initialize Git and push to GitHub**:
   ```bash
   git init
   git add .
   git commit -m "Initial Laravel setup"
   git remote add origin <your-repo-url>
   git push -u origin main
   ```
   *(Insert screenshot here — GitHub repository showing pushed files)*

## 5. Project Structure

| Folder | Purpose |
|---|---|
| `app/` | Contains the core application code — models, controllers, and business logic. |
| `routes/` | Defines all the URLs (routes) of the application and maps them to controllers or closures. |
| `resources/` | Holds views (Blade templates), raw CSS/JS files, and language files — everything related to the front-end presentation. |
| `public/` | The entry point of the application (`index.php`); also stores publicly accessible assets like compiled CSS, JS, and images. |
| `config/` | Contains all configuration files for the application (database, mail, services, etc.). |
| `database/` | Contains database migrations, seeders, and factories used to build and populate the database schema. |

## 6. Problems Encountered

1. **Composer not recognized** — Running `composer` in the terminal returned a "command not found" error.
2. **PHP PATH issue** — Running `php -v` returned an error because PHP was not added to the system's environment variables.
3. **MySQL service not starting** — The MySQL service failed to start, preventing database connections.

## 7. Solutions

1. **Composer not recognized** — Reinstalled Composer and manually added its installation directory to the system's PATH environment variable, then restarted the terminal.
2. **PHP PATH issue** — Located the PHP installation folder and added it to the system PATH manually via Environment Variables settings, then verified with `php -v`.
3. **MySQL service not starting** — Opened the Services app (or XAMPP/MySQL Workbench control panel), restarted the MySQL service, and checked the error log to resolve a port conflict.

## 8. Screenshots

*(Insert each screenshot below with a caption describing what it shows)*

**Screenshot 1:** PHP version verification in terminal.

**Screenshot 2:** Composer installation confirmation.

**Screenshot 3:** Laravel welcome page running on `localhost:8000`.

**Screenshot 4:** GitHub repository after successful push.

## 9. Reflection

*(Write 300–500 words here. Suggested draft below — personalize it with your own experience.)*

This activity gave me a hands-on understanding of how a Laravel development environment is set up from the ground up. Before this, I only understood web development conceptually, but going through each installation step — from PHP, to Composer, to Git, to MySQL — helped me appreciate how many moving parts need to work together before a single line of application code can even run. I learned that Laravel is not just a framework for writing code faster, but a well-organized system that enforces good practices like separation of concerns through its MVC structure, making projects easier to navigate and maintain as they grow.

The biggest challenges I faced were environment-related rather than code-related. Issues like Composer not being recognized and PHP not being added to my system PATH taught me that a large part of software development involves configuring and troubleshooting the environment itself, not just writing logic. Getting MySQL to start correctly also required me to look into service management and port conflicts, which was new to me. These issues, while frustrating at first, were valuable because they forced me to read error messages carefully, search documentation, and understand what each tool actually does instead of just following instructions blindly.

Laravel's importance in client-server development became clearer to me as I explored its folder structure. Folders like `routes/` and `app/` directly reflect how a server receives a client's request, processes it through a controller, and returns a response — often rendered through a view in `resources/`. This made the abstract concept of "client-server communication" much more concrete. I now understand that a request from a browser (client) is not just answered instantly; it passes through routing, controller logic, and possibly a database query before a response is generated and sent back.

This knowledge will be valuable in future software development projects because most modern web applications, whether built with Laravel, Django, or Node.js, follow similar client-server principles. Knowing how to properly set up a development environment, structure a project, and troubleshoot common installation issues is a foundational skill that will save time in future projects. It also gave me more confidence in reading official documentation and error logs instead of feeling stuck when something doesn't work immediately. Overall, this exercise was less about the final Laravel welcome page and more about the problem-solving process required to get there — a skill that will apply to virtually every future development project I work on.

## 10. References

Laravel. (n.d.). *Laravel documentation*. Laravel. https://laravel.com/docs

The PHP Group. (n.d.). *PHP manual*. PHP. https://www.php.net/docs.php

Composer. (n.d.). *Composer documentation*. Composer. https://getcomposer.org/doc/

Git. (n.d.). *Git documentation*. Git. https://git-scm.com/doc
