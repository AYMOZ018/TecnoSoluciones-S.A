<?php

// Generar el contenido del reporte

$html = '<table border="1" cellspacing="0" cellpadding="5">';
$html .= '<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Sector</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Dirección</th>
          </tr>';
foreach ($clientes as $cliente) {
    $html .= '<tr>
                <td>' . $cliente['id_c'] . '</td>
                <td>' . $cliente['nombre'] . '</td>
                <td>' . $cliente['sector'] . '</td>
                <td>' . $cliente['telefono'] . '</td>
                <td>' . $cliente['correo_c'] . '</td>
                <td>' . $cliente['direccion'] . '</td>
              </tr>';
}
$html .= '</table>';

// Retornar el contenido HTML
return $html;

echo $html;

