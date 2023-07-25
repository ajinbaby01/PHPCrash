<!DOCTYPE html>
<html>
<body>

<?php
$int = "a";
echo var_dump(filter_var($int, FILTER_VALIDATE_INT));
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>

</body>
</html>
