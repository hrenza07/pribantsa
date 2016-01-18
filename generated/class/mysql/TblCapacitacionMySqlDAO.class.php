<?php
/**
 * Class that operate on table 'tbl_capacitacion'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
class TblCapacitacionMySqlDAO implements TblCapacitacionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblCapacitacionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_capacitacion WHERE id_capacitacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_capacitacion';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_capacitacion ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblCapacitacion primary key
 	 */
	public function delete($id_capacitacion){
		$sql = 'DELETE FROM tbl_capacitacion WHERE id_capacitacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_capacitacion);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblCapacitacionMySql tblCapacitacion
 	 */
	public function insert($tblCapacitacion){
		$sql = 'INSERT INTO tbl_capacitacion (nombre, descripcion, lugar, fecha_inicio, fecha_fin, id_empleado) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblCapacitacion->nombre);
		$sqlQuery->set($tblCapacitacion->descripcion);
		$sqlQuery->set($tblCapacitacion->lugar);
		$sqlQuery->set($tblCapacitacion->fechaInicio);
		$sqlQuery->set($tblCapacitacion->fechaFin);
		$sqlQuery->setNumber($tblCapacitacion->idEmpleado);

		$id = $this->executeInsert($sqlQuery);	
		$tblCapacitacion->idCapacitacion = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblCapacitacionMySql tblCapacitacion
 	 */
	public function update($tblCapacitacion){
		$sql = 'UPDATE tbl_capacitacion SET nombre = ?, descripcion = ?, lugar = ?, fecha_inicio = ?, fecha_fin = ?, id_empleado = ? WHERE id_capacitacion = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblCapacitacion->nombre);
		$sqlQuery->set($tblCapacitacion->descripcion);
		$sqlQuery->set($tblCapacitacion->lugar);
		$sqlQuery->set($tblCapacitacion->fechaInicio);
		$sqlQuery->set($tblCapacitacion->fechaFin);
		$sqlQuery->setNumber($tblCapacitacion->idEmpleado);

		$sqlQuery->setNumber($tblCapacitacion->idCapacitacion);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_capacitacion';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM tbl_capacitacion WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM tbl_capacitacion WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLugar($value){
		$sql = 'SELECT * FROM tbl_capacitacion WHERE lugar = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaInicio($value){
		$sql = 'SELECT * FROM tbl_capacitacion WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaFin($value){
		$sql = 'SELECT * FROM tbl_capacitacion WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_capacitacion WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombre($value){
		$sql = 'DELETE FROM tbl_capacitacion WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM tbl_capacitacion WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLugar($value){
		$sql = 'DELETE FROM tbl_capacitacion WHERE lugar = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaInicio($value){
		$sql = 'DELETE FROM tbl_capacitacion WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaFin($value){
		$sql = 'DELETE FROM tbl_capacitacion WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_capacitacion WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblCapacitacionMySql 
	 */
	protected function readRow($row){
		$tblCapacitacion = new TblCapacitacion();
		
		$tblCapacitacion->idCapacitacion = $row['id_capacitacion'];
		$tblCapacitacion->nombre = $row['nombre'];
		$tblCapacitacion->descripcion = $row['descripcion'];
		$tblCapacitacion->lugar = $row['lugar'];
		$tblCapacitacion->fechaInicio = $row['fecha_inicio'];
		$tblCapacitacion->fechaFin = $row['fecha_fin'];
		$tblCapacitacion->idEmpleado = $row['id_empleado'];

		return $tblCapacitacion;
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
	 * @return TblCapacitacionMySql 
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