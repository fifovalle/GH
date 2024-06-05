<div class="modal fade" id="suntingSpanduk" tabindex="-1" aria-labelledby="suntingSpandukLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="suntingSpandukLabel">Sunting Spanduk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" id="suntingSpandukID" name="ID_Spanduk" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="suntingGambarSpanduk" name="Gambar_Spanduk" />
                        <label for="suntingGambarSpanduk">Gambar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNamaSpanduk" name="Nama_Spanduk" placeholder="Masukan Nama Spanduk" />
                        <label for="suntingNamaSpanduk">Nama Spanduk</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" id="tombolSimpanSpanduk" name="Simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>