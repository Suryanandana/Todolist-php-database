<?php 
require_once __DIR__ . "/Database.php";
use Config\Database;

$conn = Database::getConnection();
echo "BERHASIL KONEKSI DATABASE";

?>