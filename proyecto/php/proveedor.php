<?php 
class proveedor{
    private $NiT_provedor; 
    private $Nombre; 
    private $Telefono; 
    private $Correo; 
    private $Dirrecion; 



    public function readProveedor()
    {
        
        $sql="SELECT * FROM proveedor";
        
        return $sql;
    }
    public function crearProveedor($Nombre,$Telefono,$Correo,$Dirrecion)
    {
       
       
        
        $this->Nombre=$Nombre;
        $this->Telefono=$Telefono;
        $this->Correo=$Correo;
        $this->Dirrecion=$Dirrecion;

  
          $sql ="INSERT INTO `proveedor`(`Nombre`, `Telefono`, `Correo`, `Dirrecion`) VALUES ('$Nombre','$Telefono','$Correo','$Dirrecion')";
          
          
          return $sql;
    }

    public function modificarProveedor($NiT_provedor,$Nombre,$Telefono,$Correo,$Dirrecion)
    {
        $this->NiT_provedo=$NiT_provedor;
        $this->Nombre=$Nombre;
        $this->Telefono=$Telefono;
        $this->Correo=$Correo;
        $this->Dirrecion=$Dirrecion;


        $sql = "UPDATE `proveedor` SET `Nombre`='$this->Nombre',`Telefono`='$this->Telefono',`Correo`='$this->Correo',
        `Dirrecion`='$this->Dirrecion' WHERE `NiT_provedor`=$this->NiT_provedo";

         return $sql;
    }
    public function eliminarProveedor($NiT_provedor)
    {
        $this->NiT_provedo=$NiT_provedor;
        
        $sql="DELETE FROM `proveedor` WHERE `NiT_provedor`=$this->NiT_provedo";
        return $sql;
       
    }
    public function consultarProveedor($NiT_provedor)
    {
        
        $this->NiT_provedo=$NiT_provedor;
        
        
        $sql="SELECT * FROM `proveedor` WHERE `NiT_provedor`=$this->NiT_provedo";
        return $sql;
       
    }

    public function busqueda($busqueda){
        $this->busqueda=$busqueda;

        $sql = "SELECT * FROM `proveedor` WHERE 
        `Nombre` LIKE '%$busqueda%' ";
        
        return $sql;
    }
}



?>