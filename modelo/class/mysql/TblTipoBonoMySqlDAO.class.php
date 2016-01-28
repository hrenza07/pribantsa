<?php
/**
 * Class that operate on table 'tbl_tipo_bono'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-01-27 22:07
 */
class TblTipoBonoMySqlDAO implements TblTipoBonoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblTipoBonoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_tipo_bono WHERE id_tipo_bono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_tipo_bono';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_tipo_bono ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblTipoBono primary key
 	 */
	public function delete($id_tipo_bono){
		$sql = 'DELETE FROM tbl_tipo_bono WHERE id_tipo_bono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_tipo_bono);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTipoBonoMySql tblTipoBono
 	 */
	public function insert($tblTipoBono){
		$sql = 'INSERT INTO tbl_tipo_bono (id_puesto_trabajo, monto, porcentaje, nombre) VALUES (?, ?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoBono->idPuestoTrabajo)) || is_null($tblTipoBono->idPuestoTrabajo))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoBono->monto)) || is_null($tblTipoBono->monto))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoBono->porcentaje)) || is_null($tblTipoBono->porcentaje))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoBono->nombre)) || is_null($tblTipoBono->nombre))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblTipoBono->idPuestoTrabajo)) && (!is_null($tblTipoBono->idPuestoTrabajo)))
			$sqlQuery->setNumber($tblTipoBono->idPuestoTrabajo);
		if ((isset($tblTipoBono->monto)) && (!is_null($tblTipoBono->monto)))
			$sqlQuery->set($tblTipoBono->monto);
		if ((isset($tblTipoBono->porcentaje)) && (!is_null($tblTipoBono->porcentaje)))
			$sqlQuery->set($tblTipoBono->porcentaje);
		if ((isset($tblTipoBono->nombre)) && (!is_null($tblTipoBono->nombre)))
			$sqlQuery->set($tblTipoBono->nombre);

		$id = $this->executeInsert($sqlQuery);	
		$tblTipoBono->idTipoBono = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTipoBonoMySql tblTipoBono
 	 */
	public function update($tblTipoBono){
		$sql = 'UPDATE tbl_tipo_bono SET id_puesto_trabajo = ?, monto = ?, porcentaje = ?, nombre = ? WHERE id_tipo_bono = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoBono->idPuestoTrabajo)) || is_null($tblTipoBono->idPuestoTrabajo))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoBono->monto)) || is_null($tblTipoBono->monto))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoBono->porcentaje)) || is_null($tblTipoBono->porcentaje))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoBono->nombre)) || is_null($tblTipoBono->nombre))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblTipoBono->idPuestoTrabajo)) && (!is_null($tblTipoBono->idPuestoTrabajo)))
			$sqlQuery->setNumber($tblTipoBono->idPuestoTrabajo);
		if ((isset($tblTipoBono->monto)) && (!is_null($tblTipoBono->monto)))
			$sqlQuery->set($tblTipoBono->monto);
		if ((isset($tblTipoBono->porcentaje)) && (!is_null($tblTipoBono->porcentaje)))
			$sqlQuery->set($tblTipoBono->porcentaje);
		if ((isset($tblTipoBono->nombre)) && (!is_null($tblTipoBono->nombre)))
			$sqlQuery->set($tblTipoBono->nombre);

		$sqlQuery->setNumber($tblTipoBono->idTipoBono);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_tipo_bono';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdPuestoTrabajo($value){
		$sql = 'SELECT * FROM tbl_tipo_bono WHERE id_puesto_trabajo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMonto($value){
		$sql = 'SELECT * FROM tbl_tipo_bono WHERE monto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPorcentaje($value){
		$sql = 'SELECT * FROM tbl_tipo_bono WHERE porcentaje = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM tbl_tipo_bono WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdPuestoTrabajo($value){
		$sql = 'DELETE FROM tbl_tipo_bono WHERE id_puesto_trabajo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMonto($value){
		$sql = 'DELETE FROM tbl_tipo_bono WHERE monto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPorcentaje($value){
		$sql = 'DELETE FROM tbl_tipo_bono WHERE porcentaje = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNombre($value){
		$sql = 'DELETE FROM tbl_tipo_bono WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblTipoBonoMySql 
	 */
	protected function readRow($row){
		$tblTipoBono = new TblTipoBono();
		
		$tblTipoBono->idTipoBono = $row['id_tipo_bono'];
		$tblTipoBono->idPuestoTrabajo = $row['id_puesto_trabajo'];
		$tblTipoBono->monto = $row['monto'];
		$tblTipoBono->porcentaje = $row['porcentaje'];
		$tblTipoBono->nombre = $row['nombre'];

		return $tblTipoBono;
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
	 * @return TblTipoBonoMySql 
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