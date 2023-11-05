import { data, languageConfig } from "./utils.js";

$("#pelatih").DataTable({
  language: languageConfig,
});

$("#petarung").DataTable({
  language: languageConfig,
});

const ctx = document.getElementById("myChart");

new Chart(ctx, {
  type: "bar",
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
