<?php 
	
	echo "<div class='container product-selling-t24'>";
	
	require_once './Model/PhanTrang_Model.php';
	echo "<hr>";
	echo "<h3>Sản Phẩm Đang Bán </h3>";
	while ($row = mysqli_fetch_array($result)) {
		require './View/PhanTrang_View.php';
	}
	echo "<div style='clear:both;'></div>";
	echo '<div class="container">';
	require_once './Model/SoTrang.php';
	echo "</div>";
	echo "</div>";
?>
