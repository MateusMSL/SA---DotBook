<?php

class Conexao {

    protected static $conexao;

    private function __construct(){

        $db_host = "localhost";
        $db_nome = "dotbook";
        $db_usuario = "root";
        $db_senha = "";
        $db_driver = "mysql";
        
        try {
            
            self::$conexao = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
            self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conexao->exec('SET NAMES utf8');
            
        }
        catch (PDOException $e) {
            //echo "Erro ao tentar estabelecer conxão com Banco de Dados: " . $e->getMessage();
            }
        }
        
        public static function getConexao() {
            if (!self::$conexao) {
                new Conexao();
            }

            return self::$conexao;
    }
    
}

?>