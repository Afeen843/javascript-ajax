<?php

include 'autoload.php';


$action = $_GET['action'] ?? '';
$id = $_GET['id'] ?? '';
if ($action == 'disable') {
    $menu=new menu();
    $menu->status($id);
    return;
} elseif ($action == 'add') {

    include_once('addcategories.php');
    return;
}elseif($action=='edit'){
    include_once ('editcategories.php');
    return;
}elseif ($action=='delete'){
    $menu=new menu();
    $menu->delete($id);
    return;
}


?>

<h1>Categories</h1>
<a  href="javascript:void(0)" id="add" onclick="nav.indexing(this)"
   data-url="config.php?action=add"> <input  class="btn btn-info" type="button" value="Add Categories"> </a>

<table id="mytable" class="table">

    <thead>
    <tr>
        <th>entity id</th>
        <th>parent id</th>
        <th>menu_key</th>
        <th>title</th>
        <th>url</th>
        <th>created_at</th>
        <th>modified_at</th>
        <th>status</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>


<?php
$menu=new menu();
$row = $menu->show(0);
foreach ($row as $key => $rows) {

    ?>

        <td><?php echo $rows->entity_id; ?></td>
        <td><?php echo $rows->parent_id; ?></td>
        <td><?php echo $rows->menu_key; ?></td>
        <td><?php echo $rows->title; ?></td>
        <td><?php echo $rows->url; ?></td>
        <td><?php echo $rows->created_at; ?></td>
        <td><?php echo $rows->modified_at; ?></td>
        <td><?php echo $rows->status; ?></td>
        <td>
            <a href="javascript:void(0)" id="<?php echo $rows->entity_id; ?>" onclick="nav.indexing(this)"
               data-url="config.php?action=disable&id= <?php echo $rows->entity_id; ?>"> Hide </a>

            <a href="javascript:void(0)" id="<?php echo $rows->entity_id; ?>" onclick="nav.indexing(this)"
               data-url="config.php?action=edit&id= <?php echo $rows->entity_id; ?>"> Edit </a>

            <a href="javascript:void(0)" id="<?php echo $rows->entity_id; ?>" onclick="nav.indexing(this)"
               data-url="config.php?action=delete&id= <?php echo $rows->entity_id; ?>"> Delete </a>

        </td>
    </tr>

<?php } ?>
    </tbody>
    </table>
