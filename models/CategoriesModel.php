<?php

/**
 * модель для таблицы категорий
 * отвечает только за таблицу категорий
 * 
 */

function getAllMainCatsWithChildren() 
{ $sql = "SELECT * FROM `categories` WHERE `parent_id` = 0"; 
$rs = db()->query($sql);
// плдготавливаем данные, которые мы будем возвращать в контроллер
$smartyRs=array ();
while($row = $rs->fetch_assoc())
{
        $smartyRs[]=$row; 
        
}
return $smartyRs;
}

