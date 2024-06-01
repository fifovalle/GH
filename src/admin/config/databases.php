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
            "ssssssssissi",
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
// ===================================PENGGUNA===================================