<!DOCTYPE html>
<html lang="en">
<head> 
	<title>Our Work - Elite Floor and Stone</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"  />
	<meta name="keywords" content="Flooring, contractor, hardwood, tile, carpet, countertop" />
	<meta name="description" content="Elite Floor and Stone - Flooring Contractor:  Offering a full range of flooring sales, repair and installation services. - About us " />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" href="css/blueimp-gallery.min.css">
	<style>
		/*#wood, #tile, #stone {
			display:block;
		}
		#wood li,#tile li,#stone li {
			display:inline-block;
			box-sizing:border-box;
			width:33%;
			float:left;
			overflow:hidden;
			height:150px;
			padding:10px;
		}
		#wood li img,#tile li img,#stone li img {
			max-width:100%;
			image-orientation: from-image;
		}
		.ninety {
			-webkit-transform:rotate(90deg);
		}*/

	</style>
</head>
<body class="gall">
    <?php
        include "../php/header.php";
    ?>
    <div id="gallery">
        <h2>Past Work</h2>
    </div>
    <?php 


    if ($handle = opendir('./work')) {
	    // echo "Directory handle: $handle\n";
	    // echo "Entries:\n";

	    $wood = [];
	    $tile = [];
	    $stone = [];
	    $i = 0;
		    /* This is the correct way to loop over the directory. */
		    while (false !== ($entry = readdir($handle))) {
		    	$cnt = 0;
		    	switch($entry) {
		    		case 'wood':
		    		// echo 'it\'s wood';
		    		$w = opendir('./work/wood');
		    		// echo $w;
		    		while(false !== ($e = readdir($w))) {
		    			if ($e != "." && $e != "..") {
		    				$str = "<a target='_blank' href='work/wood/".$e."'><img data-id='".$i."' class='viewable' alt='Elite Floor and Stone: Wood Flooring Project' title='Elite Floor and Stone: Wood Flooring Project' src='work/wood/".$e."'></a>";
		    				array_push($wood, $str);
		    				$i++;
		    			}
		    		}
		    		closedir($w);
		    		break;
		    		case 'tile':
		    		// echo 'it\'s tile';
		    		$t = opendir('./work/tile');
		    		// echo $t;
		    		while(false !== ($e = readdir($t))) {
		    			if ($e != "." && $e != "..") {
		    				$str = '<a target="_blank" href="work/tile/'.$e.'"><img data-id="'.$i.'" class="viewable" alt="Elite Floor and Stone: Tile project" title="Elite Floor and Stone: Tile project" src="work/tile/'.$e.'"></a> ';
			    			array_push($tile, $str);
			    			$i++;
		    			}
		    		}
		    		closedir($t);
		    		break;
		    		case 'stone':
		    		// echo 'it\'s stone';
		    		$s = opendir('./work/stone');
		    		// echo $s;
		    		while(false !== ($e = readdir($s))) {
		    			if ($e != "." && $e != "..") {
			    			$str = "<a target='_blank' href='work/stone/".$e."'><img data-id='".$i."' class='viewable' alt='Elite Floor and Stone: Stone project' title=Elite Floor and Stone: Stone project' src='work/stone/".$e."'></a> ";
			    			array_push($stone, $str);
			    			$i++;
		    			}
		    		}
		    		closedir($s);
		    		break;

		    	}
		        //echo "$entry\n";
		    }

	    closedir($handle);

	}
  ?>


  <ul id="stone">
  	<h3>Stone Projects:</h3>
  	<?php 
  	foreach($stone as $v) {
  		echo "<li>".$v."</li>";
  	}


  	 ?>
  </ul>

  <ul id="wood">
  	<h3>Wood Floor Projects:</h3>
  	<?php 
  	foreach($wood as $v) {
  		echo "<li>".$v."</li>";
  	}


  	 ?>
  </ul>
    <ul id="tile">
  	<h3>Tile Projects:</h3>
  	<?php 
  	foreach($tile as $v) {
  		echo "<li>".$v."</li>";
  	}


  	?>
  </ul>
    <footer></footer>
    <?php 

	    include $_SERVER['DOCUMENT_ROOT']."/php/footer.php"; 
	    // include $_SERVER['DOCUMENT_ROOT']."/php/scripts.php";
    ?>
</body>