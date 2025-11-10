
   
<div class="to">
    <form class="form" name="form" method="POST" style="height: 500px;" novalidate>
        <h2>Đăng Ký</h2>
       <!--  <i class="fab fa-app-store-ios"></i> -->
        <label style="margin-left: -100px;margin-top: 10px">Tên Đăng Nhập</label>
        <input type="text" name="username" required pattern="[a-zA-Z0-9áãạảàâấầẫậđềếêễệơớỡợởờóòõỏọìíỉĩịôổỗồốộđĐ\s]{5,30}" title="Tên đăng nhập 5-30 ký tự, cho phép chữ có dấu">
    
        <label style="margin-left: -150px;margin-top: 10px;">Mật Khẩu</label>
        <input type="password" style="width: 229.15px;" name="pass" required pattern="[a-zA-Z0-9]{5,30}" title="Không ký tự, 5-30 ký tự"> 

        <label style="margin-left: -184px;margin-top: 10px;">Email</label>
        <input type="email" name="email" placeholder="" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Email hợp lệ (ví dụ: user@gmail.com, student@hunre.edu.vn)"> 

        <label style="margin-left: -170px;margin-top: 10px;">Địa Chỉ</label>
        <input type="text" name="dc" required pattern="[a-zA-Z0-9áãạảàâấầẫậđềếêễệơớỡợởờóòõỏọìíỉĩịôổỗồốộđĐ -_]{10,80}"> 

        <label style="margin-left: -108px;margin-top: 10px;">Số Điện Thoại</label>
        <input type="tel" name="sdt" required pattern="[0-9]{10,11}" title="Nhập số điện thoại từ 10 đến 11 số"> 

        <input id="login" type="submit" style="width: 110%" name="nccsignup" value="Đăng Ký">
        <div style="clear: both;"></div>
       

        

    </form>  
  
</div>
 