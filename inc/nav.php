<!-- example 1 - using absolute position for center -->
<nav class="navbar fixed-top navbar-expand-md navbar-custom">

    <div class="navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link <?php if($page=='home'){echo 'highlight';}?>" href="index.php">home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link <?php if($page=='login'){echo 'highlight';}?>" href="login.php">login</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link <?php if($page=='why'){echo 'highlight';}?>" href="why.php">why dogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='what'){echo 'highlight';}?>" href="what.php">what dogs need</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='signUp'){echo 'highlight';}?>" href="signUp.php">sign up today!</a>
            </li>
        </ul>
    </div>
</nav>
