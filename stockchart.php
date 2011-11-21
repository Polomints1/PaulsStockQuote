<?php
//stock chart shower
//Beginners PHP 
//Description : This allows a user to enter a ticker symbol
//and rather than the usual dry quotes displays a chart of 
//how the stock has performed over the whole year

if ($symbol =="")
{
?>
<html><body>
<form action = <?php print $PHP_SELF; ?> method = post>
Enter your ticker symbol :<input type = text name = symbol size = 6><br>
<input type = submit value = "show chart">
</form>
</body></html>
<?php
}
else
{
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="image/gif; charset=iso-8859-1">
</head>
<img border="0" src="http://ichart.yahoo.com/t?s=<?php print $symbol; ?>">

</body>
</html>
<?php
}
?>