<?php
/**
 * Class that operate on table 'tbl_reconocimiento'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-01-27 22:07
 */
class TblReconocimientoMySqlDAO implements TblReconocimientoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblReconocimientoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_reconocimiento WHERE id_reconocimiento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_reconocimiento';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_reconocimiento ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblReconocimiento primary key
 	 */
	public function delete($id_reconocimiento){
		$sql = 'DELETE FROM tbl_reconocimiento WHERE id_reconocimiento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_reconocimiento);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblReconocimientoMySql tblReconocimiento
 	 */
	public function insert($tblReconocimiento){
		$sql = 'INSERT INTO tbl_reconocimiento (descripcion, id_empleado) VALUES (?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblReconocimiento->descripcion)) || is_null($tblReconocimiento->descripcion))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblReconocimiento->idEmpleado)) || is_null($tblReconocimiento->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblReconocimiento->descripcion)) && (!is_null($tblReconocimiento->descripcion)))
			$sqlQuery->set($tblReconocimiento->descripcion);
		if ((isset($tblReconocimiento->idEmpleado)) && (!is_null($tblReconocimiento->idEmpleado)))
			$sqlQuery->setNumber($tblReconocimiento->idEmpleado);

		$id = $this->executeInsert($sqlQuery);	
		$tblReconocimiento->idReconocimiento = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblReconocimientoMySql tblReconocimiento
 	 */
	public function update($tblReconocimiento){
		$sql = 'UPDATE tbl_reconocimiento SET descripcion = ?, id_empleado = ? WHERE id_reconocimiento = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblReconocimiento->descripcion)) || is_null($tblReconocimiento->descripcion))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblReconocimiento->idEmpleado)) || is_null($tblReconocimiento->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblReconocimiento->descripcion)) && (!is_null($tblReconocimiento->descripcion)))
			$sqlQuery->set($tblReconocimiento->descripcion);
		if ((isset($tblReconocimiento->idEmpleado)) && (!is_null($tblReconocimiento->idEmpleado)))
			$sqlQuery->setNumber($tblReconocimiento->idEmpleado);

		$sqlQuery->setNumber($tblReconocimiento->idReconocimiento);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_reconocimiento';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM tbl_reconocimiento WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_reconocimiento WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM tbl_reconocimiento WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_reconocimiento WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblReconocimientoMySql 
	 */
	protected function readRow($row){
		$tblReconocimiento = new TblReconocimiento();
		
		$tblReconocimiento->idReconocimiento = $row['id_reconocimiento'];
		$tblReconocimiento->descripcion = $row['descripcion'];
		$tblReconocimiento->idEmpleado = $row['id_empleado'];

		return $tblReconocimiento;
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
	 * @return TblReconocimientoMySql 
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