<?php 
	
	if (!isset($_SESSION['arMua'][$id])) {
		$_SESSION['arMua'][$id] = array(	'id' =>$id,
											
											'TenSanPham' => $TenSanPham,
											'MauSac'  => $MauSac,
											'SoLuong' => $SoLuong,
											'GiaTien' => $GiaTien,

										);
		}
	else{
		$_SESSION['arMua'][$id]['SoLuong'] += $SoLuong;
	}
	
?>