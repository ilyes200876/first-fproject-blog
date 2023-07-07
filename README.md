composer create-project symfony/website-skeleton blog "5.4.*”
symfony local:php:list
symfony console doctrine:database:create
composer require annotations
