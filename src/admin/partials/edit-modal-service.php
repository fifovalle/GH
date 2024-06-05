<div class="modal fade" id="suntingJasa" tabindex="-1" aria-labelledby="suntingJasaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="suntingJasaLabel">Sunting Jasa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" id="suntingJasaID" name="ID_Jasa" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="suntingGambarJasa" name="Gambar_Jasa" />
                        <label for="suntingGambarJasa">Gambar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNamaJasa" name="Nama_Jasa" placeholder="Masukan Nama Jasa" />
                        <label for="suntingNamaJasa">Nama Jasa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="suntingDeskripsiJasa" name="Deskripsi_Jasa" placeholder="Masukan Deskripsi Jasa" style="resize: none; height: 100px"></textarea>
                        <label for="suntingDeskripsiJasa">Deskripsi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="suntingHargaJasa" name="Harga_Jasa" placeholder="Masukan Harga Jasa" />
                        <label for="suntingHargaJasa">Harga</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="suntingStokJasa" name="Stok_Jasa" placeholder="Masukan Stok Jasa" />
                        <label for="suntingStokJasa">Stok</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="suntingStatusJasa" name="Status_Tersedia_Jasa" class="form-select">
                            <option selected>Pilih Status Jasa</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                        <label for="suntingStatusJasa">Status Jasa</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" id="tombolSimpanJasa">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
