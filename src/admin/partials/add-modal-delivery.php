<div class="modal fade" id="tambahPengiriman" tabindex="-1" aria-labelledby="tambahPengirimanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahPengirimanLabel">Tambah Pengiriman</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $akarUrl; ?>src/admin/config/add-delivery.php" method="POST">
                    <div class="form-floating mb-3">
                        <select name="Jasa_Pengiriman" class="form-select" id="tambahJasaPengiriman">
                            <option value="" selected>Pilih Jasa</option>
                            <option value="Dikirim Oleh Penjual">Dikirim Oleh Penjual</option>
                        </select>
                        <label for="tambahJasaPengiriman">Jasa Pengiriman</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="Batas_Pengiriman" class="form-select" id="tambahBatasPengiriman">
                            <option value="" selected>Pilih Batas Pengiriman</option>
                            <option value="1 KG">1 KG</option>
                            <option value="2 KG">2 KG</option>
                            <option value="3 KG">3 KG</option>
                            <option value="4 KG">4 KG</option>
                            <option value="5 KG">5 KG</option>
                        </select>
                        <label for="tambahBatasPengiriman">Batas Pengiriman</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="Jarak_Pengiriman" class="form-select" id="tambahJarakPengiriman">
                            <option value="" selected>Pilih Jarak Pengiriman</option>
                            <option value="1 KM">1 KM</option>
                            <option value="2 KM">2 KM</option>
                            <option value="3 KM">3 KM</option>
                            <option value="4 KM">4 KM</option>
                            <option value="5 KM">5 KM</option>
                        </select>
                        <label for="tambahJarakPengiriman">Jarak Pengiriman</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" name="Simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>