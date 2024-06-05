$(document).ready(function () {
  $(".buttonBerita").click(function (e) {
    e.preventDefault();
    let beritaID = $(this).data("id");
    console.log(beritaID);
    $.ajax({
      url: "../config/get-news-data.php",
      method: "GET",
      data: {
        berita_id: beritaID,
      },
      success: function (data) {
        console.log(data);
        let beritaData = JSON.parse(data);
        console.log(beritaData);

        $("#suntingBeritaID").val(beritaData.ID_Berita);
        $("#suntingJudulBerita").val(beritaData.Judul_Berita);
        $("#suntingDeskripsiBerita").val(beritaData.Deskripsi_Berita);
        $("#suntingTanggalBerita").val(beritaData.Tanggal_Berita);

        let suntingBeritaModal = new bootstrap.Modal(
          document.getElementById("suntingBerita")
        );
        suntingBeritaModal.show();
      },
      error: function (xhr) {
        console.error(xhr.responseText);
      },
    });
  });

  $("#tombolSimpanBerita").click(function (e) {
    e.preventDefault();

    let formData = new FormData($(this).closest("form")[0]);

    $.ajax({
      url: "../config/edit-news.php",
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
              window.location.href = "../pages/data-news.php";
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
        let suntingBeritaModal = bootstrap.Modal.getInstance(
          document.getElementById("suntingBerita")
        );
        suntingBeritaModal.hide();
      },
    });
  });
});
