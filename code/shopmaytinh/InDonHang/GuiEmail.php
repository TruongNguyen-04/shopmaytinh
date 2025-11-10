<?php
$url='http://localhost/LT0719D_Nhom_1/Code/Mvc_Web/InDonHang/InDonHang.php?mdh='.$mdhs;
 
$handle = fopen($url,"rb"); // mở tập tin  theo đường dẫn, "rb" có nghĩa là mở tập tin (đường dẫn) không phải là dạng văn bản.
 
$lines_string="";
 
// đọc nội dung
do{
    $data=fread($handle,1024);
    if(strlen($data)==0) {
        break;
    }
    $lines_string.=$data;
}while(true);
 
fclose($handle); // đóng nguồn dữ liệu sau khi đọc xong
 
// echo $lines_string; // hiển thị dữ liệu kết quả
?>
<?php 
	
	include "class.phpmailer.php"; 
	include "class.smtp.php"; 
	 
	$mail = new PHPMailer();
	$mail->IsSMTP(); // set mailer to use SMTP
	$mail->Host = "smtp.gmail.com"; // specify main and backup server
	$mail->Port = 465; // set the port to use
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->SMTPSecure = 'ssl';
	$mail->Username = "tldshop2020@gmail.com"; // your SMTP username or your gmail username
	$mail->Password = "2020tld2020shop"; // your SMTP password or your gmail password
	$from = "tldshop2020@gmail.com"; // Reply to this email
	$to= $email; // Recipients email ID
	$name=$tnn; // Recipient's name
	$mail->From = $from;
	$mail->FromName = "TLD Shop"; // Name to indicate where the email came from when the recepient received
	$mail->AddAddress($to,$name);
	$mail->AddReplyTo($from,$tnn);
	$mail->WordWrap = 50; // set word wrap
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = "Xac Nhan Thanh Cong Don Hang Tren TLD SHOP";
	$mail->Body = $lines_string; //HTML Body
	$mail->AltBody = "Mail này được gửi tự động"; //Text Body
	//$mail->SMTPDebug = 2;
	if(!$mail->Send())
	{
		echo "<h1Lỗi khi gửi mail: " . $mail->ErrorInfo . '</h1>';
	}
	else
	{
		echo "<h1>Gửi email thành công</h1>";
	}

?>