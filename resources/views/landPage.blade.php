<html>
	<body>

<div>
   <h2>Hello from landing page </h2> <!-- An unexamined life is not worth living. - Socrates --></h2>
   
 <h4>The value of pig is :</h4>  {{ $pig }}
<h4>{{ $users }} <br><br>
<?php foreach($users as $stuff)
{
	echo "the id values in the database are".$stuff->id;
	echo"<br>";
}
?>

<?php foreach($users2 as $stuff)
{
	echo "user id is : ".$stuff->id."   email :".$stuff->email."  name :".$stuff->name;
	echo"<br>";
}
?>


</h4>
</div>
</body>
</html>
