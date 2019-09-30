<?php

class Obra
{
    public function listar()
    {
        $query = "SELECT nm_obra, tombo, status_obra FROM obra";
        $conexao = new PDO('mssql:host=192.168.0.30;dbname=BDIGITAL_201902', 'sa', '123456');
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
/*
    public function reservar(){
        $query = 'INSERT '

    }*/
}