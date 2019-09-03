<?php 

class Conexao 
{
    static function pegarConexao()
    {
        $conexao = new PDO('sqlsrv:Server=(LOCAL);Database=estoque', 'sa', '@royalsoft');
        return $conexao;
    }
    
}
