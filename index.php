<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/edd0240440.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="finance.js"></script>
    <title>Finance Dashboard</title>
</head>

<body>
<div id="sidebar">
    <h2>Financial Dashboard</h2>
    <ul>
      <li><a href="adminHome.php"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="adminAnalytics.php"><i class="fas fa-chart-line"></i> Disbursement</a></li>
      <li><a href="adminUser.php"><i class="fas fa-copy"></i> Budget Management</a></li>
      <li><a href="adminAM.php"><i class="fas fa-money-bill"></i> Collection</a>
      <li><a href="signup.php"><i class="fas fa-address-book"></i> General Ledger</a></li>
      <li><a href="signup.php"><i class="fas fa-file-invoice"></i> Account Payable/Recievable</a></li> 
    </ul>
  </div>
 

<div id="content">

<header>

<button>
</header>

<header class="fixed-header">
        
        <nav>
        <button id="menu-btn" onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
            <a href="#">Home</a>
            <a href="#">Profile</a>
            <a href="#">Ewan</a>
            <a href="#">sige</a>
        </nav>
    </header>

    <h1>Admin Dashboard - Home</h1>
    <p>Welcome to the Financial Department! This department serves as the cornerstone of our organization, responsible for managing all financial processes and decisions. Our primary goal is to ensure the effective allocation of resources, maintain financial stability, and support the overall strategic objectives of the company.</p>
    
    <div class="main-content">
      
        <section>
            <div class="dashboard-box">
            <a href="#" class="box">
                <h3>Important Statistics</h3>
                <ul>
                <li>Perang nanakaw: 200000</li>
                <li>Perang naitago: 20</li>
                <li>Imissyou: 143</li>
                </ul>
            </a>
            </div>

          
            <div class="dashboard-box">
            <a href="#" class="box">
                <h3>Recent Activities</h3>
                <ul>
                    <li>1. Miss na kita</li>
                    <li>2. Miss na kita balik please</li>
                    <li>3. balik na ikaw ehehe</li>
                </ul>
            </a>
            </div>
        </section>
    </div>


</div>
<footer>
      <p>&copy; 2024 Financial Department | All rights reserved</p>
</footer>
</body>

</html>