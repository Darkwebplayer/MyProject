
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Welcome to Talk Space!</title>
    <?php 
    if(!isset($title)){
      $title=SITE_TITLE;}
    ?>
   

   
<link href="./templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="./templates/css/custom.css" rel="stylesheet">
    <script src="./templates/js/ckeditor.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">Talking Space!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php if(!isLoggedin()):?>
      <li class="nav-item">
        <a class="nav-link" href="Register.php">Create Account</a>
      </li>
      <?php else :?>
      <li class="nav-item">
        <a class="nav-link" href="create.php" tabindex="-1" aria-disabled="true">Create Topic</a>
      </li>
    <?php endif;?>
    </ul>    
  </div>
</nav>

<main role="main" class="container">
    <div class="row">
      <div class="col-md-8">
            <div class="main-col">
              <div class="block">
              <h1 class="float-left"><?php echo $title; ?>
            </h1> 
						<h4 class="float-right">A simple Tech Forum</h4>
						<div class="clearfix"></div>
            <hr>
           
            <?php displayMessage();?>