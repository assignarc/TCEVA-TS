# TCEVA-TS

A modern web application built with Symfony 7.4, featuring a robust architecture with Doctrine ORM, Twig templating, and Symfony UX components.

![PHP Version](https://img.shields.io/badge/PHP-%3E%3D8.4-777BB4?style=flat-square&logo=php)
![Symfony Version](https://img.shields.io/badge/Symfony-7.4-000000?style=flat-square&logo=symfony)
![Security](https://img.shields.io/badge/Security-Up%20to%20Date-green?style=flat-square)
![License](https://img.shields.io/badge/license-Proprietary-red?style=flat-square)

## 🚀 Features

- **Symfony 7.4** - Latest stable version with security updates
- **Doctrine ORM 3.2** - Database abstraction and ORM with migration support
- **Twig 3.23** - Powerful templating engine with latest security patches
- **Symfony UX** - Modern JavaScript integration with Stimulus and Turbo
- **Security** - Built-in authentication and authorization with up-to-date security patches
- **Mailer** - Email sending capabilities
- **Asset Mapper** - Modern asset management without Node.js
- **Testing Suite** - PHPUnit 9.6.34 integration for comprehensive testing
- **User Profile Management** - Comprehensive profile editing with form validation

## 📋 Requirements

- PHP >= 8.4
- Composer
- MySQL 8.0+
- Symfony CLI (optional but recommended)

## 🛠️ Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd TCEVA-TS
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Install Symfony CLI (Optional)

For macOS users using Homebrew:

```bash
brew install symfony-cli/tap/symfony-cli
```

For other operating systems, visit the [official Symfony CLI documentation](https://symfony.com/download).

### 4. Environment Configuration

Copy the appropriate environment file and configure it:

```bash
cp .env .env.local
```

Update the following configuration in your `.env.local` file:

Check the environment setup with command below. 

php bin/console debug:dotenv

#### Database Configuration

```env
DATABASE_URL="mysql://<username>:<password>@<host>:<port>/<database_name>?serverVersion=8&charset=utf8mb4"

# Individual database components (for reference)
DB_NAME="your_database_name"
DB_USERNAME="your_username"
DB_PASSWORD="your_password"
DB_HOST_NAME="localhost"
DB_PORT="3306"
```

#### Mailer Configuration

```env
MAILER_DSN="smtp://<smtp_user>:<smtp_password>@<smtp_server>:<smtp_port>"
```

#### Custom Settings

```env
PUBLIC_DIR="public_html"
```

### 5. Database Setup

Run migrations to set up your database schema:

```bash
php bin/console doctrine:migrations:migrate
```

### 6. Install Assets

```bash
php bin/console assets:install public_html
php bin/console importmap:install
```

## 🏃 Running the Application

### Development Server

Using Symfony CLI (recommended):

```bash
symfony server:start --document-root=public_html
```

The application will be available at `https://localhost:8000`

### Using PHP Built-in Server

```bash
php -S localhost:8000 -t public_html
```

## 🔧 Common Commands

### Cache Management

Clear the application cache:

```bash
php bin/console cache:clear
```

### Debugging

Check autowiring configuration:

```bash
php bin/console debug:autowiring cache
```

View all registered routes:

```bash
php bin/console debug:router
```

List all available services:

```bash
php bin/console debug:container
```

### Database

Create a migration:

```bash
php bin/console make:migration
```

Execute migrations:

```bash
php bin/console doctrine:migrations:migrate
```

### Security Updates

Check for security vulnerabilities:

```bash
composer audit
```

Update dependencies to fix security issues:

```bash
composer update --with-all-dependencies
```

**Recent Security Updates (February 2026)**:

- Updated Symfony packages from 7.1.x to 7.4.x
- Fixed 7 security advisories including:
  - CVE-2024-50342 (symfony/http-client)
  - CVE-2024-51736 (symfony/process)
  - CVE-2024-50340 (symfony/runtime)
  - CVE-2024-51996 (symfony/security-http)
  - CVE-2024-51754, CVE-2024-51755 (twig/twig)
  - CVE-2026-24765 (phpunit/phpunit)

## 🧪 Testing

Run the test suite:

```bash
php bin/phpunit
```

## 📁 Project Structure

```
TCEVA-TS/
├── assets/             # Frontend assets (CSS, JS)
├── bin/                # Executable files (console)
├── config/             # Application configuration
├── migrations/         # Database migrations
├── public_html/        # Web server document root
├── src/                # Application source code
├── templates/          # Twig templates
├── tests/              # PHPUnit tests
├── translations/       # Translation files
├── var/                # Generated files (cache, logs)
└── vendor/             # Composer dependencies
```

## 🌍 Environment-Specific Configuration

The application supports multiple environments:

- **Development**: `.env.dev` or `.env.local`
- **Production**: `.env.prod`
- **Testing**: `.env.test`

Copy and modify the appropriate file based on your environment needs.

## 📝 License

This project is proprietary software.

## 🤝 Contributing

This is a private project. Please contact the project maintainers for contribution guidelines.

## 📞 Support

For support and questions, please contact the development team.

---

**Built with ❤️ using Symfony**
