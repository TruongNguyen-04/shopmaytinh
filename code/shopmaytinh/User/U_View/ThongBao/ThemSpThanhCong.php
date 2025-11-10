
<style type="text/css">
	body{
		position: relative;

	}
	.popup{
		position: fixed;
		top: 200px;
		margin-left: 25%;
		background-color: silver;
		width: 350px;
		height: 120px;
		border: 2px solid red;
	}
	p {
    	margin: 20px 0 10px;
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
	.popup:target {
 		 display: block;
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
        <p style="text-align: center;">Thêm Sản Phẩm Thành Công</p>
        <p style="text-align: center;"><a href="index.php?act=themchitietsp">Thêm Chi Tiết Sản Phẩm</a></p>
        <a href="#" class="close">x</a>
    </div>
</div>
