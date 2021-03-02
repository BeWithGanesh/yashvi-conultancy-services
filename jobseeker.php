<?php include 'jobseekerform.php'; ?>
<style>
<?php include 'assets/css/style.css'; ?>
</style>


<!DOCTYPE html>
<html lang="en">
<head>

     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
 
     <!-- internal css & js -->
 
     <link rel="stylesheet" href="assets/css/style.css">
     <script src="assets/js/script.js"></script>
 
 
     <title>Jobseeker Corner</title>
 
     <!-- fonts -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Text:wght@900&display=swap" rel="stylesheet">

     <!-- form -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
 
</head>
<body>

        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->


    <div class="hed contain">

      <br>
      <p>YASHVI Consultancy Services</p>

    </div>


    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!-- navbar -->


    <div style="padding: 10px;">
    <nav class="navbar navbar-expand-md container navbar-default">
      <div class="container">

        

        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
       
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>

            </ul>
            
        </div>
      </div>
    </nav>
  </div>

    <!-- form -->

    <section class="get-in-touch">
        <h1 class="title">Jobseeker Corner</h1>
        <form class="contact-form row" method="POST" enctype="multipart/form-data">
           <div class="form-field  col-lg-12">
              <input id="name" class="input-text js-input" type="text" name="name" required>
              <label class="label" for="name">Name</label>
           </div>
           <div class="form-field col-lg-6 ">
              <input id="email" class="input-text js-input" type="email" name="email" required>
              <label class="label" for="email">E-mail</label>
           </div>
           <!-- <div class="form-field col-lg-6 ">
              <input id="company" class="input-text js-input" type="text" required>
              <label class="label" for="company">Company Name</label>
           </div> -->
            <div class="form-field col-lg-6 ">
              <input id="phone" class="input-text js-input" type="text" name="contactno" required>
              <label class="label" for="phone">Contact Number</label>
           </div>
           

           <div class="form-field col-lg-12">
            <label for="position" style="font-size: 18px; color: #18407c;">Applying for Position</label> &nbsp;
            <select name="position" id="position">
              <option>Developer</option>
              <option>Designer</option>
              <option>Support Engineer</option>
              <option selected>none</option>
            </select>
           </div>
           
          

           <div class="form-field col-lg-12" style="margin-top: 70px;">
            <label class="label" for="message">Upload Resume</label>
           </div>

           <div class="form-field col-lg-12" style="margin-top: -40px;">
           <input type="file" id="myFile" name="file" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
           text/plain, application/pdf" required>
           
          </div>

          <div class="form-field col-lg-12">
            <input id="message" class="input-text js-input" type="text" name="remark" required>
            <label class="label" for="message">Remark</label>
         </div>

           <div class="form-field col-lg-12">
              <input class="submit-btn" type="submit" value="Submit" name="submit">
           </div>
        </form>
     </section>

     





    <!-- footer -->
    <div class="fot contain">
        <br>
        <p>Copyright ©2021 All rights reserved | YASHVI Consultancy Services</p>
    </div>


    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
    
    
</body>
</html>