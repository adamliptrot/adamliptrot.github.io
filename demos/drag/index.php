<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="en" /> 
		<script type="text/javascript" src="/assets/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="/assets/jquery-ui-1.8.1.custom.min.js"></script>
		<style type="text/css">
			#draggable { width: 150px; height: 150px; padding: 0.5em; background-color: #efefef; cursor: move; }
		</style>
		<script type="text/javascript">
			$(function() {
				$("#draggable").draggable();
			});
		</script>
	</head>
	<body>
	
		<div class="demo">
		
		<div id="draggable" class="ui-widget-content">
			<p>Drag me around</p>
		</div>
		
		</div><!-- End demo -->
		
		<div class="demo-description" style="display: none; ">
		
		<p>
		Enable draggable functionality on any DOM element. Move the draggable object by clicking on it with the mouse and dragging it anywhere within the viewport.
		</p>
		
		</div>
	
	</body>
</html>