<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <style type="text/css">
  body {  
font-family:Arial, Helvetica, sans-serif;   
overflow-x: hidden;
}
 
img {   
max-width: 100%;

}

 #show{
  height: 450px;
 }
 #hide{
  height: 100px;
 }
.preview {  
display: -webkit-box;   
display: -webkit-flex;  
display: -ms-flexbox;   
display: flex;  
-webkit-box-orient: vertical;   
-webkit-box-direction: normal;  
-webkit-flex-direction: column; 
-ms-flex-direction: column; 
flex-direction: column;
} 
 
@media screen and (max-width: 996px) { 
.preview { 
margin-bottom: 20px;
}
}
 
.preview-pic {  
-webkit-box-flex: 1;    
-webkit-flex-grow: 1;   
-ms-flex-positive: 1;   
flex-grow: 1;
}
 
.preview-thumbnail.nav-tabs {   
border: none;   
margin-top: 15px;
}
 
.preview-thumbnail.nav-tabs li {    
width: 18%; 
margin-right: 2.5%;
}
 
.preview-thumbnail.nav-tabs li img {    
max-width: 100%;    
display: block;
}
 
.preview-thumbnail.nav-tabs li a {  
padding: 0; 
margin: 0;  
cursor:pointer;
}
 
.preview-thumbnail.nav-tabs li:last-of-type {   
margin-right: 0;
}
 
.tab-content {  
overflow: hidden;
}
 
.tab-content img {  
width: 100%;    
-webkit-animation-name: opacity;    
animation-name: opacity; 
-webkit-animation-duration: .3s; 
animation-duration: .3s;
}
 
.card { 
margin-top: 50px;    
/*background: #eee;*/
padding: 3em;   
line-height: 1.5em;
} 
 
@media screen and (min-width: 997px) { 
.wrapper { 
display: -webkit-box; 
display: -webkit-flex; 
display: -ms-flexbox; 
display: flex;
}
}
 
.details {  
display: -webkit-box;
    display: -webkit-flex;  
display: -ms-flexbox;   
display: flex;  
-webkit-box-orient: vertical;   
-webkit-box-direction: normal;  
-webkit-flex-direction: column; 
-ms-flex-direction: column; 
flex-direction: column;
}
 
.colors {   
-webkit-box-flex: 1;    
-webkit-flex-grow: 1;   
-ms-flex-positive: 1;   
flex-grow: 1;
}
 
.product-title, .price, .sizes, .colors {   
text-transform: UPPERCASE;  
font-weight: bold;
}
 
.checked, .price span { 
color: #ff9f1a;
}
 
.product-title, .rating, .product-description, .price, .vote, .sizes {  
margin-bottom: 15px;
}
 
.product-title {    
margin-top: 0;
}
 
.size {
    margin-right: 10px;
}
 
.size:first-of-type {   
margin-left: 40px;
}
 
.color {    
display: inline-block;  
vertical-align: middle; 
margin-right: 10px; 
height: 2em;    
width: 2em; 
border-radius: 2px;
}
 
.color:first-of-type {  
margin-left: 20px;
}
 
.add-to-cart, .like {   
background: #ff9f1a;    
padding: 1.2em 1.5em;   
border: none;   
text-transform: UPPERCASE;  
font-weight: bold;  
color: #fff;    
text-decoration:none; 
-webkit-transition: background .3s ease; 
transition: background .3s ease;
}
 
.add-to-cart:hover, .like:hover {   
background: #b36800;    
color: #fff;    
text-decoration:none;
}
 
.not-available {    
text-align: center; 
line-height: 2em;
}
 
.not-available:before { 
font-family: fontawesome;   
content: "\f00d";   
color: #fff;
}
 
.orange {   
background: #ff9f1a;
}
 
.green {    
background: #85ad00;
}
 
.blue { 
background: #0076ad;
}
 
.tooltip-inner {    
padding: 1.3em;
} 
 
@-webkit-keyframes opacity { 
0% { opacity: 0; -webkit-transform: scale(3); transform: scale(3);} 
100% { opacity: 1; -webkit-transform: scale(1); transform: scale(1);}
} 
 
@keyframes opacity { 
0% { opacity: 0; -webkit-transform: scale(3); transform: scale(3);} 
100% { opacity: 1; -webkit-transform: scale(1); transform: scale(1);}
}
 #submit{
       width: 200px;
    background-color: skyblue;
    color: yellow;
    border-radius: 5%;
    padding: 5px 20px;
    color: white;
    margin-top: 20px;
  }
  </style>
</head>
<body>
  <div class="container"> 
 <div class="card"> 
  <div class="container-fliud"> 
   <div class="wrapper row"> 
    <div class="preview col-md-6"> 
     <div class="preview-pic tab-content"> 
      <div class="tab-pane active" id="pic-1"><img id="show" src=".../../Images/<?php echo $ktra['Hinh_Anh'] ?>" alt='Không tìm thấy ảnh' >
      </div> 
      <div class="tab-pane" id="pic-2"><img  id="show" src=".../../Images/<?php echo $img['AnhMau1'] ?>" alt='Không tìm thấy ảnh'>
      </div> 
      <div class="tab-pane" id="pic-3"><img id="show" src=".../../Images/<?php echo $img['AnhMau2'] ?>" alt='Không tìm thấy ảnh'>
      </div> 
      <div class="tab-pane" id="pic-4"><img id="show" src=".../../Images/<?php echo $img['AnhMau3'] ?>" alt='Không tìm thấy ảnh'>
      </div> 
      <div class="tab-pane" id="pic-5"><img id="show" src=".../../Images/<?php echo $img['AnhMau4'] ?>" alt='Không tìm thấy ảnh'>
      </div> 
     </div> 
     <ul class="preview-thumbnail nav nav-tabs">
      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img id="hide" src=".../../Images/<?php echo $ktra['Hinh_Anh'] ?>" alt='Không tìm thấy ảnh'></a>
      </li> 
      <li><a data-target="#pic-2" data-toggle="tab"><img id="hide"  src=".../../Images/<?php echo $img['AnhMau1'] ?>" alt='Không tìm thấy ảnh'></a>
      </li> 
      <li><a data-target="#pic-3" data-toggle="tab"><img id="hide"  src=".../../Images/<?php echo $img['AnhMau2'] ?>" alt='Không tìm thấy ảnh'></a>
      </li> 
      <li><a data-target="#pic-4" data-toggle="tab"><img id="hide"  src=".../../Images/<?php echo $img['AnhMau3'] ?>" alt='Không tìm thấy ảnh'></a>
      </li> 
      <li><a data-target="#pic-5" data-toggle="tab"><img id="hide"  src=".../../Images/<?php echo $img['AnhMau4'] ?>" alt='Không tìm thấy ảnh'></a>
      </li> 
     </ul> 
    </div> 
    <div class="details col-md-4"> 
      <form method="POST">
      	<p>
			<h2 style="margin-left: 10px;"><?php echo $ktra['Ten_San_Pham']; ?></h2>
			</p>

			<?php 
				if ($pk['Tuong_Thich']!=null) {
					echo "<p> Tương Thích : ".$pk['Tuong_Thich']."</p>";
				}
				else{}
			?>
			
			<?php 
				if ($pk['Cong_Ket_Noi']!=null) {
					echo "<p> Cổng Kết Nối : ".$pk['Cong_Ket_Noi']."</p>";
				}
				else{}
			?>
			
			<?php 
				if ($pk['Thoi_Gian_Sac'] != null) {
					echo "<p> Thời Gian Sạc : ".$pk['Thoi_Gian_Sac']."</p>";
				}
				else{}
			?>

			<?php 
				if ($pk['Thoi_Gian_Su_Dung'] != null) {
					echo "<p> Thời Gian Sử Dụng : ".$pk['Thoi_Gian_Su_Dung']."</p>";
				}
				else{}
			?>
			

			<?php 
				if ($pk['Thuong_Hieu'] != null) {
					echo "<p>
							Thương Hiệu :" .$pk['Thuong_Hieu']. "
						</p>";
				}
				else{}
			?>

			<?php 
				if ($pk['Xuat_Xu'] != null) {
					echo "<p> Xuất Xứ :".$pk['Xuat_Xu']."</p>";
				}
				else{}
			?>

			<p>
				
				<?php if ($ktra['GiamGia'] == 'YES') {
					$giatien = $ktra['Gia_Ban'];
					 	echo "Giá : " .number_format($ktra['Gia_Ban'])."đ";
					  	echo "<del> -".$ktra['Phan_Tram']."% </del>";
				 }else{
				 	$giatien = $ktra['Gia_Cu'];
				 	echo "Giá : " .number_format($ktra['Gia_Cu'])."đ";
				 } ?>
			</p>

			<p>
				 <?php if ($ktra['GiamGia'] == "YES") { ?>
    			 <del> Giá Cũ : <?php echo number_format($ktra['Gia_Cu'])."đ" ?></del>
  				  <?php }else{
  				  	// echo "Giá Tiền : " . number_format($ktra['Gia_Cu']) . "đ";
  				  } ?>
			</p>
			<p>
			<?php 
		      if ($img['TenMau1']!=""||$img['TenMau2']!=""||$img['TenMau3']!=""||$img['TenMau4']!="") { 
		      echo "Màu Sắc : "; 
		        echo "<select name='mausac'>";
		        if ($img['TenMau1']!="") {
		          echo "<option value=".$img['TenMau1'].">";
		          echo $img['TenMau1'];
		          echo "</option>";
		        }
		        if ($img['TenMau2']!="") {
		          echo "<option value=".$img['TenMau2'].">";
		          echo $img['TenMau2'];
		          echo "</option>";
		        }
		        if ($img['TenMau3']!="") {
		          echo "<option value=".$img['TenMau3'].">";
		          echo $img['TenMau3'];
		          echo "</option>";
		        }
		        if ($img['TenMau4']!="") {
		          echo "<option value=".$img['TenMau4'].">";
		          echo $img['TenMau4'];
		          echo "</option>";
		        }
		        	  echo "<option value='MacDinh'>";
                  echo "Mặc Định";
                  echo "</option>";
		          echo "<option value='NgauNhien'>";
		          echo "Ngẫu Nhiên";
		          echo "</option>";
		        

		        echo "</select>";
	         
	      } ?>
		</p>
		 <p>
            <input type="hidden" name="soluong" value="1">
            <input id="submit" type="submit" name="muapk"  class="btn-cart" value="Thêm Vào Giỏ Hàng">
          </p>
       </form>
     </div> 

  
     <div class="details col-md-2">
       <?php require_once 'CamKet_V.php'; ?>
     </div>
    </div> 
   </div> 
  </div> 
 </div>
</div> 
</body>
</html>