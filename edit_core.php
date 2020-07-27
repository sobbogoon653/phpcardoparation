<?php
    if(isset($_POST["editSubmit"]) && $_POST["editSubmit"] && (isset($_POST["addr"]) && $_POST["addr"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $mobile = $_POST["mobile"];
        $address = $_POST["addr"];
        $editId = $_POST["edited"];
      echo $fname;

        require_once 'dbconect.php';

        $upDate = "UPDATE companytbl SET fname = '$fname', lname = '$lname', mobile= '$mobile', address= '$address' WHERE  id =". $editId;
        $run = mysqli_query($connect, $upDate);
        if($run==true){
            header("location:viewtbllist.php?action=edited");
        }else{
            header("location:viewtbllist.php?action=editedfailed");
        }
    }else{
        header("location:viewtbllist.php?action=eror");
    }


?>
