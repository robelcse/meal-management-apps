<!DOCTYPE html>
<html lang="en">
<head>
  <title>Meal management apps</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link href="{{ asset('public/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>


 <div class="wrap">
    <div class="main-section">
        <div class="sidebar-section">
             <div class="logo">
                  <h2>M</h2>
             </div>
             <div class="menu-bar">
                 <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#">Members</a></li>
                     <li><a href="#">Submission</a></li>
                     <li><a href="#">Cost</a></li>
                     <li><a href="#">Meals</a></li>
                     <li><a href="#">About</a></li>
                 </ul>
             </div>
             <div class="copyright">
                  <p>&copy;2021 - copyright all right reserve</p>
             </div>
        </div>
        <div class="content-section">
              <div class="header">
                   <div class="search-bar">
                        <input type="text" name="search" placeholder="search..."/>
                   </div>
                   <div class="profile">
                        <img src="https://demo.dashboardpack.com/finance-html/img/client_img.png" id="profile-img" alt="admin-profile">
                        <div class="profile-box" id="profile-box">
                            <ul>
                                <li><a href="">Profile</a></li>
                                <li><a href="">Setting</a></li>
                                <li><a href="">Logout</a></li>
                            </ul>
                        </div>
                   </div>
              </div>
              <div class="content">
                  <div class="calculation-overview">
                      <div class="single-box" id="sub">
                           <p><i class="fa fa-bank"></i> Total Sub 12$</p>
                      </div>
                      <div class="single-box" id="cost">
                           <p><i class="fa fa-bar-chart-o"></i> Total Cost 10$</p>
                      </div>
                      <div class="single-box" id="meal">
                           <p><i class="fa fa-dollar"></i> Total Meal 5%</p>
                      </div>
                      <div class="single-box" id="rate">
                           <p><i class="fa fa-gratipay"></i> Meal Rate 2$</p>
                      </div>
                      <div class="single-box" id="remain">
                           <p><i class="fa fa-calculator"></i> Remaining 2$</p>
                      </div>
                  </div>
              </div>
        </div>
    </div>
 </div>

<script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
