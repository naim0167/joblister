<?php include_once 'config/init.php';?>

<?php
    $template = new Template('template/frontpage.php');
    $template->title = 'Latest Jobs';
    echo $template;
?>
