
https://getcomposer.org/download/
composer require --dev phpunit/phpunit

composer require --dev phpunit/phpunit ^7

luego en composer.json

"name": "danny/validate",
	"autoload": {
		"psr-4": {
			"App\\": "src/"
		}
	},

Correr 
composer dum

hay que crear el archivo phpunit.xml

COnfiguración de xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php" colors="true">
    <testsuite name="Test Directory">
         <directory>tests</directory>
    </testsuite>
</phpunit>

Ejecutamos:
vendor/phpunit/phpunit/phpunit