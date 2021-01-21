<?php
//create function
function showInput() {
  echo "<body>";
  //label the action
  print "<p>You entered:</p>";
  //print input from Form @action.html
  echo $_POST['name'];
  echo "</body>";
};
//call showInput()
showInput();
?>
