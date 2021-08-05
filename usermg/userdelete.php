<?php
require '../res/php/app_top.php';
if(!isset($_GET["name"])) exit();
$name = $_GET["name"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="../res/css/semantic.min.css">
		<link rel="stylesheet" href="../res/css/main.css">
	</head>
	<body style="background-color: #fff;" id="cuerpo">
		<div class="ui modal">
    <div class="header">
    Aviso
  </div>
  <div class="image content">
    <div class="description">
      ¿Está seguro que desea eliminar al usuario: "<?php echo $name; ?>"?
    </div>
  </div>
  <div class="actions">
    <a class="ui button" href="userdel.php">Cancelar</a>
    <a class="ui green button" href="<?php echo "userdeletec.php?name=" . $name?>">Proceder</a>
  </div>
</div>
<script type="text/javascript" src="../res/js/jquery.min.js"></script>
<script type="text/javascript" src="../res/js/semantic.min.js"></script>
<script type="text/javascript">
$(window).on('load', function(){
  $('.ui.modal').modal('show');
});
</script>
	</body>
</html>
