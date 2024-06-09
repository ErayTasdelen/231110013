<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kullanici_veritabani";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT isim, soyisim, email FROM kullanicilar");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kullanicilar = $stmt->fetchAll();

    if (count($kullanicilar) > 0) {
        echo "<table border='1'><tr><th>İsim</th><th>Soyisim</th><th>E-posta</th></tr>";
        foreach($kullanicilar as $kullanici) {
            echo "<tr><td>" . $kullanici['isim'] . "</td><td>" . $kullanici['soyisim'] . "</td><td>" . $kullanici['email'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Hiç kullanıcı bulunamadı.";
    }
} catch(PDOException $e) {
    echo "Hata: " . $e->getMessage();
}

$conn = null;
?>
