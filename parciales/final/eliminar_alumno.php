<?php
session_start();
$id=$_GET['cu'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cu'])) {
        $CU = $_POST['cu'];
        echo $CU;
   
    }
}
?>
