<?php
    class Usuario{
        public $nombre;
        public $apellidos;
        public $email;
        public $password;

        // Getter
        function getNombre(){
            return $this->nombre;
        }
        
        function getApellidos(){
            return $this->apellidos;
        }
        
        function getEmail(){
            return $this->email;
        }
        
        function getPassword(){
            return $this->password;
        }

        // Setter
        function setNombre($nombre){
            $this->nombre = $nombre;
        }

        function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        
        function setEmail($email){
            $this->email = $email;
        }
        
        function setPassword($password){
            $this->password = $password;
        }

        //Metodo para que consulte la base de datos
        public function conseguirTodos(){
            echo "IMPRIMIENDO TODOS LOS USUARIOS...";
    }
}

?>