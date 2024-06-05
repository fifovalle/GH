$(document).ready(function () {
  $(".buttonTestimoni").click(function (e) {
    e.preventDefault();
    let testimoniID = $(this).data("id");
    console.log(testimoniID);
    $.ajax({
      url: "../config/get-testimoni-data.php",
      method: "GET",
      data: {
        testimoni_id: testimoniID,
      },
      success: function (data) {
        console.log(data);
        let testimoniData = JSON.parse(data);
        console.log(testimoniData);

        $("#suntingTestimoniID").val(testimoniData.ID_Testimoni);
        $("#suntingNamaTestimoni").val(testimoniData.Nama_Testimoni);
        $("#suntingDeskripsiTestimoni").val(testimoniData.Pesan_Testimoni);
        $("#suntingStatusTestimoni").val(testimoniData.Status_Testimoni);

        $("#suntingTestimoni").modal("show");
      },
      error: function (xhr) {
        console.error(xhr.responseText);
      },
    });
  });

  $("#tombolSimpanTestimoni").click(function (e) {
    e.preventDefault();

    let formData = new FormData($(this).closest("form")[0]);

    $.ajax({
      url: "../config/edit-testimoni.php",
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
              window.location.href = "../pages/data-testimony.php";
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
        $("#suntingTestimoni").modal("hide");
      },
    });
  });
});
