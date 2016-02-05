<?php
/**
 * Class that operate on table 'tbl_criterio'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-02-03 20:25
 */
class TblCriterioMySqlDAO implements TblCriterioDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblCriterioMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_criterio WHERE id_criterio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_criterio';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_criterio ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblCriterio primary key
 	 */
	public function delete($id_criterio){
		$sql = 'DELETE FROM tbl_criterio WHERE id_criterio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_criterio);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblCriterioMySql tblCriterio
 	 */
	public function insert($tblCriterio){
		$sql = 'INSERT INTO tbl_criterio (descripcion, peso, id_puesto_trabajo) VALUES (?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblCriterio->descripcion)) || is_null($tblCriterio->descripcion))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblCriterio->peso)) || is_null($tblCriterio->peso))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblCriterio->idPuestoTrabajo)) || is_null($tblCriterio->idPuestoTrabajo))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblCriterio->descripcion)) && (!is_null($tblCriterio->descripcion)))
			$sqlQuery->set($tblCriterio->descripcion);
		if ((isset($tblCriterio->peso)) && (!is_null($tblCriterio->peso)))
			$sqlQuery->set($tblCriterio->peso);
		if ((isset($tblCriterio->idPuestoTrabajo)) && (!is_null($tblCriterio->idPuestoTrabajo)))
			$sqlQuery->setNumber($tblCriterio->idPuestoTrabajo);

		$id = $this->executeInsert($sqlQuery);	
		$tblCriterio->idCriterio = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblCriterioMySql tblCriterio
 	 */
	public function update($tblCriterio){
		$sql = 'UPDATE tbl_criterio SET descripcion = ?, peso = ?, id_puesto_trabajo = ? WHERE id_criterio = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblCriterio->descripcion)) || is_null($tblCriterio->descripcion))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblCriterio->peso)) || is_null($tblCriterio->peso))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblCriterio->idPuestoTrabajo)) || is_null($tblCriterio->idPuestoTrabajo))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblCriterio->descripcion)) && (!is_null($tblCriterio->descripcion)))
			$sqlQuery->set($tblCriterio->descripcion);
		if ((isset($tblCriterio->peso)) && (!is_null($tblCriterio->peso)))
			$sqlQuery->set($tblCriterio->peso);
		if ((isset($tblCriterio->idPuestoTrabajo)) && (!is_null($tblCriterio->idPuestoTrabajo)))
			$sqlQuery->setNumber($tblCriterio->idPuestoTrabajo);

		$sqlQuery->setNumber($tblCriterio->idCriterio);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_criterio';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM tbl_criterio WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPeso($value){
		$sql = 'SELECT * FROM tbl_criterio WHERE peso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdPuestoTrabajo($value){
		$sql = 'SELECT * FROM tbl_criterio WHERE id_puesto_trabajo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM tbl_criterio WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPeso($value){
		$sql = 'DELETE FROM tbl_criterio WHERE peso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdPuestoTrabajo($value){
		$sql = 'DELETE FROM tbl_criterio WHERE id_puesto_trabajo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblCriterioMySql 
	 */
	protected function readRow($row){
		$tblCriterio = new TblCriterio();
		
		$tblCriterio->idCriterio = $row['id_criterio'];
		$tblCriterio->descripcion = $row['descripcion'];
		$tblCriterio->peso = $row['peso'];
		$tblCriterio->idPuestoTrabajo = $row['id_puesto_trabajo'];

		return $tblCriterio;
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
	 * @return TblCriterioMySql 
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