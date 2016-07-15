<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h1>GPA Caluclator</h1>
<?php
ini_set("precision", 4);
$grade1=0;
$grade2=0;
$grade3=0;
$grade4=0;
$grade5=0;
$grade6=0;
$credit1=1;
$credit2 =1;
$credit3 =1 ;
$credit4 =1;
$credit5 =1;
$credit6 =1;

if (isset($_POST['grade1'])) $grade1 = $_POST['grade1'] ;
if (isset($_POST['grade2'])) $grade2 = $_POST['grade2'];
if (isset($_POST['grade3'])) $grade3 = $_POST['grade3'];
if (isset($_POST['grade4'])) $grade4 = $_POST['grade4'];
if (isset($_POST['grade5'])) $grade5 = $_POST['grade5'];
if (isset($_POST['grade6'])) $grade6 = $_POST['grade6'];
if (isset($_POST['credit1'])) $credit1 = $_POST['credit1'];
if (isset($_POST['credit2'])) $credit2 = $_POST['credit2'];
if (isset($_POST['credit3'])) $credit3= $_POST['credit3'];
if (isset($_POST['credit4'])) $credit4 = $_POST['credit4'];
if (isset($_POST['credit5'])) $credit5= $_POST['credit5'];
if (isset($_POST['credit6'])) $credit6 = $_POST['credit6'];

$result = (($credit1*$grade1)+($credit2*$grade2)+($credit3*$grade3)+($credit4*$grade4)+($credit5*$grade5)+($credit6*$grade6))/($credit1+$credit2+$credit3+$credit4+$credit5+$credit6);

echo <<<_END
<form method='post' action='index.php'>
<table  >
<tr class="gpaheading"><td colspan="2"><strong>Cloud Computing- GPA Calculator</strong></td></tr>
<tr class="gparow"><td>Course 1:</td><td align="center" >
<select id = "grade1" name="grade1" style = " font-size: 8px; font-family: Arial;"> 
 <option value="0">--Select Grade--</option>
	
    <option value=4>A</option>
    <option value=3.6667>A-</option>
    <option value=3.3333>B+</option>
    <option value=3.0>B</option>
    <option value=2.6667>B-</option>
    <option value=2.3333>C+</option>
    <option value=2.0>C</option>
    <option value=0.0>F</option>

</select>
<select id = "credit1" name="credit1"style = " font-size: 8px; font-family: Arial;"> 
	<option value="0">--Select Credit Hrs--</option>
	
    <option value=4>4</option>
    <option value=3>3</option>
    <option value=2>2</option>
    <option value=1>1</option>
   
</select>

<tr class="gparow"><td>Course 2:</td><td align="center">
<select id="grade2" name="grade2" style = " font-size: 8px; font-family: Arial;">  
                    
<option value="0">--Select Grade--</option>
  <option value=4>A</option>
    <option value=3.6667>A-</option>
    <option value=3.3333>B+</option>
    <option value=3.0>B</option>
    <option value=2.6667>B-</option>
    <option value=2.3333>C+</option>
    <option value=2.0>C</option>
    <option value=0.0>F</option>
</select>

<select id = "credit2" name="credit2" style = " font-size: 8px; font-family: Arial;"> 
	<option value="0">--Select Credit Hrs--</option>
	
    <option value=4>4</option>
    <option value=3>3</option>
    <option value=2>2</option>
    <option value=1>1</option>
   
</select>
	

<tr class="gparow"><td>Course 3:</td><td align="center">
<select id="grade3" name="grade3" style = " font-size: 8px; font-family: Arial;">                      
<option value="0">--Select Grade--</option>
    <option value=4>A</option>
    <option value=3.6667>A-</option>
    <option value=3.3333>B+</option>
    <option value=3.0>B</option>
    <option value=2.6667>B-</option>
    <option value=2.3333>C+</option>
    <option value=2.0>C</option>
    <option value=0.0>F</option>
</select>

<select id = "credit3" name="credit3" style = " font-size: 8px; font-family: Arial;"> 
	<option value="0">--Select Credit Hrs--</option>
	
    <option value=4>4</option>
    <option value=3>3</option>
    <option value=2>2</option>
    <option value=1>1</option>
   
</select>
<tr class = "gparow"><td>Course 4:</td><td align = "center">
<select id ="grade4" name= "grade4" style = " font-size: 8px; font-family: Arial;">

<option value="0">--Select Grade--</option>
    <option value=4>A</option>
    <option value=3.6667>A-</option>
    <option value=3.3333>B+</option>
    <option value=3.0>B</option>
    <option value=2.6667>B-</option>
    <option value=2.3333>C+</option>
    <option value=2.0>C</option>
    <option value=0.0>F</option>
</select>
<select id = "credit4" name="credit4" style = "font-size: 8px; font-family: Arial;"> 
	<option value="0">--Select Credit Hrs--</option>
	
    <option value=4>4</option>
    <option value=3>3</option>
    <option value=2>2</option>
    <option value=1>1</option>
   
</select>

<tr class = "gparow"><td>Course 5:</td><td align = "center">
<select id ="grade5" name= "grade5" style = " font-size: 8px; font-family: Arial;">

<option value="0">--Select Grade--</option>
    <option value=4>A</option>
    <option value=3.6667>A-</option>
    <option value=3.3333>B+</option>
    <option value=3.0>B</option>
    <option value=2.6667>B-</option>
    <option value=2.3333>C+</option>
    <option value=2.0>C</option>
    <option value=0.0>F</option>
<select>

<select id = "credit5" name="credit5" style = " font-size: 8px; font-family: Arial;"> 
	<option value="0">--Select Credit Hrs--</option>
	
    <option value=4>4</option>
    <option value=3>3</option>
    <option value=2>2</option>
    <option value=1>1</option>
   
</select>
<tr class = "gparow"><td>Course 6:</td><td align = "center">
<select id ="grade6" name= "grade6" style = " font-size: 8px; font-family: Arial;">

<option value="0">--Select Grade--</option>
    <option value=4>A</option>
    <option value=3.6667>A-</option>
    <option value=3.3333>B+</option>
    <option value=3.0>B</option>
    <option value=2.6667>B-</option>
    <option value=2.3333>C+</option>
    <option value=2.0>C</option>
    <option value=0.0>F</option>
</select>
<select id = "credit6" name="credit6" style = " font-size: 8px; font-family: Arial;"> 
	<option value="0">--Select Credit Hrs--</option>
	
    <option value=4>4</option>
    <option value=3>3</option>
    <option value=2>2</option>
    <option value=1>1</option>
   
</select>
<tr class="submit" align ="center"><td colspan="2"><input type='submit' value='Submit'/></td></tr>
_END;
?>

<tr class="gparow">
<td><i>GPA:</td>
<td align="center"><input type="text" value="<?php echo ($result)?>"></td></i>
</tr>
</table>
</form>
</html>