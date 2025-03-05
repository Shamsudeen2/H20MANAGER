<?php 

$Operater1 = "";
$Operater2 = "";
$PakingMan = "";
$Production_kg = "";
$TotalBags = "";

$erroMessage = " ";
$successMessage = " ";


if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $Operater1 = $_POST["Operater1"];
    $Operater2 = $_POST["Operater2"];
    $PakingMan = $_POST["pakingman"];
    $Production_kg = $_POST["Production_kg"];
    $TotalBags = $_POST["TotalBags"];
    
    
  

    if (empty($Operator1) || empty($Operater2) || empty($PakingMan) || empty($Production_kg) || empty($TotalBags)){

        $erroMessage = "All Fields are require";
    
         

    }else {
      test_input($Operator1 || $Operater2 || $PakingMan || $Production_kg || $TotalBags);
    }
    // Add new operater to database

    
   

   

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
</head>
<body>
    


<div class="container my-5">
     <h2>Add Operater</h2>

     <?php

    
        echo   "     
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong> $erroMessage </strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>

      ";
     

    
     
     ?>
     
     <div class="modal-body">
          <form method="POST" class="row g-3 needs-validation" id="mybutton" novalidate>
            <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Operater 1</label>
              <input type="text" class="form-control" name="Operater1"  id="validationCustom01"  placeholder="Enter Name Operater 1" value="<?php echo $Operater1 ?>" required>
              <div class="invalid-feedback">
                Enter Name Operater 1
              </div>

            </div>
            <div class="col-md-12">
              <label for="validationCustom02" class="form-label">Operater 2</label>
              <input type="text" class="form-control" name="Operater2" id="validationCustom02" placeholder="Enter Name Operater 1" value="<?php echo $Operater2 ?>" required>
              <div class="invalid-feedback">
                Enter Name Operater 2
              </div>
            </div>

            <div class="col-md-12">
              <label for="validationCustom03" class="form-label">Paking Man</label>
              <input type="text" class="form-control" name="pakingman" id="validationCustom02" placeholder="Enter Name Paking Man" value="<?php echo $PakingMan ?>" required>
              <div class="invalid-feedback">
                Enter Name Paking Man
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom04" class="form-label">Production KG</label>
              <input type="number" class="form-control" name="Production_kg" id="validationCustom03" placeholder="Enter Production_kg" value="<?php echo $Production_kg ?>" required>
              <div class="invalid-feedback">
                Enter Production KG
              </div>
            </div>

            <div class="col-md-12">
              <label for="validationCustom05" class="form-label">Total Bags</label>
              <input type="number" class="form-control" name="TotalBags" id="validationCustom03" placeholder="Enter Total Bags" value="<?php echo $TotalBags ?>" required>
              <div class="invalid-feedback">
                Enter Total Bags
              </div>
            </div>
          
            <?php


?>

            <div class="col-md-6">
            <a  class="btn btn-secondary btn-m col-md-12" href="production.php" role="button">Cancil</a>
            </div>
            <div class="col-md-6">
            <button type="submit" class="btn btn-primary btn-m col-md-12">Save</button>
            </div>
          </form>
        </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>