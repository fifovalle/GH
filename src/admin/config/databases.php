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
        $query = "INSERT INTO admin (Foto_Admin, Nama_Depan_Admin, Nama_Belakang_Admin,  Email_Admin, Nama_Pengguna_Admin, Kata_Sandi_Admin, Konfirmasi_Kata_Sandi_Admin, No_Telepon_Admin, Alamat_Admin, Peran_Admin, Status_Verifikasi_Admin, Token_Admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "sssssssisssi",
            $this->escapeString($data['Foto_Admin']),
            $this->escapeString($data['Nama_Depan_Admin']),
            $this->escapeString($data['Nama_Belakang_Admin']),
            $this->escapeString($data['Nama_Pengguna_Admin']),
            $this->escapeString($data['Email_Admin']),
            $this->escapeString($data['Kata_Sandi_Admin']),
            $this->escapeString($data['Konfirmasi_Kata_Sandi_Admin']),
            $this->escapeString($data['No_Telepon_Admin']),
            $this->escapeString($data['Peran_Admin']),
            $this->escapeString($data['Alamat_Admin']),
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
        $query = "INSERT INTO pengguna (Foto_Pengguna, Nama_Depan_Pengguna, Nama_Belakang_Pengguna,  Email_Pengguna, Nama_Pengguna, Kata_Sandi_Pengguna, Konfirmasi_Kata_Sandi_Pengguna, No_Telepon_Pengguna, Alamat_Pengguna, Status_Verifikasi_Pengguna, Token_Pengguna) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "ssssssisssi",
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
        $query = "SELECT * FROM berita LEFT JOIN admin ON berita.ID_Admin = admin.ID_Admin";
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
        // Sanitasi input untuk setiap nilai
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
            $direktoriFoto = "../../uploads/";

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
        $idAdmin = $this->menghilangkanString($data['ID_Admin']);
        $namaTestimoni = $this->menghilangkanString($data['Nama_Testimoni']);
        $pesanTestimoni = $this->menghilangkanString($data['Pesan_Testimoni']);
        $statusTestimoni = $this->menghilangkanString($data['Status_Testimoni']);

        $query = "INSERT INTO testimoni (ID_Admin, Nama_Testimoni, Pesan_Testimoni, Status_Testimoni) VALUES (?, ?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "isss",
            $idAdmin,
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
        $query = "SELECT * FROM testimoni LEFT JOIN admin ON testimoni.ID_Admin = admin.ID_Admin";
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
        $idAdmin = $this->menghilangkanString($data['ID_Admin']);
        $namaProduk = $this->menghilangkanString($data['Nama_Produk']);
        $deskripsiProduk = $this->menghilangkanString($data['Deskripsi_Produk']);
        $hargaProduk = $this->menghilangkanString($data['Harga_Produk']);
        $stokProduk = $this->menghilangkanString($data['Stok_Produk']);
        $nomorRekeningProduk = $this->menghilangkanString($data['Nomor_Rekening_Produk']);
        $statusTersediaProduk = $this->menghilangkanString($data['Status_Tersedia_Produk']);

        $query = "INSERT INTO produk (ID_Admin, Nama_Produk, Deskripsi_Produk, Harga_Produk, Stok_Produk, Nomor_Rekening_Produk, Status_Tersedia_Produk) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "issiiss",
            $idAdmin,
            $namaProduk,
            $deskripsiProduk,
            $hargaProduk,
            $stokProduk,
            $nomorRekeningProduk,
            $statusTersediaProduk
        );

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editProduk($data)
    {
        $idProduk = $this->menghilangkanString($data['ID_Produk']);
        $idAdmin = $this->menghilangkanString($data['ID_Admin']);
        $namaProduk = $this->menghilangkanString($data['Nama_Produk']);
        $deskripsiProduk = $this->menghilangkanString($data['Deskripsi_Produk']);
        $hargaProduk = $this->menghilangkanString($data['Harga_Produk']);
        $stokProduk = $this->menghilangkanString($data['Stok_Produk']);
        $nomorRekeningProduk = $this->menghilangkanString($data['Nomor_Rekening_Produk']);
        $statusTersediaProduk = $this->menghilangkanString($data['Status_Tersedia_Produk']);

        $query = "UPDATE produk SET ID_Admin = ?, Nama_Produk = ?, Deskripsi_Produk = ?, Harga_Produk = ?, Stok_Produk = ?, Nomor_Rekening_Produk = ?, Status_Tersedia_Produk = ? WHERE ID_Produk = ?";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "issiissi",
            $idAdmin,
            $namaProduk,
            $deskripsiProduk,
            $hargaProduk,
            $stokProduk,
            $nomorRekeningProduk,
            $statusTersediaProduk,
            $idProduk
        );

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function tampilkanDataProduk()
    {
        $query = "SELECT * FROM produk LEFT JOIN admin ON testimoni.ID_Admin = admin.ID_Admin";
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

    public function hapusProduk($idProduk)
    {
        $idProduk = $this->menghilangkanString($idProduk);

        $query = "DELETE FROM produk WHERE ID_Produk = ?";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("i", $idProduk);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
// ===================================PRODUK================================
