# SIMPLE CSV APPLICATION
This has only Create and Read of the small CRUD part for the client section of the application.

## Install

NRGI can be cloned from github repository and installed. Following the procedure given below:

* git clone git@github.com:sadhakbj/Simple-CSV-Project.git csvapp
* cd csvapp

## Run

The app can be run with the command below:

* install the application dependencies using command: `composer install`
* give write permission to the storage folder using `chmod -R 777 storage`
* use command `php artisan serve' to start the server (--port can be optional)
* access `http://localhost:8000`

## Framework

The application is written in PHP based on the [Laravel](http://laravel.com) framework, current version of Laravel 
used for this project is 5.2.
 
## Check code quality

We follow [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) for 
coding standard  

## Coding Conventions

We follow PSR-2

## Running Tests

We can run the test using following command 'phpunit tests/ClientsTest.php'


## Deployment

We use Elastic Beanstalk CLI. 

## Support

For any queries and support, you may either [create a github issue](https://github.com/NRGI/resourcecontracts.org/issues/new) or send us an email at resourcecontracts@yipl.com.np

## Copyright and license

Code copyright Natural Resource Governance Institute. Code released under the [ MIT license ](LICENSE.md)
