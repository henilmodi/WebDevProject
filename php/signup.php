





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/signupstyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Signup/Register</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>


    <h2>Signup/Register</h2><hr>
    <form action="config.php" method="POST" class="row g-3 needs-validation center row1" novalidate>
        <div class="col-md-5">
            <label for="FirstName" class="form-label">First name</label>
            <input type="text" class="form-control" id="FirstName" placeholder="First Name" name="FirstName" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div><br>

        <div class="col-md-5">
            <label for="LastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="LastName" placeholder="Last Name" name="LastName" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div><br>

        <div class="col-md-10">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-md-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div><br>

        <div class="col-md-5">
            <label for="CPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="CPassword" placeholder="Confirm Password" name="CPassword" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div><br>

        <div class="col-md-5">
            <label for="PhoneNo" class="form-label">Phone Number</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="PhoneNo">+91</span>
                <input type="number" class="form-control" id="PhoneNo"
                    aria-describedby="inputGroupPrepend" name="PhoneNo" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <label for="City" class="form-label">City</label>
            <input type="text" class="form-control" id="City" name="City" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary col-md-10" type="submit">Submit</button>
        </div>
    </form>
    <?php header("location: welcome.php"); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>