


<form action="controller/addcategoeries.php" method="POST"  class="form">

<div class="container">

    <b>parent</b>: <select name="parent_id" id="parent_id" >
        <option value="0" selected>ROOT </option>
        <?php
        $menu = new menu();
        foreach ($menu->show() as $menu) {
        ?>
        <option value="<?php echo $menu->entity_id; ?>"><?php echo  $menu->title;?></option>
        <?php
        }
        ?>
    </select>

</div>
<div class="container">
    <label for="menu_key"><b>menu_key:</b></label><br>
    <input type="text" name="menu_key" placeholder="Enter menu_key" required/> <br>
</div>

<div class="container">
    <label for="title"><b>title:</b></label><br>
    <input type="text" name="title" placeholder="Enter title"  required/> <br>
</div>
<div class="container">
    <label for="url"><b>url:</b></label><br>
    <input type="text"  name="url" placeholder="Enter url"   required/> <br>
</div><br>
<div class="container">
    <b>status:</b><select name="status" id="status" >
        <option value="1" selected>ENABLE</option>
        <option value="0">Disable</option>
    </select><br><br>
    <input type="submit" value="ADD" name="save">
</div>
</form>


