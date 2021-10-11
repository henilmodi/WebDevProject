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

  <title>Hotels in Ahmedabad</title>
  <style>
    .card_part {
      margin: 10px 0 10px 0;
      display: flex;
      width: 100%;
      justify-content: space-around;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
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

    .city {
      border: 1px solid rgba(156, 163, 175, 0.5);
      border-radius: 10px;
      padding: 8px;
      outline-offset: 1px;
      outline-color: rgba(156, 163, 175, 0.7);
    }

    a{
      text-decoration: none;
    }

    .btn-2 {
      color: white;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <div>
        <a class="navbar-brand" href="index.php">
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
        <button type="button" class="btn btn-primary"><a href="update.php" class="btn-2">Update</a></button>
        <button type="button" class="btn btn-primary"><a
            href="http://localhost/WDproject1/assets/html/" class="btn-2">Logout</a></button>
      </div>
    </div>
  </nav>

  <div class="card_part">
    <div class="card" style="width: 25%;">
      <img class="card-img-top" src="../img/hnovotel.jpg" alt="Hotel Novotel">
      <div class="card-body">
        <h5 class="card-title">Hotel Novotel</h5>
        <p class="card-text">Novotel Ahmedabad – a 5 star contemporary business hotel located in the central business
          district of Ahmedabad on S G Highway with easy access to Gandhinagar, Sanand, Changodar industrial area and 15
          minute drive to the city centre.</p>
        <a href="#" class="btn btn-primary">Book Now!</a>
      </div>
    </div>

    <div class="card" style="width: 25%;">
      <img class="card-img-top" src="../img/hahm2.jpg" alt="Hotel Novotel">
      <div class="card-body">
        <h5 class="card-title"> LE Chalet</h5>
        <p class="card-text">Located in Ahmedabad, 7 km from Sardar Patel Stadium, LE Chalet - Serviced Luxury
          Condominium provides accommodation with a restaurant, free WiFi, a 24-hour front desk, and room service.</p>
        <a href="#" class="btn btn-primary">Book Now!</a>
      </div>
    </div>

    <div class="card" style="width: 25%;">
      <img class="card-img-top" src="../img/hahm4.jpg" alt="Hotel Novotel">
      <div class="card-body">
        <h5 class="card-title">Crowne Plaza</h5>
        <p class="card-text">All accommodations at the Crowne Plaza Ahmedabad features a flat-screen TV, free Wi-Fi, a
          seating area and a minibar. The luxury marble bathroom includes a bath tub, rain shower, bathrobes and
          Biotique bath amenities.</p>
        <a href="#" class="btn btn-primary">Book Now!</a>
      </div>
    </div>

  </div>

  <div class="card_part">

    <div class="card" style="width: 25%;">
      <img class="card-img-top" src="../img/hnovotel.jpg" alt="Hotel Novotel">
      <div class="card-body">
        <h5 class="card-title">DoubleTree by Hilton</h5>
        <p class="card-text">Located in Ahmedabad, 4 km from IIM, DoubleTree by Hilton Ahmedabad provides accommodation
          with a restaurant, free private parking, a fitness centre and a shared lounge. Featuring family rooms, this
          property also provides guests with a sun terrace.</p>
        <a href="#" class="btn btn-primary">Book Now!</a>
      </div>
    </div>

    <div class="card" style="width: 25%;">
      <img class="card-img-top" src="../img/hahm5.jpg" alt="Hotel Novotel">
      <div class="card-body">
        <h5 class="card-title">Renaissance Hotel</h5>
        <p class="card-text">Renaissance Ahmedabad a 5-star luxury hotel is located in the commercial district of S.G
          .highway in Ahmedabad. Sardar Vallabhbhai Patel International Airport is 29 km away.
        </p>
        <a href="#" class="btn btn-primary">Book Now!</a>
      </div>
    </div>

    <div class="card" style="width: 25%;">
      <img class="card-img-top" src="../img/hahm6.jpg" alt="Hotel Novotel">
      <div class="card-body">
        <h5 class="card-title">Courtyard</h5>
        <p class="card-text">Situated in Ahmedabad, 3 km from IIM, Courtyard By Marriott Ahmedabad Sindhu Bhavan Road
          features views of the city.</p>
        <a href="#" class="btn btn-primary">Book Now!</a>
      </div>
    </div>
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

  <!-- <script type="text/javascript">
    'use strict';
    document.querySelector('.logout').addEventListener('click', function () {
      document
    })
  </script> -->
</body>

</html>