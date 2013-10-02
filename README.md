## Laravel 4 Modular (HMVC) Approach

This is customized laravel 4 in HMVC form. This modules coverage:
- config,
- controller,
- database: migration and seeding,
- lang,
- models,
- views,
- custom filters, and
- custom routes.


### How it works:
We're create module service provider that extends `Illuminate\Support\ServiceProvider` abstract class and definitely we can easily register new module (package) using method `package()`.


### How to install:
1. Setup mysql database in: `app/config/database.php`.
2. Run:
`composer install`
3. Migrate from module migration:
`php artisan migrate --path="app/modules/user/database/migrations"`
4. Seed from module seeder:
`php artisan db:seed --class="App\Modules\User\Database\Seeds\UserSeeder"`
5. Access using: http://yourlaravelapp.com/user or http://yourlaravelapp.com/user/index.


### FYI:
1. Install using composer.json with `"app/modules"` included in classmap.
2. Once you create modules, register namespace module service provider in: `"app/module/app.php"`.
3. We're using composer, that's mean you should run: `"composer dump-autoload"` to register and or update namespace.
4. We can create new migration file with command:
`php artisan migrate:make ChangeUser --path="app/modules/user/database/migrations"`
5. Unfortunately, we can't re-run migration using command: `migrate:refresh`, `migrate:reset`, `migrate:rollback`.


If you have some ideas, fork this repo. Don't forget to star this repo if useful.

Thank you.
Roes Wibowo, http://roes-wibowo.com

---

Reference:
--1. http://creolab.hr/2013/05/modules-in-laravel-4/
--2. http://blog.khodam.org/laravel/resources-management-using-laravel-hmvc-pada-laravel-part-iii.php
--3. http://laravel.com/docs/packages