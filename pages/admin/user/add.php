<!-- modal add -->
<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="modal-add" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">     

      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Tambah User</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body
        ">
            <form action="../../../controller/admin/user_controller.php?action=add" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control"  name="nama" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control"  name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control"  name="password" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control"  name="role" required>
                    <option value="">Pilih Role</option>
                    <option value="1">Admin</option>
                    <option value="2">Guru</option>
                    <option value="3">Murid</option>
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