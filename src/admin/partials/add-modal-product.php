<div class="modal fade" id="tambahProduk" tabindex="-1" aria-labelledby="tambahProdukLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahProdukLabel">Tambah Produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $akarUrl; ?>src/admin/config/add-product.php" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="tambahGambarProduk" name="Gambar_Produk" />
                        <label for="tambahGambarProduk">Gambar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tambahNamaProduk" name="Nama_Produk" placeholder="Masukan Nama Produk" />
                        <label for="tambahNamaProduk">Nama Produk</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="tambahDeskripsiProduk" name="Deskripsi_Produk" placeholder="Masukan Deskripsi Produk" style="resize: none; height: 100px"></textarea>
                        <label for="tambahDeskripsiProduk">Deskripsi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tambahHargaProduk" name="Harga_Produk" placeholder="Masukan Harga Produk" />
                        <label for="tambahHargaProduk">Harga</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tambahStokProduk" name="Stok_Produk" placeholder="Masukan Stok Produk" />
                        <label for="tambahStokProduk">Stok</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="tambahNoRekeningProduk" name="Nomor_Rekening_Produk" placeholder="Masukan Nomor Rekening" />
                        <label for="tambahNoRekeningProduk">Nomor Rekening</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="tambahStatusProduk" class="form-select" name="Status_Produk">
                            <option selected>Pilih Status Produk</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                        <label for="tambahStatusProduk">Status Produk</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" name="Simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>