<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Discription</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset\table.css">
  <link rel="stylesheet" href="asset\style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
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

    


 .container{
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
     .container{
      
      width: 100%;
      padding: 10px;
     }
     span{
       display: none;
     }
     section {
      
      margin-top: 140px;
      width: 100%;
    }
    }
    @media (max-width: 480px) {
      span{
       display: none;
     }
     section {
      
      
      width: 100%;
    }
    .container{
      background: rgb(238, 174, 202);
  background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
  border-radius: 25px;
  overflow: hidden;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  overflow: scroll;
  width: 100%;
  font-size: 0.5rem;
     }
}

th, td {
     padding: 8px; 
     text-align: left; 
     border-bottom:1px solid #ddd ;
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

      <table id="example"  style="width:100%;   ">


          <tr class="frow">
            <td colspan="6">
              <article>
                <h3>Discription</h3>
                <form class="col-md-6" action="">

                  <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                  <select class="form-select" id="specificSizeSelect">
                    <option selected>All</option>
                    <option value="1">SANI</option>
                    <option value="2">NAMAMA</option>
                    <option value="3">MUDASSIRU</option>
                  </select>


                </form>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Add Production</button>

              </article>
            </td>
          </tr>
          <tr>
            <th>Driver Name</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
      
        <tbody>

          <tr>
            <td>Namama</td>
            <td>180</td>
            <td>45000</td>
            <td>2010-06-09</td>
            <td>
              <div class="d-flex align-items-center gap-4">
                <a href="#">
                  <button class="ps-0 border-2  bg-white lh-0  top-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg></button>
                </a>
                <a href="#">
                  <button class="ps-0 border-2 bg-white lh-0  top-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button>
                </a>
              </div>
            </td>
          </tr>
          <tr>
            <td>Namama</td>
            <td>180</td>
            <td>45000</td>
            <td>2010-06-09</td>
            <td>
              <div class="d-flex align-items-center gap-4">
                <a href="#">
                  <button class="ps-0 border-2  bg-white lh-0  top-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg></button>
                </a>
                <a href="#">
                  <button class="ps-0 border-2 bg-white lh-0  top-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button>
                </a>
              </div>
            </td>
          </tr>
          
           
          <tr>
            <td>Namama</td>
            <td>180</td>
            <td>45000</td>
            <td>2010-06-09</td>
            <td>
              <div class="d-flex align-items-center gap-4">
                <a href="#">
                  <button class="ps-0 border-2  bg-white lh-0  top-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg></button>
                </a>
                <a href="#">
                  <button class="ps-0 border-2 bg-white lh-0  top-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button>
                </a>
              </div>
            </td>
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
          <form class="row g-3 needs-validation" id="mybutton" novalidate>
            <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Driver Name</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Driver Name" required>
              <div class="invalid-feedback">
                Enter Driver Name
              </div>

            </div>
            <div class="col-md-12">
              <label for="validationCustom02" class="form-label">Quantity</label>
              <input type="number" class="form-control" id="validationCustom02" placeholder="Enter Quantity" required>
              <div class="invalid-feedback">
                Enter Quantity
              </div>
            </div>

            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" form="mybutton" type="submit">Save</button>
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