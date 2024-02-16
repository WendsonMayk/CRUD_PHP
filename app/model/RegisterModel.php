<?php
    require_once "./app/config/ConnectionClass.php";

    Class RegisterModel{
        
        private $conexao;

        public function __construct() {
            // Criação da conexão com o banco de dados
            $this->conexao = new Connection("localhost", "root", "", "webdb");
        }
    
        public function cadastrarUsuario($nomeCliente, $cpfCliente, $enderecoCliente, $dataAgendamento) {
            try {
                // Consulta SQL de inserção com marcadores de posição
                $query = "INSERT INTO cliente (nomeCliente, cpfCliente, enderecoCliente, Dat_Agendamento) VALUES (?, ?, ?, ?)";
    
                // Preparação da consulta
                $statement = $this->conexao->getPdo()->prepare($query);
    
                // Execução da consulta com os valores passados como parâmetros
                $statement->execute([$nomeCliente, $cpfCliente, $enderecoCliente, $dataAgendamento]);
    
                // Retorna true se a inserção for bem-sucedida
                return true;
            } catch (PDOException $e) {
                // Em caso de erro, exibir mensagem de erro e retornar false
                echo 'Erro ao cadastrar usuário: ' . $e->getMessage();
                var_dump($_POST);
                return false;
            }
        }
    
    }
?>