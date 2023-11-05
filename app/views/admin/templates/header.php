<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["title"] ?></title>
    <link rel="shortcut icon" href="<?= BASEURL ?>/img/about.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="<?= BASEURL ?>/css/main.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/responsive.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <div>
                    <!-- <i class="bi bi-list text-white fs-4"></i> -->
                    <a class="navbar-brand" href="<?= BASEURL ?>/admin">Tarung Derajat</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto text-end d-flex flex-column-reverse flex-sm-column-reverse flex-md-row mt-5 mb-3 mt-sm-5 mb-sm-3 my-md-0">
                        <div class="m-0">
                            <p class="nav-link active m-0 pb-0">Regi Ridho Biyantomo</p>
                            <a href="#" class="nav-link text-danger py-0">Keluar</a>
                        </div>
                        <div class="m-0">
                            <img src="https://www.w3schools.com/bootstrap4/img_avatar3.png" class="img-fluid rounded-circle" width="50">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container-fluid d-flex my-mt-4 p-0">
            <div class="col-2 bg-body-tertiary min-vh-100 ps-3 pt-2 position-fixed border-end">
                <div class="navbar-nav">
                    <a class="nav-link" href="#"><i class="bi bi-house"></i> Dashboard</a>
                    <a class="nav-link" href="#"><i class="bi bi-building"></i> Satuan Latihan</a>
                    <a class="nav-link" href="#"><i class="bi bi-person-standing"></i> Petarung</a>
                    <a class="nav-link" href="#"><i class="bi bi-person-raised-hand"></i> Pelatih</a>
                </div>
            </div>