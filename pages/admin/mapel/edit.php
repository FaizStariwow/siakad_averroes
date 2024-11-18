<!-- Modal -->
<div class="modal fade" id="editmapel" tabindex="-1" aria-labelledby="editmapel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Mapel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../../controller/admin/mapel_controller.php?action=edit" method="post">
                    <div class="form_group">
                        <label for="exampleInputtext1" class="form_label">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="textHelp" name="nama_mapel" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="role" class="form_label">Wali Mapel</label>
                        <select name="wali_mapel" class="form-select" aria-label="Default select example" id="wali_mapel" required>
                            <option value="">Pilih Wali Mapel</option>
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

            </div>
            <div class="modal-footer">
                    <input type="hidden" id="id" name="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    