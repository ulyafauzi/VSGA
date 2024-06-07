<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Data Ulasan Customer</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
        .card-custom {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1rem;
        }
        .card-header-custom {
            background-color: #28a745;
            color: white;
            border-radius: 1rem 1rem 0 0;
            font-weight: bold;
            text-align: center;
        }
        .modal-header {
            background-color: #28a745;
            color: white;
            border-radius: 1rem 1rem 0 0;
        }
        .modal-content {
            border-radius: 1rem;
        }
        .card-body-custom {
            padding: 1.5rem;
        }
    </style>
</head>
<body>
    <div>
        <?php include "nav.php"; ?>

        <div class="container content mb-5 mt-4">
            <h1 class="text-center mb-4">Review Customer</h1>
            <div class="text-center mb-4">
                <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#reviewModal">Beri Review Anda</button>
            </div>
            <?php
            include "koneksi.php";
            $ulasan = mysqli_query($koneksi, "SELECT * FROM ulasan");
            ?>
        
            <div class="row">
                <?php
                foreach ($ulasan as $key => $value) {
                    $no = $key + 1;
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-custom">
                        <div class="card-header card-header-custom">
                            Review #<?= $no ?>
                        </div>
                        <div class="card-body card-body-custom">
                            <h5 class="card-title"><?= $value['username']?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $value['email']?></h6>
                            <p class="card-text"><?= $value['ulasan']?></p>
                            <a href="tambah_ulasan.php?id_ulasan=<?= $value['id_ulasan']?>" class="btn btn-success btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="ulasan_act.php?id_ulasan=<?= $value['id_ulasan']?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                                <i class="bi bi-trash"></i> Hapus
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>

 
        <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalLabel">Beri Review Anda</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="tambah_ulasan.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="ulasan" class="form-label">Ulasan</label>
                                <textarea class="form-control" id="ulasan" name="ulasan" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
