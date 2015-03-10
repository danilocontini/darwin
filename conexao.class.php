<?php
class Conexao extends PDO {
 
    private static $instancia;
 
    public function Conexao($dsn, $username = "", $password = "") {
        // O construtro abaixo é o do PDO
        parent::__construct($dsn, $username, $password);
    }
 
    public static function getInstance() {
        // Se o a instancia não existe eu faço uma
        if(!isset( self::$instancia )){
            try {
                self::$instancia = new Conexao("mysql:host=localhost;dbname=darwin", "root", "Own@12345");
                self::$instancia = new Conexao("mysql:host=localhost;dbname=darwin", "root", "Dc182410");
            } catch ( Exception $e ) {
                echo 'Erro ao conectar com o banco de dados!';
                exit ();
            }
        }
        // Se já existe instancia na memória eu retorno ela
        return self::$instancia;
    }
}
?>