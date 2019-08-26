<?php

    var_dump($_POST)

    include('Conexion.php');

    INSERT INTO 'tb_pagador'('pg_tipoDocumento', 'pg_documento', 'pg_nombre', 'pg_apellido', 'pg_email', 'pg_telefonor') VALUES ($_POST['ctype']],$_POST['document'],$_POST['name'],$_POST['surname'],$_POST['email'],$_POST['mobile'])

?>