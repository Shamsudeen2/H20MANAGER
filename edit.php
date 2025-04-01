
<?php


include "connet.php";


$Operater1 = "";
$Operater2 = "";
$Pakingman = "";
$Production_KG = "";
$TotalBags = "";
$Payment = "";
$Date = "";


$id = $_GET["editid"];

$sql = "SELECT * FROM `production` WHERE  id = '$id'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();

$Operater1 = $row["Operater1"];
$Operater2 = $row["Operater2"];
$Pakingman = $row["Pakingman"];
$Production_KG = $row["Production_KG"];
$TotalBags = $row["TotalBags"];


if (isset($_POST["save"])) {



    $Operater1 = $_POST["Operater1"];
    $Operater2 = $_POST["Operater2"];
    $Pakingman = $_POST["Pakingman"];
    $Production_KG = $_POST["Production_kg"];
    $TotalBags = $_POST["TotalBags"];
    $Payment = $TotalBags * 10;
    $Date = $_POST["Date"];

    $sql = "UPDATE `production` SET  `Operater1` = '$Operater1', `Operater2` = '$Operater2', `Pakingman` = '$Pakingman', `Production_KG` = '$Production_KG', `TotalBags` = '$TotalBags', `Payment` = '$Payment' WHERE `id` = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: production.php");
    } else {
        echo "Data not updated";
    }
  
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
    
   
      <div class="container  py-5 col-lg-4 col-6  shadow p-3 mb-5 bg-white rounded mt-5">
        <h1 class="text-center">Edit Production</h1>
          <form method="POST" class="row g-3 needs-validation" id="mybutton" novalidate>
     
          <input type="hidden" value="<?php echo $id ?>">

            <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Operater 1</label>
              <input type="text" class="form-control p-3" name="Operater1"  id="validationCustom01"  placeholder="Enter Name Operater 1" value="<?php echo $Operater1 ?>" required>
              <div class="invalid-feedback">
                Enter Name Operater 1
              </div>

            </div>
            <div class="col-md-12">
              <label for="validationCustom02" class="form-label">Operater 2</label>
              <input type="text" class="form-control p-3" name="Operater2" id="validationCustom02" placeholder="Enter Name Operater 1" value="<?php echo $Operater2 ?>" required>
              <div class="invalid-feedback">
                Enter Name Operater 2
              </div>
            </div>

            <div class="col-md-12">
              <label for="validationCustom03" class="form-label">Paking Man</label>
              <input type="text" class="form-control p-3" name="Pakingman" id="validationCustom02" placeholder="Enter Name Paking Man" value="<?php echo $Pakingman  ?>" required>
              <div class="invalid-feedback">
                Enter Name Paking Man
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom04" class="form-label">Production KG</label>
              <input type="number" class="form-control p-3" name="Production_kg" id="validationCustom03" placeholder="Enter Production_kg" value="<?php echo $Production_KG ?>"  step="0.01" min="0" required>
              <div class="invalid-feedback">
                Enter Production KG
              </div>
            </div>

            <div class="col-md-12">
              <label for="validationCustom05" class="form-label">Total Bags</label>
              <input type="number" class="form-control p-3" name="TotalBags" id="validationCustom03" placeholder="Enter Total Bags" value="<?php echo $TotalBags ?>" required>
              <div class="invalid-feedback">
                Enter Total Bags
              </div>
            </div>
        



            <div class="col-md-6">
            <a  class="btn btn-secondary btn-m col-md-12" href="production.php" role="button">Cancil</a>
            </div>
            <div class="col-md-6">
            <button type="submit" name="save" class="btn btn-primary btn-m col-md-12">Save</button>
            </div>
          </form>

        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>