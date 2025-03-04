<?php include "_check.php" ?>

<!DOCTYPE html>
<html> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/loggin.js"></script>
    <script src="assets/js/sendData.js"></script>
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
    <div class="container-sm"> 
      <form method="POST" action="sendData.php">
        <div class="mb-3">
          <label class="form-label">Data</label>
          <input type="text" class="form-control" name="dataInput" id="dataInput" placeholder="Enter data" required>
        </div>
        <button type="submit" class="btn btn-primary">Send data to ESP</button>
      </form>
      <a href="_logout.php">Logout</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
