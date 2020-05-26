
<?php 
include_once('index.php');
require_once('lib/nusoap.php');

$operacion = $_POST['lista'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$cliente =new nusoap_client('http://localhost/calculadora/servicio.php');
$resultado = $cliente -> call('calculadora',
                array ( 'x' => $n1,
                        'y' => $n2,
                        'operacion' => $operacion));
?>
<div class="cont">
<H2><?php echo $operacion?></H2>
<p>El Resultado es:</p>
<p><?php echo $n1?> + <?php echo $n2?> = <?php echo $resultado?></p>
</div>