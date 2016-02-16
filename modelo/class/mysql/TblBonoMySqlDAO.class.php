<?php
/**
 * Class that operate on table 'tbl_bono'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-02-15 22:31
 */
class TblBonoMySqlDAO implements TblBonoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblBonoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_bono WHERE id_bono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_bono';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_bono ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblBono primary key
 	 */
	public function delete($id_bono){
		$sql = 'DELETE FROM tbl_bono WHERE id_bono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_bono);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblBonoMySql tblBono
 	 */
	public function insert($tblBono){
		$sql = 'INSERT INTO tbl_bono (fecha, id_tipo_bono, id_empleado) VALUES (?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblBono->fecha)) || is_null($tblBono->fecha))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblBono->idTipoBono)) || is_null($tblBono->idTipoBono))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblBono->idEmpleado)) || is_null($tblBono->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblBono->fecha)) && (!is_null($tblBono->fecha)))
			$sqlQuery->set($tblBono->fecha);
		if ((isset($tblBono->idTipoBono)) && (!is_null($tblBono->idTipoBono)))
			$sqlQuery->setNumber($tblBono->idTipoBono);
		if ((isset($tblBono->idEmpleado)) && (!is_null($tblBono->idEmpleado)))
			$sqlQuery->setNumber($tblBono->idEmpleado);

		$id = $this->executeInsert($sqlQuery);	
		$tblBono->idBono = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblBonoMySql tblBono
 	 */
	public function update($tblBono){
		$sql = 'UPDATE tbl_bono SET fecha = ?, id_tipo_bono = ?, id_empleado = ? WHERE id_bono = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblBono->fecha)) || is_null($tblBono->fecha))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblBono->idTipoBono)) || is_null($tblBono->idTipoBono))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblBono->idEmpleado)) || is_null($tblBono->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblBono->fecha)) && (!is_null($tblBono->fecha)))
			$sqlQuery->set($tblBono->fecha);
		if ((isset($tblBono->idTipoBono)) && (!is_null($tblBono->idTipoBono)))
			$sqlQuery->setNumber($tblBono->idTipoBono);
		if ((isset($tblBono->idEmpleado)) && (!is_null($tblBono->idEmpleado)))
			$sqlQuery->setNumber($tblBono->idEmpleado);

		$sqlQuery->setNumber($tblBono->idBono);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_bono';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFecha($value){
		$sql = 'SELECT * FROM tbl_bono WHERE fecha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdTipoBono($value){
		$sql = 'SELECT * FROM tbl_bono WHERE id_tipo_bono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_bono WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFecha($value){
		$sql = 'DELETE FROM tbl_bono WHERE fecha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdTipoBono($value){
		$sql = 'DELETE FROM tbl_bono WHERE id_tipo_bono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_bono WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblBonoMySql 
	 */
	protected function readRow($row){
		$tblBono = new TblBono();
		
		$tblBono->idBono = $row['id_bono'];
		$tblBono->fecha = $row['fecha'];
		$tblBono->idTipoBono = $row['id_tipo_bono'];
		$tblBono->idEmpleado = $row['id_empleado'];

		return $tblBono;
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
	 * @return TblBonoMySql 
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