<?php
require 'config.php';
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
      <button>Sign out</button>
    </nav>
	<?php
// SQL query to retrieve data from the table
$sql = "SELECT * FROM signup";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Start creating the HTML table with CSS styles
    echo "<style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
         </style>";
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Column 1</th>";
    echo "<th>Column 2</th>";
    // Add more column headings if needed
    
    echo "</tr>";

    // Loop through each row of data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["user_name"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        // Add more cells if needed
        
        echo "</tr>";
    }

    // End the HTML table
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the database connection
$conn->close();
?>
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
