Сама установка composer 
    **create-project symfony/framework-standard-edition my_project_name**

Для установик Бандла EasyAdminBundle читаем иснтрукцию  _https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html_

также нужно создать сушьность примерно так:  **php bin/console generate:doctrine:entity --entity=AppBundle:Post**

затем обновить БД на основе сущностей 
**php bin/console doctrine:schema:update --force**