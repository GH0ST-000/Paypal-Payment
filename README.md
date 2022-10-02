## Installation

1. Download the archive or clone the project using git
2. Create database schema
3. Create `.env` And copy information from `.env.example` file, and adjust database parameters (including schema name)
4. Run `composer update` And `composer install`
5. Run migrations by executing `php migration.php` from the project root directory
6. Go to the `public` folder
7. Start php server by running command `php -S localhost:8080`
8. Open in browser http://localhost:8080
