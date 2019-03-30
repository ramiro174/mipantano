<?php
    /**
     * Created by PhpStorm.
     * User: ramiro174
     * Date: 2019-03-30
     * Time: 12:11
     */
    
    namespace App\Http;
    use function collect;
    use function json_encode;

    class Respuesta
    {
        
        public $datos=[];
        public $status=0;
        public $time="";
        public $isempty=true;
        public $mensaje="Sin datos";
        public $tiporespuesta="application/json";
        public $descripcionError="";
        
        /**
         * Respuesta constructor.
         * @param collect $datos
         * @param int    $status
         */
        public function __construct($datos, int $status)
        {
            $datos=collect($datos);
            $this->datos = $datos;
            $this->status = $status;
            if($datos->count()>=1){
                $this->isempty=false;
            }
            
        }
        public function enJson(){
            return  json_encode($this);
        }
    }
