<?php
    $pages = array("register", "dashboard", "edit", "print");

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }else {
        $page = "register";
    }

    foreach($pages as $p){
        if($page == $p){
            include "src/pages/$p.php";
            break;
        }
    }
?>