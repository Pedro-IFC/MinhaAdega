<?php 
    class administrador{
        private $email;
        private $senha;
        private $conn;
        public function set($name, $val){
            $this->$name = $val;
        }
        public function get($name){
            return $this->$name;
        }
        public function __construct($email, $senha, $conn){
            $this->set("email", $email);
            $this->set("senha", $senha);
            $this->set("conn", $conn);
        }
        public function login(){
            if(isset($_SESSION['usuario'])){
                $sql = 'SELECT * FROM ADMIN WHERE senha = "'.$_SESSION['usuario']['senha'].'" AND email = "'.$_SESSION['usuario']['email'].'";';
                $result = $this->get("conn")->query($sql)->rowCount();
                if($result >0){
                    return true;
                }else{
                    return false;
                }
            }else{
                $sql = 'SELECT * FROM ADMIN WHERE senha = "'.$this->get("senha").'" AND email = "'.$this->get("email").'";';
                $result = $this->get("conn")->query($sql)->rowCount();
                if($result >0){
                    $_SESSION['usuario']['senha'] = $this->get("senha");
                    $_SESSION['usuario']['email'] = $this->get("email");
                    $_SESSION['mensagem'] = "Sucesso  ao logar";
                    return true;
                }else{
                    $_SESSION['mensagem'] = "Erro ao logar";
                    return false;
                }
            }
        }
    }
?>