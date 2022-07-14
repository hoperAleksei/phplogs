<?php
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'vendor', 'autoload.php']);
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'log.php']);

$loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/templates');
$twig = new \Twig\Environment($loader);

$template = $twig->load('page3.html.twig');
echo $template->render([]);

$logg = new log(join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'log.txt']));
$logg->log_info('Page 3 loaded');