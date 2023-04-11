<?php 
    class ClienteController
    {
        public static function index()
        {
            include './app/Model/ClienteModel.php';

            $model = new ClienteModel();
            $model->getAllRows();

            include './app/View/home.php';

        }

        public static function editar()
        {
            include './app/Model/ClienteModel.php';
            $model = new ClienteModel();
            $model = $model->getById((int) $_GET['id']);
                        
            include './app/View/editar.php';
            
        }
        public static function salvar()
        {
            include './app/Model/ClienteModel.php';         
            
            $model = new ClienteModel();

            $model->id = $_POST['id'];
            $model->nome = $_POST['inputNome'];
            $model->nascimento = $_POST['inputDate'];
            $model->email = $_POST['inputEmail'];
            $model->profissao = $_POST['inputProfissao'];
            $model->telefone = $_POST['inputTelefone'];
            $model->celular = $_POST['inputCelular'];
            $model->whatsapp = $_POST['checkWhatsapp'];
            $model->notificacoes_email = $_POST['checkEmail'];
            $model->notificacoes_sms = $_POST['checkSms'];

            $model->salvar();

            header("Location: /");
        }
        public static function delete()
        {
            include './app/Model/ClienteModel.php';
            $model = new ClienteModel();
            $model->delete((int) $_GET['id']);
            header("Location: /");


        }
    
    }

?>