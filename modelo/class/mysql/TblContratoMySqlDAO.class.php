<?php
/**
 * Class that operate on table 'tbl_contrato'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-02-15 22:31
 */
class TblContratoMySqlDAO implements TblContratoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblContratoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_contrato WHERE id_contrato = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_contrato';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_contrato ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblContrato primary key
 	 */
	public function delete($id_contrato){
		$sql = 'DELETE FROM tbl_contrato WHERE id_contrato = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_contrato);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblContratoMySql tblContrato
 	 */
	public function insert($tblContrato){
		$sql = 'INSERT INTO tbl_contrato (fecha_inicio, fecha_fin, tipo_contrato, id_empleado) VALUES (?, ?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblContrato->fechaInicio)) || is_null($tblContrato->fechaInicio))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblContrato->fechaFin)) || is_null($tblContrato->fechaFin))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblContrato->tipoContrato)) || is_null($tblContrato->tipoContrato))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblContrato->idEmpleado)) || is_null($tblContrato->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblContrato->fechaInicio)) && (!is_null($tblContrato->fechaInicio)))
			$sqlQuery->set($tblContrato->fechaInicio);
		if ((isset($tblContrato->fechaFin)) && (!is_null($tblContrato->fechaFin)))
			$sqlQuery->set($tblContrato->fechaFin);
		if ((isset($tblContrato->tipoContrato)) && (!is_null($tblContrato->tipoContrato)))
			$sqlQuery->set($tblContrato->tipoContrato);
		if ((isset($tblContrato->idEmpleado)) && (!is_null($tblContrato->idEmpleado)))
			$sqlQuery->setNumber($tblContrato->idEmpleado);

		$id = $this->executeInsert($sqlQuery);	
		$tblContrato->idContrato = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblContratoMySql tblContrato
 	 */
	public function update($tblContrato){
		$sql = 'UPDATE tbl_contrato SET fecha_inicio = ?, fecha_fin = ?, tipo_contrato = ?, id_empleado = ? WHERE id_contrato = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblContrato->fechaInicio)) || is_null($tblContrato->fechaInicio))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblContrato->fechaFin)) || is_null($tblContrato->fechaFin))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblContrato->tipoContrato)) || is_null($tblContrato->tipoContrato))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblContrato->idEmpleado)) || is_null($tblContrato->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblContrato->fechaInicio)) && (!is_null($tblContrato->fechaInicio)))
			$sqlQuery->set($tblContrato->fechaInicio);
		if ((isset($tblContrato->fechaFin)) && (!is_null($tblContrato->fechaFin)))
			$sqlQuery->set($tblContrato->fechaFin);
		if ((isset($tblContrato->tipoContrato)) && (!is_null($tblContrato->tipoContrato)))
			$sqlQuery->set($tblContrato->tipoContrato);
		if ((isset($tblContrato->idEmpleado)) && (!is_null($tblContrato->idEmpleado)))
			$sqlQuery->setNumber($tblContrato->idEmpleado);

		$sqlQuery->setNumber($tblContrato->idContrato);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_contrato';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFechaInicio($value){
		$sql = 'SELECT * FROM tbl_contrato WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaFin($value){
		$sql = 'SELECT * FROM tbl_contrato WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTipoContrato($value){
		$sql = 'SELECT * FROM tbl_contrato WHERE tipo_contrato = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_contrato WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFechaInicio($value){
		$sql = 'DELETE FROM tbl_contrato WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaFin($value){
		$sql = 'DELETE FROM tbl_contrato WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTipoContrato($value){
		$sql = 'DELETE FROM tbl_contrato WHERE tipo_contrato = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_contrato WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblContratoMySql 
	 */
	protected function readRow($row){
		$tblContrato = new TblContrato();
		
		$tblContrato->idContrato = $row['id_contrato'];
		$tblContrato->fechaInicio = $row['fecha_inicio'];
		$tblContrato->fechaFin = $row['fecha_fin'];
		$tblContrato->tipoContrato = $row['tipo_contrato'];
		$tblContrato->idEmpleado = $row['id_empleado'];

		return $tblContrato;
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
	 * @return TblContratoMySql 
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