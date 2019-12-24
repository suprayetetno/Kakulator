<?php 
global $htambah,$hkurang,$hbagi,$hkali,$hsisa;
if(isset($_POST['submit'])){
    $n1 = $_POST['number1'];
    $n2 = $_POST['number2'];
    $simbol = $_POST['simbol'];

    if($simbol == 'tambah'){
        $htambah = $n1+$n2;
    }else if($simbol == 'kurang'){
        $hkurang = $n1-$n2;
    }elseif($simbol == 'bagi'){
        $hbagi = $n1/$n2;
    }elseif($simbol == 'kali'){
        $hkali = $n1*$n2;
    }elseif($simbol == 'sisa_bagi'){
        $hsisa = $n1%$n2;
    }
}


?>
<div class="conten" align="center">
    <h2>Kalkulator Sederhana</h2>
    <form action="" method="post">
        <input type="number" name="number1" placeholder="nilai1">
        <select name="simbol">
            <option value="tambah"> + </option>
            <option value="kurang"> - </option>
            <option value="bagi"> / </option>
            <option value="kali"> x </option>
            <option value="sisa_bagi"> % </option>
        </select>
        <input type="number" name="number2" placeholder="nilai2">
        <button type="submit" name="submit"> Hitung</button><br>
        <h3>Hasil :<?= $hkurang; ?><?= $htambah; ?><?= $hbagi; ?><?= $hkali; ?><?= $hsisa; ?></h3>
    </form>
</div>