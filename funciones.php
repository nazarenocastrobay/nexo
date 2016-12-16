<?php
	function printProyects(){
		include('proyectos.php');
		foreach($proyectos as $item){
			echo  '<li data-category=';
			echo  $item['category'];
			echo  ' class=';
			echo  $item['category'];
			echo  '><a href=';
			echo  $item['href'];
			echo  '><img src=';
			echo  $item['src'];
			echo  ' alt="';
			echo  $item['alt'];
			echo  '"><div class=portfolio-detail-overlay>';
			echo  '<div class=middle-align-wrap>';
			echo  '<div class=middle-align-cell>';
			echo  '<h4>';
			echo  $item['titulo'];
			echo  '</h4>';
			if($item['subtitulo'] != ''){
				echo '<span>';
				echo $item['subtitulo'];
				echo '</span>';
			}
			echo  '</div></div></div>';
			echo  '</a></li>';
		}
	}

	
	

?>
