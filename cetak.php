<?php
session_start();
if (empty($_SESSION['nik'])) { ?>
    <script type="text/javascript">
        alert("Maaf Anda belum login");
        window.location.assign('index.php');
    </script>;
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <style>
        table {
            box-shadow: 0px 0px 5px #aaa;
            width: 100%;
        }

        /*sedikit bayangan yang soft*/
        table th {
            padding: 8px;
            font-weight: 400;
            background: #33B4E4;
            color: #fff;
            text-transform: uppercase;
        }

        table td {
            padding: 10px 5px;
            text-align: center;
        }
    </style>

    <style type="text/css">
        .left {
            text-align: left;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .justify {
            text-align: justify;
        }

        #tgl {
            text-align: right;
            padding-right: 10%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card shadow mb-4">
            <br>
            <center>
                <h2 class="text-center m-0 font-weight-bold ">
                    PEMERINTAH KABUPATEN JEMBER
                    <br>
                    DESA TEGALWANGI KEC.UMBULSARI
                </h2>
                <h4 class="text-center m-0 font-weight-bold "> jln. PB Sudirman No. 01, Kode Pos 68157</h4>
            </center>
            <hr>
            <center>
                Data perjalanan <?= $_SESSION['nama_lengkap']; ?>
                <h4 class="text-center m-0 font-weight-bold "> </h4>
            </center>
            <div class="card-body">
                <table cellspacing="0" align="center">
                    <thead class="text-center">
                        <tr>
                            <th>NO</th>

                            <th>TANGGAL</th>
                            <th>JAM</th>
                            <th> lOKASI</th>
                            <th>SUHU TUBUH</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                        $user = $_SESSION['nik'] . "|" . $_SESSION['nama_lengkap'];
                        foreach ($data as $value) {
                            $pecah = explode("|", $value);
                            @$key = $pecah['1'] . "|" . $pecah['2'];
                            if ($key == $user) {


                        ?>

                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pecah['3']; ?></td>
                                    <td><?= $pecah['4']; ?></td>
                                    <td><?= $pecah['5']; ?></td>
                                    <td><?= $pecah['6']; ?></td>


                                </tr>
                        <?php }
                        } ?>

                        </tr>
                    </tbody>
                </table>
                <br><br>
                <div id="tgl"><?= date('Y-m-d'); ?></div>

            </div>
        </div>
    </div>

</body>

</html>