<?php include_once 'header.php' ?>
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
            <td>1</td>
            <td>Fakhirul</td>
            <td>Statistika dan Probabilitas</td>
            <td>89</td>
            <td>95</td>
            <td>80</td>
            <td>87.95</td>
            <td>A</td>
            <td>Sangat Memuaskan</td>
            <td>Lulus</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Rul</td>
            <td>Statistika dan Probabilitas</td>
            <td>78</td>
            <td>81</td>
            <td>80</td>
            <td>79.75</td>
            <td>B</td>
            <td>Memuaskan</td>
            <td>Lulus</td>
          </tr>
          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
                    require_once 'libfungsi.php';
                    if(isset($_POST['submit'])){
                        $nama_lengkap = $_POST ['nama_lengkap'];
                        $matkul = $_POST['matkul'];
                        $nilai_uts = $_POST['nilai_uts'];
                        $nilai_uas = $_POST ['nilai_uas'];
                        $nilai_tugas = $_POST ['nilai_tugas'];
                        $total_nilai = $nilai_uts + $nilai_uas + $nilai_tugas;
		                $rerata = $total_nilai / 3;
                        $kelulusan = kelulusan($rerata);
                        $grade = grade($rerata);
                        $predikat = predikat($grade);
        ?>
            <div class="mt-4">
                <td> <?= 3 ?> </td>
                <td> <?= $nama_lengkap ?> </td>
                <td> <?= $matkul ?> </td>
                <td> <?= $nilai_uts ?> </td>
                <td> <?= $nilai_uas ?> </td>
                <td> <?= $nilai_tugas ?> </td>
                <td> <?= number_format ($rerata, 2) ?> </td>
                <td> <?= $grade ?> </td>
                <td> <?= $predikat ?> </td>
                <td> <?= $kelulusan ?> </td>
            </div>
                <?php
                }
                ?>
      </tbody>
  </table>
</div>
<?php include_once 'footer.php' ?>