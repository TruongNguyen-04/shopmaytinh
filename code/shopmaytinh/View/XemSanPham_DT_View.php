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
#submit{
  width: 200px;
  background-color: skyblue;
  color: yellow;
  border-radius: 5%;
   padding: 5px 20px;
   color: white;
margin-top: 20px;
  }
#ms{
  border-style: ridge;
  border-color: silver;
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
  text-transform: uppercase;  
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
  text-transform: uppercase;  
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
 
.view-product-name-t24{
  font-size: 20px;
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
  </style>
</head>
<body>
<div class="container"> 
 <div class="card"> 
  <div class="container-fliud"> 
   <div class="wrapper row"> 
    <div class="preview col-md-6"> 
     <div class="preview-pic tab-content"> 
      <div class="tab-pane active" id="pic-1"><img id="show" src=".../../Images/<?php echo $rowha['Hinh_Anh'] ?>"   >
      </div> 
      <div class="tab-pane" id="pic-2"><img  id="show" src=".../../Images/<?php echo $img['AnhMau1'] ?>"  >
      </div> 
      <div class="tab-pane" id="pic-3"><img id="show" src=".../../Images/<?php echo $img['AnhMau2'] ?>"  >
      </div> 
      <div class="tab-pane" id="pic-4"><img id="show" src=".../../Images/<?php echo $img['AnhMau3'] ?>"  >
      </div> 
      <div class="tab-pane" id="pic-5"><img id="show" src=".../../Images/<?php echo $img['AnhMau4'] ?>"  >
      </div> 
     </div> 
     <ul class="preview-thumbnail nav nav-tabs">
      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img id="hide" src=".../../Images/<?php echo $rowha['Hinh_Anh'] ?>"  ></a>
      </li> 
      <li><a data-target="#pic-2" data-toggle="tab"><img id="hide"  src=".../../Images/<?php echo $img['AnhMau1'] ?>"  ></a>
      </li> 
      <li><a data-target="#pic-3" data-toggle="tab"><img id="hide"  src=".../../Images/<?php echo $img['AnhMau2'] ?>"  ></a>
      </li> 
      <li><a data-target="#pic-4" data-toggle="tab"><img id="hide"  src=".../../Images/<?php echo $img['AnhMau3'] ?>"  ></a>
      </li> 
      <li><a data-target="#pic-5" data-toggle="tab"><img id="hide"  src=".../../Images/<?php echo $img['AnhMau4'] ?>"  ></a>
      </li> 
     </ul> 
    </div> 
    <div class="details col-md-4"> 
      <form method="POST">
      <p>
            <h2 class="view-product-name-t24">
             <b> <?php echo $rowha['Ten_San_Pham']; ?></b>
            </h2>
          </p>

          <?php 
            if ($rowsp['Man_Hinh'] != null) {
              echo '<p>
                  Màn Hình :' . $rowsp["Man_Hinh"]. '
                </p>';
            }else{}
          ?>

          <?php 
            if ($rowsp['Do_Phan_Giai'] != null) {
              echo "<p> Độ Phân Giải : ".$rowsp['Do_Phan_Giai']."</p>";
            }
            else{}
          ?>
          
          <?php 
            if ($rowsp['He_Dieu_Hanh'] != null) {
              echo "<p> Hệ Điều Hành : ".$rowsp['He_Dieu_Hanh']."</p>";
            }else{}
          ?>

          <?php 
            if ($rowsp['CPU'] != null) {
              echo "<p> CPU : ".$rowsp['CPU']."</p>";
            }else{}
          ?>

          <?php 
            if ($rowsp['Camera_Truoc'] != null) {
              echo "<p> Camera Trước : ".$rowsp['Camera_Truoc']."</p>";
            }else{}
          ?>
          
          <?php 
            if ($rowsp['Camera_Sau'] != null) {
              echo "<p> Camera Sau : ".$rowsp['Camera_Sau']."</p>";
            }else{}
          ?>

          <?php 
            if ($rowsp['RAM'] != null) {
              echo "<p> RAM : ".$rowsp['RAM']."</p>";
            }else{}
          ?>

          <?php 
            if ($rowsp['Bo_Nho_Trong'] != null) {
              echo "<p> Bộ Nhớ Trong : ".$rowsp['Bo_Nho_Trong']."</p>";
            }else{}
          ?>

          <?php 
            if ($rowsp['SIM'] != null) {
              echo "<p> SIM : ".$rowsp['SIM']."</p>";
            }else{}
          ?>

          <?php 
            if ($rowsp['PIN'] != null) {
              echo "<p> PIN : ".$rowsp['PIN']."</p>";
            }else{}
          ?>

          <?php 
            if ($rowsp['Dung_Luong_Pin'] != null) {
              echo "<p> Dung Lượng Pin : ".$rowsp['Dung_Luong_Pin']."</p>";
            }else{}
          ?>

          <p>
           
            <?php if ($rowha['GiamGia'] == 'YES') {
              $giatien = $rowha['Gia_Ban'];
              echo "Giá : " . number_format($rowha['Gia_Ban'])."đ";
              echo "<small> -".$rowha['Phan_Tram']."% </small>";
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
                echo "<select name='mausac' id='ms'>";
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
                  //  echo "<option value='MacDinh'>";
                  // echo "Mặc Định";
                  // echo "</option>";
                  echo "<option value='NgauNhien'>";
                  echo "Ngẫu Nhiên";
                  echo "</option>";
                

                echo "</select>";
                 
              } ?>
          </p>
           <p>
            <input type="hidden" name="soluong" value="1">
            <input id="submit" type="submit" name="muadt" class="btn-cart" value="Thêm Vào Giỏ Hàng">
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
