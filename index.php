<?php include "includes/db.php"; ?>
<?php session_start(); ?>
<?php 
if (!isset($_SESSION['title'])) {
        header("Location: https://logical-complements-cassieh129.c9users.io/title.php");
        exit();
    }
?>
<?php include "includes/functions.php"; ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
 <title>Home Page |</title>
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css?family=Open+sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<!--icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
</head>
<body>
<?php include "includes/header.php"; ?>
  
<!--Carousel-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="max-height: 100%">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 fade-img" src="images/light-flag.jpg" alt="First slide">
       <div class="carousel-caption">
          <h3 style="font-weight: 400">WELCOME TO</h3>
          <h1 style="font-weight: 500">FOR THE PEOPLE</h1>
          <h3 style="font-weight: 400">Next generation politics</h3>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 fade-img" src="images/white-house.jpg" alt="Second slide">
       <a href="federal.php?username={$username}">
         <div class="carousel-caption">
          <h1 style="font-weight: 500">FEDERAL</h1>
          <h4 style="font-weight: 500">Click to get started with your federal elections</h4>
        </div></a>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 fade-img" src="images/sunset.jpg" alt="Third slide">
       <a href="state.php">
         <div class="carousel-caption">
          <h1 style="font-weight: 500">STATE</h1>
          <h3>Click to get started with your state elections</h3>
        </div></a>
    </div>
  
     <div class="carousel-item">
      <img class="d-block w-100 fade-img" src="images/eagle.jpg" alt="Fourth slide">
         <a href="local.php"><div class="carousel-caption">
          <h1 style="font-weight: 500">LOCAL</h1>
          <h3>Click to get started with your local elections</h3>
        </div></a>
    </div>
  </div>
  <!-- Carousel control arrows -->
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
<!-- Mission Statement  -->
   <div class="my-1">
     <div class="card text-center">
       <div class="card-header text-center">
          <h2 style="color: #edf2f4">OUR MISSION</h2>
        </div>
        <div class="card-body">
            <p> Deciding who to vote for can be overwhelming, and you don't always know exactly who the name on the ballot is.
                At For The People, our mission is to help you sort through candidates. 
                We want a place for candidates to show you their values in a quick and easy way, so that you can decide which representation is best for <b>you</b>– 
                no pesky campaign ads needed.</p>
        </div>
      </div>
  </div>
  
  <!-- Infographic-->
    <div><h3 class="text-center">HOW IT WORKS</h3></div>
  <section class="steps steps-area">
        <div class="container">
            <!-- title-section -->
            <ul class="timeline">
                <li class="timeline-box wow fadeInLeft">
                    <i class="icon-layers"></i>
                    <p class="timeline-title">YOUR ACCOUNT</p>
                    <p class="timeline-details"><a href="signup.php">Create an account</a> or <a href="login.php">log in</a> to get started. Choose which issues matter to you.</p>
                    <span>1</span>
                </li>
                <li class="timeline-box wow fadeInRight">
                    <i class="icon-chat"></i>
                    <p class="timeline-title">CHOOSE YOUR STANCE</p>
                    <p class="timeline-details">Go to your profile to choose your stance on different views or change the ones you set.</p>
                    <span>2</span>
                </li>
                <li class="timeline-box  wow fadeInLeft">
                    <i class="icon-tools"></i>
                    <p class="timeline-title">LEVELS OF GOVERNMENT</p>
                    <p class="timeline-details">Go to the federal, state, or local page to see which elections are coming up near you. Candidates are sorted so that the ones with the closest views to yours show up first.</p>
                    <span>3</span>
                </li>
                <li class="timeline-box wow fadeInRight">
                    <i class="icon-trophy"></i>
                    <p class="timeline-title">GO VOTE</p>
                    <p class="timeline-details">Take your vote and make it count after you know who you want in office.</p>
                    <span>4</span>
                </li>
            </ul>
        </div>
</div>                     
            <!-- End container -->                     
</section>               
<div class="container">
<!--For issue suggestion-->
<div class="card text-center">
  <h5 class="card-header">Issues Around You</h5>
  <div class="card-body text-center">
    <!-- Button to trigger modal for issue suggestions -->
    <h5 class="card-title">Suggest an issue</h5>
    <p class="card-text">Don't see an issue you care about? Send us a suggestion and we'll do our best to add it in so you can see your candidates stance.</p>
     <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#issueSuggestion">
      Suggest
    </button>
  </div>
</div>
</div>

<!-- Modal for issue suggestion-->
<div class="modal fade" id="issueSuggestion" tabindex="-1" role="dialog" aria-labelledby="issueSuggestionLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="issueSuggestionLabel">New Issue Suggestion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post">
          <div class="form-group">
            <label for="issue_suggestion" class="col-form-label">Type a short description of the issue:</label>
            <textarea class="form-control" name="issue_suggestion" id="issue_suggestion" maxlength="400"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" name="suggest_issue" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
    </div>
    </div>
<?php include "includes/footer.php"; ?>