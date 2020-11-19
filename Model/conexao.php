<?php
class Conexao{

    public static function getConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "evalanches";

        try{
            $minhaConexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $minhaConexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $minhaConexao;
        }
        catch(PDOException $e) {
            echo "erro na conexao".$e->getMessage();
            return null;
        }
    }
}
