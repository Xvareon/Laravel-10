## Laravel 10 application made with PHP, Blade, MySQL, and XAMPP.

## PROJECT DEPENDENCIES
- [Composer](https://getcomposer.org/download/).
- [Xampp (v7.4.8)](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/).
- [Visual Studio Code (IDE)](https://visualstudio.microsoft.com/).
- [Laravel 10 (Framework)](https://laravel.com/docs/10.x).

## PROJECT SETUP
- Go to the following folder directory: xampp -> htdocs -> git bash here using right click
- In the git bash GUI, enter:" composer create-project laravel/laravel your-project-name "
- Open Xampp application and start the Apache and MySQL actions
- Open VS Code and its terminal then enter:" php artisan serve " to start

## DB SETUP
- Open Xampp application and click the Admin in MySQL (make sure to start them first)
- phpMyAdmin will open and there create the name of your database
- Go to your project directory and go to the .env file and change the credentials if necessary
- Change the DB_DATABASE to the name of the database you created in the phpMyAdmin page
- Run the VS Code terminal and enter:" php artisan migrate " to check db connection
- To create a table, use the migration files of laravel.
- To do this, enter in the terminal:" php artisan make:migration create_yourtablename_table "
- To populate the columns, go to your project directory -> database -> migrations -> yourtablename
- Modify the schema to your needs and run the terminal command:" php artisan migrate "
- To create a model, enter in the terminal:" php artisan make:model Yourmodelname " (the model name should start with uppercase and is singular)
- Create a protected fillable inside Yourmodelname containing the corresponding columns in your table
- To create the controller, enter in the terminal:" php artisan make:controller YourmodelnameController "
- import your model in your controller if it is not already imported like this:" use App\Models\Yourmodelname; "
- Import the respective controller to the web.php file in the routes directory like this:" use App\Http\Controllers\YourmodelnameController; "

## AND YOU ARE SET!
- Now just create your routes and views as you would normally.

## =================================================
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
