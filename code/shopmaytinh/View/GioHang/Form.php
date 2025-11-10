
<style type="text/css">
    body{
        background-color: white;
    }
    .popup{
        position: fixed;
        top: 50px;
        left: 50%;
        transform: translateX(-50%);
        background-color: white;
        width: 90%;
        max-width: 600px;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        z-index: 1000;
    }
    .popup h2 {
        background: linear-gradient(135deg, #3498db, #2980b9);
        color: white;
        margin: 0;
        padding: 20px;
        border-radius: 8px 8px 0 0;
        text-align: center;
    }
    .popup h2 p {
        margin: 0;
        font-size: 1.5rem;
        font-weight: 600;
    }
    .close {
        position: absolute;
        top: 10px;
        right: 15px;
        background: #e74c3c;
        color: white;
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .close:hover {
        background: #c0392b;
    }
    .form-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    .form-table th {
        background: #f8f9fa;
        padding: 15px;
        text-align: left;
        font-weight: 600;
        color: #2c3e50;
        border: 1px solid #dee2e6;
    }
    .form-table td {
        padding: 15px;
        border: 1px solid #dee2e6;
    }
    .form-table input {
        width: 100%;
        padding: 10px;
        border: 2px solid #e0e0e0;
        border-radius: 5px;
        font-size: 14px;
        transition: border-color 0.3s ease;
    }
    .form-table input:focus {
        outline: none;
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    }
    .submit-btn {
        background: linear-gradient(135deg, #27ae60, #2ecc71);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
    }
    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(46, 204, 113, 0.3);
    }
    .form-container {
        padding: 20px;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $(".close").click(function(){
            $(".popup").hide();
        });
      
    });
</script>

<div class="popup" href="#">
    <div class="popup-content" id="content">
        <h2>
            <p>Hãy Điền Thông Tin</p>
        </h2>
        <div class="form-container">
            <form method="POST">
                <table class="form-table">
                    <tr>
                        <th>
                            Tên Người Nhận
                        </th>
                        <td>
                            <input type="text" name="tenNguoiNhan" required 
                                   pattern="[a-zA-Z0-9áãạảàâấầẫậđềếêễệơớỡợởờóòõỏọìíỉĩịôổỗồốộđĐ\s]{2,50}" 
                                   title="Tên từ 2-50 ký tự, cho phép chữ có dấu">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Địa Chỉ
                        </th>
                        <td>
                            <input type="text" name="diaChi" required 
                                   pattern="[a-zA-Z0-9áãạảàâấầẫậđềếêễệơớỡợởờóòõỏọìíỉĩịôổỗồốộđĐ\s,.-]{10,100}" 
                                   title="Địa chỉ từ 10-100 ký tự">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Số Điện Thoại
                        </th>
                        <td>
                            <input type="tel" name="soDienThoai" required 
                                   pattern="[0-9]{10,11}" 
                                   title="Nhập số điện thoại từ 10 đến 11 số">
                        </td>
                    </tr>
                   <?php 
                    if (!isset($_SESSION['user'])) {
                       echo ' <tr>
                        <th>
                           Email
                        </th>
                        <td>
                            <input type="email" name="email" required 
                                   pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" 
                                   title="Email hợp lệ (ví dụ: user@gmail.com)">
                        </td>
                    </tr>';
                    }
                ?>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <button type="submit" name="submit" class="submit-btn">
                                <i class="fas fa-check"></i> Hoàn thành đặt hàng
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <button class="close">×</button>
    </div>
</div>
