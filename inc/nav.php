<!-- example 1 - using absolute position for center -->
<nav class="navbar fixed-top navbar-expand-md navbar-custom">

    <div class="navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link <?php if($page=='home'){echo 'highlight';}?>" href="index.php">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link <?php if($page=='login'){echo 'highlight';}?>" href="login.php">Login</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link <?php if($page=='why'){echo 'highlight';}?>" href="why.php">Why Dogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='what'){echo 'highlight';}?>" href="what.php">What dogs need</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='signUp'){echo 'highlight';}?>" href="signUp.php">Sign up Today!</a>
            </li>
        </ul>
    </div>
</nav>
