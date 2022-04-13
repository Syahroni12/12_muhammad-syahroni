 <div class="card">
     <div class="card-header">
         <a href="user.php" class="btn btn-sm btn-danger">
             <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
             <span class="text">
                 kembali</a>
         </span>

     </div>
     <div class="card-body">
         <?php

            if (!empty($_SESSION["BISAH"])) {
                echo $_SESSION["BISAH"];
                unset($_SESSION["BISAH"]);
            }
            if (!empty($_SESSION["TAMBAH"])) {
                echo $_SESSION["TAMBAH"];
                unset($_SESSION["TAMBAH"]);
            }
            if (!empty($_SESSION["HAPUS"])) {
                echo $_SESSION["HAPUS"];
                unset($_SESSION["HAPUS"]);
            }

            ?>
         <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead class="text-center">
                     <tr>
                         <th>NO</th>

                         <th>TANGGAL</th>
                         <th>JAM</th>
                         <th> lOKASI</th>
                         <th>SUHU TUBUH</th>
                         <th>Aksi</th>
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
                                 <td><a href="?url=edit_catatan&id_catatan=<?= $pecah['0']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> edit</a>
                                     <a href="hapus_catatan.php?id_catatan=<?= $pecah['0']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash"></i> hapus</a>
                                 </td>

                             </tr>
                     <?php }
                        } ?>

                     </tr>
                 </tbody>
             </table>
         </div>
     </div>