<?php

foreach ($db->show($parentId) as $rows)
{
    ?>
    <div>
        &bull; <a href="javascript:void(0)" id="<?php echo $rows->menu_key; ?>" data-url="<?php echo $rows->url. '&id='. $rows->entity_id;?>" onclick="nav.indexing(this)"><input type="button" value="<?php echo $rows->title; ?>" > </a>

    </div>


    <?php
}
?>