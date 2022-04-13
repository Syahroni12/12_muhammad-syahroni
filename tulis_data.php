<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-sm btn-danger">
            <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
            <span class="text">
                kembali</a>
        </span>
    </div>
    <div class="card-body">
        <form action="simpan_data.php" method="post">
            <div class="form-group"><label>tanggal</label>
                <input type="date" name="tanggal" placeholder="tanggal" class="form-control" required>
            </div>
            <div class="form-group"><label>jam</label>
                <input type="time" name="jam" placeholder="jam" class="form-control" required>
            </div>

            <div class="form-group"><label>lokasi yang di kunjungi</label>
                <input type="text" name="lokasi" placeholder="lokasi" class="form-control" required>
            </div>
            <div class="form-group"><label>suhu tubuh</label>
                <input type="text " name="suhu" placeholder="suhu" class="form-control" required>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-save"></i>Simpan</button>
                <button type="reset" class="btn btn-danger mb-3"><i class="fas fa-trash"></i>Kosongkan</button>
            </div>
        </form>
    </div>
</div>