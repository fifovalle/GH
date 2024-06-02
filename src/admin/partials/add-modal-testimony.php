<div class="modal fade" id="tambahTestimoni" tabindex="-1" aria-labelledby="tambahTestimoniLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahTestimoniLabel">Tambah Testimoni</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $akarUrl; ?>src/admin/config/add-testimoni.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="Nama_Testimoni" id="tambahNamaTestimoni" placeholder="Masukan Nama Testimoni" required />
                        <label for="tambahNamaTestimoni">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="Pesan_Testimoni" id="tambahDeskripsiTestimoni" placeholder="Masukan Deskripsi Testimoni" style="resize: none; height: 100px" required></textarea>
                        <label for="tambahDeskripsiTestimoni">Deskripsi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="Status_Testimoni" id="tambahStatusTestimoni" class="form-select" required>
                            <option selected disabled value="">Pilih Status Testimoni</option>
                            <option value="Penjual">Penjual</option>
                            <option value="Pembeli">Pembeli</option>
                        </select>
                        <label for="tambahStatusTestimoni">Status</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" name="Simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>