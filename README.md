* composer create-project symfony/website-skeleton blog "5.4.*”
* symfony local:php:list
* symfony console doctrine:database:create
* composer require annotations
* symfony console make:User
* symfony console make:entity User
* * * firstName (string)
* * * lastName (string)
* * * email (string)
* symfony console make:entity
*  * Article
* * * title (string)
* * * content (text)
* symfony console make:entity
* * Comment
* * * content (text)
* symfony console make:entity User
* * * articles
* * * relation
* * * Article
* * * OneToMany
* * * comments
* * * relation
* * * Comment
* * * OneToMany
* symfony console make:entity Article
* * * comments
* * * relation
* * * Comment
* * * OneToMany
* symfony console make:migration
* symfony console doctrine:migration:migrate
* symfony console cache:clear 
* symfony serve
* symfony console make:controller
* * HomeController
* symfony console debug:router
* php bin/console make:controller Login
* composer require symfony/security-bundle
* symfony console security:hash-password
* symfony console make:registration-form  


