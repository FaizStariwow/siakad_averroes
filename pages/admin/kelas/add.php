<!-- modal add -->
<div class="modal fade" id="modal-add-kelas" tabindex="-1" role="dialog" aria-labelledby="modal-add" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">     

      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Tambah kelas</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body
        ">
            <form action="../../../controller/admin/kelas_controller.php?action=add" method="POST">
            <div class="form-group">
                <label for="nama">Nama Kelas</label>
                <input type="text" class="form-control"  name="nama" required>
            </div>
            <div class="form-group">
                <label for="kelasname">Kode Kelas</label>
                <input type="text" class="form-control"  name="kode_kelas" required>
            </div>
            <div class="form-group">
                <label for="role">Wali Kelas</label>
                <select class="form-control"  name="wali_kelas" required>
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
            <div class="modal-footer">
                <button type="submit" class="btn bg-primary text-white">Simpan</button>
                <button type="button" class="btn bg-danger text-white" data-bs-dismiss="modal">Batal</button>
            </div>
            </form>
      </div>
    </div>
</div>