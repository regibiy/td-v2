const data = {
  labels: ["Laki-Laki", "Perempuan"],
  datasets: [
    {
      label: ["Pelatih"],
      data: [65, 59],
      backgroundColor: ["rgba(255, 99, 132, 0.2)"],
      borderColor: ["rgb(255, 99, 132)"],
      borderWidth: 1,
    },
    {
      label: ["Petarung"],
      data: [35, 29],
      backgroundColor: ["rgba(201, 203, 207, 0.2)"],
      borderColor: ["rgb(201, 203, 207)"],
      borderWidth: 1,
    },
  ],
};

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

export { data, languageConfig };
