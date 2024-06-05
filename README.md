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
- Fully functioning XAMPP (Apache & MySQL)
- Composer & Laravel Installed
  
# Instructions
1. Clone this repository
2. Copy and paste `routes/web.php` on a separate folder.
3. Enter `composer require laravel/breeze --dev`
4. Add the missing routes from the new `web.php` from the saved `web.php`
5. Open your terminal, and enter `npm install` then `composer install`.
6. Run your system using `php artisan serve` and `npm run dev` in separate terminals.
7. Open via VS Code, create .env file, and setup using the following DB format:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laraveltutorial
DB_USERNAME=root
DB_PASSWORD=
```
5. Migrate your tables using `php artisan migrate`

## FAQs
#### 1. Where to access the folder in Hostinger?
- Login here: https://185.199.52.28:8443/login (details on gc)<br>
![image](https://github.com/alrlabajo/budgeting/assets/103131412/5ac4211a-b6b0-4d1f-819c-7e5893c06ca5)


#### 2. How do I edit and then paste it into Hostinger?
- kindly commit all the files before editing to track all the changes then paste them manually on our website.
