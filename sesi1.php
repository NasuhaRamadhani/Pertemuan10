<?php
// memulai sesi
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
//set variabel sesi
// Set variabel sesi
$_SESSION["username"] = "nasuha";
$_SESSION["nama"] = "Nasuha Ramadhani";
echo "Variabel sesi telah diciptakan.";
?>
</body>
</html>