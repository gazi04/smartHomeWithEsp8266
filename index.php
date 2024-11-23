<?php //include "_check.php"; ?>

<!DOCTYPE html>
<html> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/loggin.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    </style>
  </head>
  <body> 
    <!-- <form id="loginForm" method="post">  -->
    <!--   <input id="username" type="text" placeholder="Username"/> -->
    <!--   <input id="password" type="password" placeholder="Password"/> -->
    <!--   <button type="submit" id="logIn">Log in</button> -->
    <!-- </form> -->
    <div class="container-sm"> 
      <form id="loginForm" method="post">
        <div class="mb-3">
          <label class="form-label">Emri Perdoruesit</label>
          <input type="text" class="form-control" id="username" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Fjalekalimi</label>
          <input type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary" id="logIn">Kyqu</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
