<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Welcome</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .nav_main {
      position: fixed;
      background-color: #fff;
      /* z-index: 100; */
      width: 100%;
      display: flex;
      justify-content: space-between;
      display: block;
    }

    /* nav {
      background-color: white;
      width: 100%;
      position: fixed;
      display: flex;
      justify-content: space-between;
    } */

    html {
      scroll-behavior: smooth;
    }

    .footer-sub {
      display: flex;
      justify-content: space-between;
    }

    .city {
      border: 1px solid rgba(156, 163, 175, 0.5);
      border-radius: 10px;
      padding: 8px;
      outline-offset: 1px;
      outline-color: rgba(156, 163, 175, 0.7);
    }


    .container-fluid {
      display: flex;
      justify-content: space-between;
    }

    a {
      text-decoration: none;
    }

    .btn-1 {
      color: #fff;
    }

    .btn-2 {
      color: white;
    }

    a{
      text-decoration: none;
    }

    .city {
      border: 1px solid rgba(156, 163, 175, 0.5);
      border-radius: 10px;
      padding: 8px;
      outline-offset: 1px;
      outline-color: rgba(156, 163, 175, 0.7);
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <div>
        <a class="navbar-brand" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
            viewBox="0 0 24 24" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke:currentColor;">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
        </a>
      </div>

      
      <div class="btn">
        <label for="options">
          <input type="text" list="cities" name="cities_options" id="options" placeholder="Search" class="city ">
          <datalist id="cities">
            <option value="Ahmedabad">Ahmedabad</a></option>
            <option value="Anand">Anand</option>
            <option value="Surat">Surat</option>
            <option value="Vadodara">Vadodara</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Gandhinagar">Gandhinagar</option>
          </datalist>
        </label>
        <button type="button" class="btn btn-outline-primary">
        <a href="ahmedabad.php">Search</a></button>
        <button type="button" class="btn btn-primary"><a class="btn-2" href="update.php">Update</a></button>
        <button type="button" class="btn btn-primary btn-2"><a class="btn-2" href="index.php">Logout</a></button>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../img/hnovotel.jpg" alt="First slide" style="height: 90vh">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../img/hh.webp" alt="Second slide" style="height: 90vh">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../img/tgb1.jpg" alt="Third slide" style="height: 90vh">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

    <script type="text/javascript">
       document.querySelector('.ahm').addEventListener('click', function({
         <?php
           header("location: ahmedabad.php");
         ?>
       }));
    </script>
</body>

</html>