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

    <title>Hotels in Anand</title>
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
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24"
                        data-darkreader-inline-stroke="" style="--darkreader-inline-stroke:currentColor;">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                </a>
            </div>

            <div class="btn">
                <label for="options">
                    <input type="text" list="cities" name="cities_options" id="options" placeholder="Search"
                        class="city ">
                    <datalist id="cities">
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Anand">Anand</option>
                        <option value="Surat">Surat</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Gandhinagar">Gandhinagar</option>
                    </datalist>
                </label>
                <button type="button" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-primary">Logout</button>
            </div>
        </div>
    </nav>

    <div class="card_part">
        <div class="card" style="width: 25%;">
            <img class="card-img-top" src="../img/hh.webp" alt="Hotel Novotel">
            <div class="card-body">
                <h5 class="card-title">Hotel H</h5>
                <p class="card-text">Hotel H offers guests an array of room amenities including air conditioning, and
                    getting online is possible, as free wifi is available.The small hotel offers room service, to make
                    your visit even more pleasant. The property also features a fitness center and free breakfast.
                    Guests arriving by vehicle have access to free
                    parking.</p>
                <a href="#" class="btn btn-primary">Book Now!</a>
            </div>
        </div>

        <div class="card" style="width: 25%;">
            <img class="card-img-top" src="../img/hand2.jpg" alt="Hotel Novotel">
            <div class="card-body">
                <h5 class="card-title">Madhubhan Resort</h5>
                <p class="card-text">Madhubhan Resort & Spa is a 5* Deluxe Resort and ideally located in the picturesque
                    green belt of Charotar region, in Vallabh Vidyanagar and in close proximity to Vadodara & Ahmedabad,
                    Madhubhan is a perfect destination not only for the transit, business and leisure traveler but
                    serves as an ideal MICE destination for Residential Conferences, Meetings, Seminars, Workshops.</p>
                <a href="#" class="btn btn-primary">Book Now!</a>
            </div>
        </div>

        <div class="card" style="width: 25%;">
            <img class="card-img-top" src="../img/hand3.jpg" alt="Hotel Novotel">
            <div class="card-body">
                <h5 class="card-title">Hotel Arizona Inn </h5>
                <p class="card-text">Our aim is to provide the best in both food and service. We trust you will enjoy
                    our hospitality, to the level that we would welcome any suggestions or comments that you may have in
                    order to complete your satisfaction. We welcome you to Hotel Arizona inn - Anand, where we are
                    looking forward to making you feel at your home, out of your home.</p>
                <a href="#" class="btn btn-primary">Book Now!</a>
            </div>
        </div>

    </div>

    <div class="card_part">

        <div class="card" style="width: 25%;">
            <img class="card-img-top" src="../img/hand4.jpg" alt="Hotel Novotel">
            <div class="card-body">
                <h5 class="card-title">Humming Bird Hotel & Banquet</h5>
                <p class="card-text">Hummingbird Hotel & Banquet is brand new upscale 4-star Hotel and Banquet in
                    Vallabh Vidyanagar. A place where you'll feel instantly at home and where service comes first. They
                    possess a winning combination of majestic architecture, rich classical furnishing, unique function
                    space & venerable dining establishments.</p>
                <a href="#" class="btn btn-primary">Book Now!</a>
            </div>
        </div>

        <div class="card" style="width: 25%;">
            <img class="card-img-top" src="../img/hand5.jpg" alt="Hotel Novotel">
            <div class="card-body">
                <h5 class="card-title">Hotel Surabhi Regency</h5>
                <p class="card-text">Hotel Surabhi Regency breathes in the heart of Anand city. It is the Business and
                    Leisure Travelers' premier choice for its comfort, affordability and convenience as it is just 2 km
                    away from National Highway 8 and 1 km away from Anand Railway station.
                </p>
                <a href="#" class="btn btn-primary">Book Now!</a>
            </div>
        </div>

        <div class="card" style="width: 25%;">
            <img class="card-img-top" src="../img/hand6.jpg" alt="Hotel Novotel">
            <div class="card-body">
                <h5 class="card-title">Hotel Opulence</h5>
                <p class="card-text">Situated in Anand, 3 km from Anand Railway Station, Courtyard By Marriott Ahmedabad
                    Sindhu Bhavan
                    Road
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

</body>

</html>