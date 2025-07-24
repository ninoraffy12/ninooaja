<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hak Pilih</title>

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
        background-color: #585258;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 300px;
      }

      input[type="number"], 
      select {
        width: 90%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 8px;
      }

      button {
        padding: 10px 20px;
        background-color: #303031;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
      }

      button:hover {
        background-color: #c3c8ca;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Cek Hak Pilih</h2>
      <label for="umur">Umur:</label>
      <input type="number" id="umur" placeholder="Masukkan umur" /><br /><br />

      <label for="status">Status:</label>
      <select id="status">
        <option value="belum">Belum Menikah</option>
        <option value="menikah">Menikah</option></select
      ><br /><br />

      <button onclick="cekHakPilih()">Cek Hak Pilih</button>
    </div>

    <script>
      function cekHakPilih() {
        const umur = parseInt(document.getElementById("umur").value);
        const status = document.getElementById("status").value;

        if (umur > 17 || status === "menikah") {
          alert("Anda memiliki Hak Pilih");
        } else {
          alert("Anda tidak Memiliki Hak Pilih");
        }
      }
    </script>
  </body>
</html>
