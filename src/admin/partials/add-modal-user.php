<div class="modal fade" id="tambahPengguna" tabindex="-1" aria-labelledby="tambahPenggunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahPenggunaLabel">Tambah Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $akarUrl; ?>src/admin/config/" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="tambahFotoPengguna" />
                        <label for="tambahFotoPengguna">Foto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaDepanPengguna" placeholder="Masukan Nama Depan Pengguna" />
                        <label for="tambahNamaDepanPengguna">Nama Depan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaBelakangPengguna" placeholder="Masukan Nama Belakang Pengguna" />
                        <label for="tambahNamaBelakangPengguna">Nama Belakang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="tambahEmailPengguna" placeholder="Masukan Email Pengguna" />
                        <label for="tambahEmailPengguna">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaPengguna" placeholder="Masukan Nama Pengguna" />
                        <label for="tambahNamaPengguna">Nama Pengguna</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="tambahKataSandiPengguna" placeholder="Masukan Kata Sandi Pengguna" />
                        <label for="tambahKataSandiPengguna">Kata Sandi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="tambahKonfirmasiKataSandiPengguna" placeholder="Masukan Konfirmasi Kata Sandi Pengguna" />
                        <label for="tambahKonfirmasiKataSandiPengguna">Konfirmasi Kata Sandi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahAlamatPengguna" placeholder="Masukan Alamat Pengguna" />
                        <label for="tambahAlamatPengguna">Alamat</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="tambahPeranPengguna" class="form-select">
                            <option selected>Pilih Peran</option>
                            <option value="Super Pengguna">Pengelola</option>
                            <option value="Pengguna">Pengguna</option>
                        </select>
                        <label for="tambahPeranPengguna">Peran</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>