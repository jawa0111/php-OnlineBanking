<?php



session_start();

?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style3.css" />
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
    <h1 class="title1">What can we help you with?</h1>
    <br>
    <div class="searchbar">
        <form>
        <input type="text" placeholder="Search for answers">
        <button type="submit">Search</button>
        </form>
    </div>
   <h2 class="title2">Frequently Asked Questions</h2>
   <br>
   <details>
    <summary class="sub1">How do I register for online banking?</summary>
    <p id="para1">To register for online banking, visit our website and look for the "Register" or "Sign Up" option.
         You will need to provide your personal and account information, create a username and password, 
         and complete the verification process.</p>
   </details>
   <details>
   <summary class="sub2">How do I log in to my online banking account?</summary>
   <p id="para2">To log in to your online banking account, go to our website and click on the "Login" or "Sign In" button. 
    Enter your username and password in the provided fields and click "Submit." You may also be required to
    complete additional security steps, such as entering a one-time password or answering security questions.</p>
   </details>
   <details>
   <summary class="sub3">Can I access my online banking account from multiple devices?</summary>
   <p id="para3">Yes, you can access your online banking account from multiple devices such as your computer, smartphone,
     or tablet. Simply download our mobile banking app or visit our website from any supported device, and
      log in using your credentials.</p>
   </details>
   <details>
   <summary class="sub4">What can I do through online banking?</summary>
   <p id="para4">Our online banking platform offers a wide range of services, including:
    <ul class="list1">
        <li>Checking your account balances and transaction history</li>
        <li>Transferring funds between your accounts or to other bank accounts</li>
        <li>Paying bills online and setting up recurring payments</li>
        <li>Viewing and managing your eStatements</li>
        <li>Applying for new accounts, loans, or credit cards</li>
        <li>Managing and updating your personal information</li>
        <li>Contacting customer support for assistance</li>
   </ul>
   </p>
   </details>
   <details>
   <summary class="sub5">How secure is online banking?</summary>
   <p id="para5">We prioritize the security of your online banking experience. Our platform utilizes advanced encryption 
    technology to protect your personal and financial information. We also employ various security measures, such as multi-factor 
    authentication and monitoring systems, to safeguard your account from unauthorized access.</p>
   </details>
   <details>
   <summary class="sub6">What should I do if I forget my online banking password?</summary>
   <p id="para6">If you forget your online banking password, you can usually initiate a password reset process through our 
    website or mobile app. Follow the instructions provided, which may involve verifying your identity through security questions,
     a one-time password, or other means. Alternatively, you can contact our customer support team for assistance.</p>
   </details>
   <details>
   <summary class="sub7">Are there any fees associated with online banking?</summary>
   <p id="para7">Our online banking services may be subject to certain fees. These fees can vary depending on the type of account 
    or service you are using. We recommend reviewing our fee schedule or contacting our customer support team to inquire about 
    any applicable fees.</p>
   </details>
   <details>
   <summary class="sub8">How can I ensure the privacy of my online banking information?</summary>
   <p id="para8">To maintain the privacy of your online banking information, we recommend following these best practices:
    <ul class="list2">
        <li>Keep your login credentials (username and password) confidential and avoid sharing them with others.</li>
        <li>Regularly update your password and choose a strong, unique combination.</li>
        <li>Avoid accessing your online banking account on public or unsecured Wi-Fi networks.</li>
        <li>Monitor your account activity and report any suspicious transactions to our customer support team immediately.</li>
        <li>Install reliable antivirus software and keep it up to date on your devices.</li>
   </ul>
   </p>
   </details>
   <br>
   <br>
   <div class="background">
<h2>Personal</h2>
<hr>
<br>
<div class="title6">
    <div class="title3">
    <h3>Top FAQs</h3>
    
        <a href="#">Find account number</a><br>
        <a href="#">Reset Password</a><br>
        <a href="#">Fund Transfer</a><br>
        <a href="#">Private Loans</a><br>
   
   </div>
   <div class="title4">
   <h3>Account FAQs</h3>
  
        <a href="#">Account transactions</a><br>
        <a href="#">Account savings</a><br>
        <a href="#">Debit/Credit cards</a><br>
        <a href="#">Bill payments</a><br>
 
   </div>
   <div class="title5">
   <h3>Online Banking FAQs</h3>
   
        <a href="#">Getting started</a><br>
        <a href="#">Account information and access</a><br>
        <a href="#">Bill payments</a><br>
        <a href="#">Security</a><br>
 
   </div>
   </div>
   <br>
   <br>
   <br>
   <br>
   <h2>Business</h2>
   <hr>
   <br>
   <div class="title10">
    <div class="title7">
    <h3>Top FAQs</h3>
        <a href="#">Business registration</a><br>
        <a href="#">Business transactions</a><br>
        <a href="#">Business loans</a><br>
   </div>
   <div class="title8">
   <h3>Tips & Resources</h3>
        <a href="#">Starting a business</a><br>
        <a href="#">Managing business</a><br>
        <a href="#">Mobile banking</a><br>
   </div>
   <div class="title9">
   <h3>Loans & Services</h3>
        <a href="#">Business investments</a><br>
        <a href="#">Treasury management</a><br>
        <a href="#">Practice loans</a><br>
   </div>
   </div>
   <br>
   <br>
   <br>
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
    