


<form action="controller/addproducts.php" method="POST"  >

    <div style="display: inline">
        <b>Category</b>
        <?php
        $menu = new menu();
        $category=array();
        foreach ($menu->show() as $key=> $menu) {
            ?>

            <input type="checkbox"  name="categories[]" value="<?php echo $menu->entity_id; ?>">
            <label for="categories"><?php echo  $menu->title;?> </label> <br>

        <?php } ?>



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
        <input type="submit" value="ADD">
    </div>
</form>


