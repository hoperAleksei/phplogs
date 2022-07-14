<?php
/*Лабораторная работа №6. Composer + Twig + Monolog (2 часа).
Цель: получить практические навыки использования пакетного менеджера composer и пакетов twig и monolog.
Теоретическая часть:
https://getcomposer.org/doc/00-intro.md
https://twig.symfony.com/
https://github.com/Seldaek/monolog
Постановка задачи: Реализовать простое приложение PHP с использованием пакетного менеджера composer и библиотек twig, monolog.
Порядок выполнения:
Анализ задачи.
Исследование источников.
Создание структуры проекта с несколькими классами, вложенными пространствами имён.
Заверстать twig-шаблон и использовать шаблонизатор twig для отображения данных.
Написать функционал логирования посещений определенных страниц пользователем.
Форма отчета: репозиторий на GitHub с php-приложением, работоспособное
приложение доступное по сети, в котором используются библиотеки twig и monolog.*/

require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'vendor', 'autoload.php']);
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'log.php']);

$loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/templates');
$twig = new \Twig\Environment($loader);

$logg = new log(join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'log.txt']));
$logg->log_info('Index page loaded');


$template = $twig->load('index.html.twig');
echo $template->render(['content'=>trim($logg->print_log())]);



