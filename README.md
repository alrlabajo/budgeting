# Enterprise Resource Planning (ERP) Budgeting Module by BSCS 3-1 - Group 3

Good day team! This repository is established as a part of the ERP System for Pamantasan ng Lungsod ng Maynila as part of their project in Software Engineering 2, still valid as of June 2024.


![Front-Face](https://github.com/alrlabajo/budgeting/assets/103131412/d649b7c4-f940-4011-a44f-353e9a53df52)

## BSCS 3-1 - Group 3 Members:
- Angelika Louise R. Labajo
- Jerriane Hillary Heart S. Marcial
- Kayne Uriel K. Rodrigo
- Reuel Augustus A. Gumawid
- Sean Marie B. Bayono


# Pre-requisites
- Fully functinong XAMPP (Apache & MySQL)
- Composer & Laravel Installed
  
# Instructions
1. Clone this repository
2. Enter `composer require laravel/breeze --dev`
3. Open your terminal, and enter `npm install` then `composer install`.
4. Run your system using `php artisan serve` and `npm run dev` in separate terminals.
5. Open via VS Code, create .env file and setup using the following DB format:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laraveltutorial
DB_USERNAME=root
DB_PASSWORD=
```
5. Migrate your tables using `php artisan migrate`
