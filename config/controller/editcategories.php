<?php

include_once ('../database/menu.php');

$menu=new menu();
$menu->update($_POST['id'] ,['parent_id'=>$_POST['parent_id'],'menu_key'=>$_POST['menu_key'],'title'=>$_POST['title'],'url'=>$_POST['url'],'status'=>$_POST['status']]);
header("location:$_SERVER[HTTP_REFERER]");
exit();

?>
