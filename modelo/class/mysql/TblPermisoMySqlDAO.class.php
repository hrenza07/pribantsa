<?php
/**
 * Class that operate on table 'tbl_permiso'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
class TblPermisoMySqlDAO implements TblPermisoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblPermisoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_permiso WHERE id_permiso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_permiso';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_permiso ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblPermiso primary key
 	 */
	public function delete($id_permiso){
		$sql = 'DELETE FROM tbl_permiso WHERE id_permiso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_permiso);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblPermisoMySql tblPermiso
 	 */
	public function insert($tblPermiso){
		$sql = 'INSERT INTO tbl_permiso (remunerado, inicio, fin, tipo_permiso, id_empleado) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblPermiso->remunerado);
		$sqlQuery->set($tblPermiso->inicio);
		$sqlQuery->set($tblPermiso->fin);
		$sqlQuery->set($tblPermiso->tipoPermiso);
		$sqlQuery->setNumber($tblPermiso->idEmpleado);

		$id = $this->executeInsert($sqlQuery);	
		$tblPermiso->idPermiso = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblPermisoMySql tblPermiso
 	 */
	public function update($tblPermiso){
		$sql = 'UPDATE tbl_permiso SET remunerado = ?, inicio = ?, fin = ?, tipo_permiso = ?, id_empleado = ? WHERE id_permiso = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblPermiso->remunerado);
		$sqlQuery->set($tblPermiso->inicio);
		$sqlQuery->set($tblPermiso->fin);
		$sqlQuery->set($tblPermiso->tipoPermiso);
		$sqlQuery->setNumber($tblPermiso->idEmpleado);

		$sqlQuery->setNumber($tblPermiso->idPermiso);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_permiso';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByRemunerado($value){
		$sql = 'SELECT * FROM tbl_permiso WHERE remunerado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInicio($value){
		$sql = 'SELECT * FROM tbl_permiso WHERE inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFin($value){
		$sql = 'SELECT * FROM tbl_permiso WHERE fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTipoPermiso($value){
		$sql = 'SELECT * FROM tbl_permiso WHERE tipo_permiso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_permiso WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByRemunerado($value){
		$sql = 'DELETE FROM tbl_permiso WHERE remunerado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInicio($value){
		$sql = 'DELETE FROM tbl_permiso WHERE inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFin($value){
		$sql = 'DELETE FROM tbl_permiso WHERE fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTipoPermiso($value){
		$sql = 'DELETE FROM tbl_permiso WHERE tipo_permiso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_permiso WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblPermisoMySql 
	 */
	protected function readRow($row){
		$tblPermiso = new TblPermiso();
		
		$tblPermiso->idPermiso = $row['id_permiso'];
		$tblPermiso->remunerado = $row['remunerado'];
		$tblPermiso->inicio = $row['inicio'];
		$tblPermiso->fin = $row['fin'];
		$tblPermiso->tipoPermiso = $row['tipo_permiso'];
		$tblPermiso->idEmpleado = $row['id_empleado'];

		return $tblPermiso;
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
	 * @return TblPermisoMySql 
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