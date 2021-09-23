<?php

switch ($_SERVER['PATH-INFO']) {
    case '/listar-cursos':
        require 'listar-cursos.php';
    break;
    case '/novo-curso.php':
        require 'formulario-novo-curso.php';
    break;
    default:
        echo "Erro 404";
    }