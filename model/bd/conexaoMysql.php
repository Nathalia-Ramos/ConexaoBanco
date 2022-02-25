<?php 

/********************************************************************
 * Objetivo: Arquivo para criar conexão com o BD MySql
 * Autor: Nathalia Ramos
 * Data: 25/02/2022
 * Versão: 1.0
 ********************************************************************/

 //constantes para estabelecer a conexão com o BD (local do DB, usuario, senha e database)
const SERVER = 'localhost';
const USER = 'root';
const PASSWORD = 'bcd127';
const DATABASE = 'dbcontatos';

//forçando a chamada da funçao
echo ('<pre>');
$resultado = conexaoMysql();
var_dump($resultado); //imprime quando nao tem o front pronto
echo ('</pre>');
 // Abre a conexão com o banco de dados mysql
function conexaoMysql(){
    $conexao = array();
    //Se a conexão for estabelecida com o banco de dados, iremos ter um array de dados sobre a conexão
    $conexao = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

    //Validação para verificar se a conexão foi realizada com sucesso
    if($conexao)
        return $conexao;
    else
        return false;
    
}

/* 
    Existem tres formas de criar a conexão com o BD Mysql

        mysql_connect() -  É uma versão antiga do PHP de fazer a conexão com BD
            (não oferece perfomance e segurança)

        mysqli_connect() - É a versão mais atualizada do PHP de fazer a conexão com BD
            (permite ser utilizada para programação estruturada e POO)

        PDO() - É a versão mais completa do PHP
            (é indicada pela segurança e POO)
*/


?>