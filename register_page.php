<!DOCTYPE html>
<head>
    <meta lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap files-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fontawesome-free-5.7.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome-free-5.7.2-web/css/brands.css" rel="stylesheet">
    <link href="fontawesome-free-5.7.2-web/css/solid.css" rel="stylesheet">
    <link href="fontawesome-free-5.7.2-web/css/regular.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">


    <title>my project</title>
</head>

<body>
    <header>
  <?php include('register_header.php'); ?>
        
    </header>
    <!-- vertical nav -->
    <div class="row">
        <div class="col-md-2">
              <?php include('nav.php'); ?>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD']=='POST') {
        require('process_register.php');
    }

        ?>
        <div class="col-md-8">
            <div class="container">
            <h1 class="text-center">Register New Users <i class="fas fa-users"></i></h1>
            <form action="register_page.php" method="POST" onsubmit="return checked();" >
                <div class="form-group row">
                    <label for="first_name" class="col-sm-4 col-form-label">First Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fisrtname" name="first_name" placeholder="first name" maxlength="40" required value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="last_name" class="col-sm-4 col-form-label">Last Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lastname" name="last_name" placeholder="last name" maxlength="40" required value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" maxlength="100" required value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="password1" class="col-sm-4 col-form-label">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="password" minlength="8" maxlength="12" required value="<?php if(isset($_POST['password1'])) echo $_POST['password1']; ?>">
                        <span id='message'>Between 8 and 12 characters.</span>
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="password2" class="col-sm-4 col-form-label">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password" minlength="8" maxlength="12" required value="<?php if(isset($_POST['password2'])) echo $_POST['password2']; ?>">
                    </div>
                </div>
                <div class="form-group row">
               <div class="col-sm-12">
                        <input id="submit" class="btn btn-primary" type="submit" name="submit"
                         value="Register">
                </div>
             </div>
            </form>

        </div>
        </div>
        <div class="col-md-2">
            
        </div>
      
    </div>
    <footer class="jumbotron text-center row" style="padding-bottom: 1px; padding-top: 8px;">
        <?php include'footer.php';?>
    </footer>

     <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/verified.js"></script>
</body>

</html>