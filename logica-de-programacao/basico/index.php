<?php
require "../../core/boot.php";
$href = "Location: " . LINKS_PATH . "/logica-de-programacao/";

// Permanent redirection
header("HTTP/1.1 301 Moved Permanently");
header($href);
?>