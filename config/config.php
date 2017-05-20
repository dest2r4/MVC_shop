<?php
/**
 * Данные, необходимые для упрощения кода
 * 
 * 
 */



/**
 * PahtPrefix - имя папки для перехода
 * PathPostfix - имя выбранного контроллера
 */
define ('PathPrefix','../controllers/');
define ('PathPostfix','Controller.php');


# начинаем настройку шаблонизатора
// переменная, которая будет носить имя испотьзуемого нами шаблона
$template= 'default';
# у нас будет 2 шаблона
// дефолт - минимум пхп максимум функциональности сайта


// константы путей к шаблонам
# $template - имя папки с нужным шаблоном)
define ('TemplatePrefix',"../views/{$template}/");
define ('TemplatePostfix','.tpl');


// пути к файлам шаблонов в веб пространстве
define ('TemplateWebPath',"../www/templates/{$template}/");


// подключаем шаблонизатор Smarty
require ('../library/Smarty/libs/Smarty.class.php');
//создаем экземпляр обьекта смарти
$smarty=new Smarty();

// инициализируем его главные свойства
// 1 говорим где находятся его шаблоны
$smarty->setTemplateDir(TemplatePrefix);
//2 куда складывать откомпилированные шаблонгы
$smarty->setCompileDir('../tmp/smarty/templates_c');
//3 файлы для кеширования
$smarty->setCacheDir('../tmp/smarty/cache');
//4 файлы для конфигурации
$smarty->setConfigDir('../library/Smarty/Configs');
//5 обьявляем первую переменную смарти(говорим где будут находится вспомогательные файлы
$smarty->assign('templateWebPath',TemplateWebPath);

    




  