
<div class="container" style="margin-top: 55px;">
	<h3 style="margin-left: 5%;">
		<?php echo "$num Kết quả trả về với từ khóa <b style='font-size:30px'>$search</b>"; ?>
	</h3>
	
		<hr>
    <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
    	<a href="index.php?action=xemsp&loaisp=<?php echo $row['Loai_SP'] ?>&id=<?php echo $row['id'] ?>">
    		<div class="col-md-2" style="height: 330px">
    			<img style="width: 100%;height: 210px" src=".../../Images/<?php echo $row['Hinh_Anh'] ?>"> <br>
    			<p style="text-align: center;">
    				<?php echo $row['Ten_San_Pham'] ."<br>" ?>
    				<?php 
    					if ($row['GiamGia'] == 'YES') {
    						echo "Giá Tiền : ". number_format($row['Gia_Ban']) . "đ";
    						echo "<small> - ".$row['Phan_Tram'] ."%" . "</small>";
    						echo "<br>";
    						echo "<del>Giá Cũ : ".number_format($row['Gia_Cu'])."đ</del>";
    					}
    					else{
    						echo "Giá Tiền : " . number_format($row['Gia_Cu']) . "đ";
    					}
    				?>
    			</p>
    		</div>
    	</a>
    <?php } ?>
</div>;