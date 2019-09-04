<?php 
require_once "config.php";
class Conexao 
{
    static function pegarConexao()
    {
        // $conexao = new PDO('sqlsrv:Server=(LOCAL);Database=estoque', 'sa', '@royalsoft');
        $conexao = new PDO(DB_DRIVE .':Server='.DB_HOSTNAME.';Database='.DB_DATABASE,DB_USERNAME, DB_PASSWORD);
        return $conexao;
    }
    
}
