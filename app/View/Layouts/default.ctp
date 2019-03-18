<html>
	<head>
		<meta charset="utf-8"/>
		<link href="<?php echo DOMAIN?>css/style.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>engine1/style.css" />
		<script type="text/javascript" src="<?php echo DOMAIN?>js/jquery.min.js"></script>
		<script type='text/javascript' src='<?php echo DOMAIN?>js/PanCarousel.js' ></script>
		
		
		<style>
			 .V {position: relative;
				width:910px;
				    margin-left: -45px;
				overflow: hidden;
				height: 200px;
				margin-top:-15px;
}

	
		</style>
	</head>
	<body>
		<center>
		<div style="width:1349px;background:#f5f5f5">
			<center>
			<div id="container">
				<div id="header">
					<?php echo $this->element('menutop')?>
				</div>
				<div id="content">
					<div class="slide">
						<?php echo $this->element('slideshow')?>
					</div>
					<?php echo $content_for_layout;?>
					<div class="doitac">
						<?php echo $this->element('doitac')?>
					</div>
					
				</div>
				
			</div>
			</center>
			<?php echo $this->element('footer')?>
			
			
		</div>
			</center>
	</body>
	<script type="text/javascript">
    var S = new zxcPanCarousel({
        mode: 'H',        // the mode, H = horizontal, V = vertical.                  (string, default = H)
        id: 'V1',         // the unique id name of the div to scroll.                 (string)
        defaultspeed: 1,  // (optional) the default speed to pan, 1 = slow, 5 = fast. (digits, default = 1)
        separation: 9,    // (optional) the separation between the div elements.      (digits, default = 0)
        direction: -1,    // (optional) the initial direction, 1 or -1.               (digits, default = 1)
        start: true,      // (optional) start automatically.                          (boolean, default = false = no autostart)
        panends: {
            distance: 4,     // (optional) the distance from the ends to pan.            (digits, default = parent node width/4)
            maxspeed: 10,     // (optional) the maximum speed to pan.                     (digits, default = 5)
            mouseout: true,   // (optional) restart default pan onmouseout.               (boolean, default = false = no restart)
            reverse: true     // (optional) reverse the pan direction of the ends.        (boolean, default = false = no reverse)
        }
    });
</script> 
</html>