## Project Info

This is a small project to implement a third party api. This project provides a seamless way to integrate third party api. The implementation was done in such a way that it will be very eay to integrate another third party api.

### Prerequisites
1. PHP 8.1 or above

## How to run.

1. Clone this repo and navigate to the project folder. Run `composer install`
2. Run `cp env.example .env` and run the application using this command `php artisan serve`
3. Try any api routes in postman or using curl

## How to run unit tests.

1. Run the unit tests using this command `php artisan test`
   
## Improvements
The project was implemented in extendable approach. In future it is possible to write artisam commands to generate the basic api implementation boilerplates. 


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
