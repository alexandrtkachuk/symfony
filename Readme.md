Сама установка через composer **create-project symfony/framework-standard-edition my_project_name**

Запуск: **php bin/console server:run**

Для установик Бандла EasyAdminBundle читаем иснтрукцию  _https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html_

также нужно создать сушьность примерно так:  
   **php bin/console generate:doctrine:entity --entity=AppBundle:Post**

B помощь : **https://symfony.com/doc/current/doctrine.html**


затем обновить БД на основе сущностей 
**php bin/console doctrine:schema:update --force**
