<?php
/**
 * Class that operate on table 'tbl_departamento'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
class TblDepartamentoMySqlDAO implements TblDepartamentoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblDepartamentoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_departamento WHERE id_departamento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_departamento';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_departamento ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblDepartamento primary key
 	 */
	public function delete($id_departamento){
		$sql = 'DELETE FROM tbl_departamento WHERE id_departamento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_departamento);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblDepartamentoMySql tblDepartamento
 	 */
	public function insert($tblDepartamento){
		$sql = 'INSERT INTO tbl_departamento (nombre, descripcion) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblDepartamento->nombre);
		$sqlQuery->set($tblDepartamento->descripcion);

		$id = $this->executeInsert($sqlQuery);	
		$tblDepartamento->idDepartamento = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblDepartamentoMySql tblDepartamento
 	 */
	public function update($tblDepartamento){
		$sql = 'UPDATE tbl_departamento SET nombre = ?, descripcion = ? WHERE id_departamento = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tblDepartamento->nombre);
		$sqlQuery->set($tblDepartamento->descripcion);

		$sqlQuery->setNumber($tblDepartamento->idDepartamento);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_departamento';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM tbl_departamento WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM tbl_departamento WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombre($value){
		$sql = 'DELETE FROM tbl_departamento WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM tbl_departamento WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblDepartamentoMySql 
	 */
	protected function readRow($row){
		$tblDepartamento = new TblDepartamento();
		
		$tblDepartamento->idDepartamento = $row['id_departamento'];
		$tblDepartamento->nombre = $row['nombre'];
		$tblDepartamento->descripcion = $row['descripcion'];

		return $tblDepartamento;
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
	 * @return TblDepartamentoMySql 
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