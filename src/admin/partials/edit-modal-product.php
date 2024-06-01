<div class="modal fade" id="suntingProduk" tabindex="-1" aria-labelledby="suntingProdukLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="suntingProdukLabel">Sunting Produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $akarUrl; ?>src/Produk/config/" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="suntingGambarProduk" />
                        <label for="suntingGambarProduk">Gambar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNamaProduk" placeholder="Masukan Nama Produk" />
                        <label for="suntingNamaProduk">Nama Produk</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="suntingDeskripsiProduk" placeholder="Masukan Deskripsi Produk" style="resize: none; height: 100px"></textarea>
                        <label for="suntingDeskripsiProduk">Deskripsi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="suntingHargaProduk" placeholder="Masukan Harga Produk" />
                        <label for="suntingHargaProduk">Harga</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="suntingStokProduk" placeholder="Masukan Stok Produk" />
                        <label for="suntingStokProduk">Stok</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="suntingStatusProduk" class="form-select">
                            <option selected>Pilih Status Produk</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                        <label for="suntingStatusProduk">Status Produk</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>