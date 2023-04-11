<?php

    class ClienteModel
    {
        public $id, $nome, $nascimento, $email, $profissao, $telefone, $celular, $whatsapp, $notificacoes_email, $notificacoes_sms;

        public $linhas;

        public function salvar()
        {
            include './app/DAO/ClienteDAO.php';

            $dao = new ClienteDAO();

            if (empty($this->id)) {
                $dao->insert($this);            
            } else {
                $dao->update($this);
            }
        }
       
        public function delete(int $id)
        {
            include './app/DAO/ClienteDAO.php';
            $dao = new ClienteDAO();
            $dao->delete($id);

        }

        public function getAllRows()
        {
            include './app/DAO/ClienteDAO.php';

            $dao = new ClienteDAO();
            $this->linhas = $dao->select();
        }
        public function getById(string $id)
        {
            include './app/DAO/ClienteDAO.php';

            $dao = new ClienteDAO();

            //tratamento de objetos desconhecidos na url
            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new ClienteModel();
            
        }  

        
    }

?>