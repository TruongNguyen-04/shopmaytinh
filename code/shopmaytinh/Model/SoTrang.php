<div class="pagination-index-t24">
	<?php 

	if($current_page > 1 && $total_page > 1){
		echo "<a class='btn-index-page' id='page' href='index.php?page=".($current_page -1)."'> Trước đó </a>";
	}
	for ($i=1; $i <= $total_page ; $i++) { 
		if($i== $current_page){
			echo "<a id='page' class='crpage btn-index-page'>".$i."</a>";
		}
		else{
			echo "<a class='btn-index-page' id='page'  href='index.php?page=".$i."'>".$i."</a>";
		}
	}

	if ($current_page < $total_page && $total_page>1) {
		echo '<a  class="btn-index-page" id="page" href="index.php?page='.($current_page+1).'"> Trang sau </a>  ';
	}

	?>

</div>