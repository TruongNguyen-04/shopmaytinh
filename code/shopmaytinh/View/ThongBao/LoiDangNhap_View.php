
<style type="text/css">
	
	.popup{
		position: fixed;
		top: 200px;
		margin-left: 41%;
		background-color: skyblue;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 350px;
		height: 100px;
		border: 1px solid red;
	}
	p{
		padding: 23px 10px;
	}
	.close {
		position: absolute;
		top: -3px;
		right: 0px;
		border-radius: 50%;
		background: #222;
		border: 3px solid red;
		color: black;
		text-decoration: none;
		line-height: 0;
		padding: 9px 0 11px;
		width: 20px;
		text-align: center;
	}
	
	
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$(".close").click(function(){
			$(".popup").hide();
		});
		$("body").click(function(){
			$(".popup").hide();
		});
	});
</script>

<div class="popup" href="#">
    <div class="popup-content" id="content">
        <p style="text-align: center;">Vui lòng kiểm tra lại tên đăng nhập và mật khẩu</p>
        <a href="#" class="close">x</a>
    </div>
</div>
