<?php
include_once 'autoload.php';

?>

<html>
<head>
    <title> navigation </title>
    <link rel="stylesheet" href="web/stylesheet/main.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>



</head>
<body>
<div class="nav-bar">
    <?php
    $menu = new menu();
    foreach ($menu->showconfig('0') as $menu) {
        ?>

        <div>

            <a href="javascript:void(0)" id="<?php echo $menu->entity_id; ?>" data-url="<?php echo $menu->url ?> "
               onclick="nav.indexing(this)"><input type="button" value="<?php echo $menu->title; ?>"> </a>

        </div>
        <?php
    } ?>
</div>


<section class="section">
    <div id="div">

    </div>

</section>


</body>
<script src="web/javascript/mainjs.js?<?php echo time(); ?>"></script>




</html>
