
<?php
$x = "Hello ";
echo "<article class='col-sm-9'>
<h2 class='text-center'>Welcome to my Site</h2>
<p class='text-center'>Take a look around and check out some of my projects.<p>

<head>
<link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet'>
</head>
<body>
<div id='z'>
<center>
<br>
<h1>Courd is Great!</h1>
<p> How do you feel about Courd?
<form onSubmit='x()'>
<input type='text' id='y'/>
<button>submit</button>
</form>
</center>
</div>
</body>
<script>function x(){
	event.preventDefault();
	if (document.getElementById('y').value!=''){
if (document.getElementById('y').value!='Courd is Great!') {alert('Wrong! Courd is Great!');}else {alert('That is Correct')}}}
</script>


</article>";
?>
<script>change("home");</script>
