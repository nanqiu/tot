<?php

// put full path to Smarty.class.php
require('/usr/lib/php5/Smarty/Smarty.class.php');

$tot = new Smarty();

$tot->setTemplateDir('/var/www/tot/main/templates');
$tot->setCompileDir('/var/www/tot/main/templates_c');
$tot->setCacheDir('/var/www/tot/main/cache');
$tot->setConfigDir('/var/www/tot/main/configs');

$tot->assign('name', 'TOT');

$tot->display('index.tpl');

//$tot->testInstall();

?>
