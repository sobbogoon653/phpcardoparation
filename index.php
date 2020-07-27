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
                 $inserted = $notInserted = '';
            if(isset($_GET["action"]) && $_GET["action"]){
                $subReply = $_GET["action"];
                if($subReply=="true"){
                    $inserted = "<h4 style='text-align:center;color:#01355D;font-weight:bold'>Data Inserted</h4>";
                }else{
                    $notInserted = "<h4 style='text-align:center;color:#FF8450;font-weight:bold'>Data not Inserted</h4>";
                }
            }
                $err_submit = '';

            if(isset($_GET["submit"]) && $_GET["submit"]){
                   $err_submit = "<h4 style='text-align:center;color:red;font-weight:bold'>Please Fillup This Form !!</h4>";
            }
        ?>
        <div style="margin:20px auto;background: #437663;width:700px;padding: 20px;border: 2.5px solid tomato;">
            <?php echo  $err_submit;
                  echo  $inserted;
                  echo  $notInserted;
            ?>
        <form action="submit_core.php" method="POST" enctype="multipart/form-data" id="form_clickd">
            <table>
                <tr>
                    <td>First Name</td>
                    <td>:</td>
                    <td><input type="text" name="fname" placeholder="First Name"/></td>
                </tr>

                 <tr>
                    <td>Last Name</td>
                    <td>:</td>
                    <td><input type="text" name="lname" placeholder="Last Name"/></td>
                </tr>

                 <tr>
                    <td>Mobile</td>
                    <td>:</td>
                    <td><input type="text" name="mobile" placeholder="Mobile"/></td>
                </tr>

                 <tr>
                    <td valign="top">Address</td>
                    <td valign="top">:</td>
                    <td><textarea rows="5" cols="50" name="addr" placeholder="Address"></textarea></td>
                </tr>

                 <tr>
                    <td>Upload Picture</td>
                    <td>:</td>
                    <td><input type="file" name="propic"/></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input style="cursor: pointer" type="submit" name="submit" value="Submit"/>  | <input type="reset" name="reset" value="Reset"/></td>

                </tr>
            </table>
            <a href="viewtbllist.php" style="text-align: center;font-weight: bold;color:#fff;display: block;background: tomato;padding: 10px;text-decoration: none;width: 200px;border-radius:5px;margin: 20px auto">View Table List</a>
        </form>
    </div>
    </body>
</html>
