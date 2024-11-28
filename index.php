<?php



session_start();

?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Easybank</title>
  </head>
  <body>
    <nav class="nav-bar">
      <img src="./images/logo.svg" alt="" />
      <div class="nav-items">
        <a href="#">Home</a>
        <a href="#">Pay bills</a>
        <a href="#">Account</a>
		<a href="#">Transaction history</a>
         <div class="dropdown">
      <button class="dropbtn">Transfer money</button>
      <div class="dropdown-content">
        <a href="#">Own Account Transfer</a>
        <a href="#">Third Party Transfer</a>
      </div>
    </div>
    
  </div>
      <a href="signout.php"><button style='padding: 12px 28px; border: none; outline-width: 0; color: white; border-radius: 24px; cursor: pointer;  font-weight: 400; background-image: linear-gradient(120deg,hsl(192, 70%, 51%),hsl(136, 65%, 51%));'>Sign out</button></a>
    </nav>
    <header class="hero-section">
      <div class="hero-text-container">
        <h1
          >Welcome<br />
          <span><?php if($_SESSION['first_name']){ echo $_SESSION['first_name'];} else{ header('location:loginform.html');} ?></span></h1
        >
        <p
          >Take your financial life online. Your easy bank account<br />
          will be a one-stop-shop for spending,saving,<br />budgeting,investing,
          and much more.</p
        >
        <button>Request Invite</button>
      </div>
<div class="boxx">
      <div class="hero-text-container">
	  
       <h2>Available Balance</h2><br>lll</br>
	     
	   <h2>NIC</h2></br><?php echo $_SESSION['nic'] ?> </br>
	   	   <h2>Mobile</h2></br><?php echo $_SESSION['pno'] ?> </br>
	   
      </div>
	  </div>
    </header>
    <div class="container">
      <section class="why-us">
        <h1>Why choose Easybank?</h1>
        <p
          >We leverage open banking to turn your bank account into your
          financial hub.<br />Control your finances like never before.</p
        >
      </section>
      <section class="features-section">
        <div class="feature-item">
          <img src="./images/icon-online.svg" alt="" />
          <h1>Online Banking</h1>
          <p
            >Our modern web and mobile<br />
            applications allow you to keep<br />
            track of your finances whereever<br />
            you are in the world.</p
          >
        </div>
        <div class="feature-item">
          <img src="./images/icon-budgeting.svg" alt="" />
          <h1>Simple Budgeting</h1>
          <p
            >See exactly where your money<br />
            goes every month.Recieve<br />
            notifications when you're close to<br />
            hitting your limits./p >
          </p></div
        >

        <div class="feature-item">
          <img src="./images/icon-onboarding.svg" alt="" />
          <h1>Fast Onboarding</h1>
          <p
            >We don't do branches.Open your<br />
            accound minutes online and start<br />
            taking controll of your finances<br />
            right away.</p
          >
        </div>
        <div class="feature-item">
          <img src="./images/icon-api.svg" alt="" />
          <h1>Open API</h1>
          <p
            >Manage your savings, investments,<br />
            pension and much more from one<br />
            account.Tracking your money has<br />
            never been easier.</p
          >
        </div>
      </section>
      <section class="blog-section">
        <h1>Latest Articles</h1>
        <div class="article-container">
          <div class="article">
            <img src="./images/image-currency.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4
                >Recieve money in any<br />
                currency with no fees.</h4
              >
              <p
                >The world is getting smaller and<br />
                we are becoming more mobile.So,<br />
                why should you be forced to only<br />
                recieve money in a single...</p
              >
            </div>
          </div>
          <div class="article">
            <img src="./images/image-restaurant.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4
                >Recieve money in any<br />
                currency with no fees.</h4
              >
              <p
                >Our simple budgeting feature<br />
                allow to seperate out your<br />
                spending and set realistic limits<br />
                each month.That means you...</p
              >
            </div>
          </div>
          <div class="article">
            <img src="./images/image-plane.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4>Take Your Easybank card<br />whereever you go.</h4>
              <p
                >We want you to enjoy your travels.<br />This is why we don't
                charge any<br />fees on purchase while you're <br />abroad.We'll
                even show you...</p
              >
            </div>
          </div>
          <div class="article">
            <img src="./images/image-confetti.jpg" alt="" />
            <div class="content">
              <p>Arslan Jajja</p>
              <h4>Our invite-only Beta<br />accounts are live now!</h4>
              <p
                >After a lot of hardwork by the<br />
                whole team,we're excited to launch<br />
                our closed beta.It's easy to request <br />an invite through the
                site.</p
              >
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="footer">
      <div class="footer-container">
        <div class="social-container">
          <img src="./images/icon-facebook.svg" alt="" />
          <img src="./images/icon-instagram.svg" alt="" />
          <img src="./images/icon-twitter.svg" alt="" />
          <img src="./images/icon-pinterest.svg" alt="" />
        </div>
        <div class="menu">
          <a href="#">About us</a>
          <a href="#">Contact us</a>
          <a href="#">Blog</a>
        </div>
        <div class="menu">
          <a href="#">Carriers</a>
          <a href="#">Support</a>
          <a href="#">Privacy Policy</a>
        </div>
        <button>Request Invite</button>
      </div>
    </footer>
  </body>
</html>
