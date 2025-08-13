<?php
ob_start();
?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>clientes..php</title>
    <style>

    </style>
</head>
<body>

<?php
require_once "../models/ClienteModel.php";

$cliente = new Cliente_model();
$data["cliente"] = $cliente->get_clientes();
?>

	<table border="1">
        <thead>
            <tr>
                <th style="width: 30px; text-align: left;" class="cab">Nombre</th>
                <th style="width: 30px; text-align: left;" class="cab">Sector</th>
                <th style="width: 30px; text-align: left;" class="cab">Telefono</th>
                <th style="width: 30px; text-align: left;" class="cab">Correo</th>
                <th style="width: 30px; text-align: left;" class="cab">Direccion</th> 
            </tr>
        </thead>					
        <tbody>
            <div>
            <?php 
                foreach($data["cliente"] as $dato) {
                    echo "<tr>";
                    echo "<td style='width: 30px''>".$dato["nombre"]."</td>";
                    echo "<td style='width: 30px'>".$dato["sector"]."</td>";
                    echo "<td style='width: 30px'>".$dato["telefono"]."</td>";
                    echo "<td style='width: 30px'>".$dato["correo_c"]."</td>";
                    echo "<td style='width: 30px'>".$dato["direccion"]."</td>";
	                echo "</tr>";
                }
            ?>
            </div>
        </tbody>					
	</table>

<?php
$html = ob_get_clean();
echo $html;
/*
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();

require "dompdf/vendor/autoload.php";


$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');
//$dompdf->setPaper('A4','landscape');

$dompdf->render();

$dompdf->stream("archivo_.pdf", array("Attachment" => false));
*/
?>
