<?php
    define('HOST', 'localhost');
    define('DATABASENAME', 'cadastro');
    define('USER', 'root');
    define('PASSWORD', '');

    class ClienteDAO{
        private $conexao;

        public function __construct()
        {
            try
            {
                $this->conexao = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            }
            catch(exception $e)
            {
                echo "Erro ao conectar " .$e;
            }
            
        }
        
        public function insert(ClienteModel $model)
        {
            $sql = "INSERT INTO clientes (nome, nascimento, email, profissao, telefone, celular, whatsapp, notificacoes_email, notificacoes_sms) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->nascimento);
            $stmt->bindValue(3, $model->email);
            $stmt->bindValue(4, $model->profissao);
            $stmt->bindValue(5, $model->telefone);
            $stmt->bindValue(6, $model->celular);
            $stmt->bindValue(7, $model->whatsapp);
            $stmt->bindValue(8, $model->notificacoes_email);
            $stmt->bindValue(9, $model->notificacoes_sms);
            
            $stmt->execute();
        }
        public function update(ClienteModel $model)
        {
            $sql = "UPDATE clientes SET nome=:nome, nascimento=:nascimento, email=:email, profissao=:profissao, telefone=:telefone, celular=:celular, whatsapp=:whatsapp, notificacoes_email=:notificacoes_email, notificacoes_sms=:notificacoes_sms WHERE id=:id";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(':nome', $model->nome);
            $stmt->bindValue(':nascimento', $model->nascimento);
            $stmt->bindValue(':email', $model->email);
            $stmt->bindValue(':profissao', $model->profissao);
            $stmt->bindValue(':telefone', $model->telefone);
            $stmt->bindValue(':celular', $model->celular);
            $stmt->bindValue(':whatsapp', $model->whatsapp);
            $stmt->bindValue(':notificacoes_email', $model->notificacoes_email);
            $stmt->bindValue(':notificacoes_sms', $model->notificacoes_sms);
            $stmt->bindValue(':id', $model->id);

            $stmt->execute();
        }
        

        public function select()
        {
            $sql = "SELECT * FROM clientes";
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        }
        public function selectById(int $id)
        {
            // include_once 'Model/ClienteModel.php';

            $sql = "SELECT * FROM clientes WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject(); 

        }

        public function delete(string $id)
        {
            $sql = "DELETE FROM clientes WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }

?>