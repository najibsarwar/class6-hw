<!DOCTYPE html>
<html>

<body>
	<center>
		<h1 style="color: green;">
			Make it Perfect
		</h1>


		<h3>
			Program to print multiplication<br>
			table of any number in PHP
		</h3>

		<form method="POST">
			Enter a number:
			<input type="text" name="number">
			
			<input type="Submit"
				value="Get Multiplication Table">
		</form>
	</center>
</body>
<br>
</html>

<?php
if($_POST) {
	$num = $_POST["number"];

	echo nl2br("<p style='text-align: center;'>
		Multiplication Table of $num: </p>
	");
		
	for ($i = 1; $i <= 10; $i++) {
		echo ("<p style='text-align: center;'>$num"
			. " X " . "$i" . " = "
			. $num * $i . "</p>
		");
	}
}  
?>
<?php

function gift($totalprice)
    {
        if($totalprice>999){
            echo "You got a gift sir ,CONGRATS!!!!";
        }
        else echo "NO gift Sir.";
    }
    gift(9649);
    
echo "<br>"; echo "<br>";
?>

<?php
{
$test1="Physics";
printf("level 01 :%s <br>",str_shuffle($test1));
function your_word(string $str,$test1){
    if ($str === $test1) {
        echo "level 1 cleared";
        
    }
    else {
        echo "Not Matched";
    }
}
your_word("Physics",$test1);
echo "<br>";}

    $test2="Math";
printf("level 02:%s <br>" ,str_shuffle($test2));

function yours_word(string $str,$test2){
if ($str===$test2) {
    echo "level 2 cleared";
} 
else { 
    echo "Not Matched";
}
}
yours_word("Math",$test2);
echo "<br>";
echo "<br>"
?>

<?php
// valid and invaid email checking .....


$mail= 'najibs@mail';
if(strpos($mail,'@')){


    if(strpos($mail, '.com')){
   echo "You entered a valid email";
}else{
    echo " your email is invalid without .com ";
}

}else{ echo "enter the @ sign";
}
echo "<br>";
echo "<br>";

?>
<?php
//password length check (6-8)charecter

$pass = 'Suzu1389079';
$Length = strlen($pass);
if($Length <= 8)
{
    if($Length >= 6)
    {
        echo "Acceptble password (6 to 8)";
    }
    else
    {
        echo "Error! you entered too long password";
    }
}
else
{
    echo "Error!! you entered too short password";
}
?>


