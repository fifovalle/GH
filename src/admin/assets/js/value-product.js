$(document).ready(function () {
  $(".buttonProduk").click(function (e) {
    e.preventDefault();
    let produkID = $(this).data("id");
    console.log(produkID);
    $.ajax({
      url: "../config/get-product-data.php",
      method: "GET",
      data: {
        produk_id: produkID,
      },
      success: function (data) {
        console.log(data);
        let produkData = JSON.parse(data);
        console.log(produkData);

        $("#suntingProdukID").val(produkData.ID_Produk);
        $("#suntingNamaProduk").val(produkData.Nama_Produk);
        $("#suntingDeskripsiProduk").val(produkData.Deskripsi_Produk);
        $("#suntingHargaProduk").val(produkData.Harga_Produk);
        $("#suntingStokProduk").val(produkData.Stok_Produk);
        $("#suntingStatusProduk").val(produkData.Status_Tersedia_Produk);

        $("#suntingProduk").modal("show");
      },
      error: function (xhr) {
        console.error(xhr.responseText);
      },
    });
  });

  $("#tombolSimpanProduk").click(function (e) {
    e.preventDefault();

    let formData = new FormData($("#formSuntingProduk")[0]);

    $.ajax({
      url: "../config/edit-product.php",
      method: "POST",
      data: formData,
      processData: false,
      contentType: false,
      beforeSend: function (xhr) {
        console.log("Mengirim data ke server:", formData);
      },
      success: function (response) {
        console.log("Respon dari server:", response);
        let responseData = JSON.parse(response);
        if (responseData.success) {
          Swal.fire({
            icon: "success",
            title: "Sukses!",
            text: responseData.message,
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
          }).then((result) => {
            result.dismiss === Swal.DismissReason.timer
              ? (window.location.href = "../pages/data-produk.php")
              : null;
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Gagal!",
            text: responseData.message,
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
          });
        }
      },
      error: function (xhr) {
        console.error(xhr.responseText);
        Swal.fire({
          icon: "error",
          title: "Error!",
          text: "Terjadi kesalahan saat mengirim permintaan.",
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
        });
      },
      complete: function () {
        $("#suntingProduk").modal("hide");
      },
    });
  });
});
