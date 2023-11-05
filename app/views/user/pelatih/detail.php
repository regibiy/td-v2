<div class="mx-2">
    <div class="container my-5 border rounded shadow shadow-sm">
        <div class="row bg-info-subtle mb-2">
            <div class="col">
                <h1 class="fs-7 m-0 px-1 py-2 text-dark-emphasis">Data Pelatih</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-auto mx-auto mb-4">
                <img src="https://www.w3schools.com/bootstrap4/img_avatar3.png" class="img-fluid" width="250">
            </div>
            <div class="col">
                <div class="row text-dark-emphasis fs-7">
                    <div class="col-4 text-end">
                        <p>Nama</p>
                    </div>
                    <div class="col-auto">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <p>Arkadius Riyandi Yansen</p>
                    </div>
                </div>
                <div class="row text-dark-emphasis fs-7">
                    <div class="col-4 text-end">
                        <p>Jenis Kelamin</p>
                    </div>
                    <div class="col-auto">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <p>laki-Laki</p>
                    </div>
                </div>
                <div class="row text-dark-emphasis fs-7">
                    <div class="col-4 text-end">
                        <p>Tempat Lahir</p>
                    </div>
                    <div class="col-auto">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <p>Pontianak</p>
                    </div>
                </div>
                <div class="row text-dark-emphasis fs-7">
                    <div class="col-4 text-end">
                        <p>Tanggal Lahir</p>
                    </div>
                    <div class="col-auto">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <p>17 Oktober 2001</p>
                    </div>
                </div>
                <div class="row text-dark-emphasis fs-7">
                    <div class="col-4 text-end">
                        <p>Alamat</p>
                    </div>
                    <div class="col-auto">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <p>Jalan Kemakmuran Gang Kemakmuran 7 Nomor Rumah 22A</p>
                    </div>
                </div>
                <div class="row text-dark-emphasis fs-7">
                    <div class="col-4 text-end">
                        <p>No Telepon</p>
                    </div>
                    <div class="col-auto">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <p>081387635261</p>
                    </div>
                </div>
                <div class="row text-dark-emphasis fs-7">
                    <div class="col-4 text-end">
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
                    <div class="col-4 text-end">
                        <p>Kecamatan</p>
                    </div>
                    <div class="col-auto">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <p>Pontianak Kota</p>
                    </div>
                </div>
                <div class="row text-dark-emphasis fs-7">
                    <div class="col-4 text-end">
                        <p>Desa</p>
                    </div>
                    <div class="col-auto">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <p>Sungai Jawi</p>
                    </div>
                </div>
                <div class="row text-dark-emphasis fs-7">
                    <div class="col-4 text-end">
                        <p>Satuan Latihan</p>
                    </div>
                    <div class="col-auto">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <p>Tarung Derajat Putra Sejati</p>
                    </div>
                </div>
                <div class="row text-dark-emphasis fs-7">
                    <div class="col-4 text-end">
                        <p>Tanggal Gabung</p>
                    </div>
                    <div class="col-auto">
                        <p>:</p>
                    </div>
                    <div class="col">
                        <p>17 September 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active fs-7" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Riwayat Ujian Kenaikan Sabuk</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-4 table-responsive fs-7" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <table id="pelatih" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th class="fw-medium bg-info-subtle">Tanggal</th>
                        <th class="fw-medium bg-info-subtle">Nama Peserta ujian</th>
                        <th class="fw-medium bg-info-subtle">Satuan Latihan</th>
                        <th class="fw-medium bg-info-subtle">Nama Penguji</th>
                        <th class="fw-medium bg-info-subtle">Dari Tingkat</th>
                        <th class="fw-medium bg-info-subtle">Ke Tingkat</th>
                        <th class="fw-medium bg-info-subtle">Sertifikat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>17 Oktober 2023</td>
                        <td>Arkadius Riyandi Yansen</td>
                        <td>Tarung Derajat Putra Sejati</td>
                        <td>Dendi Maharana</td>
                        <td>Putih 1</td>
                        <td>Putih 2</td>
                        <td><button type="button" class="btn btn-sm fs-7 btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#sertificate">Lihat Sertifikat</button>
                            <div class="modal fade" id="sertificate" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-7">Sertifikat Arkadius Riyandi Yansen</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body fs-7">
                                            <p class="text-center">Dari Tingkat Putih 1 ke Tingkat Putih 2</p>
                                            <img src="<?= BASEURL ?>/img/hero-bg.jpg" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>