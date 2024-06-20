$(document).ready(function () {
  $(".buttonPengiriman").click(function (e) {
    e.preventDefault();
    let deliveryID = $(this).data("id");
    console.log(deliveryID);
    $.ajax({
      url: "../config/get-delivery-data.php",
      method: "GET",
      data: {
        delivery_id: deliveryID,
      },
      success: function (data) {
        console.log(data);
        let deliveryData = JSON.parse(data);
        console.log(deliveryData);

        $("#suntingIDPengiriman").val(deliveryData.ID_Pengiriman);
        $("#suntingJasaPengiriman").val(deliveryData.Jasa_Pengiriman);
        $("#suntingBatasPengiriman").val(deliveryData.Batas_Pengiriman);
        $("#suntingJarakPengiriman").val(deliveryData.Jarak_Pengiriman);

        $("#suntingPengiriman").modal("show");
      },
      error: function (xhr) {
        console.error(xhr.responseText);
      },
    });
  });

  $("#tombolSimpanDelivery").click(function (e) {
    e.preventDefault();

    let formData = new FormData($(this).closest("form")[0]);

    $.ajax({
      url: "../config/edit-delivery.php",
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
            if (result.dismiss === Swal.DismissReason.timer) {
              window.location.href = "../pages/data-delivery.php";
            }
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
        $("#suntingPengiriman").modal("hide");
      },
    });
  });
});
