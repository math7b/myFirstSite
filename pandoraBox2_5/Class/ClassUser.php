<?php 

class ClassUser extends PDO {
    private $usuarioId, $usuario, $senha;
    
    public function GetUsuarioId(){
        return $this->usuarioId;
    }
    public function SetUsuarioId($value){
        $this->usuarioId = $value;
    }
    public function GetUsuario(){
        return $this->usuario;
    }
    public function SetUsuario($value){
        $this->usuario = $value;
    }
    public function GetSenha(){
        return $this->senha;
    }
    public function SetSenha($value){
        $this->senha = $value;
    }


    public function UserLogar( $usuario, $senha ) {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $result = $this->query($sql);
        
        if( $result !='' ) {
            while ( $linha = $result->fetchObject() ) {
                $this->usuario = $linha->usuario;
                $this->usuarioId = $linha->usuarioId;
                $this->senha = $linha->senha;
                
                session_start();
            
                $_SESSION['login'] = true;            
                $_SESSION['usuario'] = $usuario;
                return true;
            }
        } else {
            return false;
        }
    }

    public function Consulta( $usuario, $senha ) {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $result = $this->query($sql);
        if( $result != '' ) {
            while ($linha = $result->fetchObject()) {
                $this->usuarioId = $linha->usuarioId;
                $this->usuario = $linha->usuario;
                $this->senha = $linha->senha;
                return true;
            }
        } else {
            return false;
        }
    }

    public function ValidarCampos( $usuario, $senha ) {
        if( ($usuario != '' && $senha != '') ) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ConsultaPorNome( $usuario ) {
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $result = $this->query($sql);
        if( $result != '' ) {
            while( $linha = $result->fetchObject() ) {
                $this->usuarioId = $linha->usuarioId;
                $this->usuario = $linha->usuario;
                $this->senha = $linha->senha;
                return true;
            }
        } else { 
            return false;
        }
    }

    public function GetUserPorId($usuario){
        $sql = "SELECT UsuarioId FROM usuarios WHERE usuario = '$usuario'";
        $result = $this->query($sql);
        while( $linha = $result->fetchObject() ){
            return $linha->UsuarioId;
        }
    }

    public function UserGravar( $usuario, $senha ) {
        if( ! $this->ConsultaPorNome($usuario) ) {
            $_senha = md5($senha);      
            $sql = "INSERT INTO usuarios (usuario, senha) 
                    VALUES ('$usuario', '$_senha')";
            $this->query($sql);
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['usuario'] = $usuario;
            return true;
        } else {
            return false;
        }
    }

    public function UserAccessLevel($usuario) {
        switch ($usuario) {
            case 'Hiragy7':
                $admin = 'Hiragy7';
                return $admin;
                break;
            case 'aaa':
                $admin = 'aaa';
                return $admin;
                break;
        }
    }

    public function Logout(){
        session_start();
        unset($_SESSION['login']);
        unset($_SESSION['usuario']);
    }
}
?>
