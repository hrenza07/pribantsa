<?php
/**
 * Class that operate on table 'tbl_tipo_descuento'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-02-03 20:25
 */
class TblTipoDescuentoMySqlDAO implements TblTipoDescuentoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblTipoDescuentoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_tipo_descuento WHERE id_tipo_descuento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_tipo_descuento';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_tipo_descuento ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblTipoDescuento primary key
 	 */
	public function delete($id_tipo_descuento){
		$sql = 'DELETE FROM tbl_tipo_descuento WHERE id_tipo_descuento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_tipo_descuento);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTipoDescuentoMySql tblTipoDescuento
 	 */
	public function insert($tblTipoDescuento){
		$sql = 'INSERT INTO tbl_tipo_descuento (nombre, porcentaje, monto) VALUES (?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoDescuento->nombre)) || is_null($tblTipoDescuento->nombre))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoDescuento->porcentaje)) || is_null($tblTipoDescuento->porcentaje))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoDescuento->monto)) || is_null($tblTipoDescuento->monto))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblTipoDescuento->nombre)) && (!is_null($tblTipoDescuento->nombre)))
			$sqlQuery->set($tblTipoDescuento->nombre);
		if ((isset($tblTipoDescuento->porcentaje)) && (!is_null($tblTipoDescuento->porcentaje)))
			$sqlQuery->set($tblTipoDescuento->porcentaje);
		if ((isset($tblTipoDescuento->monto)) && (!is_null($tblTipoDescuento->monto)))
			$sqlQuery->set($tblTipoDescuento->monto);

		$id = $this->executeInsert($sqlQuery);	
		$tblTipoDescuento->idTipoDescuento = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTipoDescuentoMySql tblTipoDescuento
 	 */
	public function update($tblTipoDescuento){
		$sql = 'UPDATE tbl_tipo_descuento SET nombre = ?, porcentaje = ?, monto = ? WHERE id_tipo_descuento = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoDescuento->nombre)) || is_null($tblTipoDescuento->nombre))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoDescuento->porcentaje)) || is_null($tblTipoDescuento->porcentaje))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblTipoDescuento->monto)) || is_null($tblTipoDescuento->monto))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblTipoDescuento->nombre)) && (!is_null($tblTipoDescuento->nombre)))
			$sqlQuery->set($tblTipoDescuento->nombre);
		if ((isset($tblTipoDescuento->porcentaje)) && (!is_null($tblTipoDescuento->porcentaje)))
			$sqlQuery->set($tblTipoDescuento->porcentaje);
		if ((isset($tblTipoDescuento->monto)) && (!is_null($tblTipoDescuento->monto)))
			$sqlQuery->set($tblTipoDescuento->monto);

		$sqlQuery->setNumber($tblTipoDescuento->idTipoDescuento);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_tipo_descuento';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM tbl_tipo_descuento WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPorcentaje($value){
		$sql = 'SELECT * FROM tbl_tipo_descuento WHERE porcentaje = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMonto($value){
		$sql = 'SELECT * FROM tbl_tipo_descuento WHERE monto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombre($value){
		$sql = 'DELETE FROM tbl_tipo_descuento WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPorcentaje($value){
		$sql = 'DELETE FROM tbl_tipo_descuento WHERE porcentaje = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMonto($value){
		$sql = 'DELETE FROM tbl_tipo_descuento WHERE monto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblTipoDescuentoMySql 
	 */
	protected function readRow($row){
		$tblTipoDescuento = new TblTipoDescuento();
		
		$tblTipoDescuento->idTipoDescuento = $row['id_tipo_descuento'];
		$tblTipoDescuento->nombre = $row['nombre'];
		$tblTipoDescuento->porcentaje = $row['porcentaje'];
		$tblTipoDescuento->monto = $row['monto'];

		return $tblTipoDescuento;
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
	 * @return TblTipoDescuentoMySql 
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