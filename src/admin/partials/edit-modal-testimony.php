<div class="modal fade" id="suntingTestimoni" tabindex="-1" aria-labelledby="suntingTestimoniLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="suntingTestimoniLabel">Sunting Testimoni</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" id="suntingTestimoniID" name="ID_Testimoni" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="suntingNamaTestimoni" name="Nama_Testimoni" placeholder="Masukan Nama Testimoni" />
                        <label for="suntingNamaTestimoni">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="suntingDeskripsiTestimoni" name="Pesan_Testimoni" placeholder="Masukan Deskripsi Testimoni" style="resize: none; height: 100px"></textarea>
                        <label for="suntingDeskripsiTestimoni">Deskripsi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select id="suntingStatusTestimoni" name="Status_Testimoni" class="form-select">
                            <option selected>Pilih Status Testimoni</option>
                            <option value="Penjual">Penjual</option>
                            <option value="Pembeli">Pembeli</option>
                        </select>
                        <label for="suntingStatusTestimoni">Status</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" id="tombolSimpanTestimoni" name="Simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>