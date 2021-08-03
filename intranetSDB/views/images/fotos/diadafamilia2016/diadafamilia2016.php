<div class="container-fluid">
	<div class="row">
    	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

           <h2>DIA DA FAMILIA 2016</h2>
            <hr class="featurette-divider">   

<?php 
		$folder = opendir("../views/images/fotos/diadafamilia2016/fotos");
		$types 	= array('jpg');
		$index 	= array();
		
		while ($file = readdir($folder)) {
   			if(in_array(substr(strtolower($file), strrpos($file,".")+1), $types)){
				array_push($index,$file);
				}
		}
		closedir($folder);

		foreach($index as $img){
			echo "<a href='views/images/fotos/diadafamilia2016/fotos/" . $img . "'  data-lightbox='diadafamilia2016'><img width='100' class='img-thumbnail' border='2' src='views/images/fotos/diadafamilia2016/fotos/" . $img . "'></a>";
			}
		?>

		</div>
	</div>
</div>

