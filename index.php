
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>jQuery hide and seek</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
    body{
      padding-top: 100px;
    }
    #content{
      margin:0 auto;
      text-align: center;
    }
    .reponse{
      display: none;
    }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Questions and Answers </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <!--
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

    <div class="question">
    <h3>Ma premiere question</h3>
    </div>
    <div class="reponse">

     <p>Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!
     Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!
     Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!
     Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!</p>

    </div>

    <div class="question">
    <h3>Ma deuxieme question</h3>
    </div>
    <div class="reponse">

     <p>Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!
     Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!
     Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!
     Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!</p>

    </div>


    <div class="question">
    <h3>Ma troisieme question</h3>
    </div>
    <div class="reponse">

     <p>Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!
     Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!
     Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!
     Dynamisez vos sites web avec JavaScript et AJAX. 
     Ecrivez moins pour faire plus avec jQuery!</p>

    </div>
<!-- on cache les reponse avec le css en utilisant la classe reponse -->

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    
  </body>
</html>
