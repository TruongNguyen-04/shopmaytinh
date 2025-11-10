
<?php 
	
	echo "<div class='container'>";
	require_once './Model/GiamGia/GiamGia_Model.php';
	echo "<h3> Sản Phẩm Giảm Giá </h3>";
	echo "<hr>";
	echo "<marquee>";
	while ($row = mysqli_fetch_array($RESULT)) {
		require './View/GiamGia/PhanTrang_GiamGia_View.php';
	}
	echo "</marquee>";
	echo "<div style='clear:both;'></div>";
	// echo "<div class='containerr'>";
	// require_once './Model/GiamGia/SoTrang_GiamGia_Model.php';
	// echo "</div>";
	echo "</div>";

?>