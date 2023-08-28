let languageConfig = {
  emptyTable: "Tidak ada data yang tersedia pada tabel ini",
  info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
  infoEmpty: "Menampilkan 0 sampai 0 dari 0 entri",
  infoFiltered: "(disaring dari _MAX_ entri keseluruhan)",
  lengthMenu: "Tampilkan _MENU_ entri",
  loadingRecords: "Sedang memuat...",
  processing: "Sedang memproses...",
  search: "Cari:",
  zeroRecords: "Tidak ditemukan data yang sesuai",
  paginate: {
    first: "<<",
    last: ">>",
    next: ">",
    previous: "<",
  },
};

$("#pelatih").DataTable({
  language: languageConfig,
});

$("#petarung").DataTable({
  language: languageConfig,
});
