<script type="text/javascript">
	$(document).on('click','.btn-cart',function(e){
		e.preventDefault();
		var parents = $(this).parents('.preview-pic tab-content');
		var src = parents.find('img').attr('src');
		alert(src);
	});
</script>