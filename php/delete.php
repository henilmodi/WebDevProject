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

    <title>Deleting the Data</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>


    <h2>Delete</h2><hr>
    <form action="deleteconfig.php" method="POST" class="row g-3 needs-validation center row1" novalidate>

        <div class="col-md-10">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-md-20">
            <button class="btn btn-danger col-md-10" type="submit">Delete</button>
        </div>
