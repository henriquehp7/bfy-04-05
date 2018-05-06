<?php

    include "db.php";


        function cadastrarUsuario(){
            global $connection;

            if(isset($_POST['enviar'])){
            $nome = $_POST['nomeCadastro'];
            $usuario = $_POST['usuarioCadastro'];
            $email = $_POST['emailCadastro'];
            $cpf = $_POST['cpfCadastro'];
            $dt_nascimento = $_POST['dataNascCadastro'];
            $senha = $_POST['senhaCadastro'];
            $senhaConfirma = $_POST['senhaConfirma'];

            $query = "INSERT INTO t_sbfy_usuario(nm_cliente, nm_usuario, ds_email, nr_cpf, dt_nascimento, ds_senha, ds_sexo) VALUES ('$nome', '$usuario', '$email', '$cpf', '$dt_nascimento', '$senha', '$sexo')";

            $resultado = mysqli_query($connection, $query);

            if(!$resultado){
                echo("O cadastro não foi incluído" . mysqli_error($connection));
                echo "<script>alert('Erro no cadastro');</script>";
            } else {
               echo "Dados incluídos com sucesso!!!";
                header('location:account.php');
                
            }

        }
    }


    function loginUsuario(){
        // session_start inicia a sessão
        session_start();
        // as variáveis login e senha recebem os dados digitados na página anterior
        if(isset($_POST['entrar'])){
        $login = $_POST['txtUsuario'];
        $senha = $_POST['senha'];
        // as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
        global $connection;

        $query = "SELECT * FROM `t_sbfy_usuario` WHERE `nm_usuario` = '$login' AND `ds_senha`= '$senha'";
        // A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
        $result = mysqli_query($connection, $query);
            
        while($ow = mysqli_fetch_assoc($result)){
            $db_nome = $row['nm_cliente'];
            echo $db_nome;
        }
        /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
        if(mysqli_num_rows ($result) > 0 ){
        $_SESSION['txtUsuario'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['nm_clinte'] =     $db_nome ;
        header('location:account.php');
        }
        else{
            unset ($_SESSION['txtUsuario']);
            unset ($_SESSION['senha']);
            $_SESSION['nm_clinte'] =     $db_nome ;
            header('location:login.php');

            }
        
        
        /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a login.php.*/
        
        if((!isset ($_SESSION['txtUsuario']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            unset($_SESSION['txtUsuario']);
            unset($_SESSION['senha']);
            
            header('location:login.php');
            }

        $logado = $_SESSION['txtUsuario'];
            }
    }


    


?>