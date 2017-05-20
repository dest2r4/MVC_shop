<?php
/**
 * Функция запроса страницы
 * 
 * @param type $controllerName имя контроллера
 * @param type $actionName имя выполняемой функции
 */

// дополнительтно в начале указываем, что мы будем работать с обьектом смарти
function loadPage ($smarty,$controllerName,$actionName='index')
  {
      include_once PathPrefix.$controllerName.PathPostfix;
      $function=$actionName.'Action';
      $function($smarty);
  }
  
  // ф-я загрузки шаблона
  // $templateName название файла шаблона
  function loadTemplate ($smarty,$templateName)
  {
      $smarty->display($templateName.TemplatePostfix);
  }
  
  // ф-я для нахождения ошибок
  function d($value=null, $die=1)
  {
      echo  'Debug: <br/><pre>';
      print_r ($value);
      echo '</pre>';
      if ($die)die;
      
  }