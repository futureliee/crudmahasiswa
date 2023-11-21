<!DOCTYPE html>
<html>
<head>
  <title>Library</title>
</head>
<body>

  <script>
    function BukuPerpustakaan() {
      const Pinjam = 150; 
      const Tersedia = 300; 
      const Rusak = 100; 
      const TidakDikembalikan = 200; 

      const totalKes = Pinjam + Tersedia + Rusak + TidakDikembalikan;
      const totalReturnavailable = Tersedia + 75;
      const bukuRusak = Math.floor(0.2 * Rusak);
      const totalBukuAfterMin = totalKes - bukuRusak;

      console.log('Total keseluruhan buku:', totalKes);
      console.log('Total buku yang tersedia setelah pengembalian 75 buku:', totalReturnavailable);
      console.log('Total buku keseluruhan setelah membuang 20% buku rusak:', totalBukuAfterMin);

      const resultDiv = document.createElement('div');
      resultDiv.innerHTML = `
        <p>Total keseluruhan buku: ${totalKes}</p>
        <p>Total buku yang tersedia setelah pengembalian 75 buku: ${totalReturnavailable}</p>
        <p>Total buku keseluruhan setelah membuang 20% buku rusak: ${totalBukuAfterMin}</p>
      `;
      document.body.appendChild(resultDiv);
    }

    BukuPerpustakaan();
  </script>
</body>
</html>
