
<!DOCTYPE html>
<html lang="en">
  
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
    <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="https://www.njit.edu/graduatestudies/degree-programs/graduatecertificates/web-systems-development-cert/" class="navbar-brand">
                  <div class="brand-text brand-big"><span> WSD </span><strong> ToDo Task Admin </strong></div>
                  <div class="brand-text brand-small"><strong>TD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications
                <!-- Messages                        -->

                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <!-- Logout   -->
                <li class="nav-item">

                 <form action="index.php?page=accounts&action=logout" method="post" id="form3" style="float:right;">
                 <li><button class="btn btn-link navbar-btn" type="submit">Logout</button></li>
                 </form>
                <!-- My Profile-->             
                 <form action="index.php?page=accounts&action=myProf" method="post" id="form4" style="float:right;">
                 <li><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">My Profile</button>
                 </li>
                 </form>                            
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
         
          <!-- Sidebar Navidation Menus-->
          <span class="heading">ain</span>
          <div>
           <ul class="list-unstyled">
            <form action="index.php?page=tasks&action=create" method="POST" style="float:left;">
            <button class="btn btn-link navbar-btn" class="icon-interface-windows" type="submit"></i>Create Task</button>
            </form></ul>
          </div>

          
           
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
                         
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                         
         <?php
print utility\htmlTable::genarateTableFromMultiArray($data);
?>
                     
                
         
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>



<script src="js/scripts.js"></script>
</body>
</html>