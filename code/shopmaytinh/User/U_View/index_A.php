<?php session_start(); ?>
<div class="container-fluid"  id="hid2">
<div class="row" style="background-color: skyblue;height: 50px">
<div class="col-md-1"></div>
    <div class="col-md-2" style="margin-top: 14px;">
    	<a href="index.php" style="color: white">Trang Chủ</a>
    </div>
    <div class="col-md-6">
    	<span>
    		<input style="width: 80%;margin-top: 10px;" type="text" name="">
    		<input type="submit" name="" value="Tìm">
    	</span>
    </div>
    <div class="col-md-2" style="margin-top: 5px;">
    	<div class="row">
    		<div class="col-md-2"></div>
    		<div class="col-md-6" style="margin-top: 8px;">
    			<?php if (isset($_SESSION['user']) && $_SESSION['user'] != null) {
    				 echo $_SESSION['user'] ;		
    			} ?>	
    		</div>
    		<div class="col-md-4">
    			<a href="index.php?act=taikhoanadmin"><img style="width: 50px;height: 40px;text-align: right; " src="https://image.flaticon.com/icons/png/512/44/44948.png"></a>
    		</div>
    	</div>
    </div>
   
</div>
<div class="row">
<div class="col-md-2" style='padding: 0'>
	<div class="list-menu">
         <div class="list-menu-parent">   
             <ul class="menu">
                 <li class="list-1">
                 	<a href="#">SẢN PHẨM 
                 		<img src="../../Images/show.jpg" id="show1" style="border-radius: 50%;width: 30px;height: 20px;float: right;">
                 		<img src="../../Images/hide.jpg" id="hide1" style="border-radius: 50%;width: 30px;height: 20px;float: right;">

                 	</a>
                 	
                     <ul id="hs1">
                         <li><a href="index.php?act=spdb">Sản phẩm đang bán</a></li>
                         <li><a href="index.php?act=spgg">Sản phẩm đang giảm giá</a></li>
                         <li><a href="index.php?act=themsp">Thêm sản phẩm</a></li>
                          <li><a href="index.php?act=themspgiamgia">Thêm sản phẩm giảm giá</a></li>
                         <li><a href="index.php?act=themchitietsp">Thêm, sửa chi tiết sản phẩm</a></li>
                         <li><a href="index.php?act=themmausac">Thêm Ảnh, Màu Sản Phẩm</a></li>
                         <li><a href="index.php?act=sspdb">Sửa, xóa Sản Phẩm</a></li>
                        <!--  <li><a href="#">Xóa sản phẩm</a></li> -->
                     </ul>
                 </li>
                 <li class="list-2">
                 	<a href="#">NGƯỜI DÙNG
                 		<img src="../../Images/show.jpg" id="show2" style="border-radius: 50%;width: 30px;height: 20px;float: right;">
                 		<img src="../../Images/hide.jpg" id="hide2" style="border-radius: 50%;width: 30px;height: 20px;float: right;">

                 	</a>
                 
                     <ul id="hs2">

                         <li><a href="index.php?act=danhsachnguoidung">Danh sách người dùng</a></li>
                         <li><a href="index.php?act=xoanguoidung">Phân quyền, Xóa người dùng</a></li>
                         
                     </ul>
                 </li>
                 <li class="list-5">
                 	<a href="#">ĐƠN HÀNG
                 		<img src="../../Images/show.jpg" id="showdh" style="border-radius: 50%;width: 30px;height: 20px;float: right;">
                 		<img src="../../Images/hide.jpg" id="hidedh" style="border-radius: 50%;width: 30px;height: 20px;float: right;">

                 	</a>
                 
                     <ul id="hsdh">

                         <li><a href="index.php?act=donhang">Danh Sách Đơn Hàng</a></li>
                       
                         
                     </ul>
                 </li>
                 <li class="list-3">
                 	<a href="#">CHƯƠNG TRÌNH
                 		<img src="../../Images/show.jpg" id="show3" style="border-radius: 50%;width: 30px;height: 20px;float: right;">
                 		<img src="../../Images/hide.jpg" id="hide3" style="border-radius: 50%;width: 30px;height: 20px;float: right;">

                 	</a>
                     <ul id="hs3">
                     	<li><a href="#">Chương Trình 1</a></li>
                        <li><a href="#">Chương Trình 2</a></li>
                        <li><a href="#">Chương Trình 3</a></li>
                        <li><a href="#">Chương Trình 4</a></li>
                     </ul>
                 </li>
                 <li class="list-4">
                 	<a href="#">KHÁC
                 		<img src="../../Images/show.jpg" id="show4" style="border-radius: 50%;width: 30px;height: 20px;float: right;">
                 		<img src="../../Images/hide.jpg" id="hide4" style="border-radius: 50%;width: 30px;height: 20px;float: right;">

                 	</a>
                     <ul id="hs4">
                        <li><a href="#">Thay đổi banner</a></li>
                        <li><a href="index.php?act=xembinhluan">Xem Bình luận</a></li>
                        <li><a href="../../index.php">Trang Bán</a></li>
                     </ul>
  
                 </li>
  
             </ul>
  
         </div>

		</div>
</div>
