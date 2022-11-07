<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kawal power tools</title>
    <link rel="stylesheet" href="http://localhost/kawalpowertool/bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="http://localhost/kawalpowertool/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</head>
<style>
    .bgimage{
        background-image: url('http://localhost/kawalpowertool/views/front.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-size: 100% auto;
        height: 100vh;
    }
    .bgimage p{
        text-align: center;
        padding: 250px 500px;
    
        color: white;
    }
</style>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <img src="views/logo.png"alt="Avatar Logo" style="width:180px;" class="rounded-pill">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/code/public/home">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/code/public/contact">contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/code/public/about" id="about">aboust us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" id="link">anylink</a>
              </li>
            </ul>
            <form class="d-flex" action="http://localhost/code/public/login">
              <input type="submit" class="btn btn-primary" value="login">
            </form>
            
            <form class="d-flex" style="margin:0px 12px"action="http://localhost/code/public/news/create">
              <input type="submit" class="btn btn-primary" value="register">
            </form>
          </div>
        </div>
      </nav>
