<?php

include_once ('../database/menu.php');
$m=new menu();
$m->add(['parent_id'=>$_POST['parent_id'],'menu_key'=>$_POST['menu_key'],'title'=>$_POST['title'],'url'=>$_POST['url'],'status'=>$_POST['status']]);


?>