
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

  </head>
  <style type="text/css">body{
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}

header{
  position: fixed;
  background: #E77F71;
  padding: 20px;
  width: 100%;
  height: 70px;
}

.left_area h3{
  color: #9A554B;
  margin: 0;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 900;
}

.left_area span{
  color: #F9DAD7;
}

.logout_btn{
  padding: 5px;
  background: #19B3D3;
  text-decoration: none;
  float: right;
  margin-top: -30px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  transition: 0.5s;
  transition-property: background;
}

.logout_btn:hover{
  background: #0B87A6;
}

.sidebar {
  background: #2f323a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left: 0;
  width: 250px;
  height: 100%;
  transition: 0.5s;
  transition-property: left;
}

.sidebar .profile_image{
  width: 100px;
  height: 100px;
  border-radius: 100px;
  margin-bottom: 10px;
}

.sidebar h4{
  color: #ccc;
  margin-top: 0;
  margin-bottom: 20px;
}

.sidebar a{
  color: #fff;
  display: block;
  width: 100%;
  line-height: 60px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
}

.sidebar a:hover{
  background: #E77F71;
}

.sidebar i{
  padding-right: 10px;
}

label #sidebar_btn{
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left: 230px;
  font-size: 20px;
  margin: 5px 0;
  transition: 0.5s;
  transition-property: color;
}

label #sidebar_btn:hover{
  color: #19B3D3;
}

#check:checked ~ .sidebar{
  left: -190px;
}

#check:checked ~ .sidebar a span{
  display: none;
}

#check:checked ~ .sidebar a{
  font-size: 20px;
  margin-left: 170px;
  width: 80px;
}

.content{
  margin-left: 250px;
  background: url(background.png) no-repeat;
  background-position: center;
  background-size: cover;
  height: 100vh;
  transition: 0.5s;
}

#check:checked ~ .content{
  margin-left: 60px;
}

#check{
  display: none;
}</style>

  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>POS <span>Admin</span></h3>
      </div>
      
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="..images/admin.jpg" class="profile_image" alt="">
        <h4 class="fas fa-user-shield"></h4>
      </center>
      <a href="../user/profile.php"><i class="fas fa-user-alt"></i><span>My Profile</span></a>
      <a href="../user/user.php"><i class="fas fa-users-cog"></i><span>User List</span></a>
      <a href="../user/add_user.php"><i class="fas fa-plus-circle"></i><span>Add User</span></a>

      <a href="../main.php"><i class="fas fa-arrow-circle-left"></i><span>Back</span></a>
    </div>
    <!--sidebar end-->

    <div class="content"></div>

  </body>
</html>











<!--<div class="header bg-dark">
  <img class="img-fluid w-100 mt-2 ml-1" src="../images/12.png" >
</div>

<div class="sidebar">

  <button><h3><i class="fas fa-tachometer-alt"></i> <font color="white">Dashboard</font></h3></button>
  <button id="sidebar_button" onclick="window.location.href='../user/profile.php'"><i class="fas fa-user-circle"></i> Profile</button>
  <button id="sidebar_button" onclick="window.location.href='../user/user.php'"><i class="fas fa-list-ul"></i> User List</button>
  <button id="sidebar_button" onclick="window.location.href='../user/add_user.php'"><i class="fas fa-user-plus"></i> Add User</button>
  <button id="sidebar_button" type="button" data-toggle="popover" title="User Management" data-content="Here you can create, update, delete and view user profiles." data-placement="bottom"><i class="fas fa-question"></i> Help</button>
  <div class="fixed-bottom">
    <button class="btn m-2 p-2" id="sidebar_button" onclick="window.location.href='../main.php'"><i class="fas fa-arrow-alt-circle-left"></i> Back</button>
  </div>
</div>

--->



