<html>
<body>

<form name="calc" method="post">
<input type="text" name="input_value" id="display" >
<input type="button" value="1"  onclick="calc.display.value+='1'">
<input type="button" value="2"  onclick="calc.display.value+='2'">
<input type="button" value="+"  onclick="calc.display.value+='+'">
<input type="submit" name="submit">
<?php
if (isset($_POST['submit']))
  {
  // Execute this code if the submit button is pressed.
  $ma = $_POST['input_value'];
if(preg_match('/(\d+)(?:\s*)([\+\-\*\/])(?:\s*)(\d+)/', $ma, $matches) !== FALSE){
    $operator = $matches[2];

    switch($operator){
        case '+':
            $p = $matches[1] + $matches[3];
            break;
        case '-':
            $p = $matches[1] - $matches[3];
            break;
        case '*':
            $p = $matches[1] * $matches[3];
            break;
        case '/':
            $p = $matches[1] / $matches[3];
            break;
    }
echo $p;
    
}

  }
?>
</form>
</body>
</html>
