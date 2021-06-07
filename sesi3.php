<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Mengubah variabel sesi
$_SESSION["nama"] = "Ramadhani Nasuha";
echo "Variabel sesi telah diubah.";
?>
</body>
</html>