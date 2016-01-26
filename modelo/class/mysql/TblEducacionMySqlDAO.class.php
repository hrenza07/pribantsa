<?php
/**
 * Class that operate on table 'tbl_educacion'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
class TblEducacionMySqlDAO implements TblEducacionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblEducacionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_educacion WHERE id_educacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_educacion';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_educacion ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblEducacion primary key
 	 */
	public function delete($id_educacion){
		$sql = 'DELETE FROM tbl_educacion WHERE id_educacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_educacion);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblEducacionMySql tblEducacion
 	 */
	public function insert($tblEducacion){
		$sql = 'INSERT INTO tbl_educacion (titulo, fecha_inicio, fecha_fin, id_empleado) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblEducacion->titulo);
		$sqlQuery->set($tblEducacion->fechaInicio);
		$sqlQuery->set($tblEducacion->fechaFin);
		$sqlQuery->setNumber($tblEducacion->idEmpleado);

		$id = $this->executeInsert($sqlQuery);	
		$tblEducacion->idEducacion = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblEducacionMySql tblEducacion
 	 */
	public function update($tblEducacion){
		$sql = 'UPDATE tbl_educacion SET titulo = ?, fecha_inicio = ?, fecha_fin = ?, id_empleado = ? WHERE id_educacion = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblEducacion->titulo);
		$sqlQuery->set($tblEducacion->fechaInicio);
		$sqlQuery->set($tblEducacion->fechaFin);
		$sqlQuery->setNumber($tblEducacion->idEmpleado);

		$sqlQuery->setNumber($tblEducacion->idEducacion);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_educacion';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByTitulo($value){
		$sql = 'SELECT * FROM tbl_educacion WHERE titulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaInicio($value){
		$sql = 'SELECT * FROM tbl_educacion WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaFin($value){
		$sql = 'SELECT * FROM tbl_educacion WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_educacion WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByTitulo($value){
		$sql = 'DELETE FROM tbl_educacion WHERE titulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaInicio($value){
		$sql = 'DELETE FROM tbl_educacion WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaFin($value){
		$sql = 'DELETE FROM tbl_educacion WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_educacion WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblEducacionMySql 
	 */
	protected function readRow($row){
		$tblEducacion = new TblEducacion();
		
		$tblEducacion->idEducacion = $row['id_educacion'];
		$tblEducacion->titulo = $row['titulo'];
		$tblEducacion->fechaInicio = $row['fecha_inicio'];
		$tblEducacion->fechaFin = $row['fecha_fin'];
		$tblEducacion->idEmpleado = $row['id_empleado'];

		return $tblEducacion;
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
	 * @return TblEducacionMySql 
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