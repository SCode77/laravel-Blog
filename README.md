## Used Terminal Commands
<i>create page controller</i><br>
<code>php artisan make:controller PageController</code><br><br>
<i>create newsletter controller</i><br>
<code>php artisan make:controller NewsletterController</code><br><br>
<i>create article model</i><br>
<code>php artisan make:model Article</code><br><br>
<i>create migration to create articles table</i><br>
<code>php artisan make:migration create_articles_table --create articles</code><br><br>
<i>create migration to add source to the articles table</i><br>
<code>php artisan make:migration add_source_to_articles_table --table articles</code><br><br>
<i>create article controller as resource controller</i><br>
<code>php artisan make:controller ArticleController -r</code><br><br>
<i>create comment model with migration</i><br>
<code>php artisan make:model Comment -m</code><br><br>
<i>create category model with migration</i><br>
<code>php artisan make:model Category -m</code><br><br>
<i>create migration to create articles_to_categories table</i><br>
<code>php artisan make:migration create_articles_to_categories_table</code><br><br>
<i>create authentication pages and scaffolding (localhost:8000/home). needs to download some requirements from the internet.</i><br>
<code>
composer require laravel/ui</code> <br>
<code>php artisan ui vue --auth
</code><br><br>
<i>create migration to add image column to the articles table</i><br>
<code>php artisan make:migration add_image_to_articles_table --table articles</code><br><br>
<i>create article controller in api folder</i><br>
<code>php artisan make:controller api\ArticleController</code><br><br>
<i>create age middleware</i><br>
<code>php artisan make:middleware AgeMiddleware</code><br><br>
<i>create sessions table</i><br>
<code>php artisan session:table</code><br><code>composer dump-autoload</code><br><br>
<i>create product model with migration</i><br>
<code>php artisan make:model Product -m</code><br><br>



<i>run all the created migrations (need to database connection)</i><br>
<code>php artisan migrate</code><br><br>
<i>rollback the all migrations (need to database connection)</i><br>
<code>php artisan migrate:rollback</code><br><br>
<i>rolling back migration with steps(1: the last migration, 2: last 2 migration, etc)</i><br>
<code>php artisan migrate:rollback --step 1</code><br><br>
<i>show routes with details</i><br>
<code>php artisan route:list</code><br><br>
<i>run php code in terminal</i><br>
<code>php artisan tinker</code><br><br>

<i>start server</i><br>
<code>php artisan serve</code><br><br>

<hr>
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
