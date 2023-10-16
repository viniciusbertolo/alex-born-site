<?php

//define a hora local
date_default_timezone_set('America/Sao_Paulo');






$operacao = null;
$email = null;
$telefone = null;



//------------------------------------------------------------
//RECUPERA OS CAMPOS
//------------------------------------------------------------

function obterCampos()
{
    try {
        global $operacao;
        global $email;
        global $telefone;


        //RECUPERA OS DADOS DO BOTÃO
        if (isset($_REQUEST["btnOperacao"])) {
            $operacao = $_REQUEST["btnOperacao"];
            $operacao = strtoupper($operacao);
        } else {
            $operacao = "VAZIO";
        }


        //EMAIL
        if (isset($_REQUEST["txtEmail"])) {
            if (!empty($_REQUEST["txtEmail"])) {
                $email = $_REQUEST["txtEmail"];
            }
        }
        //TELEFONE
        if (isset($_REQUEST["txtTelefone"])) {
            if (!empty($_REQUEST["txtTelefone"])) {
                $telefone = $_REQUEST["txtTelefone"];
            }
        }
    } catch (Error $ex) {

        echo "<h2 style='color:red;'>Erro: " . $ex->getMessage() . "</h2>";
        echo "<p><a href='agradecimento.php'>Clique aqui para voltar</a></p>";
        die();
    }
}



//-----------------------------------------------
//abre conexao
//-------------------------------------------

function abrirConexao()
{
    $servidor = "us-cdbr-east-06.cleardb.net";
    $banco = "heroku_796c03910f34e5f";
    $usuario = "bca979a5fdd0a6";
    $senha = "dee87e51";
    $con = null;


    try {
        $con = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha);
        // echo "Conexão efetuada com sucesso!<br><br>";

        return $con;
    } catch (Error $ex) {

        echo "<h2 style='color:red;'>Erro: " . $ex->getMessage() . "</h2>";
        echo "<p><a href='agradecimento.php'>Clique aqui para voltar</a></p>";
        die();
    }
}

//---------------------------------------------------------
//inserir
//--------------------------------------------------------------------

function inserir()
{
    try {

        global $email;
        global $telefone;


        $con = abrirConexao();

        //prepara comando
        $cmdSQL = $con->prepare("INSERT IGNORE INTO captura (email, telefone)
                                 VALUES (:email, :telefone)");

        //vinculo de parametros com variáveis
        $cmdSQL->bindParam(":email", $email);
        $cmdSQL->bindParam(":telefone", $telefone);




        //executa comando
        if ($cmdSQL->execute()) {

            // echo "Dados inseridos com sucesso! <br><br>";
            // echo "Linhas afetadas: " .$cmdSQL->rowCount() . "<br>";
            header("Location:agradecimento.php");
        } else {

            header("Location:agradecimento.php");
            // echo "Falha na inserção! <br>";
            // var_dump($cmdSQL->errorInfo());
            // die();
        }
        $con = null;
    } catch (Error $ex) {

        echo "<h2 style='color:red;'>Erro: " . $ex->getMessage() . "</h2>";
        echo "<p><a href='agradecimento.php'>Clique aqui para voltar</a></p>";
        die();
    }
}


?>
