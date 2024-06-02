<div class="modal fade" id="tambahPengguna" tabindex="-1" aria-labelledby="tambahPenggunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahPenggunaLabel">Tambah Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $akarUrl; ?>src/admin/config/add-user.php" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="tambahFotoPengguna" name="Foto_Pengguna" />
                        <label for="tambahFotoPengguna">Foto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaDepanPengguna" name="Nama_Depan_Pengguna" placeholder="Masukan Nama Depan Pengguna" />
                        <label for="tambahNamaDepanPengguna">Nama Depan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaBelakangPengguna" name="Nama_Belakang_Pengguna" placeholder="Masukan Nama Belakang Pengguna" />
                        <label for="tambahNamaBelakangPengguna">Nama Belakang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="tambahEmailPengguna" name="Email_Pengguna" placeholder="Masukan Email Pengguna" />
                        <label for="tambahEmailPengguna">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaPengguna" name="Nama_Pengguna" placeholder="Masukan Nama Pengguna" />
                        <label for="tambahNamaPengguna">Nama Pengguna</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="tambahKataSandiPengguna" name="Kata_Sandi_Pengguna" placeholder="Masukan Kata Sandi Pengguna" />
                        <label for="tambahKataSandiPengguna">Kata Sandi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="tambahKonfirmasiKataSandiPengguna" name="Konfirmasi_Kata_Sandi_Pengguna" placeholder="Masukan Konfirmasi Kata Sandi Pengguna" />
                        <label for="tambahKonfirmasiKataSandiPengguna">Konfirmasi Kata Sandi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tambahNoTeleponPengguna" name="No_Telepon_Pengguna" placeholder="Masukan No Telepon Pengguna" />
                        <label for="tambahNoTeleponPengguna">No Telepon</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahAlamatPengguna" name="Alamat_Pengguna" placeholder="Masukan Alamat Pengguna" />
                        <label for="tambahAlamatPengguna">Alamat</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" name="Simpan" id="btnSimpan"><?php echo htmlspecialchars('Kirim'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>