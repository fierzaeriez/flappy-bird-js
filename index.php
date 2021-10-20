<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <title>Flappy Bird</title>
    <style>
        body{
            
            background-image: url("assets/img/bg.jpg");
            background-repeat: no-repeat;
            background-size: auto;
            background-position: center;
            background-attachment: grey;
            background-color: grey;
            background-blend-mode: multiply;
        }
        .tombol{
            width: 245px;
            height: 50px;
            margin-top: 30px; 
            border-radius: 20px;
            color: white;
            padding-top: 12px;
            border-color: lightgreen;
        }
        .logo{
            width: 95%;
        }
        .footer{
            color: white;
        }
        @media (min-width: 992px) {
            body{
                overflow-x: hidden;
                background-image: url("assets/img/bg.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-color: grey;
                background-blend-mode: multiply;
            }
            .tombol{
                width: 245px;
                height: 50px;
                margin-top: 25px; 
                border-radius: 20px;
                color: white;
                padding-top: 12px;
                border-color: lightgreen;
            }
            .logo{
                width: 50%;
            }
            .footer{
                color: white;
            }
        }
    </style>
  </head>
  <body>
    <br><br>
    <div class="container-fluid">
    <center>
        <img class="logo" src="assets/img/judul.png"></br>
        <a href="game.php" class="tombol btn btn-outline-success"><b><i class="bi bi-play-circle-fill"></i> Play Now</b></a>
        <br><br>
        <p class="footer"><b>Design & Developed By Fierza <br> Copyright&copy;2021</b></p>
    </center>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>