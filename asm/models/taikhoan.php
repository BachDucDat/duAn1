<?php

function dang_ky($email, $user, $pass) {
    $sql = "insert into taikhoan (email, user, pass) values ('$email', '$user', '$pass')";
    pdo_execute($sql);
}

function dang_nhap($user, $pass) {
    $sql = "select * from taikhoan where user='$user' and pass='$pass'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}

?>