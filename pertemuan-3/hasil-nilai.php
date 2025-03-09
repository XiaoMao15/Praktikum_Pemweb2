<?php
if (!isset($_POST['nama'])) {
    echo '<script>alert("Isi Form Terlebih Dahulu")</script>
    <meta http-equiv="refresh" content="0; url=form-nilai.php">';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">

                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= $_POST['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><?= $_POST['nim'] ?></td>
                        </tr>
                        <tr>
                            <td>Rombel</td>
                            <td>:</td>
                            <td><?= $_POST['rombel'] ?></td>
                        </tr>
                        <tr>
                            <td>Mata Kuliah</td>
                            <td>:</td>
                            <td><?= $_POST['matkul'] ?></td>
                        </tr>
                        <tr>
                            <td>Nilai Tugas</td>
                            <td>:</td>
                            <td><?= $_POST['nilai_tugas'] ?></td>
                        </tr>
                        <tr>
                            <td>Nilai UTS</td>
                            <td>:</td>
                            <td><?= $_POST['nilai_uts'] ?></td>
                        </tr>
                        <tr>
                            <td>Nilai UAS</td>
                            <td>:</td>
                            <td><?= $_POST['nilai_uas'] ?></td>
                        </tr>
                        <tr>
                            <td>Predikat</td>
                            <td>:</td>
                            <td>
                                <?php
                                $tugas = $_POST['nilai_tugas'] * (35 / 100);
                                $uts = $_POST['nilai_uts'] * (30 / 100);
                                $uas = $_POST['nilai_uas'] * (35 / 100);
                                $total = $tugas + $uts + $uas;

                                if ($total <= 35) {
                                    $pred = "E";
                                } elseif ($total <= 55) {
                                    $pred = "D";
                                } elseif ($total <= 69) {
                                    $pred = "C";
                                } elseif ($total <= 84) {
                                    $pred = "B";
                                } elseif ($total <= 100) {
                                    $pred = "A";
                                } else {
                                    $pred = "tidak diketahui";
                                }
                                echo $pred;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td>
                                <?php
                                switch ($pred) {
                                    case 'A':
                                        echo "sangat baik";
                                        break;
                                    case 'B':
                                        echo "B aja";
                                        break;
                                    case 'C':
                                        echo "C cupu";
                                        break;
                                    case 'D':
                                        echo "D Dongo";
                                        break;
                                    case 'E':
                                        echo "E Hunter Terlemah";
                                        break;
                                    default:
                                        echo "Tidak diketahui";
                                        break;
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
