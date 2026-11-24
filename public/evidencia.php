<?php
echo "<h2>Evidencia de Versión PHP - SIAgroBD</h2>";
echo "<b>Servidor (Hostname):</b> " . gethostname() . "<br>";
echo "<b>IP del Servidor:</b> " . ($_SERVER['SERVER_ADDR'] ?? 'No disponible') . "<br>";
echo "<b>Fecha y Hora:</b> " . date('Y-m-d H:i:s') . "<br>";
echo "<b>Versión PHP activa:</b> <span style='color:green; font-size:20px;'>" . phpversion() . "</span><br>";
echo "<b>Modo de ejecución (SAPI):</b> " . php_sapi_name() . "<br>";
echo "<b>Archivo php.ini cargado:</b> " . php_ini_loaded_file() . "<br>";
