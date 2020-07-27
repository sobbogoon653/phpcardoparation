<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title>Company Data</title>
    </head>
    <body>
        <?php
            require_once 'dbconect.php';


            if(isset($_GET["id"]) && $_GET["id"]){
                $editId = $_GET["id"];
            }

            $editTbleSelect = "SELECT fname,lname,mobile,address FROM companytbl WHERE id=".$editId;
            $run = mysqli_query($connect, $editTbleSelect);
            if( $run==true){
               $conVert = mysqli_fetch_all( $run, MYSQLI_ASSOC);
               if($conVert==true){
                   foreach($conVert as $conVert){
                       ?>


      <div style="margin:20px auto;background: #437663;width:700px;padding: 20px;border: 2.5px solid tomato;">
          <form action="edit_core.php" method="POST">
            <table>
                <tr>
                    <td>First Name</td>
                    <td>:</td>
                    <td><input type="text" name="fname" value="<?php echo $conVert['fname'] ?>"/></td>
                </tr>

                 <tr>
                    <td>Last Name</td>
                    <td>:</td>
                    <td><input type="text" name="lname" value="<?php echo $conVert['lname'] ?>"/></td>
                </tr>

                 <tr>
                    <td>Mobile</td>
                    <td>:</td>
                    <td><input type="text" name="mobile" value="<?php echo $conVert['mobile'] ?>"</td>
                </tr>

                 <tr>
                    <td valign="top">Address</td>
                    <td valign="top">:</td>
                    <td><textarea rows="5" cols="50" name="addr" > <?php echo $conVert['address'] ?></textarea></td>
                </tr>

                <tr>
                    <td><input type="hidden" name="edited" value="<?php echo $editId?>"/></td>
                    <td></td>
                    <td><input style="cursor: pointer" type="submit" name="editSubmit" value="SAVE DATA"/></td>

                </tr>
            </table>
              <a href="viewtbllist.php" style="text-align: center;font-weight: bold;color:#fff;display: block;background: tomato;padding: 10px;text-decoration: none;width: 200px;border-radius:5px;margin: 20px auto">View Table List</a>
        </form>
    </div>
              <?php }}} ?>


</body>
</html>
