<?php


class Conn
{
    private static $Host = 'localhost';
    private static $User = 'root';
    private static $Pass = '';
    private static $Dbsa = 'nome_do_banco';

    /** @var PDO */
    private static $Connect = null;

    /**
     * Conexão com o banco de dados
     * Retorna um objeto PDO
     */
    private static function Conectar() {
        try {
            if (self::$Connect == null):
                $dsn = 'mysql:host=' . self::$Host . ';dbname=' . self::$Dbsa;
                $options = [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                self::$Connect = new PDO($dsn, self::$User, self::$Pass, $options);
                self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            endif;
        } catch (PDOException $e) {
            echo $e->getMessage(), $e->getFile(), $e->getLine();
            die;
        }

        return self::$Connect;
    }

    /** Retorna um objeto PDO Singleton Pattern. */
    public static function getConn() {
        return self::Conectar();
    }

    /**
     * Previne que uma nova instância da classe seja criada fora desta classe.
     */
    private function __construct() {

    }

    /**
     * Previne a clonagem desta instância da classe
     * @return void
     */
    private function __clone() {

    }

    /**
     * Método para previnir desserialização da instância desta classe.
     * @return void
     */
    private function __wakeup() {

    }
}