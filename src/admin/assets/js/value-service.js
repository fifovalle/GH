$(document).ready(function () {
  $(".buttonJasa").click(function (e) {
    e.preventDefault();
    let jasaID = $(this).data("id");
    console.log(jasaID);
    $.ajax({
      url: "../config/get-service-data.php",
      method: "GET",
      data: {
        jasa_id: jasaID,
      },
      success: function (data) {
        console.log(data);
        let jasaData = JSON.parse(data);
        console.log(jasaData);

        $("#suntingJasaID").val(jasaData.ID_Jasa);
        $("#suntingNamaJasa").val(jasaData.Nama_Jasa);
        $("#suntingDeskripsiJasa").val(jasaData.Deskripsi_Jasa);
        $("#suntingHargaJasa").val(jasaData.Harga_Jasa);
        $("#suntingStokJasa").val(jasaData.Stok_Jasa);
        $("#suntingStatusJasa").val(jasaData.Status_Tersedia_Jasa);

        $("#suntingJasa").modal("show");
      },
      error: function (xhr) {
        console.error(xhr.responseText);
      },
    });
  });

  $("#tombolSimpanJasa").click(function (e) {
    e.preventDefault();

    let formData = new FormData($(this).closest("form")[0]);

    $.ajax({
      url: "../config/edit-service.php",
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
              ? (window.location.href = "../pages/data-service.php")
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
        $("#suntingJasa").modal("hide");
      },
    });
  });
});
