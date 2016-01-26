<?php
/**
 * Class that operate on table 'tbl_puesto_historico'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
class TblPuestoHistoricoMySqlDAO implements TblPuestoHistoricoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblPuestoHistoricoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_puesto_historico WHERE id_puesto_historico = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_puesto_historico';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_puesto_historico ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblPuestoHistorico primary key
 	 */
	public function delete($id_puesto_historico){
		$sql = 'DELETE FROM tbl_puesto_historico WHERE id_puesto_historico = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_puesto_historico);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblPuestoHistoricoMySql tblPuestoHistorico
 	 */
	public function insert($tblPuestoHistorico){
		$sql = 'INSERT INTO tbl_puesto_historico (id_empleado, id_puesto_trabajo, fecha_inicio, fecha_fin) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblPuestoHistorico->idEmpleado);
		$sqlQuery->setNumber($tblPuestoHistorico->idPuestoTrabajo);
		$sqlQuery->set($tblPuestoHistorico->fechaInicio);
		$sqlQuery->set($tblPuestoHistorico->fechaFin);

		$id = $this->executeInsert($sqlQuery);	
		$tblPuestoHistorico->idPuestoHistorico = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblPuestoHistoricoMySql tblPuestoHistorico
 	 */
	public function update($tblPuestoHistorico){
		$sql = 'UPDATE tbl_puesto_historico SET id_empleado = ?, id_puesto_trabajo = ?, fecha_inicio = ?, fecha_fin = ? WHERE id_puesto_historico = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($tblPuestoHistorico->idEmpleado);
		$sqlQuery->setNumber($tblPuestoHistorico->idPuestoTrabajo);
		$sqlQuery->set($tblPuestoHistorico->fechaInicio);
		$sqlQuery->set($tblPuestoHistorico->fechaFin);

		$sqlQuery->setNumber($tblPuestoHistorico->idPuestoHistorico);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_puesto_historico';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_puesto_historico WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdPuestoTrabajo($value){
		$sql = 'SELECT * FROM tbl_puesto_historico WHERE id_puesto_trabajo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaInicio($value){
		$sql = 'SELECT * FROM tbl_puesto_historico WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaFin($value){
		$sql = 'SELECT * FROM tbl_puesto_historico WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_puesto_historico WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdPuestoTrabajo($value){
		$sql = 'DELETE FROM tbl_puesto_historico WHERE id_puesto_trabajo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaInicio($value){
		$sql = 'DELETE FROM tbl_puesto_historico WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaFin($value){
		$sql = 'DELETE FROM tbl_puesto_historico WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblPuestoHistoricoMySql 
	 */
	protected function readRow($row){
		$tblPuestoHistorico = new TblPuestoHistorico();
		
		$tblPuestoHistorico->idPuestoHistorico = $row['id_puesto_historico'];
		$tblPuestoHistorico->idEmpleado = $row['id_empleado'];
		$tblPuestoHistorico->idPuestoTrabajo = $row['id_puesto_trabajo'];
		$tblPuestoHistorico->fechaInicio = $row['fecha_inicio'];
		$tblPuestoHistorico->fechaFin = $row['fecha_fin'];

		return $tblPuestoHistorico;
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
	 * @return TblPuestoHistoricoMySql 
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