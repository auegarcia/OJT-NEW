<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DXC- Resource Hub</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <link rel="stylesheet" href="css/hstyles.css">
</head>

<body>
<!-------- Header ---------->
<header id ="header" class="header d-flex align-items-center sticky-top">
  <nav class="navbar navbar-default">
      <div class="container-fluid">
      <div class="navbar-brand">
        <a href="home.php">
              <img src="images/logo_dxc.png" alt="">
        </a>
      </div>
          <div class="navbar-header">


            <ul class="nav navbar-nav">
              <li><a href="snow.php"> SNOW </a></li>
              <li><a href="ticketing.php"> Ticketing </a></li>
              <li><a href="resource.php"> Resource </a></li>
              <li class ="active"><a href="login.php"> Login </a></li>
            </ul>
          </div>
      </div>
  </nav>
</header>



<main class="main">

  <div class="image">
    <img src="images/working.png" alt="">
  </div>

  <div class="content">
    <h1>WELCOME TO DXC RESOURCE HUB</h1>
  </div>


</main>


<div class="footer">
    <div class="footer-menu">
      <h3 class="footer-menu-name-dxc">DXC-RESOURCE HUB</h3>
    </div>

    <div class="footer-content-column">
      <div class="footer-menu">
        <h3 class="footer-menu-name">SNOW</h3>
      </div>
    </div>

    <div class="footer-content-column">
      <div class="footer-menu">
        <h3 class="footer-menu-name">Ticketing</h3>
        <ul id="menu-ticketing" class="footer-menu-list">
          <li class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="#">Types of Tickets</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="#">Priority</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-content-column">
    <div class="footer-menu">
        <h3 class="footer-menu-name">Resources</h3>
        <ul id="menu-resources" class="footer-menu-list">
          <li class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="#">Decommissioning</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="#">Shutting down PCs/Servers</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="#">Setting up SNOW</a>
          </li>
        </ul>
      </div>
    </div>
</div>








</body>






</html>