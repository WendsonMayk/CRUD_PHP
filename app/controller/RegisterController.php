<?PHP
    require_once "./app/model/RegisterModel.php";

    Class RegisterController{
        public static function paginaCadastro(){
            include "./app/view/cadastro/paginaCadastro.php";          
        }

        public static function cadastrarCliente(){
        // Verificar se o formulário foi enviado (POST)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obter os dados do formulário
            $nomeCliente = $_POST["nomeCompleto"];
            $cpfCliente = $_POST["cpf"];
            $enderecoCliente = $_POST["endereco"];
            $dataAgendamento = $_POST["dataAgendamento"];

            // Criar uma instância da classe RegisterModel
            $registerModel = new RegisterModel();

            // Chamar o método cadastrarUsuario() com os dados do formulário
            $resultadoCadastro = $registerModel->cadastrarUsuario($nomeCliente, $cpfCliente, $enderecoCliente, $dataAgendamento);

            // Redirecionar para a página de sucesso ou exibir mensagem de erro
            if ($resultadoCadastro) {
                // Redirecionar para a página de sucesso
                echo "Cadastro realizado com sucesso: ". var_dump($_POST);
                exit;
            } else {
                // Exibir mensagem de erro
                echo "Falha ao cadastrar usuário.";
            }
            }
        }
    }
?>