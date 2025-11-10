<?php 
	
$mail = new PHPMailer(true);                             
// Passing `true` enables exceptions
try
{
    
//Server settings
    
$mail->SMTPDebug = 2;                                
// Enable verbose debug output
    
$mail->isSMTP();                                     
// Set mailer to use SMTP
    
$mail->Host ='smtp1.gmail.com;smtp2.gmail.com'; 
// Specify main and backup SMTP servers
    
$mail->SMTPAuth = true;                              
// Enable SMTP authentication
   
$mail->Username ='_____sửa nội dung này_____';     // Gmail gửi tin nhắn            
// SMTP username
 
$mail->Password ='_____sửa nội dung này_____';         // mật khẩu                    
// SMTP password
    
$mail->SMTPSecure ='tsl';                           
// Enable TLS encryption, `ssl` also accepted
    
$mail->Port = 587;                                   
// TCP port to connect to
    
//Recipients
    
$mail->setFrom('_____sửa nội dung này_____','T-L-D SHOP');
    
$mail->addAddress('_____sửa nội dung này_____','');   // Địa chỉ nhận email 
// Add a recipient
    
// $mail->addAddress('ellen@example.com');              
// Name is optional
    
$mail->addReplyTo('_____sửa nội dung này_____','Phản Hồi');
    
// $mail->addCC('cc@example.com');
    
// $mail->addBCC('bcc@example.com');
    
//Attachments // Tệp đính kèm
    
// $mail->addAttachment('/var/tmp/file.tar.gz');        
// // Add attachments
    
// $mail->addAttachment('../../Imgaes/avt.png','avt.png');   
// // Optional name
    
//Content
    
$mail->isHTML(true);                                 
// Set email format to HTML
    
$mail->Subject ='Xác Nhận Đơn Hàng Trên T-L-D SHOP';
    
$mail->Body='Tin Nhắn Xác Nhận Đơn Hàng<b>Thành Công!</b>';
    
$mail->AltBody ='This is the body in plain text for non-HTML mail clients';
    
$mail->send();
    echo'Message has been sent';
}
catch (Exception $e) {
    
echo 'Message could not be sent. Mailer Error: ',$mail->ErrorInfo;
}

?>