<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]--> 
<!--[if IE 7 ]>	<html lang="en" class="ie ie7"> <![endif]--> 
<!--[if IE 8 ]>	<html lang="en" class="ie ie8"> <![endif]--> 
<!--[if IE 9 ]>	<html lang="en" class="ie ie9"> <![endif]--> 
<!--[if !IE]><!--> \
<html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Aguzrybudy.com</title>
<meta name="description" content="Trendset Page under construction">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold"> 
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="alert/css/sweetalert.css">
</head>

<body id="home">
<div id="Header">
<div class="wrapper">
	<h1>Aguzrybudy.com</h1>	
	</div>
</div>
<div id="Content" class="wrapper"> 
<div class="countdown styled"></div> 
<h2 class="intro text-center">My website is under Developing. Subscribe to be notified.</h2>
<div id="subscribe"> 

	<form action="#"id="email" method="post">
		<p><input name="email" placeholder="Enter Your Email" type="text" id="inputemail">
		<input type="submit" value="Submit"></p>
	</form>

</div>
<span class="tempBy"><a href="http://aguzrybudy.blogstpot.co.id" alt="Alterxalter" style="color:#fff;">© 2016 Aguzrybudy.com | MultiProgramming. All Rights Reserved </a></span>
</div>

<div id="overlay"></div>




<!--Scripts-->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/Backstretch.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/global.js"></script>

<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>


<script>
$(document).ready(function(){
  $('#email').on('submit',function(e) {  
  $.ajax({
      url:'subscribe_act.php', 
      data:$(this).serialize(),
      type:'POST',
      success:function(data){
        console.log(data);
	    swal("¡Success!", "Message sent!", "success");
      },
      error:function(data){
	    swal("Oops...", "Something went wrong :(", "error");
      }
    });
    e.preventDefault(); 
  });
});
</script>



</body>
</html>
