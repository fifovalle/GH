<div class="modal fade" id="tambahAdmin" tabindex="-1" aria-labelledby="tambahAdminLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahAdminLabel">Tambah Admin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $akarUrl; ?>src/admin/config/add-admin.php" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="tambahFotoAdmin" name="Foto_Admin" />
                        <label for="tambahFotoAdmin">Foto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaDepanAdmin" name="Nama_Depan_Admin" placeholder="Masukan Nama Depan Admin" />
                        <label for="tambahNamaDepanAdmin">Nama Depan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaBelakangAdmin" name="Nama_Belakang_Admin" placeholder="Masukan Nama Belakang Admin" />
                        <label for="tambahNamaBelakangAdmin">Nama Belakang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="tambahEmailAdmin" name="Email_Admin" placeholder="Masukan Email Admin" />
                        <label for="tambahEmailAdmin">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaPenggunaAdmin" name="Nama_Pengguna_Admin" placeholder="Masukan Nama Pengguna Admin" />
                        <label for="tambahNamaPenggunaAdmin">Nama Pengguna</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="tambahKataSandiAdmin" name="Kata_Sandi_Admin" placeholder="Masukan Kata Sandi Admin" />
                        <label for="tambahKataSandiAdmin">Kata Sandi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="tambahKonfirmasiKataSandiAdmin" name="Konfirmasi_Kata_Sandi_Admin" placeholder="Masukan Konfirmasi Kata Sandi Admin" />
                        <label for="tambahKonfirmasiKataSandiAdmin">Konfirmasi Kata Sandi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tambahNoTeleponAdmin" name="No_Telepon_Admin" placeholder="Masukan No Telepon Admin" />
                        <label for="tambahNoTeleponAdmin">No Telepon</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahAlamatAdmin" name="Alamat_Admin" placeholder="Masukan Alamat Admin" />
                        <label for="tambahAlamatAdmin">Alamat</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="tambahPeranAdmin" class="form-select" name="Peran_Admin">
                            <option selected>Pilih Peran</option>
                            <option value="Super Admin">Pengelola</option>
                            <option value="Admin">Admin</option>
                        </select>
                        <label for="tambahPeranAdmin">Peran</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="pemuat" id="pemuat"></div>
                        <button type="submit" class="btn btn-primary" name="Simpan" id="btnSimpanAdmin"><?php echo htmlspecialchars('Kirim'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>