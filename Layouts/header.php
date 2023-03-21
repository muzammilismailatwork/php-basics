<header>
        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <?php
        include_once(__DIR__.'/components/Image.php');
        $header_image = new Image('./Assets/logo.png', 'error', 'main_logo');
        $header_image->render();
    ?>
<!-- <img src="./Assets/logo.png" alt="error" class="main_logo"> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Disabled</a>
        </li>
      </ul>
      <div>
        <?php
        include(__DIR__.'./components/Button.php');
        $lbtn = new Btn('Login', '#', 'me-2 btn btn-outline-success');
        $lbtn->get_html();
        $sbtn = new Btn('Signin', '#', 'me-2 btn btn-outline-success');
        $sbtn->get_html();
        ?>
        <!-- <button class="btn btn-outline-success" type="login" href="#">Login</button>
        <button class="btn btn-outline-success" type="signup" href="#">SignUp</button> -->
    </div>
    </div>
  </div>
</nav>
<!-- NavBar End -->
    </header>