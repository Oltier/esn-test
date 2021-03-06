<?php
//Autoload for all the classes we uses
require "./autoload.php";

//We have to define which classes are we going to use
use \app\Views\Welcome;

//Declare here the classes you have created and may need to use:

//Your code here...

//Let's do some coding here needed for hte explanations
//We load the Welcome view class, and populate some data for the views
$welcome = new Welcome();
$outputT3 = [
  'task'  => 'Task 3',
  'class' => 'alert-success',
  'fact'  => 'Manneken Pis is a famous statue and one of the most famous landmarks in Brussels which is only 61 cm tall.',
];
$outputT4 = [
  'task'  => 'Task 4',
  'class' => 'alert-info',
  'fact'  => 'The Brussels’ International Airport is the largest chocolate selling point in the world.',
];

//Now is your turn to code something
//Your main code must be done here:


//... and more code here


//And after here, you can only do the outputs
//This is the output. Replace the output view's functions with yours only (and the parameters neede for them)
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Playground to test the new developers">
    <meta name="author" content="ESN - Gorka Guerrero Ruiz">

    <title>Let's code a little bit!</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="./libraries/flag-icon/css/flag-icon.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">WebDev Simple Test</a>
      </div>
    </nav>
    <!-- Page Content -->
    <div role="main" class="container">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <?
              echo $welcome->output();
            ?>
          </div>
        </div>
      </div>

      <div class="container solution">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="solution_header mt-3">Solution to Task 3</div>
            <?
              //Here goes the function with the output for Task 3
              echo $welcome->tmp($outputT3);
            ?>
          </div>
        </div>
      </div>

      <div class="container solution">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="solution_header mt-3">Solution to Task 4</div>
            <?
              //Here goes the function with the output for Task 4
              echo $welcome->tmp($outputT4);
            ?>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="footer">
      <div class="container">
        <span class="text-muted"><img src="./img/itcom.png" height="40" alt="ITCom logo"/> - <img src="./img/esn.png" height="40" alt="ESN International Logo"/> - <a href="http://esn.org" title="ESN International" target="_blank">ESN International AISBL</a> - Gorka Guerrero Ruiz</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/9690e058cb.js"></script>
  </body>
</html>