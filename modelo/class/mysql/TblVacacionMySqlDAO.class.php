<?php
/**
 * Class that operate on table 'tbl_vacacion'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-02-03 20:25
 */
class TblVacacionMySqlDAO implements TblVacacionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblVacacionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_vacacion WHERE id_vacacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_vacacion';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_vacacion ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblVacacion primary key
 	 */
	public function delete($id_vacacion){
		$sql = 'DELETE FROM tbl_vacacion WHERE id_vacacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_vacacion);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblVacacionMySql tblVacacion
 	 */
	public function insert($tblVacacion){
		$sql = 'INSERT INTO tbl_vacacion (fecha_inicio, fecha_fin, id_empleado) VALUES (?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblVacacion->fechaInicio)) || is_null($tblVacacion->fechaInicio))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblVacacion->fechaFin)) || is_null($tblVacacion->fechaFin))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblVacacion->idEmpleado)) || is_null($tblVacacion->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblVacacion->fechaInicio)) && (!is_null($tblVacacion->fechaInicio)))
			$sqlQuery->set($tblVacacion->fechaInicio);
		if ((isset($tblVacacion->fechaFin)) && (!is_null($tblVacacion->fechaFin)))
			$sqlQuery->set($tblVacacion->fechaFin);
		if ((isset($tblVacacion->idEmpleado)) && (!is_null($tblVacacion->idEmpleado)))
			$sqlQuery->setNumber($tblVacacion->idEmpleado);

		$id = $this->executeInsert($sqlQuery);	
		$tblVacacion->idVacacion = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblVacacionMySql tblVacacion
 	 */
	public function update($tblVacacion){
		$sql = 'UPDATE tbl_vacacion SET fecha_inicio = ?, fecha_fin = ?, id_empleado = ? WHERE id_vacacion = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblVacacion->fechaInicio)) || is_null($tblVacacion->fechaInicio))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblVacacion->fechaFin)) || is_null($tblVacacion->fechaFin))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblVacacion->idEmpleado)) || is_null($tblVacacion->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblVacacion->fechaInicio)) && (!is_null($tblVacacion->fechaInicio)))
			$sqlQuery->set($tblVacacion->fechaInicio);
		if ((isset($tblVacacion->fechaFin)) && (!is_null($tblVacacion->fechaFin)))
			$sqlQuery->set($tblVacacion->fechaFin);
		if ((isset($tblVacacion->idEmpleado)) && (!is_null($tblVacacion->idEmpleado)))
			$sqlQuery->setNumber($tblVacacion->idEmpleado);

		$sqlQuery->setNumber($tblVacacion->idVacacion);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_vacacion';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFechaInicio($value){
		$sql = 'SELECT * FROM tbl_vacacion WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaFin($value){
		$sql = 'SELECT * FROM tbl_vacacion WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_vacacion WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFechaInicio($value){
		$sql = 'DELETE FROM tbl_vacacion WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaFin($value){
		$sql = 'DELETE FROM tbl_vacacion WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_vacacion WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblVacacionMySql 
	 */
	protected function readRow($row){
		$tblVacacion = new TblVacacion();
		
		$tblVacacion->idVacacion = $row['id_vacacion'];
		$tblVacacion->fechaInicio = $row['fecha_inicio'];
		$tblVacacion->fechaFin = $row['fecha_fin'];
		$tblVacacion->idEmpleado = $row['id_empleado'];

		return $tblVacacion;
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
	 * @return TblVacacionMySql 
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