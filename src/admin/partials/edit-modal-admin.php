<div class="modal fade" id="suntingAdmin" tabindex="-1" aria-labelledby="suntingAdminLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="suntingAdminLabel">Sunting Admin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="POST">
                    <input type="hidden" id="suntingAdminID" name="ID_Admin" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="suntingFotoAdmin" name="Foto_Admin" />
                        <label for="suntingFotoAdmin">Foto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNamaDepanAdmin" name="Nama_Depan_Admin" placeholder="Masukan Nama Depan Admin" />
                        <label for="suntingNamaDepanAdmin">Nama Depan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNamaBelakangAdmin" name="Nama_Belakang_Admin" placeholder="Masukan Nama Belakang Admin" />
                        <label for="suntingNamaBelakangAdmin">Nama Belakang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="suntingEmailAdmin" name="Email_Admin" placeholder="Masukan Email Admin" />
                        <label for="suntingEmailAdmin">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNamaPenggunaAdmin" name="Nama_Pengguna_Admin" placeholder="Masukan Nama Pengguna Admin" />
                        <label for="suntingNamaPenggunaAdmin">Nama Pengguna</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNoTeleponAdmin" name="No_Telepon_Admin" placeholder="Masukan No Telepon Admin" />
                        <label for="suntingNoTeleponAdmin">No Telepon</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingAlamatAdmin" name="Alamat_Admin" placeholder="Masukan Alamat Admin" />
                        <label for="suntingAlamatAdmin">Alamat</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="suntingPeranAdmin" name="Peran_Admin" class="form-select">
                            <option selected>Pilih Peran</option>
                            <option value="Super Admin">Pengelola</option>
                            <option value="Admin">Admin</option>
                        </select>
                        <label for="suntingPeranAdmin">Peran</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" id="tombolSimpanAdmin" name="Simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>