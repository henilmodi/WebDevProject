<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" -->
  <!-- integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <title>Hotel Reservation System | Best place to find hotels</title>
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
  </style>
</head>

<body>
  <!-- NAVIGATION SECTION -->
  <header class="text-gray-400 bg-transparent body-font">
    <nav class="nav_main">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center justify-between">
        <a class="flex title-font font-medium items-center text-black mb-4 md:mb-0">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
            viewBox="0 0 24 24" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke:currentColor;">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl">Hotel Reservation Portal</span>
        </a>
        <div class="btn">
          <label for="options">
            <input type="text" list="cities" name="cities_options" id="options" placeholder="Search" class="city">
            <datalist id="cities">
              <option value="Ahmedabad">Ahmedabad</option>
              <option value="Anand">Anand</option>
              <option value="Surat">Surat</option>
              <option value="Vadodara">Vadodara</option>
              <option value="Rajkot">Rajkot</option>
              <option value="Gandhinagar">Gandhinagar</option>
            </datalist>
          </label>
          <button
            class="inline-flex text-blue-500 items-center border-0 py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 h-10"><a
              href="../php/signin.php">Sign in</a>
          </button>

          <button
            class="inline-flex text-white items-center bg-blue-500 border-0 py-1 px-3 focus:outline-none rounded text-base mt-4 md:mt-0 h-10"><a
              href="../php/signup.php">Sign up</a>
          </button>
        </div>
      </div>
    </nav>
  </header>


  <!-- MAIN SECTION -->
  <section class="text-gray-400 bg-gray-50 body-font">
    <div class="container mx-auto flex px-5 py-40 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 mb-10">
        <img class="object-cover object-center rounded" alt="hero" src="../img/main-img1.png">
      </div>
      <div
        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-5xl text-5xl mb-5 font-large text-black">Gujarat's most trusted
          <br class="hidden lg:inline-block"><strong><span class="text-blue-600">
              <span>Hotel Finder</span></strong>
        </h1>
        <p class="mb-8 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, nemo
          velit! Reprehenderit, quis. Sit dolorum et ducimus itaque quam nesciunt autem fuga libero
          dignissimos perferendis veritatis blanditiis iure, dolore nisi!</p>
        <div class="flex justify-center">
          <button
            class="inline-flex text-white bg-blue-600 border-0 py-2 px-6 focus:outline-none hover:bg-blue-700 rounded text-lg w-auto">
            <a href="#cities">Explore</a>
          </button>
        </div>
      </div>
    </div>
  </section>


  <!-- CITIES SECTION -->
  <section class="text-gray-600 body-font" id="cities">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="../img/ahmedabadimg.jpg"
              alt="ahmedabad">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">TOURISM</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Ahmedabad | Manchester of
                India</h1>
              <p class="leading-relaxed mb-3">Ahmedabad, also known as Amdavad, is India's first World
                Heritage City and is located on the banks of the River Sabarmati in the state of
                Gujarat. It is known to be one of the most modern cities in India.</p>
              <div class="flex items-center flex-wrap ">
                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="ahmedabad.php">Find Hotels
                  in AMD
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="../img/Anandcity.jpg" alt="anand">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">TOURISM</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Anand | Milk City</h1>
              <p class="leading-relaxed mb-3">Anand is also called “Charotar” as it's the home of goodly
                land, a tract of the most fertile and well tilled soil. Even the dialect spoken by the
                people inhabiting here is called “Charotari”.
              </p>
              <div class="flex items-center flex-wrap">
                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="anand.php">Find Hotels
                  in ANND
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="../img/suratimg.jpg" alt="blog">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">TOURISM</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Surat | Diamond City</h1>
              <p class="leading-relaxed mb-3">Surat is one of the cleanest city of India and is also known
                by several other names like "THE SILK CITY", "THE DIAMOND CITY", "THE GREEN CITY", etc.
                It has the most vibrant present and an equally varied heritage of the past.</p>
              <div class="flex items-center flex-wrap ">
                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="ahmedabad.php">Find Hotels
                  in ST
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- FOOTER SECTION -->
  <footer class="text-gray-600 body-font bg-gray-50">
    <div
      class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
            viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl">Hotel Reservation Portal</span>
        </a>
        <p class="mt-2 text-sm text-gray-500">Gujarat's most trusted HOTEL FINDER</p>
      </div>
      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3"><span
              style="text-transform: uppercase;">Cities</span></h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Ahmedabad</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Surat</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Vadodara</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Anand</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3"><span
              style="text-transform: uppercase;">5-Star Hostels</span></h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Lords Plaza</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">TGB</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Novotel</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">The H Hotel</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">POLICIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CONTACT & SUPPORT</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
    <div class="bg-gray-100">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Hotel Reservation Portal — Made in India by
          <a href="https://www.linkedin.com/in/henilmodi/" rel="noopener noreferrer" class="text-gray-600 ml-1"
            target="_blank">Henil Modi</a> and
          <a href="linkedin.com/in/vinay-dashlaniya-4a21321b7" rel="noopener noreferrer" class="text-gray-600 ml-1"
            target="_blank">Vinay Dashlaniya</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
              </path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>