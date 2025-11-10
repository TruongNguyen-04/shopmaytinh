
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../Font-awsome/css/font-awsome.min.js">
    <link rel="stylesheet" type="text/css" href="../Assets/mycss.css">
     <script src="../../jquery-3.5.1.min.js" type="text/javascript" ></script>
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
margin-top: 0px;    
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
      <div class="tab-pane active" id="pic-1"><img id="show" src=".../../Images/<?php echo $rowha['Hinh_Anh'] ?>">
      </div> 
      <div class="tab-pane" id="pic-2"><img id="show" src=".../../Images/<?php echo $img['AnhMau1'] ?>">
      </div> 
      <div class="tab-pane" id="pic-3"><img  id="show"src=".../../Images/<?php echo $img['AnhMau2'] ?>">
      </div> 
      <div class="tab-pane" id="pic-4"><img id="show" src=".../../Images/<?php echo $img['AnhMau3'] ?>">
      </div> 
      <div class="tab-pane" id="pic-5"><img id="show" src=".../../Images/<?php echo $img['AnhMau4'] ?>">
      </div> 
     </div> 
     <ul class="preview-thumbnail nav nav-tabs">
      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img id="hide" src=".../../Images/<?php echo $rowha['Hinh_Anh'] ?>"></a>
      </li> 
      <li><a data-target="#pic-2" data-toggle="tab"><img id="hide" src=".../../Images/<?php echo $img['AnhMau1'] ?>"></a>
      </li> 
      <li><a data-target="#pic-3" data-toggle="tab"><img id="hide" src=".../../Images/<?php echo $img['AnhMau2'] ?>"></a>
      </li> 
      <li><a data-target="#pic-4" data-toggle="tab"><img id="hide" src=".../../Images/<?php echo $img['AnhMau3'] ?>"></a>
      </li> 
      <li><a data-target="#pic-5" data-toggle="tab"><img id="hide" src=".../../Images/<?php echo $img['AnhMau4'] ?>"></a>
      </li> 
     </ul> 
    </div> 
    <div class="details col-md-4"> 
      <form method="POST">
      	<p>
						<h1 style='font-size:20px;'>
            <b> <?php echo $rowha['Ten_San_Pham'] ?> </b>     
            </h1>
					</p>
					
					<p>
            <?php 
              if ($rowsp['Man_Hinh'] != NULL || $rowsp['Man_Hinh'] != "") {
                 echo "Màn Hình :" .$rowsp['Man_Hinh'];
              }
            ?>
					
					</p>
					
					<p>
            <?php 
              if ($rowsp['Do_Phan_Giai'] != NULL || $rowsp['Do_Phan_Giai'] != "") {
                 echo"Độ Phân Giải :". $rowsp['Do_Phan_Giai'];
              }
            ?>
					
					</p>

					<p>
            <?php 
              if ($rowsp['He_Dieu_Hanh'] != NULL || $rowsp['He_Dieu_Hanh'] != "") {
                echo"Hệ Điều Hành :". $rowsp['He_Dieu_Hanh'];
              }
            ?>
					</p>

					<p>
            <?php 
              if ($rowsp['CPU'] != NULL || $rowsp['CPU'] != "") {
                echo "CPU :". $rowsp['CPU'];
              }
            ?>

					</p>

					<p>
            <?php 
              if ($rowsp['Camera_Truoc'] != NULL || $rowsp['Camera_Truoc'] != "") {
               echo "Camera Trước :". $rowsp['Camera_Truoc'];
              }
            ?>
						
					</p>

					<p>
             <?php 
              if ($rowsp['Camera_Sau'] != NULL || $rowsp['Camera_Sau'] != "") {
               echo "Camera Sau :". $rowsp['Camera_Sau'];
              }
            ?>
		
					</p>

					<p>
            <?php 
              if ($rowsp['RAM'] != NULL || $rowsp['RAM'] != "") {
                echo "RAM :". $rowsp['RAM'];
              }
             ?>
					</p>

          <p>
            <?php 
              if ($rowsp['Bo_Nho_Trong'] != NULL || $rowsp['Bo_Nho_Trong'] != "") {
                echo "Bộ Nhớ Trong :" . $rowsp['Bo_Nho_Trong'];
              }
            ?>
          </p>
			

				<!-- 	<p>
						SIM : <?php echo $rowsp['SIM'] ?>
					</p> -->

					<p>
            <?php 
              if ($rowsp['PIN'] != NULL || $rowsp['PIN'] != "") {
               echo "PIN :". $rowsp['PIN'];
              }
            ?>

					</p>

					<p>
            <?php 
              if ($rowsp['Dung_Luong_Pin'] != NULL || $rowsp['Dung_Luong_Pin'] != "") {
               echo "Dung Lượng Pin :". $rowsp['Dung_Luong_Pin'];
              }
             ?>
				
					</p>

				<p>
           
            <?php if ($rowha['GiamGia'] == 'YES') {
              $giatien = $rowha['Gia_Ban'];
              echo "Giá : " . number_format($rowha['Gia_Ban'])."đ";
              echo "<small> -".$rowha['Phan_Tram']."% </small>";
              echo "Giá Cũ : ".number_format($rowha['Gia_Cu'])."đ";
            }else{
              $giatien = $rowha['Gia_Cu'];
              echo "Giá : " . number_format($rowha['Gia_Cu']) . "đ";
            } ?>
          </p>
          <p>
            <?php if ($rowha['GiamGia'] == "YES") { ?>
             <del> Giá Cũ : <?php echo number_format($rowha['Gia_Cu'])."đ" ?></del>
            <?php }else{
              
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
            <input id="submit" type="submit" name="mualt"  class="btn-cart" value="Thêm Vào Giỏ Hàng">
          </p>
          </form>
     	</div> 
	 <div class="col-md-2">
		<?php require_once 'CamKet_V.php'; ?>
	</div>
    </div> 
   </div> 
  </div> 
 </div>
</div> 
</body>
</html>
				
