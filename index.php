<?php 
include 'config.php'; 
?>
<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="admin.css" />
    
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="./fav.png" type="image/x-icon">
    <title>Admin Dashboard</title>
  </head>
  <body>
    <nav class="navbar">
      <h1 class="navbar-title"><i class="bx bxs-dashboard"></i> Dashboard</h1>
      <div class="search-bar">
        <input type="text" placeholder="Search..." />
        <button>Search</button>
      </div>
      <div class="user-profile">
        <img src="assets/images/userP.jpg" alt="User Profile" />
        <i class="bx bxs-bell-ring"></i>
      </div>
    </nav>
    <div class="sidebar">
      <ul class="sidebar-menu">
        <li>
          <a href="addproduct.php"><i class="bx bxs-book-add"></i>Add Products</a>
        </li>
        <li>
          <a href="showOrder.php"><i class="bx bx-edit-alt"></i>Invoice</a>
        </li>
        <li>
          <a href="calender.html"><i class="bx bxs-calendar"></i>Calendar</a>
        </li>
        <li>
          <a href="settings.php"><i class="bx bxs-cog"></i>Settings</a>
        </li>
        <li>
          <a href="login.php"><i class="bx bx-log-out-circle"></i>Logout</a>
        </li>
      </ul>
    </div>
    <div class="content">
      <h2 class="sales-table-header">Sales Table</h2>
      <table class="sales-table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2023-09-01</td>
            <td>Elder Ring</td>
            <td>40</td>
            <td>$2600</td>
          </tr>
          <tr>
            <td>2023-09-01</td>
            <td>Atlas Fallen</td>
            <td>35</td>
            <td>$1750</td>
          </tr>
          <tr>
            <td>2023-09-01</td>
            <td>Hades</td>
            <td>55</td>
            <td>$1375</td>
          </tr>
          <tr>
            <td>2023-09-01</td>
            <td>Forza Horizon</td>
            <td>50</td>
            <td>$2900</td>
          </tr>
         
        </tbody>
      </table>
    </div>
  </body>
</html>
