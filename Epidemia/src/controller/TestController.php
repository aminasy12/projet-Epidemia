<?php
include_once "../views/.php";
if(isset($_POST['submit']))
{
    extract($_POST);
    $nb=0;
    if(isset($_POST['p0'])){
        $nb++;
    }
    if(isset($_POST['p1'])){
        $nb++;
    }
    if(isset($_POST['p3'])){
        $nb++;
    }
    if(isset($_POST['p5'])){
        $nb++;
    }
    if(isset($_POST['p7'])){
        $nb++;
    }
    header("location:http://localhost:8080/Epidemia/src/views/showPays.php");

}