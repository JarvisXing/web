<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- *[Vehikl](https://vehikl.com/)*
- **[Tighten Co.](https://tighten.co)**
- [Fragrantica](https://www.fragrantica.com)

## Migrate Database(Mysql)
copy <code>.env.example</code> saved as <code>.env</code><br>
and modify the following settings to match your database
<code>
>DB_CONNECTION=mysql<br>
>DB_HOST=127.0.0.1<br>
>DB_PORT=3306<br>
>DB_DATABASE=homestead<br>
>DB_USERNAME=homestead<br>
>DB_PASSWORD=secret<br>
>php artisan migrate<br>
</code>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
