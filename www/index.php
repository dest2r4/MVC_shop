<?php
include_once '../config/config.php';
include_once '../library/mainFunctions.php';

# пишем, какой контроллера нам стоит загрузить, и какую функцию вызвать
# 1 проверяем, пришло ли значение контроллера, и если нет, то по умолчанию будет отрабатыватся контроллер индекс
$controllerName= isset($_GET['controller']) ? ucfirst($_GET['controller']):'Index';
//echo 'our php file is '.$controllerName.'<br/>';


# 2 опредеяем  какая ф-я из нашего контроллера будет вызыватся и формировать страничку
  $actionName= isset($_GET['action']) ? $_GET['action']:'Index';
  //echo 'new action is - '.$actionName.'<br/>'; 
        /*
# 3 подключаем определенный ранее и необходимый нам контроллер
  include_once '../controllers/'.$controllerName.'Controller.php';
  
  
  #4 формируем точное название функции которую мы будем вызывать
  $function =$actionName.'Action';
  # выводим значение этой переменной 
  echo 'Полное имя функции - '.$function.'<br/>';
  
  # итого, мы уже можем подключить необходимый контроллер и функцию, теперь нужно
  #непосредственно её вывести
  
  #5 вывод необходимой ф-и
  $function();
  */
  
  # создаем функцию, которая будет заниматся загрузкой страницы
  // константы для обращения к контроллеру
  /*
  define ('PathPrefix','../controllers/');
  define ('PathPostfix','Controller.php');
  */
  
  #6 формирование функции запроса страницы
  # причем если имя ф-и не задано, то дефолтное имя функции - индекс
  /*
  # ф-я поехала в library
  function loadPage ($controllerName,$actionName='index')
  {
      # пишем логику загрузки страницы, которую мы определили выше
      include_once PathPrefix.$controllerName.PathPostfix;
      $function=$actionName.'Action';
      $function();
      # теперь та же самая информация выше уже не нужна,закоментил её
  }
  
  */
  #7 теперь непосредственно вызываем функцию
  // подключение к контроллеру и необходимой внутренней ф-и + её вызов
    
  
  loadPage($smarty, $controllerName,$actionName);
    // константы теперь перемещаем в конфиг->конфиг.пхп
  # ф-и переносим в library
  # так же удалил вывод названия контроллера и действия
  // вверху инклудим СНАЧАЛА файл конфигурации, а потом функции
  
  
?>