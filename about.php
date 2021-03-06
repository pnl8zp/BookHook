<?php
    session_start();
    if(isset($_SESSION['firstname'])) {
        header('Location: member.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BookHook</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome-animation.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="bg-dark">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand page-scroll" href="index.php"><span class="icon"><img src="img/BookHookLogo-xs.png"style="padding-bottom:3px; padding-right:8px;"></span>BookHook</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="signup.php">Sign Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="signin.php">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section id="about" class="bg-dark">
        <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-centered text-center">
                  <h2 class="section-heading">About BookHook</h2>
                  <hr class="primary">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                  <div class="service-box">
                      <i class="fa fa-4x wow bounceIn text-primary"><img src="img/BookHookLogo.png" height="56"></i>
                      <h3>Exchange Books.</h3>
                      <p class="text-muted">Have an old textbook you no longer use? <br>Advertise it for free on BookHook and find someone who will pay you to borrow it.</p>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                  <div class="service-box">
                      <i class="fa fa-4x fa-search wow bounceIn text-primary" data-wow-delay=".1s"></i>
                      <h3>Find People.</h3>
                      <p class="text-muted">Need a textbook, but don't want to pay full-price?  Browse BookHook's list of nearby users to see who is loaning it out!</p>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                  <div class="service-box">
                      <i class="fa fa-4x fa-usd wow bounceIn text-primary" data-wow-delay=".2s"></i>
                      <h3>Save Money. Make Money.</h3>
                      <p class="text-muted">Tired of spending hundreds for textbooks that you only read once? BookHook helps you loan or borrow textbooks at low prices!</p>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                  <div class="service-box">
                      <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".2s"></i>
                      <h3>Share the Love of Learning.</h3>
                      <p class="text-muted">BookHook will fix you up with the textbooks you need for the prices you love. Sign up free and get started in minutes!</p>
                  </div>
              </div>
            </div>
            <br><br><br>
            <div class="row">
            <div class="col-lg-10 col-md-10 col-centered">
              <h2 class="section-heading">How It Works</h2>
              <p class="dl-horizontal text-muted">
                
			  Here at BookHook, we are dedicated to providing a highly affordable route for students to get the textbooks they need without paying ridiculous prices.
			  The process is quick and easy -- sign up for a <b>free</b> account and within minutes you can get started either posting textbooks you would like to loan out 
			  or browsing our listings of textbooks currently being offered near you.  These services are free, and always will be! <br></p>
			  
			  <dl class="dl-horizontal col-md-10 col-centered">
                <dt>See a book you need?</dt>
                <dd> Select the posting, and we will hook you up with the contact information of the lender so that the exchange can take place! </dd>
                <dt>Have a book to loan?</dt>
                <dd>The simple process of creating a listing for your book can be done in just a few minutes! Start making money off of those old textbooks fast!</dd>             
              </dl>
              <br>
			  <p class="text-muted">
			If you don't want to pay hundreds to buy or rent your semester's textbooks from "the other guys" don't worry!  The creators of BookHook are all students, so we know the struggle
			of paying huge amounts of money for your books and only being able to sell them back for next-to-nothing
			when the semester ends. We decided to put an end to this silly game that takes advantage of hard-working students like you.  Our simple and efficient pricing algorithms
			actively search the textbook prices of other major textbook rental companies (such as Chegg, Bookrenter, and Amazon) to ensure that BookHook provides the best prices for students 
			day in and day out.  We will beat the lowest major competitor's rental price by an additional 25%, guaranteed. <br><br>
			
			If you have old textbooks you no longer use but want to make money with, you might be thinking, "Ok BookHook, but with such awesome prices for buyers, will I make a decent profit 
			by loaning?"  The answer is YES!  Since BookHook is based upon a huge and healthy community of book lenders and borrowers, you get your textbooks back at the end of each semester.
			For example, sell back your textbook to "the other guys," and you might get back $40.  Loan your book out for $30 a semester, and you can easily make hundreds by the time you graduate.  And the 
			best part is you still have your book! <br>
			</p>
      <p>
			Whether you're a borrower or a lender, join the BookHook community today for free!
      </p>
            </div>
            <br>
              <div class="col-lg-6 col-md-6 col-centered text-center">
                  <a href="signup.php" class="btn btn-primary btn-xl">Sign Up Now</a>
              </div>
            </div>
        </div>
    </section>

    <div class="navbar navbar-bottom">
            <div class="text-center">
                <p class="text-sm text-faded">Copyright &copy; BookHook 2016</p>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
