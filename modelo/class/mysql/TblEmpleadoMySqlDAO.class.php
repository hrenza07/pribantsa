<?php
/**
 * Class that operate on table 'tbl_empleado'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-02-15 22:31
 */
class TblEmpleadoMySqlDAO implements TblEmpleadoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblEmpleadoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_empleado WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_empleado';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_empleado ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblEmpleado primary key
 	 */
	public function delete($id_empleado){
		$sql = 'DELETE FROM tbl_empleado WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_empleado);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblEmpleadoMySql tblEmpleado
 	 */
	public function insert($tblEmpleado){
		$sql = 'INSERT INTO tbl_empleado (dui, nit, isss, afp, nombre, apellido, sexo, cuenta, fecha_nacimiento, salario, id_puesto_trabajo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->dui)) || is_null($tblEmpleado->dui))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->nit)) || is_null($tblEmpleado->nit))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->isss)) || is_null($tblEmpleado->isss))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->afp)) || is_null($tblEmpleado->afp))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->nombre)) || is_null($tblEmpleado->nombre))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->apellido)) || is_null($tblEmpleado->apellido))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->sexo)) || is_null($tblEmpleado->sexo))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->cuenta)) || is_null($tblEmpleado->cuenta))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->fechaNacimiento)) || is_null($tblEmpleado->fechaNacimiento))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->salario)) || is_null($tblEmpleado->salario))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->idPuestoTrabajo)) || is_null($tblEmpleado->idPuestoTrabajo))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblEmpleado->dui)) && (!is_null($tblEmpleado->dui)))
			$sqlQuery->set($tblEmpleado->dui);
		if ((isset($tblEmpleado->nit)) && (!is_null($tblEmpleado->nit)))
			$sqlQuery->set($tblEmpleado->nit);
		if ((isset($tblEmpleado->isss)) && (!is_null($tblEmpleado->isss)))
			$sqlQuery->set($tblEmpleado->isss);
		if ((isset($tblEmpleado->afp)) && (!is_null($tblEmpleado->afp)))
			$sqlQuery->set($tblEmpleado->afp);
		if ((isset($tblEmpleado->nombre)) && (!is_null($tblEmpleado->nombre)))
			$sqlQuery->set($tblEmpleado->nombre);
		if ((isset($tblEmpleado->apellido)) && (!is_null($tblEmpleado->apellido)))
			$sqlQuery->set($tblEmpleado->apellido);
		if ((isset($tblEmpleado->sexo)) && (!is_null($tblEmpleado->sexo)))
			$sqlQuery->set($tblEmpleado->sexo);
		if ((isset($tblEmpleado->cuenta)) && (!is_null($tblEmpleado->cuenta)))
			$sqlQuery->set($tblEmpleado->cuenta);
		if ((isset($tblEmpleado->fechaNacimiento)) && (!is_null($tblEmpleado->fechaNacimiento)))
			$sqlQuery->set($tblEmpleado->fechaNacimiento);
		if ((isset($tblEmpleado->salario)) && (!is_null($tblEmpleado->salario)))
			$sqlQuery->set($tblEmpleado->salario);
		if ((isset($tblEmpleado->idPuestoTrabajo)) && (!is_null($tblEmpleado->idPuestoTrabajo)))
			$sqlQuery->setNumber($tblEmpleado->idPuestoTrabajo);

		$id = $this->executeInsert($sqlQuery);	
		$tblEmpleado->idEmpleado = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblEmpleadoMySql tblEmpleado
 	 */
	public function update($tblEmpleado){
		$sql = 'UPDATE tbl_empleado SET dui = ?, nit = ?, isss = ?, afp = ?, nombre = ?, apellido = ?, sexo = ?, cuenta = ?, fecha_nacimiento = ?, salario = ?, id_puesto_trabajo = ? WHERE id_empleado = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->dui)) || is_null($tblEmpleado->dui))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->nit)) || is_null($tblEmpleado->nit))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->isss)) || is_null($tblEmpleado->isss))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->afp)) || is_null($tblEmpleado->afp))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->nombre)) || is_null($tblEmpleado->nombre))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->apellido)) || is_null($tblEmpleado->apellido))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->sexo)) || is_null($tblEmpleado->sexo))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->cuenta)) || is_null($tblEmpleado->cuenta))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->fechaNacimiento)) || is_null($tblEmpleado->fechaNacimiento))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->salario)) || is_null($tblEmpleado->salario))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEmpleado->idPuestoTrabajo)) || is_null($tblEmpleado->idPuestoTrabajo))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblEmpleado->dui)) && (!is_null($tblEmpleado->dui)))
			$sqlQuery->set($tblEmpleado->dui);
		if ((isset($tblEmpleado->nit)) && (!is_null($tblEmpleado->nit)))
			$sqlQuery->set($tblEmpleado->nit);
		if ((isset($tblEmpleado->isss)) && (!is_null($tblEmpleado->isss)))
			$sqlQuery->set($tblEmpleado->isss);
		if ((isset($tblEmpleado->afp)) && (!is_null($tblEmpleado->afp)))
			$sqlQuery->set($tblEmpleado->afp);
		if ((isset($tblEmpleado->nombre)) && (!is_null($tblEmpleado->nombre)))
			$sqlQuery->set($tblEmpleado->nombre);
		if ((isset($tblEmpleado->apellido)) && (!is_null($tblEmpleado->apellido)))
			$sqlQuery->set($tblEmpleado->apellido);
		if ((isset($tblEmpleado->sexo)) && (!is_null($tblEmpleado->sexo)))
			$sqlQuery->set($tblEmpleado->sexo);
		if ((isset($tblEmpleado->cuenta)) && (!is_null($tblEmpleado->cuenta)))
			$sqlQuery->set($tblEmpleado->cuenta);
		if ((isset($tblEmpleado->fechaNacimiento)) && (!is_null($tblEmpleado->fechaNacimiento)))
			$sqlQuery->set($tblEmpleado->fechaNacimiento);
		if ((isset($tblEmpleado->salario)) && (!is_null($tblEmpleado->salario)))
			$sqlQuery->set($tblEmpleado->salario);
		if ((isset($tblEmpleado->idPuestoTrabajo)) && (!is_null($tblEmpleado->idPuestoTrabajo)))
			$sqlQuery->setNumber($tblEmpleado->idPuestoTrabajo);

		$sqlQuery->setNumber($tblEmpleado->idEmpleado);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_empleado';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDui($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE dui = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNit($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE nit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsss($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE isss = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAfp($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE afp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByApellido($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE apellido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySexo($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE sexo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCuenta($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE cuenta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaNacimiento($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE fecha_nacimiento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySalario($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE salario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdPuestoTrabajo($value){
		$sql = 'SELECT * FROM tbl_empleado WHERE id_puesto_trabajo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDui($value){
		$sql = 'DELETE FROM tbl_empleado WHERE dui = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNit($value){
		$sql = 'DELETE FROM tbl_empleado WHERE nit = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsss($value){
		$sql = 'DELETE FROM tbl_empleado WHERE isss = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAfp($value){
		$sql = 'DELETE FROM tbl_empleado WHERE afp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNombre($value){
		$sql = 'DELETE FROM tbl_empleado WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByApellido($value){
		$sql = 'DELETE FROM tbl_empleado WHERE apellido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySexo($value){
		$sql = 'DELETE FROM tbl_empleado WHERE sexo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCuenta($value){
		$sql = 'DELETE FROM tbl_empleado WHERE cuenta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaNacimiento($value){
		$sql = 'DELETE FROM tbl_empleado WHERE fecha_nacimiento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySalario($value){
		$sql = 'DELETE FROM tbl_empleado WHERE salario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdPuestoTrabajo($value){
		$sql = 'DELETE FROM tbl_empleado WHERE id_puesto_trabajo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblEmpleadoMySql 
	 */
	protected function readRow($row){
		$tblEmpleado = new TblEmpleado();
		
		$tblEmpleado->idEmpleado = $row['id_empleado'];
		$tblEmpleado->dui = $row['dui'];
		$tblEmpleado->nit = $row['nit'];
		$tblEmpleado->isss = $row['isss'];
		$tblEmpleado->afp = $row['afp'];
		$tblEmpleado->nombre = $row['nombre'];
		$tblEmpleado->apellido = $row['apellido'];
		$tblEmpleado->sexo = $row['sexo'];
		$tblEmpleado->cuenta = $row['cuenta'];
		$tblEmpleado->fechaNacimiento = $row['fecha_nacimiento'];
		$tblEmpleado->salario = $row['salario'];
		$tblEmpleado->idPuestoTrabajo = $row['id_puesto_trabajo'];

		return $tblEmpleado;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return TblEmpleadoMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>