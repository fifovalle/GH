<div class="modal fade" id="tambahBerita" tabindex="-1" aria-labelledby="tambahBeritaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahBeritaLabel">Tambah Berita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../config/add-berita.php" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" name="Gambar_Berita" id="tambahGambarBerita" />
                        <label for="tambahGambarBerita">Gambar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="Judul_Berita" id="tambahJudulBerita" placeholder="Masukan Judul Berita" />
                        <label for="tambahJudulBerita">Judul Berita</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="Deskripsi_Berita" id="tambahDeskripsiBerita" placeholder="Masukan Deskripsi Berita" style="resize: none; height: 100px"></textarea>
                        <label for="tambahDeskripsiBerita">Deskripsi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="Tanggal_Berita" id="tambahTanggalBerita" />
                        <label for="tambahTanggalBerita">Tanggal</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="Simpan" id="btnSimpan" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>