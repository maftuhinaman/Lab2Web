<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PHP Dasar</title>
</head>

<body>
  <h2>Pertanyaan dan Tugas</h2>
  <form method="post" style="align-items: center;">
    <div style="display: flex; flex-direction: column; gap: 5px; max-width: 200px; margin-bottom: 10px;">
      <label for="nama">Nama :</label>
      <input type="text" name="nama" required>
    </div>
    <div style="display: flex; flex-direction: column; gap: 5px; max-width: 200px; margin-bottom: 10px;">
      <label for="tanggal_lahir">Tanggal lahir :</label>
      <input type="date" name="tanggal_lahir" required>
    </div>
    <div style="display: flex; flex-direction: column; gap: 5px; max-width: 200px; margin-bottom: 10px;">
      <label for="pekerjaan">Pekerjaan :</label>
      <select name="pekerjaan">
        <option value="">- PILIH -</option>
        <option value="mahasiswa">Mahasiswa</option>
        <option value="dosen">Dosen</option>
        <option value="staf">Staf</option>
        <option value="teknisi">Teknisi</option>
        <option value="karyawan">Karyawan</option>
      </select>
    </div>
    <button type="submit" name="kirim">Submit</button>
  </form>
  <?php
  if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];
    $tanggal_sekarang = date('Y-m-d');
    
    switch ($pekerjaan) {
      case 'dosen':
        $gaji = 'Rp6.000.000';
        break;
      case 'staf':
        $gaji = 'Rp5.000.000';
        break;
      case 'teknisi':
        $gaji = 'Rp4.500.000';
        break;
      case 'karyawan':
        $gaji = 'Rp4.000.000';
        break;
      default:
        $gaji = 'Rp0';
        break;
    }
    function hitungUsia($tanggal_lahir, $tanggal_sekarang) {
      $tgl_lahir = new DateTime($tanggal_lahir);
      $tgl_sekarang = new DateTime($tanggal_sekarang);
      $perbedaan = $tgl_lahir->diff($tgl_sekarang);
      return $perbedaan->y;
    }
    ?>
    <div>
      <h3>Hasil Inputan</h3>
       <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=$nama?></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td>:</td>
            <td><?=hitungUsia($tanggal_lahir, $tanggal_sekarang)?> tahun</td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?=$gaji?></td>
        </tr>
    </table>
    </div>
    <?php
  }
  ?>
</body>

</html>