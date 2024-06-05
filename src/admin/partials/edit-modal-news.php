<div class="modal fade" id="suntingBerita" tabindex="-1" aria-labelledby="suntingBeritaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="suntingBeritaLabel">Sunting Berita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" id="suntingBeritaID" name="ID_Berita" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="suntingGambarBerita" name ="Gambar_Berita"/>
                        <label for="suntingGambarBerita">Gambar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingJudulBerita" name="Judul_Berita" placeholder="Masukan Judul Berita" />
                        <label for="suntingJudulBerita">Judul Berita</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="suntingDeskripsiBerita" name="Deskripsi_Berita" placeholder="Masukan Deskripsi Berita" style="resize: none; height: 100px"></textarea>
                        <label for="suntingDeskripsiBerita">Deskripsi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="suntingTanggalBerita" name="Tanggal_Berita" />
                        <label for="suntingTanggalBerita">Tanggal</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" id="tombolSimpanBerita" name="Simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
