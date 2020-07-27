<?php

      require_once "dbconect.php";
      $delete = "";

      if(isset($_GET["action"]) && $_GET["action"]){
         if( $delete = $_GET["action"]== "deleted"){
              echo "<h4 style='color:blue'>Your Data Deleted</h4>";
         }

      }

      $search = "";

      if(isset($_POST["searchname"]) && $_POST["searchname"]){
          $search = $_POST["searchname"];
      }




      $view = "SELECT * FROM companytbl WHERE fname LIKE '%$search%' OR lname LIKE '%$search%'";
      $run = mysqli_query($connect,$view);

      if($run==true){
          $convert = mysqli_fetch_all($run, MYSQLI_ASSOC);
          if($convert== true){ ?>



<div style="width:300px;height: 50px; margin: 20px auto;background:#14abe5;border: 1.5px solid #e61212;padding: 3px 15px;">
    <form action="" method="POST">
        <input style="margin: 10px auto;padding: 8px 5px;border-radius: 4px;border: none;margin: 7px 0px 8px -1px;padding: 10px 23px;" type="text" name="searchname" placeholder=""/>
        <input style="cursor: pointer;margin: 2px auto;background:#63251a;color:#fff;padding: 10px 19px;border: none;border-radius: 5px;" type="submit" name="searchsubmit" value="Search"/>
    </form>
</div>

<table border="1" Style="width:1160px;height:auto;margin:20px auto;background:#ddd;padding: 10px;">
    <thead>
        <tr>
            <th>DB ID</th>
            <th>S.L</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Profile Picture</th>
            <th>Sign up Date</th>
            <th>Action</th>
        </tr>
    </thead>

          <?php } }
          $sL = "";
         foreach($convert as $table){
              $sL > 0 ; $sL++;
              $id = $table['id'];
             echo "<tr>";
             echo "<td style='text-align:center'>". $id."</td>";
             echo "<td style='text-align:center'>".$sL."</td>";
             echo "<td><a style='color:#000;text-decoration:none;' href='single_form.php?id=$id'>".$table["fname"]."</a></td>";
             echo "<td style='text-align:center'>".$table["lname"]."</td>";
             echo "<td style='text-align:center'>".$table["mobile"]."</td>";
             echo "<td>".$table["address"]."</td>";
             echo "<td style='text-align:center'><img style='width:70px;height:70px;' src='images/$table[propic]'/></td>";
             echo "<td style='text-align:center'>".$table["signuptime"]."</td>";
             echo "<td style='text-align:center'><a href='edit_form.php?id=".$table['id']."'>Edit</a> | <a href='delete_core.php?id=".$table['id']."'>Delete</a></td>";
             echo "<tr>";
         }?>
 </table>
<a href="index.php" style="text-align: center;font-weight: bold;color:#fff;display: block;background: tomato;padding: 10px;text-decoration: none;width: 200px;border-radius:9px;margin: 20px auto">Go Back Form</a>
