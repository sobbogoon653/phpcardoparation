<?php
        require_once "dbconect.php";
    if(isset($_POST["fname"]) && $_POST["fname"] && (isset($_POST["lname"]) && $_POST["lname"]) && (isset($_POST["mobile"])) && $_POST["mobile"] && (isset($_POST["addr"]) && $_POST["addr"]) && (isset($_FILES["propic"]["tmp_name"]) && $_FILES["propic"]["tmp_name"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $mobile = $_POST["mobile"];
        $addr = $_POST["addr"];
        $picName = $_FILES["propic"]["name"];
        $propicTmp = $_FILES["propic"]["tmp_name"];


         $proPicName = uniqid();

        $savePic = move_uploaded_file($propicTmp,"images/".$proPicName.".jpg");

        if( $fname && $lname && $mobile && $addr && $propicTmp){

            $insert = "INSERT INTO companytbl (fname,lname,mobile,address,propic) VALUES ('$fname','$lname',' $mobile','$addr','".$proPicName.".jpg')";
            $run = mysqli_query($connect, $insert);

            if($run==true){
                header("location:index.php?action=true");
            }else{
                header("location:index.php?action=false");
            }
        }
    }else{
        header("location:index.php?submit=failed");
    }




?>
