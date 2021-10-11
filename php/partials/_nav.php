<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Sign Up/Register</title>

  <style>

*{
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
        <a class="navbar-brand" href="#">
          <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
            viewBox="0 0 24 24" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke:currentColor;">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg> -->
        </a>
      </div>

      <div class="btn">
      <label for="options">
            <input type="text" list="cities" name="cities_options" id="options" placeholder="Search" class="city ">
            <datalist id="cities">
              <option value="Ahmedabad">Ahmedabad</option>
              <option value="Anand">Anand</option>
              <option value="Surat">Surat</option>
              <option value="Vadodara">Vadodara</option>
              <option value="Rajkot">Rajkot</option>
              <option value="Gandhinagar">Gandhinagar</option>
            </datalist>
          </label>
        <button type="button" class="btn btn-outline-primary">
        <a href="ahmedabad.php">Search</a></button>
        <button type="button" class="btn btn-primary btn-1"><a href="signin.php" class="btn-1">Sign in</a></button>
        <button type="button" class="btn btn-primary"><a href="signup.php" class="btn-2">Sign up</a></button>
      </div>
    </div>
  </nav>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>