<body>
  <div id="header">
    <div class="text">
      <h1>Header 1</h1>
    </div>
  </div>
  <!-- nav bar -->
  <div id="navigation">
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
      <!--begin container -->
      <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="about.html">Think Freely</a>
          </div>
        <!-- Navbar Links: content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li <?php if($thisPage == "Home") { echo 'id="currentpage"'; } ?>><a href="index.php">Home</a></li>
            <li <?php if($thisPage == "About") { echo 'id="currentpage"'; } ?>><a href="about.php">About</a></li>
            <li <?php if($thisPage == "Music") { echo 'id="currentpage"'; } ?>><a href="music.php">Stats</a></li>
            <li <?php if($thisPage == "Poetry") { echo 'id="currentpage"'; } ?>><a href="poetry.php">Poetry</a></li>
            <li <?php if($thisPage == "Contact") { echo 'id="currentpage"'; } ?>><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->        
      </div> <!-- /.container -->
    </nav>
  </div>