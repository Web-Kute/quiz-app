<?php
require_once 'twig_setup.php';
echo $twig->render('index.html', ['name' => 'WeeKub']);
