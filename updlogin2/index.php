<?php

require "db.php";
$admininform = "SELECT * FROM upd2";
$result = $conn->query($admininform);


if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['password']) && isset($_GET['id'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $password = $_POST['password'];
 $id = $_GET['id'];
 echo $id;


 $updata = "UPDATE `upd2` SET `name`='$name',`surname`='$surname',`password`='$password' WHERE id='$id'";
 $updata = mysqli_query($conn, $updata);

 
}



if (isset($_GET['id'])) {

 $id = $_GET['id'];
 echo $id;
 


$updata2= "DELETE FROM  upd2 WHERE id='$id'";
$updata2 = mysqli_query($conn, $updata2);

  
}

$serinform = "SELECT * FROM upd2";
$serresult = mysqli_query($conn, $serinform);


$result = $conn->query($admininform);
$users = mysqli_fetch_assoc($result);



$serinform = "SELECT * FROM upd2";
$serresults = mysqli_query($conn, $serinform);


$results = $conn->query($admininform);
$users = mysqli_fetch_assoc($result);







?>







<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Table and Buttons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <button type="button" class="btn btn-info  m-5"><a href="add.php">ADD PORTFOLIO</a></button>
  <button type="button" class="btn btn-info  m-5"><a href="update.php">UPDATE</a></button>
  <h1 class="m-5">Table and Buttons</h1>
<?php
            if (mysqli_num_rows($serresult) > 0) {
                while ($serrow = mysqli_fetch_assoc($serresult) ) {
                    ?>
    <div class="container m-5">

     
      
      <table class="table">
        <thead>
       
          <tr>
            <th><?=$serrow['name']?></th>
            <th><?=$serrow['surname']?></th>
            <th><?=$serrow['password']?></th>
       
          </tr>
          
        </thead>
        <tbody>
          <tr> 
          <th>         


      <button type="button" class="btn btn-danger"><a href="./?id=<?=$serrow['id']?>">Delete</a></button></th>
          </tr>
         
       
        </tbody>
      </table>

    </div>
    <?php
                }
            } else {
                echo "0 results";
            }
            ?>

            
  </body>
</html>



<?php




