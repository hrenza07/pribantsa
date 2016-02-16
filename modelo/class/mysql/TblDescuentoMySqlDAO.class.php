<?php
/**
 * Class that operate on table 'tbl_descuento'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-02-15 22:31
 */
class TblDescuentoMySqlDAO implements TblDescuentoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblDescuentoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_descuento WHERE id_descuento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_descuento';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_descuento ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblDescuento primary key
 	 */
	public function delete($id_descuento){
		$sql = 'DELETE FROM tbl_descuento WHERE id_descuento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_descuento);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblDescuentoMySql tblDescuento
 	 */
	public function insert($tblDescuento){
		$sql = 'INSERT INTO tbl_descuento (fecha, id_tipo_descuento, id_empleado) VALUES (?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblDescuento->fecha)) || is_null($tblDescuento->fecha))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblDescuento->idTipoDescuento)) || is_null($tblDescuento->idTipoDescuento))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblDescuento->idEmpleado)) || is_null($tblDescuento->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblDescuento->fecha)) && (!is_null($tblDescuento->fecha)))
			$sqlQuery->set($tblDescuento->fecha);
		if ((isset($tblDescuento->idTipoDescuento)) && (!is_null($tblDescuento->idTipoDescuento)))
			$sqlQuery->setNumber($tblDescuento->idTipoDescuento);
		if ((isset($tblDescuento->idEmpleado)) && (!is_null($tblDescuento->idEmpleado)))
			$sqlQuery->setNumber($tblDescuento->idEmpleado);

		$id = $this->executeInsert($sqlQuery);	
		$tblDescuento->idDescuento = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblDescuentoMySql tblDescuento
 	 */
	public function update($tblDescuento){
		$sql = 'UPDATE tbl_descuento SET fecha = ?, id_tipo_descuento = ?, id_empleado = ? WHERE id_descuento = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblDescuento->fecha)) || is_null($tblDescuento->fecha))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblDescuento->idTipoDescuento)) || is_null($tblDescuento->idTipoDescuento))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblDescuento->idEmpleado)) || is_null($tblDescuento->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblDescuento->fecha)) && (!is_null($tblDescuento->fecha)))
			$sqlQuery->set($tblDescuento->fecha);
		if ((isset($tblDescuento->idTipoDescuento)) && (!is_null($tblDescuento->idTipoDescuento)))
			$sqlQuery->setNumber($tblDescuento->idTipoDescuento);
		if ((isset($tblDescuento->idEmpleado)) && (!is_null($tblDescuento->idEmpleado)))
			$sqlQuery->setNumber($tblDescuento->idEmpleado);

		$sqlQuery->setNumber($tblDescuento->idDescuento);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_descuento';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFecha($value){
		$sql = 'SELECT * FROM tbl_descuento WHERE fecha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdTipoDescuento($value){
		$sql = 'SELECT * FROM tbl_descuento WHERE id_tipo_descuento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_descuento WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFecha($value){
		$sql = 'DELETE FROM tbl_descuento WHERE fecha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdTipoDescuento($value){
		$sql = 'DELETE FROM tbl_descuento WHERE id_tipo_descuento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_descuento WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblDescuentoMySql 
	 */
	protected function readRow($row){
		$tblDescuento = new TblDescuento();
		
		$tblDescuento->idDescuento = $row['id_descuento'];
		$tblDescuento->fecha = $row['fecha'];
		$tblDescuento->idTipoDescuento = $row['id_tipo_descuento'];
		$tblDescuento->idEmpleado = $row['id_empleado'];

		return $tblDescuento;
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
	 * @return TblDescuentoMySql 
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