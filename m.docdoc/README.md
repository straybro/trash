# README #
Репозиторий содержит шаблон для создания нового веб приложения с использованием [Yii Framework](http://yiiframework.com/).

## Установка ##

Для запуска проекта нужно:
* Установить зависимости: composer install
* Выполинть сборку: ./phing install
* Настроить nginx

## Настройки ##
### config/local.php.tpl ###
Файл содержит пример настроек по подключению к БД, и прочих, относящихся к окружению. По структуре аналогичен основному файлу конфига, и перегружает его.
Чтобы подключить файл к проекту, следует скопировать его в ту же папку с именем local.php.

### config/local.php ###
Так же есть возможность подключить файл локальных настроек. Для этого достаточно создать в папке config файл local.php. По структуре аналогичен основному файлу конфигурации, и перегружает его.

### .nginx ###
Содержит правило для корректной работы ЧПУ. Подключается в файл конфигурации сайта вебсервера nginx.

### Code style ###
Файл кодстайла лежитв  корне проекта и называется PhpStormCodeStyle.xml. Импортировать в соответствии с [инструкцией](http://www.jetbrains.com/phpstorm/webhelp/copying-code-style-settings.html)