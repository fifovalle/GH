<div class="modal fade" id="tambahSpanduk" tabindex="-1" aria-labelledby="tambahSpandukLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahSpandukLabel">Tambah Spanduk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $akarUrl; ?>src/admin/config/add-banner.php" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="tambahGambarSpanduk" name="Gambar_Spanduk" />
                        <label for="tambahGambarSpanduk">Gambar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaSpanduk" name="Nama_Spanduk" placeholder="Masukan Nama Spanduk" />
                        <label for="tambahNamaSpanduk">Nama Spanduk</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" name="Simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>