<?php
    require_once 'dbconect.php';
    
    if(isset($_GET["id"]) && $_GET["id"]){
        $dbid = $_GET["id"];
    }
    
    
    
    
    $delete = "DELETE FROM companytbl WHERE id=".$dbid;
    $run = mysqli_query($connect, $delete);
       if($run==true){
           header("location:viewtbllist.php?action=deleted");
       }     
    
    
    
?>

