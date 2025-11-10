<!-- <?php 

	if($CURRENT_PAGE > 1 && $TOTAL_PAGE > 1){
		echo "<a id='page' href='index.php?PAGE=".($CURRENT_PAGE -1)."'> Trước </a>";
	}
	for ($i=1; $i <= $TOTAL_PAGE ; $i++) { 
		if($i== $CURRENT_PAGE){
			echo "<span class='idd'>"."<a id='crp'>".$i."</a>"."</span>  ";
		}
		else{
			echo "<a  id='page'  href='index.php?PAGE=".$i."'>".$i."</a>";
		}
	}

	if ($CURRENT_PAGE < $TOTAL_PAGE && $TOTAL_PAGE>1) {
		echo '<a   id="page" href="index.php?PAGE='.($CURRENT_PAGE+1).'"> Sau </a>  ';
	}

?> -->