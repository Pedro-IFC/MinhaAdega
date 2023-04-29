<?php 
    function is_logado($conn, $redirect=true, $index=false){
        if(isset($_SESSION['usuario'])){
            $administrador = new administrador($_SESSION['usuario']['email'], $_SESSION['usuario']['senha'], $conn);
            if($administrador->login()){
                if($redirect){
                    header('Location: /administrador');
                }
            }
        }else{
            if($index){
                header('Location: http://127.0.0.1/minhaadega');
            }
            return false;
        }
    }
?>