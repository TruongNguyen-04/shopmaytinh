<div class="row" id="margin">
	<?php 

	if($current_page_LT > 1 && $total_page_LT > 1){
		echo "<a  href='index.php?action=dmmtlt&?PAGE=".($current_page_LT -1)."'> Trước </a>";
	}
	for ($i=1; $i <= $total_page_LT ; $i++) { 
		if($i== $current_page_LT){
			echo "<a id='page' class='crpage'>".$i."</a>";
		}
		else{
			echo "<a  id='page'  href='index.php?action=dmmtlt&PAGE=".$i."'>".$i."</a>";
		}
	}

	if ($current_page_LT < $total_page_LT && $total_page_LT>1) {
		echo '<a  href="index.php?action=dmmtlt&PAGE='.($current_page_LT+1).'"> Sau </a>  ';
	}

?>
</div>