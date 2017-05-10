<?	
	echo "<title>NOME DO SITE - CONFIG.PHP</title>";
	echo "<meta name=\"theme-color\" content=\"#faba0a\">";
	echo "<meta name=\"msapplication-navbutton-color\" content=\"#faba0a\">";
	echo "<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#faba0a\">";

	// RESPONSIVO = 0; LAYOUT ADAPTIVO
	// RESPONSIVO = 1; LAYOUT RESPONSIVO
	$responsivo = 1;
	if($responsivo == 0){
		echo "<meta name=\"viewport\" content=\"width=860px, user-scalable=yes\"> \n";
	}
	else{
		echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" /> \n";
		echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> \n";
	}

	$stacktable = 0;
	if($stacktable == 0){
		
	}
	else{	
		echo "<link rel=\"stylesheet\" href=\"./css/stacktable.css\">";
		echo "<script src=\"./js/stacktable.js\"></script>";
	}

	// SLIDER = 0; NENHUM SLIDER
	// SLIDER = 1; BX SLIDER
	// SLIDER = 2; OWL CAROUSEL
	$slider = 2;
	if($slider == 0){

	}
	else if($slider == 1){
		echo "<script src=\"./js/jquery.bxslider.min.js\"></script> \n";
	    echo "<link href=\"./css/jquery.bxslider.css\" rel=\"stylesheet\" /> \n";
	}
	else if($slider == 2){
		echo "<script src=\"./js/owl.carousel.js\"></script> \n";
	    echo "<link href=\"./css/owl.carousel.css\" rel=\"stylesheet\" /> \n";
	}

	// LIVICONS = 0; SEM LIVICONS
	// LIVICONS = 1; COM LIVICONS
	$livicons = 0;
	if($livicons == 0){

	}
	else{
	 	echo "<link href=\"./LivIconsEvo/css/LivIconsEvo.css\" rel=\"stylesheet\"> \n";
		echo "<script src=\"./LivIconsEvo/js/tools/snap.svg-min.js\"></script> \n";
	    echo "<script src=\"./LivIconsEvo/js/tools/TweenMax.min.js\"></script> \n";
	    echo "<script src=\"./LivIconsEvo/js/tools/DrawSVGPlugin.min.js\"></script> \n";
	    echo "<script src=\"./LivIconsEvo/js/tools/MorphSVGPlugin.min.js\"></script> \n";
	    echo "<script src=\"./LivIconsEvo/js/tools/verge.min.js\"></script> \n";
	    echo "<script src=\"./LivIconsEvo/js/LivIconsEvo.defaults.js\"></script> \n";
	    echo "<script src=\"./LivIconsEvo/js/LivIconsEvo.min.js\"></script> \n";	
	}
	
	// VENOBOX = 0; SEM VENOBOX
	// VENOBOX = 1; COM VENOBOX
	$venobox = 0;
	if($venobox == 1){

	}
	else{
		echo "<script type=\"text/javascript\" src=\"./js/venobox.min.js\"></script> \n";
	    echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"./css/venobox.css\" /> \n";
	}

	// VALIDAÇÃO FORM = 0; SEM VALIDAÇÃO FORM
	// VALIDAÇÃO FORM = 1; COM VALIDAÇÃO FORM
	$formverify = 1;
	if($formverify == 0){

	}
	else{
	  	echo "<script type=\"text/javascript\" src=\"./js/jquery.validate.min.js\"></script> \n";
		echo "<script src=\"./js/jquery.mask.js\"></script>";
	}

?>
