<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>_-_-_-_</title>
	<link rel="stylesheet" href="style.css?v=<?php echo rand();?>">
</head>
<body>
<style>
	html, body { margin: 0;padding: 0; }
    body,.container {   } /*be4b95*/
</style>

	<div class="container">

		<div id="scene1">
			<div id="scene1-ct">
				<div id="glosnik"><img src="img/glosnik.png" alt=""></div>
				<div id="fala"><img src="img/fala.png" alt=""></div>
				<!-- <div id="fale"><img src="img/fale.png" alt=""></div> -->
				<div id="pan">
					<div id="cialo"><img src="img/cialo.png" alt=""></div>
					<div id="lewa"><img src="img/lewa.png" alt=""></div>
					<div id="prawa"><img src="img/prawa.png" alt=""></div>
					<div id="glowa"><img src="img/glowa.png" alt=""></div>
					<div id='bars'>
						<div class='bar'></div>
						<div class='bar'></div>
						<div class='bar'></div>
						<div class='bar'></div>
						<div class='bar'></div>
						<div class='bar'></div>
						<div class='bar'></div>
						<div class='bar'></div>
						<div class='bar'></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</a>
<!-- #NOVEM: 
</div>
-->

<script>
time = 1;
loop = 1;
looped = 300;
scene = 1; // 1 2 all
function timeout() {
    setTimeout(function () {
    	i = 100; function delay(delay){i += delay}
    	
    	if( scene != 2){

	    	setTimeout(function(){
				removeClass('puls','animate');
				removeClass('fala2','animate');	    		
				create('scene1');
			}, i); 
	    	delay(100);

			setTimeout(function(){
				show('scene1');
				addClass('glosnik','animate');
				addClass('fala','animate');
				addClass('glowa','animate');
				addClass('prawa','animate');
				addClass('lewa','animate');
				addClass('cialo','animate');
			}, i); 
			delay(5100);
		}

		delay(100);	time = i; timeout();

		if( loop < looped )
			timeout();

		//setTimeout(function(){loop ++;if(loop_lenth == 0 || loop < loop_lenth){timeout();}}, time)
		console.log('animate time: '+time / 1000 +'s');

    }, time);
}
timeout();

function create(Elementid){
	return document.getElementById( Elementid ).classList.add('create');
}
function destroy(Elementid){
	return document.getElementById( Elementid ).classList.remove('create');
}
function kill(Elementid){
	return document.getElementById( Elementid ).classList.add('kill');
}
function show(Elementid){
	return document.getElementById( Elementid ).classList.add('active');
}
function hide(Elementid){
	return document.getElementById( Elementid ).classList.remove('active');
}
function addClass(Elementid, Elementclass){
	return document.getElementById( Elementid ).classList.add( Elementclass );
}
function removeClass(Elementid, Elementclass){
	return document.getElementById( Elementid ).classList.remove( Elementclass );
}

</script>

</body>
</html>