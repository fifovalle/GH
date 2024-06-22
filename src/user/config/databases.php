<?php
include 'connection.php';

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

    public function autentikasiUser($email, $kataSandi)
    {
        $query = "SELECT * FROM pengguna WHERE Email_Pengguna = ? OR Nama_Pengguna = ?";
        $statement = $this->koneksi->prepare($query);
        $statement->bind_param("ss", $email, $email);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedKataSandi = $row['Kata_Sandi_Pengguna'];
            if (password_verify($kataSandi, $hashedKataSandi)) {
                return $row;
            }
        }
        return null;
    }

    public function tambahPengguna($data)
    {
        $query = "INSERT INTO pengguna (Nama_Depan_Pengguna, Nama_Belakang_Pengguna, Nama_Pengguna, Email_Pengguna, Kata_Sandi_Pengguna, Konfirmasi_Kata_Sandi_Pengguna, No_Telepon_Pengguna, Alamat_Pengguna, Status_Verifikasi_Pengguna, Token_Pengguna) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $statement = $this->koneksi->prepare($query);
        $statement->bind_param(
            "sssssssssi",
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