<?php
if(isset($_POST['start_game'])){
    header('location: want_it_now.php');
}
if(isset($_POST['sure'])){
    header('location: life_not_easy.php');
}
if(isset($_POST['not'])){
    header('location: index.php');
}
if(isset($_POST['go'])){
    header('location: Q1.php');
}
if(isset($_POST['next1'])){
    header('location: Q2.php');
}
if(isset($_POST['next2'])){
    header('location: Q3.php');
}
if(isset($_POST['to_last'])){
    header('location: surprise.php');
}

?>