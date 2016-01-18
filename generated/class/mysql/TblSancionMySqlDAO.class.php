<?php
/**
 * Class that operate on table 'tbl_sancion'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
class TblSancionMySqlDAO implements TblSancionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblSancionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_sancion WHERE id_sancion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_sancion';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_sancion ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblSancion primary key
 	 */
	public function delete($id_sancion){
		$sql = 'DELETE FROM tbl_sancion WHERE id_sancion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_sancion);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblSancionMySql tblSancion
 	 */
	public function insert($tblSancion){
		$sql = 'INSERT INTO tbl_sancion (gravedad, descripcion, fecha, id_empleado) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblSancion->gravedad);
		$sqlQuery->set($tblSancion->descripcion);
		$sqlQuery->set($tblSancion->fecha);
		$sqlQuery->setNumber($tblSancion->idEmpleado);

		$id = $this->executeInsert($sqlQuery);	
		$tblSancion->idSancion = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblSancionMySql tblSancion
 	 */
	public function update($tblSancion){
		$sql = 'UPDATE tbl_sancion SET gravedad = ?, descripcion = ?, fecha = ?, id_empleado = ? WHERE id_sancion = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblSancion->gravedad);
		$sqlQuery->set($tblSancion->descripcion);
		$sqlQuery->set($tblSancion->fecha);
		$sqlQuery->setNumber($tblSancion->idEmpleado);

		$sqlQuery->setNumber($tblSancion->idSancion);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_sancion';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByGravedad($value){
		$sql = 'SELECT * FROM tbl_sancion WHERE gravedad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM tbl_sancion WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFecha($value){
		$sql = 'SELECT * FROM tbl_sancion WHERE fecha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_sancion WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByGravedad($value){
		$sql = 'DELETE FROM tbl_sancion WHERE gravedad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM tbl_sancion WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFecha($value){
		$sql = 'DELETE FROM tbl_sancion WHERE fecha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_sancion WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblSancionMySql 
	 */
	protected function readRow($row){
		$tblSancion = new TblSancion();
		
		$tblSancion->idSancion = $row['id_sancion'];
		$tblSancion->gravedad = $row['gravedad'];
		$tblSancion->descripcion = $row['descripcion'];
		$tblSancion->fecha = $row['fecha'];
		$tblSancion->idEmpleado = $row['id_empleado'];

		return $tblSancion;
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
	 * @return TblSancionMySql 
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