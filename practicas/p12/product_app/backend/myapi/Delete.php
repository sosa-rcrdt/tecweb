<?php
    namespace TECWEB\MYAPI;
    include_once __DIR__.'/DataBase.php';
    class Delete extends DataBase {
        public function __construct($db, $user='root', $pass='changocome') {
            $this->data = array();
            parent::__construct($db, $user, $pass);
        }

        public function delete($id) {
            $this->data = array(
                'status'  => 'error',
                'message' => 'La consulta falló'
            );
            // SE VERIFICA HABER RECIBIDO EL ID
            if($id) {
                // SE REALIZA LA QUERY DE BÚSQUEDA Y AL MISMO TIEMPO SE VALIDA SI HUBO RESULTADOS
                $sql = "UPDATE productos SET eliminado=1 WHERE id = {$id}";
                if ( $this->conexion->query($sql) ) {
                    $this->data['status'] =  "success";
                    $this->data['message'] =  "Producto eliminado";
                } else {
                    $this->data['message'] = "ERROR: No se ejecuto $sql. " . mysqli_error($this->conexion);
                }
                $this->conexion->close();
            }
        }

        public function getData() {
            return json_encode($this->data, JSON_PRETTY_PRINT);
        }
    }
?>