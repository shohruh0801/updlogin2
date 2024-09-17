<?php


require "db.php";
$admininform = "SELECT * FROM upd2";
$result = $conn->query($admininform);

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['password']) && isset($_GET['id'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $password = $_POST['password'];
    
  if(isset($_GET["id"])){
    $id = $_GET['id'];
 echo $id;


 $updata = "UPDATE `upd2` SET `name`='$name',`surname`='$surname',`password`='$password' WHERE id='$id'";
 $updata = mysqli_query($conn, $updata);
  }
  
}








$serinform = "SELECT * FROM upd2";
$sresults = mysqli_query($conn, $serinform);












?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
            if (mysqli_num_rows($sresults) > 0) {
                while ($srow = mysqli_fetch_assoc($sresults) ) {
                    ?>
     <button type="button" class="btn btn-secondary " data-bs-toggle="modal" data-bs-target="#addModal2">
    
          
          <a href="./?id=<?=$srow['id']?>">UPDATE</a>
</button>
<div class="modal fade" id="addModal2" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add New Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form  method="POST">
                    <div class="form-group">
                        <label for="title" class="form-label">name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">surname</label>
                        <input type="text" class="form-control" name="surname" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">password</label>
                        <input type="text" class="form-control" name="password" placeholder="Enter title">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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