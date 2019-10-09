<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<!-- HTML -->
	<section id="parallaxBar" data-speed="6" data-type="background">
	    <div class="container-fluid">
	    </div>
	</section> 
	<!-- FIM HTML -->

	<!-- CSS -->
	<style>
	#parallaxBar{
	    height:750px;
	    background-color:#004c82;
	    background: url(../img/bgparallax.png) 50% 0 fixed;
	    position: relative; 	
	}
	</style>
	<!-- FIM CSS -->

	<!-- JS -->
	<script>
	$(document).ready(function(){
	    $window = $(window);
	    //Captura cada elemento section com o data-type "background"
	    $('section[data-type="background"]').each(function(){
	        var $scroll = $(this);   
	            //Captura o evento scroll do navegador e modifica o backgroundPosition de acordo com seu deslocamento.            
	            $(window).scroll(function() {
	                var yPos = -($window.scrollTop() / $scroll.data('speed')); 
	                var coords = '50% '+ yPos + 'px';
	                $scroll.css({ backgroundPosition: coords });    
	            });
	   });  
	}); 
	</script>
	<!-- FIM JS -->
</body>
</html>