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
                  <div class="filtering-search">
                        <form>
                             <div class="field-name">
                                  <select>
                                       <option value="Name">Name</option>
                                       <option value="Email">E-mail</option>
                                       <option value="Phone">Phone</option>
                                  </select>
                             </div>
                             <div class="input-item">
                                  <input type="text" name="item" placeholder="search...."/>
                             </div>
                        </form>
                  </div>
                   <div class="item-list">
                         <table>
                               <thead>
                                     <th>Sl</th>
                                     <th>Name</th>
                                     <th>E-mail</th>
                                     <th>Phone</th>
                                     <th>Action</th>
                               </thead>
                               <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Jhon Doe</td>
                                        <td>jhondoe@gmail.com</td>
                                        <td>+880178899887</td>
                                        <td>
                                             <a href="#"><i class="fa fa-edit"></i></a>
                                             <a href="#"><i class="fa fa-eye"></i></a>
                                             <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Jhon Doe</td>
                                        <td>jhondoe@gmail.com</td>
                                        <td>+880178899887</td>
                                        <td>
                                             <a href="#"><i class="fa fa-edit"></i></a>
                                             <a href="#"><i class="fa fa-eye"></i></a>
                                             <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Jhon Doe</td>
                                        <td>jhondoe@gmail.com</td>
                                        <td>+880178899887</td>
                                        <td>
                                             <a href="#"><i class="fa fa-edit"></i></a>
                                             <a href="#"><i class="fa fa-eye"></i></a>
                                             <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Jhon Doe</td>
                                        <td>jhondoe@gmail.com</td>
                                        <td>+880178899887</td>
                                        <td>
                                             <a href="#"><i class="fa fa-edit"></i></a>
                                             <a href="#"><i class="fa fa-eye"></i></a>
                                             <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Jhon Doe</td>
                                        <td>jhondoe@gmail.com</td>
                                        <td>+880178899887</td>
                                        <td>
                                             <a href="#"><i class="fa fa-edit"></i></a>
                                             <a href="#"><i class="fa fa-eye"></i></a>
                                             <a href="#"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                               </tbody>
                         </table>
                   </div>
                   <div class="pagination">
                         <span>Prev</span>
                         <span>1</span>
                         <span>2</span>
                         <span>3</span>
                         <span>4</span>
                         <span>5</span>
                         <span>Next</span>
                   </div>
              </div>
        </div>
    </div>
 </div>

<script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
