<?php

require_once "./EstadoEntity.php";
require_once "./CidadeEntity.php";
require_once "./EnderecoEntity.php";

class Endereco {
    public EstadoEntity $estado;
    public CidadeEntity $cidade;
    public EnderecoEntity $endereco;
}