<?php

    class proyecto extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function obtenerProyectos(){            
            $data = $this->model->getProyectos();
            for($i =0; $i < count($data); $i++){
               $data[$i]['acciones']='
               <select name="acciones" id="acciones">
                    <option value="">-</option>
                    <option value="aprobado">Aprobado</option>
                    <option value="noAprobado">NoAprobado</option>
                    <option value="enRevision">EnRevision</option>
                </select>';
                $data[$i]['observaciones']='<div>
                <textarea name="observaciones" id="observaciones" cols="30" rows="5"></textarea>    </div>';
            }
            //print(json_encode($data,JSON_UNESCAPED_UNICODE));
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }
    }

?>