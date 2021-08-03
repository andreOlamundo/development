<div class="container-fluid">
	<div class="row">
    	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

           <h2>SUMMIT 2017</h2>
            <hr class="featurette-divider">   

<?php 
		$folder = opendir("../views/images/fotos/summit2017/fotos");
		$types 	= array('jpg');
		$index 	= array();
		
		while ($file = readdir($folder)) {
   			if(in_array(substr(strtolower($file), strrpos($file,".")+1), $types)){
				array_push($index,$file);
				}
		}
		closedir($folder);

		foreach($index as $img){
			echo "<a href='views/images/fotos/summit2017/fotos/" . $img . "'  data-lightbox='summit2017'><img width='100' class='img-thumbnail' border='2' src='views/images/fotos/summit2017/fotos/" . $img . "'></a>";
			}
		?>

		</div>
	</div>
</div>