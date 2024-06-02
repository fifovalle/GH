<div class="modal fade" id="tambahJasa" tabindex="-1" aria-labelledby="tambahJasaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahJasaLabel">Tambah Jasa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $akarUrl; ?>src/admin/config/add-service.php" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="tambahGambarJasa" name="Gambar_Jasa" />
                        <label for="tambahGambarJasa">Gambar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaJasa" name="Nama_Jasa" placeholder="Masukan Nama Jasa" />
                        <label for="tambahNamaJasa">Nama Jasa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="tambahDeskripsiJasa" name="Deskripsi_Jasa" placeholder="Masukan Deskripsi Jasa" style="resize: none; height: 100px"></textarea>
                        <label for="tambahDeskripsiJasa">Deskripsi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tambahHargaJasa" name="Harga_Jasa" placeholder="Masukan Harga Jasa" />
                        <label for="tambahHargaJasa">Harga</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tambahStokJasa" name="Stok_Jasa" placeholder="Masukan Stok Jasa" />
                        <label for="tambahStokJasa">Stok</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tambahNoRekeningJasa" name="Nomor_Rekening_Jasa" placeholder="Masukan No Rekening" />
                        <label for="tambahNoRekeningJasa">No Rekening</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="tambahStatusJasa" class="form-select" name="Status_Tersedia_Jasa">
                            <option selected>Pilih Status Jasa</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                        <label for="tambahStatusJasa">Status Jasa</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" name="Simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>