<?php
$port = 8000;
echo "Servidor PHP iniciado em http://localhost:$port\n";
exec("php -S localhost:$port -t  public");
?>