$(document).ready(function () {
  $(".buttonSpanduk").click(function (e) {
    e.preventDefault();
    let spandukID = $(this).data("id");
    console.log(spandukID);
    $.ajax({
      url: "../config/get-banner-data.php",
      method: "GET",
      data: {
        spanduk_id: spandukID,
      },
      success: function (data) {
        console.log(data);
        let spandukData = JSON.parse(data);
        console.log(spandukData);

        $("#suntingSpandukID").val(spandukData.ID_Spanduk);
        $("#suntingNamaSpanduk").val(spandukData.Nama_Spanduk);
        $("#suntingSpanduk").modal("show");
      },
      error: function (xhr) {
        console.error(xhr.responseText);
      },
    });
  });

  $("#tombolSimpanSpanduk").click(function (e) {
    e.preventDefault();

    let formData = new FormData($(this).closest("form")[0]);

    $.ajax({
      url: "../config/edit-banner.php",
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
              ? (window.location.href = "../pages/data-banner.php")
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
        $("#suntingSpanduk").modal("hide");
      },
    });
  });
});
