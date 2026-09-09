<?php
// Inicia a sessão para que o navegador lembre que o usuário está logado
session_start();

// 1. Importa o seu arquivo de conexão existente
// Certifique-se de que a variável de conexão dentro dele se chama $conexao
require_once 'conexao.php'; 

// 2. Verifica se o formulário de login enviou os dados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Resgata os dados digitados no HTML de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Evita campos vazios
    if (!empty($email) && !empty($senha)) {
        
        // 3. Prepara a consulta SQL para buscar o usuário usando MySQLi (Prepared Statements)
        // Substitua 'usuarios' pelo nome real da sua tabela no banco de dados
        $sql = "SELECT id, nome FROM usuarios WHERE email = ? AND senha = ?";
        
        if ($stmt = $conexao->prepare($sql)) {
            // Vincula o email e a senha digitados aos pontos de interrogação (?)
            $stmt->bind_param("ss", $email, $senha);
            $stmt->execute();
            $resultado = $stmt->get_result();

            // 4. Verifica se encontrou exatamente 1 usuário com esse e-mail e senha
            if ($resultado->num_rows === 1) {
                $usuario = $resultado->fetch_assoc();
                
                // Cria as variáveis de sessão para identificar o usuário logado
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                
                // Redireciona o cliente para a tela principal/painel após o login
                header("Location: painel.php");
                exit;
            } else {
                // Mensagem genérica por segurança (não diz se o erro foi só no e-mail ou só na senha)
                echo "E-mail ou senha incorretos.";
            }
            $stmt->close();
        } else {
            echo "Erro interno no servidor ao processar o login.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    // Se tentarem acessar este arquivo PHP diretamente pelo navegador, joga de volta para o HTML
    header("Location: login.html");
    exit;
}

?>
