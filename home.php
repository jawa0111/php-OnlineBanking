<?php

require 'config.php';

session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <title>Bank of Example</title>
  <link rel="stylesheet" type="text/css" href="homestyle.css">
</head>
<body>
  <header>
    <h1>Welcome to Bank of Example</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Accounts</a></li>
        <li><a href="#">Payments</a></li>
        <li><a href="#"><select>Transfers</select></a></li>
        <li><a href="#">Settings</a></li>
      </ul>
    </nav>
  </header>
<h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
  <main>
    <section class="hero">
      <h2>Your Financial Freedom Starts Here</h2>
      <p>Manage your accounts, make payments, and transfer funds with ease.</p>
      <a href="#" class="button">Get Started</a>
    </section>

    <section class="features">
      <div class="feature">
        <h3>Account Overview</h3>
        <p>View all your accounts in one place and track your transactions.</p>
      </div>
      <div class="feature">
        <h3>Easy Payments</h3>
        <p>Make payments to merchants and individuals securely.</p>
      </div>
      <div class="feature">
        <h3>Quick Transfers</h3>
        <p>Transfer money between your own accounts or to other bank accounts.</p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Bank of Example. All rights reserved.</p>
  </footer>
</body>
</html>





