<?php
include 'connection.php';

// ===================================ADMIN===================================
class Admin
{
    private $koneksi;

    public function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    private function escapeString($string)
    {
        return htmlspecialchars(mysqli_real_escape_string($this->koneksi, $string));
    }

    public function tambahAdmin($data)
    {
        $query = "INSERT INTO admin (Foto_Admin, Nama_Depan_Admin, Nama_Belakang_Admin, Email_Admin, Nama_Pengguna_Admin, Kata_Sandi_Admin, Konfirmasi_Kata_Sandi_Admin, No_Telepon_Admin, Alamat_Admin, Peran_Admin, Status_Verifikasi_Admin, Token_Admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "sssssssssssi",
            $this->escapeString($data['Foto_Admin']),
            $this->escapeString($data['Nama_Depan_Admin']),
            $this->escapeString($data['Nama_Belakang_Admin']),
            $this->escapeString($data['Email_Admin']),
            $this->escapeString($data['Nama_Pengguna_Admin']),
            $this->escapeString($data['Kata_Sandi_Admin']),
            $this->escapeString($data['Konfirmasi_Kata_Sandi_Admin']),
            $this->escapeString($data['No_Telepon_Admin']),
            $this->escapeString($data['Alamat_Admin']),
            $this->escapeString($data['Peran_Admin']),
            $this->escapeString($data['Status_Verifikasi_Admin']),
            $this->escapeString($data['Token_Admin'])
        );

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function tampilkanDataAdmin()
    {
        $query = "SELECT * FROM admin";
        $result = $this->koneksi->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($baris = $result->fetch_assoc()) {
                $data[] = $baris;
            }
            return $data;
        } else {
            return null;
        }
    }

    public function updateStatusVerifikasi($adminId, $status)
    {
        $query = "UPDATE admin SET Status_Verifikasi_Admin = ? WHERE ID_Admin = ?";
        $stmt = mysqli_prepare($this->koneksi, $query);
        mysqli_stmt_bind_param($stmt, "si", $status, $adminId);
        return mysqli_stmt_execute($stmt);
    }

    public function updateToken($adminId, $token)
    {
        $query = "UPDATE admin SET Token_Admin = ? WHERE ID_Admin = ?";
        $stmt = mysqli_prepare($this->koneksi, $query);
        mysqli_stmt_bind_param($stmt, "ii", $token, $adminId);
        return mysqli_stmt_execute($stmt);
    }

    public function getAdminByToken($token)
    {
        $query = "SELECT * FROM admin WHERE Token_Admin = ?";
        $stmt = mysqli_prepare($this->koneksi, $query);
        mysqli_stmt_bind_param($stmt, "i", $token);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_assoc($result);
    }

    public function cekEmailSudahAda($email)
    {
        $query = "SELECT COUNT(*) as total FROM admin WHERE Email_Admin = ?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("s", $email);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();

        $total = $row['total'];

        if ($total > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function hapusAdmin($id)
    {
        $query = "SELECT ID_Admin, Foto_Admin FROM admin WHERE ID_Admin=?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();
        $idPemilikFoto = $row['ID_Admin'];
        $namaFoto = $row['Foto_Admin'];

        if ($idPemilikFoto != $id) {
            return false;
        }

        $queryDelete = "DELETE FROM admin WHERE ID_Admin=?";
        $statementDelete = $this->koneksi->prepare($queryDelete);
        $statementDelete->bind_param("i", $id);
        $isDeleted = $statementDelete->execute();

        if ($isDeleted) {
            $direktoriFoto = "../uploads/";

            if (file_exists($direktoriFoto . $namaFoto)) {
                if (unlink($direktoriFoto . $namaFoto)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    public function perbaruiAdmin($id, $data)
    {
        $query = "UPDATE admin SET Foto_Admin=?, Nama_Depan_Admin=?, Nama_Belakang_Admin=?, Email_Admin=?, Nama_Pengguna_Admin=?, No_Telepon_Admin=?, Alamat_Admin=?, Peran_Admin=? WHERE ID_Admin=?";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("ssssssssi", $data['Foto_Admin'], $data['Nama_Depan_Admin'], $data['Nama_Belakang_Admin'], $data['Email_Admin'], $data['Nama_Pengguna_Admin'], $data['No_Telepon_Admin'], $data['Alamat_Admin'], $data['Peran_Admin'], $id);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getFotoAdminById($idAdmin)
    {
        $query = "SELECT Foto_Admin FROM admin WHERE ID_Admin = ?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("i", $idAdmin);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data['Foto_Admin'];
        } else {
            return null;
        }
    }

    public function autentikasiAdmin($email, $kataSandi)
    {
        $query = "SELECT * FROM admin WHERE Email_Admin = ? OR Nama_Pengguna_Admin = ?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("ss", $email, $email);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedKataSandi = $row['Kata_Sandi_Admin'];
            if (password_verify($kataSandi, $hashedKataSandi)) {
                return $row;
            }
        }
        return null;
    }
}
// ===================================ADMIN===================================


// ===================================PENGGUNA===================================
class Pengguna
{
    private $koneksi;

    public function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    private function escapeString($string)
    {
        return htmlspecialchars(mysqli_real_escape_string($this->koneksi, $string));
    }

    public function tambahPengguna($data)
    {
        $query = "INSERT INTO pengguna (Foto_Pengguna, Nama_Depan_Pengguna, Nama_Belakang_Pengguna, Nama_Pengguna, Email_Pengguna, Kata_Sandi_Pengguna, Konfirmasi_Kata_Sandi_Pengguna, No_Telepon_Pengguna, Alamat_Pengguna, Status_Verifikasi_Pengguna, Token_Pengguna) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "ssssssssssi",
            $this->escapeString($data['Foto_Pengguna']),
            $this->escapeString($data['Nama_Depan_Pengguna']),
            $this->escapeString($data['Nama_Belakang_Pengguna']),
            $this->escapeString($data['Nama_Pengguna']),
            $this->escapeString($data['Email_Pengguna']),
            $this->escapeString($data['Kata_Sandi_Pengguna']),
            $this->escapeString($data['Konfirmasi_Kata_Sandi_Pengguna']),
            $this->escapeString($data['No_Telepon_Pengguna']),
            $this->escapeString($data['Alamat_Pengguna']),
            $this->escapeString($data['Status_Verifikasi_Pengguna']),
            $this->escapeString($data['Token_Pengguna'])
        );

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getPenggunaByToken($token)
    {
        $query = "SELECT * FROM pengguna WHERE Token_Pengguna = ?";
        $stmt = mysqli_prepare($this->koneksi, $query);
        mysqli_stmt_bind_param($stmt, "i", $token);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_assoc($result);
    }

    public function cekEmailPenggunaSudahAda($email)
    {
        $query = "SELECT COUNT(*) as total FROM pengguna WHERE Email_Pengguna = ?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("s", $email);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();

        $total = $row['total'];

        if ($total > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function tampilkanDataPengguna()
    {
        $query = "SELECT * FROM pengguna";
        $result = $this->koneksi->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($baris = $result->fetch_assoc()) {
                $data[] = $baris;
            }
            return $data;
        } else {
            return null;
        }
    }

    public function hapusPengguna($id)
    {
        $query = "SELECT ID_Pengguna, Foto_Pengguna FROM pengguna WHERE ID_Pengguna=?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();
        $idPemilikFoto = $row['ID_Pengguna'];
        $namaFoto = $row['Foto_Pengguna'];

        if ($idPemilikFoto != $id) {
            return false;
        }

        $queryDelete = "DELETE FROM pengguna WHERE ID_Pengguna=?";
        $statementDelete = $this->koneksi->prepare($queryDelete);
        $statementDelete->bind_param("i", $id);
        $isDeleted = $statementDelete->execute();

        if ($isDeleted) {
            $direktoriFoto = "../uploads/";

            if (file_exists($direktoriFoto . $namaFoto)) {
                if (unlink($direktoriFoto . $namaFoto)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
}
// ===================================PENGGUNA===================================


// ===================================BERITA===================================
class Berita
{
    private $koneksi;

    public function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    private function menghilangkanString($string)
    {
        return htmlspecialchars(mysqli_real_escape_string($this->koneksi, $string));
    }

    public function tambahBerita($data)
    {
        $idAdmin = $this->menghilangkanString($data['ID_Admin']);
        $gambar = $this->menghilangkanString($data['Gambar_Berita']);
        $judul = $this->menghilangkanString($data['Judul_Berita']);
        $deskripsi = $this->menghilangkanString($data['Deskripsi_Berita']);
        $tanggalBerita = $this->menghilangkanString($data['Tanggal_Berita']);

        $query = "INSERT INTO berita (ID_Admin, Gambar_Berita, Judul_Berita, Deskripsi_Berita, Tanggal_Berita) VALUES (?, ?, ?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "issss",
            $idAdmin,
            $gambar,
            $judul,
            $deskripsi,
            $tanggalBerita
        );

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function tampilkanDataBerita()
    {
        $query = "SELECT * FROM berita";
        $result = $this->koneksi->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($baris = $result->fetch_assoc()) {
                $data[] = $baris;
            }
            return $data;
        } else {
            return null;
        }
    }

    public function perbaruiBerita($idBerita, $dataBerita)
    {
        $judul = $this->menghilangkanString($dataBerita['Judul_Berita']);
        $deskripsi = $this->menghilangkanString($dataBerita['Deskripsi_Berita']);
        $tanggalBerita = $this->menghilangkanString($dataBerita['Tanggal_Berita']);
        $gambar = $this->menghilangkanString($dataBerita['Gambar_Berita']);

        $sql = "UPDATE berita SET Judul_Berita = ?, Deskripsi_Berita = ?, Tanggal_Berita = ?, Gambar_Berita = ? WHERE ID_Berita = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bind_param("ssssi", $judul, $deskripsi, $tanggalBerita, $gambar, $idBerita);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getGambarBeritaById($idBerita)
    {
        $sql = "SELECT Gambar_Berita FROM berita WHERE ID_Berita = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bind_param("i", $idBerita);
        $stmt->execute();

        $gambar = null;
        $stmt->bind_result($gambar);
        $stmt->fetch();
        $stmt->close();

        return $gambar;
    }

    public function hapusBerita($id)
    {
        $query = "SELECT ID_Berita, Gambar_Berita FROM berita WHERE ID_Berita=?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();
        $idPemilikFoto = $row['ID_Berita'];
        $namaFoto = $row['Gambar_Berita'];

        if ($idPemilikFoto != $id) {
            return false;
        }

        $queryDelete = "DELETE FROM berita WHERE ID_Berita=?";
        $statementDelete = $this->koneksi->prepare($queryDelete);
        $statementDelete->bind_param("i", $id);
        $isDeleted = $statementDelete->execute();

        if ($isDeleted) {
            $direktoriFoto = "../uploads/";

            if (file_exists($direktoriFoto . $namaFoto)) {
                if (unlink($direktoriFoto . $namaFoto)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
}
// ===================================BERITA===================================

// ===================================TESTIMONI================================
class Testimoni
{
    private $koneksi;

    public function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    private function menghilangkanString($string)
    {
        return htmlspecialchars(mysqli_real_escape_string($this->koneksi, $string));
    }

    public function tambahTestimoni($data)
    {
        $namaTestimoni = $this->menghilangkanString($data['Nama_Testimoni']);
        $pesanTestimoni = $this->menghilangkanString($data['Pesan_Testimoni']);
        $statusTestimoni = $this->menghilangkanString($data['Status_Testimoni']);

        $query = "INSERT INTO testimoni (Nama_Testimoni, Pesan_Testimoni, Status_Testimoni) VALUES (?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "sss",
            $namaTestimoni,
            $pesanTestimoni,
            $statusTestimoni
        );

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function tampilkanDataTestimoni()
    {
        $query = "SELECT * FROM testimoni";
        $result = $this->koneksi->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($baris = $result->fetch_assoc()) {
                $data[] = $baris;
            }
            return $data;
        } else {
            return null;
        }
    }

    public function hapusTestimoni($id)
    {
        $queryDelete = "DELETE FROM testimoni WHERE ID_Testimoni=?";
        $statementDelete = $this->koneksi->prepare($queryDelete);
        $statementDelete->bind_param("i", $id);
        $isDeleted = $statementDelete->execute();

        if ($isDeleted) {
            return true;
        } else {
            return false;
        }
    }

    public function perbaruiTestimoni($idTestimoni, $dataTestimoni)
    {
        $nama = $this->menghilangkanString($dataTestimoni['Nama_Testimoni']);
        $pesan = $this->menghilangkanString($dataTestimoni['Pesan_Testimoni']);
        $status = $this->menghilangkanString($dataTestimoni['Status_Testimoni']);

        $sql = "UPDATE testimoni SET Nama_Testimoni = ?, Pesan_Testimoni = ?, Status_Testimoni = ? WHERE ID_Testimoni = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bind_param("sssi", $nama, $pesan, $status, $idTestimoni);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
// ===================================TESTIMONI================================

// ===================================PRODUK================================
class Produk
{
    private $koneksi;

    public function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    private function menghilangkanString($string)
    {
        return htmlspecialchars(mysqli_real_escape_string($this->koneksi, $string));
    }

    public function tambahProduk($data)
    {
        $gambar = $this->menghilangkanString($data['Gambar_Produk']);
        $nama = $this->menghilangkanString($data['Nama_Produk']);
        $deskripsi = $this->menghilangkanString($data['Deskripsi_Produk']);
        $harga = $this->menghilangkanString($data['Harga_Produk']);
        $stok = $this->menghilangkanString($data['Stok_Produk']);
        $nomorRekening = $this->menghilangkanString($data['Nomor_Rekening_Produk']);
        $status = $this->menghilangkanString($data['Status_Tersedia_Produk']);

        $query = "INSERT INTO produk (Gambar_Produk, Nama_Produk, Deskripsi_Produk, Harga_Produk, Stok_Produk, Nomor_Rekening_Produk, Status_Tersedia_Produk) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "sssiiis",
            $gambar,
            $nama,
            $deskripsi,
            $harga,
            $stok,
            $nomorRekening,
            $status
        );

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function tampilkanDataProduk()
    {
        $query = "SELECT * FROM produk";
        $result = $this->koneksi->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($baris = $result->fetch_assoc()) {
                $data[] = $baris;
            }
            return $data;
        } else {
            return null;
        }
    }

    public function perbaruiProduk($idProduk, $dataProduk)
    {
        $gambar = $this->menghilangkanString($dataProduk['Gambar_Produk']);
        $nama = $this->menghilangkanString($dataProduk['Nama_Produk']);
        $deskripsi = $this->menghilangkanString($dataProduk['Deskripsi_Produk']);
        $harga = $this->menghilangkanString($dataProduk['Harga_Produk']);
        $stok = $this->menghilangkanString($dataProduk['Stok_Produk']);
        $status = $this->menghilangkanString($dataProduk['Status_Tersedia_Produk']);

        $query = "UPDATE produk SET Gambar_Produk = ?, Nama_Produk = ?, Deskripsi_Produk = ?, Harga_Produk = ?, Stok_Produk = ?, Status_Tersedia_Produk = ? WHERE ID_Produk = ?";
        $statement = $this->koneksi->prepare($query);

        $statement->bind_param(
            "sssiisi",
            $gambar,
            $nama,
            $deskripsi,
            $harga,
            $stok,
            $status,
            $idProduk
        );

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getGambarProdukById($idProduk)
    {
        $sql = "SELECT Gambar_Produk FROM produk WHERE ID_Produk = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bind_param("i", $idProduk);
        $stmt->execute();

        $gambar = null;
        $stmt->bind_result($gambar);
        $stmt->fetch();
        $stmt->close();

        return $gambar;
    }

    public function hapusProduk($id)
    {
        $query = "SELECT ID_Produk, Gambar_Produk FROM produk WHERE ID_Produk=?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();
        $idPemilikFoto = $row['ID_Produk'];
        $namaFoto = $row['Gambar_Produk'];

        if ($idPemilikFoto != $id) {
            return false;
        }

        $queryDelete = "DELETE FROM produk WHERE ID_Produk=?";
        $statementDelete = $this->koneksi->prepare($queryDelete);
        $statementDelete->bind_param("i", $id);
        $isDeleted = $statementDelete->execute();

        if ($isDeleted) {
            $direktoriFoto = "../uploads/";

            if (file_exists($direktoriFoto . $namaFoto)) {
                if (unlink($direktoriFoto . $namaFoto)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
}
// ===================================PRODUK================================


// ===================================SPANDUK================================
class Spanduk
{
    private $koneksi;

    public function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    private function menghilangkanString($string)
    {
        return htmlspecialchars(mysqli_real_escape_string($this->koneksi, $string));
    }

    public function tambahSpanduk($data)
    {
        $idAdmin = $this->menghilangkanString($data['ID_Admin']);
        $gambar = $this->menghilangkanString($data['Gambar_Spanduk']);
        $namaSpanduk = $this->menghilangkanString($data['Nama_Spanduk']);

        $query = "INSERT INTO spanduk (ID_Admin, Gambar_Spanduk, Nama_Spanduk) VALUES (?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "iss",
            $idAdmin,
            $gambar,
            $namaSpanduk
        );

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function tampilkanDataSpanduk()
    {
        $query = "SELECT * FROM spanduk";
        $result = $this->koneksi->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($baris = $result->fetch_assoc()) {
                $data[] = $baris;
            }
            return $data;
        } else {
            return null;
        }
    }

    public function perbaruiSpanduk($idSpanduk, $dataSpanduk)
    {
        $gambar = $this->menghilangkanString($dataSpanduk['Gambar_Spanduk']);
        $nama = $this->menghilangkanString($dataSpanduk['Nama_Spanduk']);

        $query = "UPDATE spanduk SET Gambar_Spanduk = ?, Nama_Spanduk = ? WHERE ID_Spanduk = ?";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "ssi",
            $gambar,
            $nama,
            $idSpanduk
        );

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function hapusSpanduk($id)
    {
        $query = "SELECT ID_Spanduk, Gambar_Spanduk FROM spanduk WHERE ID_Spanduk=?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();
        $idPemilikFoto = $row['ID_Spanduk'];
        $namaFoto = $row['Gambar_Spanduk'];

        if ($idPemilikFoto != $id) {
            return false;
        }

        $queryDelete = "DELETE FROM spanduk WHERE ID_Spanduk=?";
        $statementDelete = $this->koneksi->prepare($queryDelete);
        $statementDelete->bind_param("i", $id);
        $isDeleted = $statementDelete->execute();

        if ($isDeleted) {
            $direktoriFoto = "../uploads/";

            if (file_exists($direktoriFoto . $namaFoto)) {
                if (unlink($direktoriFoto . $namaFoto)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    public function getGambarSpandukById($idSpanduk)
    {
        $sql = "SELECT Gambar_Spanduk FROM spanduk WHERE ID_Spanduk = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bind_param("i", $idSpanduk);
        $stmt->execute();

        $gambar = null;
        $stmt->bind_result($gambar);
        $stmt->fetch();
        $stmt->close();

        return $gambar;
    }
}
// ===================================SPANDUK================================

// ===================================JASA================================
class Jasa
{
    private $koneksi;

    public function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    public function tambahJasa($data)
    {
        $gambar = $data['Gambar_Jasa'];
        $nama = $data['Nama_Jasa'];
        $deskripsi = $data['Deskripsi_Jasa'];
        $harga = $data['Harga_Jasa'];
        $stok = $data['Stok_Jasa'];
        $nomorRekening = $data['Nomor_Rekening_Jasa'];
        $status = $data['Status_Tersedia_Jasa'];

        $query = "INSERT INTO jasa (Gambar_Jasa, Nama_Jasa, Deskripsi_Jasa, Harga_Jasa, Stok_Jasa, Nomor_Rekening_Jasa, Status_Tersedia_Jasa) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("sssiiis", $gambar, $nama, $deskripsi, $harga, $stok, $nomorRekening, $status);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function tampilkanDataJasa()
    {
        $query = "SELECT * FROM jasa";
        $result = $this->koneksi->query($query);

        if ($result->num_rows > 0) {
            $dataJasa = array();
            while ($row = $result->fetch_assoc()) {
                $dataJasa[] = $row;
            }
            return $dataJasa;
        } else {
            return false;
        }
    }

    public function getDataJasaByID($id)
    {
        $query = "SELECT * FROM jasa WHERE ID_Jasa=?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }


    public function perbaruiJasa($idJasa, $dataJasa)
    {
        $gambar = $dataJasa['Gambar_Jasa'];
        $nama = $dataJasa['Nama_Jasa'];
        $deskripsi = $dataJasa['Deskripsi_Jasa'];
        $harga = $dataJasa['Harga_Jasa'];
        $stok = $dataJasa['Stok_Jasa'];
        $status = $dataJasa['Status_Tersedia_Jasa'];

        $query = "UPDATE jasa SET  Gambar_Jasa = ?, Nama_Jasa = ?, Deskripsi_Jasa = ?, Harga_Jasa = ?, Stok_Jasa = ?, Status_Tersedia_Jasa = ? WHERE ID_Jasa = ?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("sssiisi", $gambar, $nama, $deskripsi, $harga, $stok, $status, $idJasa);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getGambarJasaById($idJasa)
    {
        $sql = "SELECT Gambar_Jasa FROM jasa WHERE ID_Jasa = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bind_param("i", $idJasa);
        $stmt->execute();

        $gambar = null;
        $stmt->bind_result($gambar);
        $stmt->fetch();
        $stmt->close();

        return $gambar;
    }

    public function hapusJasa($id)
    {
        $query = "DELETE FROM jasa WHERE ID_Jasa = ?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("i", $id);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
// ===================================JASA================================


// =================================PENGIRIMAN=============================
class Pengiriman
{
    private $koneksi;

    public function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    private function menghilangkanString($string)
    {
        return htmlspecialchars(mysqli_real_escape_string($this->koneksi, $string));
    }

    public function tambahPengiriman($data)
    {
        $jasaPengiriman = $this->menghilangkanString($data['Jasa_Pengiriman']);
        $batasPengiriman = intval($data['Batas_Pengiriman']);
        $jarakPengiriman = intval($data['Jarak_Pengiriman']);
        $totalPengiriman = intval($data['Total_Pengiriman']);

        $query = "INSERT INTO pengiriman (Jasa_Pengiriman, Batas_Pengiriman, Jarak_Pengiriman, Total_Pengiriman) 
                  VALUES (?, ?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("siii", $jasaPengiriman, $batasPengiriman, $jarakPengiriman, $totalPengiriman);

        return $statement->execute();
    }

    public function tampilkanDataPengiriman()
    {
        $query = "SELECT * FROM pengiriman";
        $result = $this->koneksi->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($baris = $result->fetch_assoc()) {
                $data[] = $baris;
            }
            return $data;
        }
        return null;
    }

    public function hapusPengiriman($id)
    {
        $queryDelete = "DELETE FROM pengiriman WHERE ID_Pengiriman=?";
        $statementDelete = $this->koneksi->prepare($queryDelete);
        $statementDelete->bind_param("i", $id);
        $isDeleted = $statementDelete->execute();

        if ($isDeleted) {
            return true;
        } else {
            return false;
        }
    }

    public function perbaruiPengiriman($idPengiriman, $dataPengiriman)
    {
        $jasaPengiriman = $this->menghilangkanString($dataPengiriman['Jasa_Pengiriman']);
        $batasPengiriman = intval($dataPengiriman['Batas_Pengiriman']);
        $jarakPengiriman = intval($dataPengiriman['Jarak_Pengiriman']);
        $totalPengiriman = intval($dataPengiriman['Total_Pengiriman']);

        $sql = "UPDATE pengiriman 
                SET Jasa_Pengiriman = ?, Batas_Pengiriman = ?, Jarak_Pengiriman = ?, Total_Pengiriman = ? 
                WHERE ID_Pengiriman = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bind_param("siiii", $jasaPengiriman, $batasPengiriman, $jarakPengiriman, $totalPengiriman, $idPengiriman);

        return $stmt->execute();
    }
}
// =================================PENGIRIMAN=============================
