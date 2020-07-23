<!DOCTYPE html>
<?php include "conn.php"; ?>
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
        <div class="col-md-3">
              <?php include('nav.php'); ?>
        </div>
         <div class="col-sm-8 text-center">
<h2>Thank you for registering</h2>
On the Home Page, you will now be able to login and add new quotes to the message board.
<!-- login does not yet work, nut will in the next chapter -->
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