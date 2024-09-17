

<?php

require "db.php";
$admininform = "SELECT * FROM upd2";
$result = $conn->query($admininform);

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['password'])) {
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];

    $ins = "INSERT INTO upd2 (name, surname, password) VALUES ('$name', '$surname', '$password')";
    $ins = mysqli_query($conn, $ins);

        // $updata3 = "UPDATE upd2 SET name ='Bu nam', surname='Bu snam' WHERE id='2' ";
        // $updata3 = mysqli_query($conn, $updata3);

    
}

$serinform = "SELECT * FROM upd2 " ;
$serresult = mysqli_query($conn, $serinform);


if (isset($_GET['id'])) {
  
    $id = $_GET['id'];
    echo $id;
    
 
 
 $updata4 = "DELETE FROM  upd2 WHERE id='$id'";
 $updata4 = mysqli_query($conn, $updata4);
 
     
 }
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
    
  <button type="button" class="btn btn-primary m-5" data-bs-toggle="modal" data-bs-target="#addModal1">
    
    +Add Portfolio
</button>
<button type="button" class="btn btn-info  m-5"><a href="index.php">NEXT PAGE</a></button>

<div class="modal fade" id="addModal1" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
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
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">surname</label>
                        <input type="text" class="form-control" name="surname" placeholder="Enter surname">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-label">password</label>
                        <input type="text" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
            <?php
            if (mysqli_num_rows($serresult) > 0) {
                while ($serrow = mysqli_fetch_assoc($serresult)) {
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                             <h2><?=$serrow['name']?></h2>
                            <div class="card-body">
                                <h5 class="card-title"><?=$serrow['password']?></h5>
                                <p class="card-text"><?=$serrow['surname']?></p>

                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
</body>
</html>