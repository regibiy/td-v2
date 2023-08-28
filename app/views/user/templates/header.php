<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["title"] ?></title>
    <link rel="shortcut icon" href="<?= BASEURL ?>/img/about.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="<?= BASEURL ?>/css/main.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/responsive.css">
</head>

<body>
    <div class="bg-dark">
        <div class="container text-secondary">
            <p class="m-0 py-2">Daftarkan Satlat Anda</p>
        </div>
    </div>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL ?>">Tarung Derajat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon fs-6"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= $data["marker"][0] ?>" href="<?= BASEURL ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $data["marker"][1] ?>" href="<?= BASEURL ?>/satlat">Satlat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $data["marker"][2] ?>" href="<?= BASEURL ?>/pelatih">Pelatih</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $data["marker"][3] ?>" href="<?= BASEURL ?>/petarung">Petarung</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>