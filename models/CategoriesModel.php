<?php

/**
 * модель для таблицы категорий
 * отвечает только за таблицу категорий
 * 
 */
/**
 * Получить дочерние категории для категории $catId
 * @param type $catId - айди категории
 */
function getChildrenForCat($catId)
{
    $sql="SELECT * FROM categories WHERE parent_id='{$catId}' ";
    
    $rs=db()->query($sql);
   
    /**
     * функция для преобразования сырых данных в данные для смарти
     */
    return createSmartyRsArray($rs);
    // инициализируем ф-ю в мейн фанкшинс
}

/**
 * Получить главные категории с привязками к дочерним
 * @return type
 */
function getAllMainCatsWithChildren() 
{ $sql = "SELECT * FROM `categories` WHERE `parent_id` = 0"; 
$rs = db()->query($sql);
// плдготавливаем данные, которые мы будем возвращать в контроллер
$smartyRs=array ();
while($row = mysqli_fetch_assoc($rs))
{
        //делаем массив с запясями дочерних категорий
        $rsChildren = getChildrenForCat($row['id']);
        if ($rsChildren)
        {
            $row['children']=$rsChildren;
        }
        $smartyRs[]=$row; 
        
}

return $smartyRs;
}

