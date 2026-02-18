<?php

require_once "./conexao.php";
require_once "./BancoDeDados.php";
require_once "./UsuarioEntity.php";

$banco = new BancoDados($conexao);
$usuarioModel = new UsuarioEntity($banco);