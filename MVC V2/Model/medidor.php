<?php
class Medidor
{
	private $pdo;
    
    public $Idmedidor;
    public $Nummedi;
    public $Tipomedi;
    public $Fechains;
    public $Idcliente;
    public $FechaUlti;
	public $IdFacAct;
	public $Marcamedi;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbl_medidor");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($Idmedidor)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbl_medidor WHERE Idmedidor = ?");
			          

			$stm->execute(array($Idmedidor));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($Idmedidor)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_medidor WHERE Idmedidor = ?");			          

			$stm->execute(array($Idmedidor));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbl_medidor SET 
						Nummedi          = ?, 
						Tipomedi        = ?,
                        Fechains        = ?,
						Idcliente            = ?, 
						FechaUlti = ?,
						IdFacAct = ?,
						Marcamedi = ?
				    WHERE Idmedidor = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nummedi, 
                        $data->Tipomedi,
                        $data->Fechains,
                        $data->Idcliente,
                        $data->FechaUlti,
						$data->IdFacAct,
						$data->Marcamedi,
                        $data->Idmedidor
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `tbl_medidor` (Nummedi,Tipomedi,Fechains,Idcliente,FechaUlti,IdFacAct,Marcamedi) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nummedi,
                    $data->Tipomedi,
                    $data->Fechains,
                    $data->Idcliente,
					$data->FechaUlti,  
					$data->IdFacAct,  
					$data->Marcamedi,                      
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
