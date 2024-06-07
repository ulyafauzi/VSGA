<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card-img-top {
            object-fit: cover;
            height: 250px;
            width: 100%;
        }
        .card-body {
            text-align: center;
        }
        .card {
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
    <title>Custom by Kisik Street Rascals</title>
</head>
<body class="bg-light pt-5">



  <?php
  include "nav.php";
  ?>


<div class="container mt-5">
    <div class="col-12">
        <h1 class="text-center mb-5 mt-4 text-uppercase fw-bold text-dark">Custom By Kisik Street Rascals</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col mb-4">
            <div class="card h-100 shadow-sm">
                <img src="gallery/modif1.jpg" class="card-img-top" alt="Cafe racer">
                <div class="card-body">
                    <p class="card-text">Cafe racer</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100 shadow-sm">
                <img src="gallery/modif2.jpg" class="card-img-top" alt="Cafe racer">
                <div class="card-body">
                    <p class="card-text">Tracker</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100 shadow-sm">
                <img src="gallery/modif3.jpg" class="card-img-top" alt="Cafe racer">
                <div class="card-body">
                    <p class="card-text">Scrambler</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100 shadow-sm">
                <img src="gallery/modif4.jpg" class="card-img-top" alt="Cafe racer">
                <div class="card-body">
                    <p class="card-text">Chooper</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100 shadow-sm">
                <img src="gallery/modif5.jpg" class="card-img-top" alt="Cafe racer">
                <div class="card-body">
                    <p class="card-text">Bobber</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100 shadow-sm">
                <img src="gallery/modif1.jpg" class="card-img-top" alt="Cafe racer">
                <div class="card-body">
                    <p class="card-text">Cafe racer</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
