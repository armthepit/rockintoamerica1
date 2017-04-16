<?php
    $page_title  = "Rockin To America";
    $page_description = "Rockin To America is";
    $test = mytest;
?>
<?php require_once("assets/includes/header.php");?>
<?php require_once("assets/php/db_connect.php");?>

<body>

    <?php require_once("assets/includes/pageheader.php");?>
    <?php require_once("assets/includes/navigation.php");?>
    <div class="container-fluid maincontainer">
        <div class="row">
            <?php require_once("assets/includes/sidebar.php");?>
            <?php require_once("assets/includes/maincontent.php");?>
        </div>
    </div>
    <?php require_once("assets/includes/footer.php");?>
    <?php require_once("assets/includes/js.php");?>

</body>

</html>