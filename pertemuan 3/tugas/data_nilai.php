<?php
    include_once 'header.php';
?>
<div class="container">
  <h2 align="center">Data Mahasiswa</h2>
  <table class="table" border=3 width=100% align=”center”>
      <thead>
          <tr>
              <th >No</th>
              <th >Nama Lengkap</th>
              <th >Mata Kuliah</th>
              <th >UTS</th>
              <th >UAS</th>
              <th >Tugas</th>
              <th >Rerata</th>
              <th >Grade</th>
              <th >Predikat</th>
              <th >Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Cintantya</td>
              <td>Bahasa Inggris</td>
              <td>90</td>
              <td>87</td>
              <td>89</td>
              <td>92</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Cintan</td>
              <td>Basis Data</td>
              <td>80</td>
              <td>88</td>
              <td>85</td>
              <td>80</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
     

          require_once 'libfungsi.php';
            $no = 3;
            $nama = $_POST['nama_lengkap'];
            $matkul = $_POST['matkul'];
            $uts = $_POST['nilai_uts'];
            $uas = $_POST['nilai_uas'];
            $tugas = $_POST['nilai_tugas'];
            $dt = dataNilai($uts, $uas, $tugas);
            $grade = grade($dt);
            $predikat = predikat($dt);
            $kelulusan = kelulusan($dt);

            echo '<td>' . $no;
            echo '<td>' . $nama;
            echo '<td>' . $matkul;
            echo '<td>' . $uts;
            echo '<td>' . $uas;
            echo '<td>' . $tugas;
            echo '<td>' . $dt;
            echo '<td>' . $grade;
            echo '<td>' . $predikat;
            echo '<td>' . $kelulusan;
          ?>
      </tbody>
  </table>
</div>
<?php
    include_once 'footer.php';
?>