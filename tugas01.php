<?php
function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}

$sisi = 3; 
$luasPersegi = hitungLuasPersegi($sisi);
echo "Luas persegi dengan sisi $sisi adalah: " . $luasPersegi;
?>
