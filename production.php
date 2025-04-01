<?php 

session_start();

include "connet.php";

$Operater1 = "";
$Operater2 = "";
$Pakingman = "";
$Production_KG = "";
$TotalBags = "";
$Payment = "";
$Date = "";


if (isset($_POST["save"])) {
    $Operater1 = $_POST["Operater1"];
    $Operater2 = $_POST["Operater2"];
    $Pakingman = $_POST["Pakingman"];
    $Production_KG = $_POST["Production_kg"];
    file_put_contents("test.txt", $Production_KG);
    $TotalBags = $_POST["TotalBags"];
    $Payment = $TotalBags * 10;

    
   
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO production (Operater1, Operater2, Pakingman, Production_KG, TotalBags, Payment) VALUES ('$Operater1', '$Operater2', '$Pakingman', '$Production_KG', '$TotalBags', '$Payment')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: production.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>H02MANAGER</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset\table.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>

body{
  margin:0;
  padding: 0;
}


    * {
      box-sizing: border-box;
    }

    section {
      width: 100%;
      height: 620px;
      padding: 30px;
      margin-top: 170px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;

    }




    .container {
      background: rgb(238, 174, 202);
      background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
      border-radius: 25px;
      overflow: hidden;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      overflow: scroll;
      width: 70%;
    }


    article {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      width: 100%;
      padding: 10px;

    }

    @media (min-width: 481px) and (max-width: 1024px) {
      .container {

        width: 100%;
        padding: 10px;
      }

      span {
        display: none;
      }

      section {

        margin-top: 140px;
        width: 100%;
      }
    }

    @media (max-width: 480px) {
      span {
        display: none;
      }

      section {


        width: 100%;
      }

      .container {
       
        border-radius: 10px;
        overflow: hidden;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        overflow: scroll;
        width: 100%;
        font-size: 0.6rem;
        padding:0;
        margin:0;
      }
    }

    th,
    td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

  .frow{
   
   
  }
  </style>
</head>

<body>
  <?php require "includes/nav.php"; ?>




  <section>

    <main>
      <span style=" 
                 width:100%;
                
                 ">
        <h2 style="margin-top: -40px;">Calander</h2>
        <p class="calander">
          <?php require "includes/calander.php"; ?>
        </p>
      </span>

    </main>

    <main class="container">

      <table id="example" style="width:100%;   ">


        <tr class="frow">
          <td colspan="6">
            <article>
              <h3>Production</h3>
              <form class="col-md-6" action="">

                <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                <select class="form-select" id="specificSizeSelect">
                  <option selected>All</option>
                  <option value="1">Auwal and Shamsu</option>
                  <option value="2">Abdul and youman</option>
                  <option value="3">Abdullahi and Gaddafi</option>
                </select>


              </form>

              <button type="button"  class="btn btn-primary" form="mybutton" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Add Production</button>

            </article>
          </td>
        </tr>
        <tr>
          <th>ID</th>
          <th>Operater</th>
          <th>Production KG</th>
          <th>Total Bags</th>
          <th>Payment</th>
          <th>Date</th>
          <th>Action</th>
        </tr>


        <tbody>

        <?php 




    
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM production";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
  
 while($row = $result->fetch_assoc()) {

  echo " 

  <tr>
  <td>$row[id]</td>
  <td>$row[Operater1] , $row[Operater2] and $row[Pakingman] </td>
  <td>$row[Production_KG]</td>
  <td>$row[TotalBags]</td>
  <td>N$row[Payment]</td>
  <td>$row[Date]</td>

  <td class='d-flex justify-content-center'>
  <a href='edit.php?editid=$row[id]' class='btn btn-primary p-1' >Edit</a>
  <a href='delete.php?deleteid=$row[id]'  class='btn btn-danger  p-1'>Delete</a>
   </td>
  ";
  
  
     

 }


        ?>

    
<tr>
          <th>ID</th>
          <th>Operater</th>
          <th>Production KG</th>
          <th>Total Bags</th>
          <th>Payment</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
        </tbody>


      </table>

    </main>
  </section>




  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Production</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
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
              <input type="text" class="form-control" name="Pakingman" id="validationCustom02" placeholder="Enter Name Paking Man" value="<?php echo $Pakingman  ?>" required>
              <div class="invalid-feedback">
                Enter Name Paking Man
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom04" class="form-label">Production KG</label>
              <input type="number" class="form-control" name="Production_kg" id="validationCustom03" placeholder="Enter Production_kg" value="<?php echo $Production_KG ?>"  step="0.01" min="0" required>
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
        



            <div class="col-md-6">
            <a  class="btn btn-secondary btn-m col-md-12" href="production.php" role="button">Cancil</a>
            </div>
            <div class="col-md-6">
            <button type="submit" name="save" class="btn btn-primary btn-m col-md-12">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>





  <?php require "includes/footer.php"; ?>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>

</html>