[Hello Laravel]
Introduction
Brief Overview of Laravel
Laravel is a free, open-source PHP web application framework designed for building modern web applications using an expressive, elegant syntax. It follows the Model-View-Controller (MVC) architectural pattern and provides built-in tools for routing, authentication, sessions, caching, and database management (via its Eloquent ORM), which significantly speeds up development compared to writing raw PHP.

Importance of Client-Server Technologies
Client-server technology is the foundation of how most web and networked applications operate today. The client (typically a web browser) sends requests to a server, which processes the request, interacts with a database if needed, and returns a response. Understanding this model is essential because it underpins how data is transmitted, how applications scale, how security is enforced, and how modern frameworks like Laravel structure their request-response lifecycle.

Purpose of the Project
This project was undertaken to install and configure a Laravel development environment using PHP, Composer, and XAMPP. It aimed to familiarize the developer with Laravel's folder structure, project setup, and development workflow. The project also demonstrated a working client-server application by running a Laravel web server, customizing the homepage using Blade templates, and preparing the environment for future integration with a MySQL database.

Objectives
By the end of this activity, the following objectives were achieved:

Successfully installed and configured PHP, Composer, and Laravel on the local development environment.
Set up a working connection between Laravel and a MySQL database.
Understood and navigated the Laravel project folder structure.
Created and tested basic routes to confirm the client-server request-response cycle.
Identified and resolved common installation and configuration issues.
(Optional 6th objective) Documented the entire setup process for future reference and troubleshooting.
4. Development Environment
Component	Version
Operating System	Windows 11
PHP Version	PHP 8.2.12
Laravel Version	Laravel Installer 5.31.1
Composer Version	Composer version 2.10.2
Git Version	git version 2.54.0.windows.1
MySQL Version	mysql.exe Ver 8.0.46
VS Code Version	1.111.0
5. Installation Steps
Step 1: Install PHP
Download and install PHP from the official website. Verify installation by running php -v in the terminal.

Step 2: Install Composer
Download Composer from getcomposer.org and run the installer. Verify with composer -V.

Step 3: Install Laravel
Run composer global require laravel/installer to install the Laravel installer globally.

Step 4: Create a New Laravel Project
Run laravel new project-name or composer create-project laravel/laravel project-name.

Step 5: Configure the Database
Edit the .env file to set your database name, username, and password, then run php artisan migrate.

Step 6: Run the Development Server
Run php artisan serve and open http://127.0.0.1:8000 in a browser to confirm the app is running.

6. Project Structure
Explanation of the key Laravel folders:

app/ — Contains the core application logic, including Models, Controllers, and Middleware. This is where most of the custom business logic for the application lives.

routes/ — Defines all the URL endpoints (routes) for the application. web.php handles routes for the browser-based interface, while api.php handles routes intended for API consumption.

resources/ — Holds the raw, uncompiled front-end assets such as Blade templates (views), CSS, JavaScript, and language files. This is where the presentation layer of the app is built.

public/ — The web server's document root and publicly accessible entry point of the application. It contains the index.php file that bootstraps the framework, along with compiled assets (CSS/JS) and images.

config/ — Contains all configuration files for the application, such as database settings, mail settings, caching, and session behavior. These files typically pull values from the .env file.

database/ — Contains database migrations (version control for your database schema), seeders (for populating test data), and model factories.

7. Problems Encountered
Describe at least three real challenges you faced. Examples and structure below:

Problem 1: Composer Not Recognized
Description: When running composer commands in the terminal, the system returned an error such as 'composer' is not recognized as an internal or external command.

Problem 2: PHP PATH Issue
Description: Running php -v resulted in an error indicating PHP was not found, even though PHP had been installed.

Problem 3: MySQL Service Not Starting
Description: The MySQL service failed to start, preventing Laravel from connecting to the database, and php artisan migrate returned a connection error.

8. Solutions
Solution to Problem 1: Composer Not Recognized
Composer's installation directory was manually added to the system's environment PATH variable, then the terminal/command prompt was restarted so the changes would take effect.

Solution to Problem 2: PHP PATH Issue
The PHP installation folder path was added to the system's environment variables (PATH), allowing the terminal to locate the php executable from any directory.

Solution to Problem 3: MySQL Service Not Starting
The MySQL service was restarted manually through the Services application (Windows) / sudo systemctl start mysql (Linux) / XAMPP-MAMP control panel, and the port conflict (if any) was resolved by changing the MySQL port in the configuration file.

9. Screenshots
File	Description
screenshots/php-version.png	Output of php -v confirming PHP 8.5.9 installation.
screenshots/composer-version.png	Output of composer -V confirming Composer 2.9.5.
screenshots/laravel-version.png	Output of laravel -v confirming the Laravel installer.
screenshots/git-version.png	Output of git --version confirming Git 2.52.0.
screenshots/mysql-version.png	Output of mysql --version confirming MySQL 8.0.44.
screenshots/vscode.png	VS Code with the hello-laravel project open.
screenshots/artisan-serve.png	Terminal running php artisan serve successfully.
screenshots/hello-laravel-homepage.png	Browser showing the customized homepage with student details.
10. Reflection
This activity gave me hands-on experience setting up a full Laravel development environment from scratch, and it taught me far more than any lecture could about how the pieces of a modern web framework fit together. Before this, I understood PHP and databases as separate concepts, but installing Laravel and connecting it to MySQL showed me concretely how a framework ties routing, business logic, views, and data storage into one coherent system. I also learned the practical importance of environment configuration — small things like PATH variables and .env settings that seem trivial but can completely block a project if set up incorrectly.

The biggest challenges I encountered were environment-related rather than code-related. Getting Composer and PHP recognized by the terminal required understanding how the operating system locates executable programs, which was not something I had needed to think about before. Getting MySQL to start reliably also took some troubleshooting, since the error messages weren't always immediately clear about the root cause. Working through these issues forced me to read documentation more carefully, search for specific error messages, and test changes incrementally instead of guessing — a skill that will be useful far beyond this one project.

Laravel's importance in client-server development comes from how much repetitive, error-prone work it removes from the developer's plate. Instead of manually writing routing logic, database queries, and security handling from scratch, Laravel provides tested, standardized tools (like Eloquent ORM, Blade templating, and built-in routing) that let developers focus on the actual logic of their application. In a client-server context specifically, Laravel makes it much easier to manage how requests come in from the client, how the server processes and validates them, and how responses are returned — all while keeping the codebase organized and maintainable.

Going forward, this experience will directly help me in future software development projects. Understanding how to properly set up a development environment, diagnose configuration errors, and navigate a framework's folder structure are foundational skills that apply well beyond Laravel itself. Whether I work with Laravel again or move to a different framework, I now have a mental model for how client-server applications are structured and a troubleshooting process I can rely on when things don't work as expected.

11. References
Composer. (n.d.). Composer: Dependency manager for PHP. Composer Documentation. Retrieved August 7, 2026, from https://getcomposer.org/doc/

Git. (n.d.). Git documentation. Git. Retrieved August 7, 2026, from https://git-scm.com/doc

Laravel. (n.d.). Laravel — The PHP framework for web artisans. Laravel Documentation. Retrieved August 7, 2026, from https://laravel.com/docs

The PHP Group. (n.d.). PHP manual. PHP Documentation. Retrieved August 7, 2026, from https://www.php.net/manual/en/
