<!DOCTYPE html> 
<html> 

<head> 

	
	<style type="text/css"> 
		.content { 
			position: absolute; 
			left: 50%; 
			transform: translate(-50%, -50%); 
			width: 500px; 
			height: 200px; 
			text-align: center; 
			background-color: #e8eae6; 
			box-sizing: border-box; 
			padding: 10px; 
			z-index: 100; 
			display: none; 
			/*to hide popup initially*/ 
		} 
		
		.close-btn { 
			position: absolute; 
			right: 20px; 
			top: 15px; 
			background-color: black; 
			color: white; 
			border-radius: 50%; 
			padding: 4px; 
		} 
	</style> 
</head> 

<body> 
	<button onclick="togglePopup()">show popup</button> 

	<!-- div containing the popup -->
	<div class="content"> 
		<div onclick="togglePopup()" class="close-btn"> 
			× 
		</div> 
		<h3>Popup</h3> 

		<p> 
			jQuery is an open source JavaScript library 
			that simplifies the interactions between an 
			HTML/CSS document, or more precisely the 
			Document Object Model (DOM), and JavaScript. 
			Elaborating the terms, jQuery simplifies 
			HTML document traversing and manipulation, 
			browser event handling, DOM animations, 
			Ajax interactions, and cross-browser 
			JavaScript development. 
		</p> 
	</div> 

	<script type="text/javascript"> 
	
		// Function to show and hide the popup 
		function togglePopup() { 
			$(".content").css('transform', 'scale(1)');  
		} 
	</script> 
</body> 

</html> 
