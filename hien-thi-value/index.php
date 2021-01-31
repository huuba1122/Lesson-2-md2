<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>thong bao chi so index</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>thong bao chi so index</legend>
        nhap vao chi so index can kiem tra: <br>
        <input type="text" name="index"> <br>
        <button type="submit">Kiem tra</button>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $index = $_POST['index'];

    function showElement($x){
        $newArr = [];
        for ($i = 0; $i<100; $i++){
            $newArr[$i] = round(rand(0,100));
        }
        if ($x <100 && $x>=0){
            echo "gia tri cua phan tu co index ".$x ." la ".$newArr[$x];
        }else{
            throw new Exception("chi so khong nam trong gioi han cua mang");
        }
    }

    try {
        showElement($index);
    }catch (Exception $e){
        echo $e->getMessage();
    }
}