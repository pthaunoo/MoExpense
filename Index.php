<!DOCTYPE html>
<html>
</head>
   <title>Liverpool Football Club</title>
   <meta charset="utf-8">
</head>
<style> 
input[type=text] {
  box-sizing: border-box;
  border: 1px embossed #ccc ;
  border-style: groove;
  background-color: #FBFFBF;
}
</style>

<?php
$chksporterr = "";
$name = $chksport = "";

if ($_server["REQUEST_METHOD"]=="POST") {
  if (empty($_POST["chksport"])) {$chksporterr = "No sport choices"} 
  else {$chksport = data_input($_POST["Sport Choices"]);}
}

function data_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form action="/survey.php" method="post">
<fieldset>
    <label for="txtname">Name: <input type="text" id="txtname" name="txtname" value="<?php echo $name;?>" backgroud-color= #FBFFBF> </label><br>   
    <label for ="chksport">Sport Choices: 
    <input type="checkbox" id="chksport" name="Sport Choices" value="chksport">
    <label for="chksport">Football</label> 
    <input type="checkbox" id="chksport" name="sport Choices">  
    <label for="chksport">Volleyball</label>
    <input type="checkbox" id="chksport" name="sport Choices">  
    <label for="chksport">Basketball</label>
    <input type="checkbox" id="chksport" name="sport Choices">  
    <label for="chksport">Handball</label>    
    <br>
    <input type="submit" name="Submit" value="submit">
</fieldset>
</form>

<?php
echo "<h2>Player Sports Tournament</h2>";
echo $name

</html>