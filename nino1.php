<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penilaian Kelulusan</title>

    <!-- wahyu X PPL 2-->

    <style>
      body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #000000;
      }

      .container {
        background-color: #7a7777;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 300px;
      }

      input[type="number"] {
        width: 85%;
        padding: 8px;
        margin-top: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
      }

      button {
        padding: 10px 20px;
        background-color: #5d685c;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      button:hover {
        background-color: #505a51;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Penilaian Kelulusan</h2>
      <label for="nilai">Nilai:</label>
      <input
        type="number"
        id="nilai"
        placeholder="Masukkan nilai"
      /><br /><br />

      <label for="absen">Jumlah Ketidakhadiran:</label>
      <input
        type="number"
        id="absen"
        placeholder="Masukkan jumlah ketidakhadiran"
      /><br /><br />

      <button onclick="cekKelulusan()">Cek Kelulusan</button>
    </div>

    <script>
      function cekKelulusan() {
        const nilai = parseInt(document.getElementById("nilai").value);
        const absen = parseInt(document.getElementById("absen").value);

        if (nilai < 75 && absen > 5) {
          alert("Anda tidak lulus");
        } else {
          alert("Anda Lulus");
        }
      }
    </script>
  </body>
</html>
