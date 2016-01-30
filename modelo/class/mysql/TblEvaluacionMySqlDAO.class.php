<?php
/**
 * Class that operate on table 'tbl_evaluacion'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-01-27 22:07
 */
class TblEvaluacionMySqlDAO implements TblEvaluacionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblEvaluacionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_evaluacion WHERE id_evaluacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_evaluacion';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_evaluacion ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblEvaluacion primary key
 	 */
	public function delete($id_evaluacion){
		$sql = 'DELETE FROM tbl_evaluacion WHERE id_evaluacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_evaluacion);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblEvaluacionMySql tblEvaluacion
 	 */
	public function insert($tblEvaluacion){
		$sql = 'INSERT INTO tbl_evaluacion (puntaje, fecha, id_empleado, id_criterio) VALUES (?, ?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEvaluacion->puntaje)) || is_null($tblEvaluacion->puntaje))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEvaluacion->fecha)) || is_null($tblEvaluacion->fecha))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEvaluacion->idEmpleado)) || is_null($tblEvaluacion->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEvaluacion->idCriterio)) || is_null($tblEvaluacion->idCriterio))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblEvaluacion->puntaje)) && (!is_null($tblEvaluacion->puntaje)))
			$sqlQuery->set($tblEvaluacion->puntaje);
		if ((isset($tblEvaluacion->fecha)) && (!is_null($tblEvaluacion->fecha)))
			$sqlQuery->set($tblEvaluacion->fecha);
		if ((isset($tblEvaluacion->idEmpleado)) && (!is_null($tblEvaluacion->idEmpleado)))
			$sqlQuery->setNumber($tblEvaluacion->idEmpleado);
		if ((isset($tblEvaluacion->idCriterio)) && (!is_null($tblEvaluacion->idCriterio)))
			$sqlQuery->setNumber($tblEvaluacion->idCriterio);

		$id = $this->executeInsert($sqlQuery);	
		$tblEvaluacion->idEvaluacion = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblEvaluacionMySql tblEvaluacion
 	 */
	public function update($tblEvaluacion){
		$sql = 'UPDATE tbl_evaluacion SET puntaje = ?, fecha = ?, id_empleado = ?, id_criterio = ? WHERE id_evaluacion = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEvaluacion->puntaje)) || is_null($tblEvaluacion->puntaje))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEvaluacion->fecha)) || is_null($tblEvaluacion->fecha))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEvaluacion->idEmpleado)) || is_null($tblEvaluacion->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblEvaluacion->idCriterio)) || is_null($tblEvaluacion->idCriterio))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblEvaluacion->puntaje)) && (!is_null($tblEvaluacion->puntaje)))
			$sqlQuery->set($tblEvaluacion->puntaje);
		if ((isset($tblEvaluacion->fecha)) && (!is_null($tblEvaluacion->fecha)))
			$sqlQuery->set($tblEvaluacion->fecha);
		if ((isset($tblEvaluacion->idEmpleado)) && (!is_null($tblEvaluacion->idEmpleado)))
			$sqlQuery->setNumber($tblEvaluacion->idEmpleado);
		if ((isset($tblEvaluacion->idCriterio)) && (!is_null($tblEvaluacion->idCriterio)))
			$sqlQuery->setNumber($tblEvaluacion->idCriterio);

		$sqlQuery->setNumber($tblEvaluacion->idEvaluacion);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_evaluacion';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByPuntaje($value){
		$sql = 'SELECT * FROM tbl_evaluacion WHERE puntaje = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFecha($value){
		$sql = 'SELECT * FROM tbl_evaluacion WHERE fecha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_evaluacion WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdCriterio($value){
		$sql = 'SELECT * FROM tbl_evaluacion WHERE id_criterio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByPuntaje($value){
		$sql = 'DELETE FROM tbl_evaluacion WHERE puntaje = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFecha($value){
		$sql = 'DELETE FROM tbl_evaluacion WHERE fecha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_evaluacion WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdCriterio($value){
		$sql = 'DELETE FROM tbl_evaluacion WHERE id_criterio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblEvaluacionMySql 
	 */
	protected function readRow($row){
		$tblEvaluacion = new TblEvaluacion();
		
		$tblEvaluacion->idEvaluacion = $row['id_evaluacion'];
		$tblEvaluacion->puntaje = $row['puntaje'];
		$tblEvaluacion->fecha = $row['fecha'];
		$tblEvaluacion->idEmpleado = $row['id_empleado'];
		$tblEvaluacion->idCriterio = $row['id_criterio'];

		return $tblEvaluacion;
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
	 * @return TblEvaluacionMySql 
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