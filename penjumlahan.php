<!DOCTYPE html>
<html>
  <body>
    <h2>Penjumlahan Kelompok 2</h2>

    <label for="fname">Bilangan 1:</label><br />
    <input type="text" id="bil1" name="bil1" /><br />
    <label for="lname">Bilangan 2:</label><br />
    <input type="text" id="bil2" name="bil2" /><br />
    Hasil Penjumlahan = <span id="hasil"></span><br />
    <button onclick="hitung()">Hitung</button>

    <script>
      function hitung() {
        let bilangan1 = parseFloat(document.getElementById("bil1").value);
        let bilangan2 = parseFloat(document.getElementById("bil2").value);
        let hasil = bilangan1 + bilangan2;
        document.getElementById("hasil").innerHTML = hasil;
        alert(
          "Hasil penjumlahan " + bilangan1 + " + " + bilangan2 + " = " + hasil
        );
      }
    </script>
  </body>
</html>
