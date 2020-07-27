<?php
        require_once "dbconect.php";

        if(isset($_GET["id"]) && $_GET["id"]){
                $viewid = $_GET["id"];
            }

            $view = "SELECT id,fname,lname,mobile,address,signuptime,propic FROM companytbl WHERE id=".$viewid;
            $run = mysqli_query($connect, $view);
            if( $run==true){
               $conVert = mysqli_fetch_all( $run, MYSQLI_ASSOC);
                    if($conVert ==true){
                      
                        foreach( $conVert as  $conVert){
                            $img = $conVert["propic"];

                        ?>
<div style="background: #75A797;padding: 10px; width: 650px;margin: 25px auto;border-radius: 20px;border: 3px solid #FDC766;box-shadow: 18px 13px 4px #ccc;">
    <table style="margin: 20px auto; width: 600px;background: #75A797;padding: 10px;border: 3px solid #FDC766;border-radius: 30px;">
        <tr>
            <td><img style="width: 120px; height: 120px;border-radius: 15px 15px 4px 4px" src="images/<?php echo $img?>"/></td>
            <td></td>
            <td></td>
        </tr>

         <tr>
             <td>DB Id</td>
            <td>:</td>
            <td><?php echo $conVert["id"]?></td>
        </tr>

         <tr>
             <td>First Name</td>
            <td>:</td>
            <td><?php echo $conVert["fname"]?></td>
        </tr>

         <tr>
            <td>Last Name</td>
            <td>:</td>
           <td><?php echo $conVert["lname"]?></td>
        </tr>

         <tr>
            <td>Mobile</td>
            <td>:</td>
            <td><?php echo $conVert["mobile"]?></td>
        </tr>

         <tr>
            <td>Address</td>
            <td>:</td>
           <td><?php echo $conVert["address"]?></td>
        </tr>

         <tr>
            <td>Sign Up Time</td>
            <td>:</td>
           <td><?php echo $conVert["signuptime"]?></td>
        </tr>
    </table>
</div>




   <?php } } }


?>
<a style="padding: 10px 30px; color:#fff; background:#001;text-decoration: none;font-family: arial;font-size: 16px;margin: 0 auto;display: block;width: 100px;border: 1px solid greenyellow;border-radius: 20px" href="viewtbllist.php">Go Back List</a>
