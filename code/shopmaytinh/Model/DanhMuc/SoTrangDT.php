<div class="row" id="margin">
	<?php 

	if($current_page_DT > 1 && $total_page_DT > 1){
		echo "<a  href='index.php?action=dmdt&?PAGE=".($current_page_DT -1)."'> Trước </a>";
	}
	for ($i=1; $i <= $total_page_DT ; $i++) { 
		if($i== $current_page_DT){
			echo "<a id='page' class='crpage'>".$i."</a>";
		}
		else{
			echo "<a  id='page'  href='index.php?action=dmdt&PAGE=".$i."'>".$i."</a>";
		}
	}

	if ($current_page_DT < $total_page_DT && $total_page_DT>1) {
		echo '<a href="index.php?action=dmdt&PAGE='.($current_page_DT+1).'"> Sau </a>  ';
	}

?>
</div>