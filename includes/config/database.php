<?php

function conectarDB() : mysqli {
   $db = mysqli_connect('localhost', 'ch3ber', '', 'bienesraices_crud');

   if (!$db) {
      echo "Error no se pudo conectar";
      exit;
   }

   return $db;
}
