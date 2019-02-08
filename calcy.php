<html>
 <body>
<style>
div.image
  {
  width:500px;
  height:250px;
  background:https://www.123rf.com/photo_89450873_child-s-hands-playing-with-nu$
  background-repeat:no-repeat;
  background-position:center;
  border:2px solid;
  }
</style>
 <form method="post">
 <center style="color:red">
<font size="16">FIND THE VALUE</h1>
 </font>
 </center>
<center>
 <fieldset>
<div class="image">
<div class="transparentbox">
<p style="color:green";font size="20">This is calculator to play with numbers
</p>
<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFRUXGB0YGBgYGB0aHxsYGxoYGBofHxofHSggGRolHx0YITEhJSkrLi4uGh8zODMtNygtLisBCgo$
</div>
</div>
enter your first name:
 <input type="text" name="firstname" /><br><br>
enter your last name:
 <input type="text" name="lastname" /><br><br>
Enter First Number:
 <input type="number" name="number1" /><br><br>
 Enter Second Number:
 <input type="number" name="number2" /><br><br>
 <input type="submit" name="submit" value="Add">
 <input type="submit" name="submit" value="sub">
 <input type="submit" name="submit" value="div">
 <input type="submit" name="submit" value="mul">
 <input type="submit" name="submit" value="clear">
 </form>
</center>
 </fieldset>
<div align='center' style="color:blue;font-size:30px;font-family:calibri ;">
 <?php
    if($_POST['submit']==Add)
    {
       $number1 = $_POST['number1'];
       $number2 = $_POST['number2'];
       $sum = $number1+$number2;
       $firstname= $_POST['firstname'];
  $lastname= $_POST['lastname'];
       $fullname=$firstname.$lastname;
echo "RESULT:";
 echo  "<br>The sum of $number1 and $number2 is: ".$sum;
 echo "<br>your full name is ".$fullname;
}
if($_POST['submit']==sub)
    {
 $number1 = $_POST['number1'];
       $number2 = $_POST['number2'];
       $sub = $number1-$number2;
       $firstname= $_POST['firstname'];
       $lastname= $_POST['lastname'];
       $fullname=$firstname.$lastname;
echo "RESULT:";
 echo "<br>your difference of $number1 and $number2 is: ".$sub;
 echo "<br>your fullname is ".$fullname;
}
if($_POST['submit']==mul)
{
$number1 = $_POST['number1'];
 $number2 = $_POST['number2'];
       $mul = $number1*$number2;
       $firstname= $_POST['firstname'];
       $lastname= $_POST['lastname'];
       $fullname=$firstname.$lastname;
echo "RESULT:";
 echo "<br>The product of $number1 and $number2 is: ".$mul;
echo "<br>your fullname is ".$fullname;
}
if($_POST['submit']==div)
    {
       $number1 = $_POST['number1'];
       $number2 = $_POST['number2'];
       $div = $number1/$number2;
       $firstname= $_POST['firstname'];
       $lastname= $_POST['lastname'];
       $fullname=$firstname.$lastname;
echo "RESULT:";
 echo "<br>The division of $number1<br> and $number2 is: ".$div;
 echo "<br>your fullname is ".$fullname;
}
?>
</div>
 </body>
</html>

