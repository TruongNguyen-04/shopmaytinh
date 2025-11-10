<div class="row" id="margin">
	<?php 

	if($current_page_PK > 1 && $total_page_PK > 1){
		echo "<a href='index.php?action=dmpk&?PAGE=".($current_page_PK -1)."'> Trước </a>";
	}
	for ($i=1; $i <= $total_page_PK ; $i++) { 
		if($i== $current_page_PK){
			echo "<a id='page' class='crpage'>".$i."</a>";
		}
		else{
			echo "<a  id='page'  href='index.php?action=dmpk&PAGE=".$i."'>".$i."</a>";
		}
	}

	if ($current_page_PK < $total_page_PK && $total_page_PK>1) {
		echo '<a   href="index.php?action=dmpk&PAGE='.($current_page_PK+1).'"> Sau </a>  ';
	}

?>
</div>