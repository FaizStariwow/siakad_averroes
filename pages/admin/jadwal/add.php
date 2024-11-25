<!-- modal add -->
<div class="modal fade" id="modal-add-jadwal" tabindex="-1" role="dialog" aria-labelledby="modal-add" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">     

      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Tambah Jadwal</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body
        ">
            <form action="../../../controller/admin/jadwal_controller.php?action=add" method="POST">
            
            <div class="form-group">
                <label for="role">Nama Pengajar</label>
                <select class="form-control"  name="pengajar" required>
                    <option value="">Pilih Pengajar</option>
                    <?php
                    $guru = get_all_guru();
                    while ($row = mysqli_fetch_assoc($guru)) {
                    ?>
                        <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label >Hari</label>
                <select class="form-control"  name="hari" required>
                    <option value="">Pilih Wali kelas</option>
                    <?php
                    $guru = get_all_guru();
                    while ($row = mysqli_fetch_assoc($guru)) {
                    ?>
                        <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label >Kelas</label>
                <select class="form-control"  name="kelas" required>
                    <option value="">Pilih Kelas</option>
                    <?php
                    $kelas = get_all_kelas();
                    while ($row = mysqli_fetch_assoc($kelas)) {
                    ?>
                        <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label >Mata Pelajaran</label>
                <select class="form-control"  name="mapel" required>
                    <option value="">Pilih Mapel</option>
                    <?php
                    $kelas = get_all_mapel();
                    while ($row = mysqli_fetch_assoc($kelas)) {
                    ?>
                        <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Jam Mulai</label>
                <input type="time" class="form-control"  name="jam_mulai" required>
            </div>
            <div class="form-group">
                <label>Jam Selesai</label>
                <input type="time" class="form-control"  name="jam_selesai" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn bg-primary text-white">Simpan</button>
                <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Batal</button>
            </div>
            </form>
      </div>
    </div>
</div>