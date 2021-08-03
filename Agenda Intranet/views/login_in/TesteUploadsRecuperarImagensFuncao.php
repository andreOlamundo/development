<?php 
		$folder = opendir("../views/images/fotos/CCXP2016/fotos");
		$types 	= array('jpg');
		$index 	= array();
		
		while ($file = readdir($folder)) {
   			if(in_array(substr(strtolower($file), strrpos($file,".")+1), $types)){
				array_push($index,$file);
				}
		}
		closedir($folder);

		foreach($index as $img){
			echo "<a href='views/images/fotos/CCXP2016/fotos/" . $img . "'  data-lightbox='CCXP2016'><img width='100' class='img-thumbnail' border='2' src='views/images/fotos/CCXP2016/fotos/" . $img . "'></a>";
			}
		?>