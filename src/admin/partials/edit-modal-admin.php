<div class="modal fade" id="suntingAdmin" tabindex="-1" aria-labelledby="suntingAdminLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="suntingAdminLabel">Sunting Admin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="suntingFotoAdmin" />
                        <label for="suntingFotoAdmin">Foto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNamaDepanAdmin" placeholder="Masukan Nama Depan Admin" />
                        <label for="suntingNamaDepanAdmin">Nama Depan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNamaBelakangAdmin" placeholder="Masukan Nama Belakang Admin" />
                        <label for="suntingNamaBelakangAdmin">Nama Belakang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="suntingEmailAdmin" placeholder="Masukan Email Admin" />
                        <label for="suntingEmailAdmin">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNamaPenggunaAdmin" placeholder="Masukan Nama Pengguna Admin" />
                        <label for="suntingNamaPenggunaAdmin">Nama Pengguna</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="suntingKataSandiAdmin" placeholder="Masukan Kata Sandi Admin" />
                        <label for="suntingKataSandiAdmin">Kata Sandi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="suntingKonfirmasiKataSandiAdmin" placeholder="Masukan Konfirmasi Kata Sandi Admin" />
                        <label for="suntingKonfirmasiKataSandiAdmin">Konfirmasi Kata Sandi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingAlamatAdmin" placeholder="Masukan Alamat Admin" />
                        <label for="suntingAlamatAdmin">Alamat</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="suntingPeranAdmin" class="form-select">
                            <option selected>Pilih Peran</option>
                            <option value="Super Admin">Pengelola</option>
                            <option value="Admin">Admin</option>
                        </select>
                        <label for="suntingPeranAdmin">Peran</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>