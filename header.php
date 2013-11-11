<!DOCTYPE HTML>
<html>

<head>
  <title>Mines Green Thumb</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php"><span class="logo_colour">Mines Green Thumb</span></a></h1>
        </div>
      </div>
      <div id="login">
        <form action="login.php" method="post">
          <label>User Name:
            <input type="text" name="username" size="10" maxlength="10">
          </label>
          <label>Password:
            <input type="text" name="password" size="10" maxlength="10">
          </label>
          <input type="submit" value="Login" id="login_button">
        </form>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="post.php">Post</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="people.php">People</a></li>
        </ul>
      </nav>
    </header>