<?php

# подключаем модель категорий
include_once '../config/db.php';
include_once '../models/CategoriesModel.php';
function testAction()
{
    #выводим информацию, из какого контроллера какая функция была вызвана
    echo 'IndexController.php->testAction';
}

function indexAction($smarty)
{   
    #набор данных главных категорий с их дочерними
    
    $rsCategories=getAllMainCatsWithChildren();
    
    //инициализация переменной и задание ей значения ,, главная ....
    $smarty->assign('pageTitle','Главная страница сайта');
    $smarty->assign('rsCategories',$rsCategories);
    // ф-я для загрузки шаблона 
    
    // саначала у нас был только индекс тпл, теперь же мы загружаем по
    // отдельности все составляющие элементы
    //loadTemplate($smarty, 'index');
    
    
    // обрабатываем файл хедер тпл
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
    
    
    
    
}
?>