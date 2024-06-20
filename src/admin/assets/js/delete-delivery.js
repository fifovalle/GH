function konfirmasiHapusPengiriman(id) {
  swal({
    title: "Yakin Menghapus Pengiriman?",
    text: "Pengiriman yang dihapus tidak dapat dipulihkan!",
    icon: "warning",
    buttons: {
      cancel: {
        text: "Batal",
        value: null,
        visible: true,
        className: "",
        closeModal: true,
      },
      confirm: {
        text: "Ya, Hapus",
        value: true,
        visible: true,
        className: "",
        closeModal: true,
      },
    },
  }).then((confirm) => {
    if (confirm) {
      window.location.href = "../config/delete-delivery.php?id=" + id;
    }
  });
}
