<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>

  </style>
</head>

<body>

  <div class="container mt-5">
    <h1 class="alert-info text-center mb-5 p-3">
      AJAX--PHP--JS & Bootstrap-5
    </h1>
    <div class="row">
      <form class="col-sm-5" id="myform">
        <h3 class="alert-warning text-center p-2">
          Add / Update Students
        </h3>
        <div>
          <!-- <input style="display:none;" type="text" class="form-control" id="stuid"> -->
          <label for="nameid" class="form-label">name</label>
          <input type="text" class="form-control"  id="nameid">
        </div>
        <div>
          <label for="emailid" class="form-label">email</label>
          <input type="text" class="form-control" id="emailid">
        </div>
        <div>
          <label for="passwordid" class="form-label">password</label>
          <input type="text" class="form-control" id="passwordid">
        </div>
        <div class="mt-5">
          <button type="submit" class="btn btn-primary" id="btnadd">save</button>
        </div>
        <div id="msg"></div>
      </form>
      <div class="col-sm-7 text-center">
        <h3 class="alert-warning p-2">
          Show Student Infooo
        </h3>
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NAME</th>
              <th scope="col">EMAIL</th>
              <th scope="col">PASSWORD</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody id="tbody">

          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <script>
    document.querySelector('#btnadd').addEventListener('click' , add_student);

    function add_student(e){
      e.preventDefault();
      let nm = document.querySelector('#nameid').value ;
      let em = document.querySelector('#emailid').value ;
      let pw = document.querySelector('#passwordid').value ;

      const nxhr = new XMLHttpRequest();
      nxhr.open('post' , 'insert.php');
      nxhr.onload = function(){
        if(nxhr.status == 200){
        console.log(nxhr.responseText);
        document.querySelector('#msg').innerHTML = `
          <div class='alert alert-info'> ${nxhr.responseText} </div>
        
        `;
        document.querySelector('#myform').reset();
        }else{
          alert('plz try again');
        }
      }

      let formData = {
        name : nm ,
        email : em ,
        pass : pw ,
      };

      let formDataToJSON = JSON.stringify(formData);

      nxhr.send(formDataToJSON);
      showData();
    } 


    function showData(){

      let tBody = document.querySelector('#tbody');

      tBody.innerHTML = "";
      const nxhr = new XMLHttpRequest();
      nxhr.open('get' , 'alldata.php');
      nxhr.onload = function(){
        if(nxhr.status == 200){
          let myData = JSON.parse(nxhr.responseText);
        myData.forEach(snglSTD => {
          tBody.innerHTML += `
          <tr>
            <td> ${snglSTD.id} </td>
            <td> ${snglSTD.name} </td>
            <td> ${snglSTD.email} </td>
            <td> ${snglSTD.password} </td>
            <td> <button class='btn btn-success'> edit</button> <button class='btn btn-danger'> delete</button></td>
          </tr>
          `
        })
        }else{
          console.log('errrrrrrrror');
        }
      }
      nxhr.send();
    }

    showData();
  </script>


  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
</body>

</html>