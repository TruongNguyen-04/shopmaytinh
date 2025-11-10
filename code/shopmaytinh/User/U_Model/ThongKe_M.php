<?php 
	require_once '../U_Model/KetNoiDb.php';
	$sql = "SELECT SUM(So_Luong) FROM danh_sach_san_pham";

	$qr = mysqli_query($connect,$sql);

	$tongsp = mysqli_fetch_array($qr);

	$TongSP = $tongsp[0];
	// Đếm iphone
	$sql2 = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='IPHONE'";

	$qr = mysqli_query($connect,$sql2);

	$iphone = mysqli_fetch_array($qr);

	$IPHONE = $iphone[0];
	// Đếm samsung
	$sql3 = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='SAMSUNG'";

	$qr = mysqli_query($connect,$sql3);

	$samsung = mysqli_fetch_array($qr);

	$SAMSUNG = $samsung[0];
	//Đếm huawei
	$sql4 = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='HUAWEI'";

	$qr = mysqli_query($connect,$sql4);

	$huawei = mysqli_fetch_array($qr);

	$HUAWEI = $huawei[0];
	// Đếm mobiistar
	$sql5 = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='MOBIISTAR'";

	$qr = mysqli_query($connect,$sql5);

	$mobiistar = mysqli_fetch_array($qr);

	$MOBIISTAR = $mobiistar[0];
	// Đếm nokia
	$sql6 = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='NOKIA'";

	$qr = mysqli_query($connect,$sql6);

	$nokia = mysqli_fetch_array($qr);

	$NOKIA = $nokia[0];

	// Đếm xiaomi
	$sql7 = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='XIAOMI'";

	$qr = mysqli_query($connect,$sql7);

	$xiaomi = mysqli_fetch_array($qr);

	$XIAOMI = $xiaomi[0];

	// Đếm realme
	$sql8 = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='REALME'";

	$qr = mysqli_query($connect,$sql8);

	$realme = mysqli_fetch_array($qr);

	$REALME = $realme[0];

	// Đếm iphone
	$sql9 = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='IPHONE'";

	$qr = mysqli_query($connect,$sql9);

	$iphone = mysqli_fetch_array($qr);

	$IPHONE = $iphone[0];

	// Đếm oppo
	$op = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='OPPO'";

	$qr = mysqli_query($connect,$op);

	$oppo = mysqli_fetch_array($qr);

	$OPPO = $oppo[0];

	// Đếm vivo
	$vi = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='VIVO'";

	$qr = mysqli_query($connect,$vi);

	$vivo = mysqli_fetch_array($qr);

	$VIVO = $vivo[0];

	// Đếm mobell
	$mo = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='MOBELL'";

	$qr = mysqli_query($connect,$mo);

	$mobell = mysqli_fetch_array($qr);

	$MOBELL = $mobell[0];

	// Đếm Vsmart
	$vs = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='VSMART'";

	$qr = mysqli_query($connect,$vs);

	$vsmart = mysqli_fetch_array($qr);

	$VSMART = $vsmart[0];

	// Đếm masstel
	$ms = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='MASSTEL'";

	$qr_masstel = mysqli_query($connect,$ms);

	$masstel = mysqli_fetch_array($qr_masstel);

	$MASSTEL = $masstel[0];

	// Đếm dell
	$de = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='DELL'";

	$qr = mysqli_query($connect,$de);

	$dell = mysqli_fetch_array($qr);

	$DELL = $dell[0];

	// Đếm hp
	$h = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='HP'";

	$qr = mysqli_query($connect,$h);

	$hp = mysqli_fetch_array($qr);

	$HP = $hp[0];

	// Đếm asus
	$as = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='ASUS'";

	$qr = mysqli_query($connect,$as);

	$asus = mysqli_fetch_array($qr);

	$ASUS = $asus[0];

	// Đếm macbook
	$mac = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='MACBOOK'";

	$qr = mysqli_query($connect,$mac);

	$macbook = mysqli_fetch_array($qr);

	$MACBOOK = $macbook[0];

	// Đếm thinkpad
	$th = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='THINKPAD'";

	$qr = mysqli_query($connect,$th);

	$thinkpad = mysqli_fetch_array($qr);

	$THINKPAD = $thinkpad[0];

	// Đếm acer
	$ac = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='ACER'";

	$qr = mysqli_query($connect,$ac);

	$acer = mysqli_fetch_array($qr);

	$ACER = $acer[0];

	// Đếm tai nghe bluetooth
	$tb = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='PK_TN_BL'";

	$qr = mysqli_query($connect,$tb);

	$tbl = mysqli_fetch_array($qr);

	$TNBL = $tbl[0];

	// Đếm D-link
	$d = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='PK_D-L'";

	$qr = mysqli_query($connect,$d);

	$dl = mysqli_fetch_array($qr);

	$DL = $dl[0];

	// Đếm chuột không dây
	$mou = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='PK_MT_CKD'";

	$qr = mysqli_query($connect,$mou);

	$ckd = mysqli_fetch_array($qr);

	$CKD = $ckd[0];

	// Đếm loa bluetooth
	$lbl = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='PK_LOA_BL'";

	$qr = mysqli_query($connect,$lbl);

	$loabl = mysqli_fetch_array($qr);

	$LOABL = $loabl[0];

	// Đếm tai nghe có dây
	$tn = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='PK_TN'";

	$qr = mysqli_query($connect,$tn);

	$tncd = mysqli_fetch_array($qr);

	$TNCD = $tncd[0];

	// Đếm sạc dự phòng
	$sac = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='PK_SDP'";

	$qr = mysqli_query($connect,$sac);

	$sdp = mysqli_fetch_array($qr);

	$SDP = $sdp[0];

	// Đếm bàn phím
	$ban = "SELECT SUM(So_Luong) FROM danh_sach_san_pham where Dong_May ='PK_BP'";

	$qr = mysqli_query($connect,$ban);

	$bp = mysqli_fetch_array($qr);

	$BP = $bp[0];
?>	