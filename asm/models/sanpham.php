<?php

function loadall_sanpham($keyw = "") {
    $sql = "select * from sanpham where 1";
    if($keyw != "") {
        $sql .= ' and name like "%'.$keyw.'%"';
    }
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}

?>