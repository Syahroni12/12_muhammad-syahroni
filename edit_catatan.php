<div class="card">
    <div class="card-header">
        <a href="?url=catatan_perjalanan" class="btn btn-sm btn-danger">
            <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
            <span class="text">
                kembali</a>
        </span>
    </div>
    <?php
    $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
    $id_catatan = $_GET['id_catatan'];
    foreach ($data as $value) {
        $pecah = explode('|', $value);
        if ($pecah['0'] == $id_catatan) {

    ?>
            <div class="card-body">
                <form action="simpan_edit.php" method="post">
                    <input type="hidden" name="id_catatan" value="<?= $pecah['0'] ?>">
                    <div class="form-group"><label>tanggal</label>
                        <input type="date" name="tanggal" placeholder="tanggal" class="form-control" value="<?= $pecah['3']; ?>" required>
                    </div>
                    <div class="form-group"><label>jam</label>
                        <input type="time" name="jam" value="<?= $pecah['4']; ?>" placeholder="jam" class="form-control" required>
                    </div>

                    <div class="form-group"><label>lokasi yang di kunjungi</label>
                        <input type="text" value="<?= $pecah['5']; ?>" name="lokasi" placeholder="lokasi" class="form-control" required>
                    </div>
                    <div class="form-group"><label>suhu tubuh</label>
                        <input type="text" value="<?= $pecah['6']; ?>" name="suhu" placeholder="suhu" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-save"></i>Simpan</button>
                        <button type="reset" class="btn btn-danger mb-3"><i class="fas fa-trash"></i>Kosongkan</button>
                    </div>
                </form>
        <?php }
    }
        ?>
            </div>
</div>