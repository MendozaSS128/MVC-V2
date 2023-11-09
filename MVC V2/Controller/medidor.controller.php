<?php
require_once 'Model/medidor.php';

class MedidorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Medidor();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/medidor.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new Medidor();
        
        if(isset($_REQUEST['Idmedidor'])){
            $alm = $this->model->getting($_REQUEST['Idmedidor']);
        }
        
        require_once 'View/header.php';
        require_once 'View/persona-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Medidor();
        
        $alm->Idmedidor = $_REQUEST['Idmedidor'];
        $alm->Nummedi = $_REQUEST['Numero'];
        $alm->Tipomedi = $_REQUEST['Tipo'];
        $alm->Fechains = $_REQUEST['FechaInstalacion'];
        $alm->Idcliente = $_REQUEST['Cliente'];
        $alm->FechaUlti = $_REQUEST['FechaUltima'];
        $alm->IdFacAct = $_REQUEST['FacturaActiva'];
        $alm->Marcamedi = $_REQUEST['MarcaMedidor'];

        // SI ID Medidor ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Medidor, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->Idmedidor > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idpersona > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['Idmedidor']);
        header('Location: index.php');
    }
}
