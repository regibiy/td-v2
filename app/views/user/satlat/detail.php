<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner half-height">
        <div class="carousel-item active">
            <img src="<?= BASEURL ?>/img/hero-bg.jpg" class="d-block w-100 object-fit-cover height-sm-100">
        </div>
        <div class="carousel-item">
            <img src="<?= BASEURL ?>/img/tarung.jpg" class="d-block w-100 object-fit-cover height-sm-100">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="mx-2">
    <div class="container my-5 border rounded shadow shadow-sm">
        <div class="row bg-info-subtle mb-2">
            <div class="col">
                <h1 class="fs-7 m-0 px-1 py-2 text-dark-emphasis">Data Satuan Latihan</h1>
            </div>
        </div>
        <div class="row text-dark-emphasis fs-7">
            <div class="col text-end">
                <p>Nama</p>
            </div>
            <div class="col-auto">
                <p>:</p>
            </div>
            <div class="col">
                <p>Satuan Latihan Putra Sejati</p>
            </div>
        </div>
        <div class="row text-dark-emphasis fs-7">
            <div class="col text-end">
                <p>Alamat</p>
            </div>
            <div class="col-auto">
                <p>:</p>
            </div>
            <div class="col">
                <p>Jalan Pangeran Natakusuma</p>
            </div>
        </div>
        <div class="row text-dark-emphasis fs-7">
            <div class="col text-end">
                <p>Kota</p>
            </div>
            <div class="col-auto">
                <p>:</p>
            </div>
            <div class="col">
                <p>Pontianak</p>
            </div>
        </div>
        <div class="row text-dark-emphasis fs-7">
            <div class="col text-end">
                <p>Kecamatan</p>
            </div>
            <div class="col-auto">
                <p>:</p>
            </div>
            <div class="col">
                <p>Kecamatan Pontianak Kota</p>
            </div>
        </div>
        <div class="row text-dark-emphasis fs-7">
            <div class="col text-end">
                <p>Desa</p>
            </div>
            <div class="col-auto">
                <p>:</p>
            </div>
            <div class="col">
                <p>Sungai Jawi</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active fs-7" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Pelatih</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fs-7" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Petarung</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4 table-responsive fs-7" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <table id="pelatih" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th class="fw-medium bg-info-subtle">Nama</th>
                        <th class="fw-medium bg-info-subtle">Jenis Kelamin</th>
                        <th class="fw-medium bg-info-subtle">Nomor Telepon</th>
                        <th class="fw-medium bg-info-subtle">Tanggal Gabung</th>
                        <th class="fw-medium bg-info-subtle">Sabuk</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>Laki-Laki</td>
                        <td>081378653211</td>
                        <td>17 Oktober 2021</td>
                        <td>Putih 1</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Laki-Laki</td>
                        <td>081378653211</td>
                        <td>17 Oktober 2021</td>
                        <td>Putih 1</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Laki-Laki</td>
                        <td>081378653211</td>
                        <td>17 Oktober 2021</td>
                        <td>Putih 1</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade p-4 table-responsive fs-7" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <table id="petarung" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th class="fw-medium bg-info-subtle">Nama</th>
                        <th class="fw-medium bg-info-subtle">Jenis Kelamin</th>
                        <th class="fw-medium bg-info-subtle">Nomor Telepon</th>
                        <th class="fw-medium bg-info-subtle">Tanggal Gabung</th>
                        <th class="fw-medium bg-info-subtle">Sabuk</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>Laki-Laki</td>
                        <td>081378653211</td>
                        <td>17 Oktober 2021</td>
                        <td>Putih 1</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Laki-Laki</td>
                        <td>081378653211</td>
                        <td>17 Oktober 2021</td>
                        <td>Putih 1</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Laki-Laki</td>
                        <td>081378653211</td>
                        <td>17 Oktober 2021</td>
                        <td>Putih 1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>