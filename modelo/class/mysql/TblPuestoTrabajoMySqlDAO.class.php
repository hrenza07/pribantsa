<?php
/**
 * Class that operate on table 'tbl_puesto_trabajo'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-02-03 20:25
 */
class TblPuestoTrabajoMySqlDAO implements TblPuestoTrabajoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblPuestoTrabajoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_puesto_trabajo WHERE id_puesto_trabajo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_puesto_trabajo';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_puesto_trabajo ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblPuestoTrabajo primary key
 	 */
	public function delete($id_puesto_trabajo){
		$sql = 'DELETE FROM tbl_puesto_trabajo WHERE id_puesto_trabajo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_puesto_trabajo);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblPuestoTrabajoMySql tblPuestoTrabajo
 	 */
	public function insert($tblPuestoTrabajo){
		$sql = 'INSERT INTO tbl_puesto_trabajo (id_departamento, nombre, descripcion, salario_min, salario_max) VALUES (?, ?, ?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPuestoTrabajo->idDepartamento)) || is_null($tblPuestoTrabajo->idDepartamento))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPuestoTrabajo->nombre)) || is_null($tblPuestoTrabajo->nombre))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPuestoTrabajo->descripcion)) || is_null($tblPuestoTrabajo->descripcion))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPuestoTrabajo->salarioMin)) || is_null($tblPuestoTrabajo->salarioMin))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPuestoTrabajo->salarioMax)) || is_null($tblPuestoTrabajo->salarioMax))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblPuestoTrabajo->idDepartamento)) && (!is_null($tblPuestoTrabajo->idDepartamento)))
			$sqlQuery->setNumber($tblPuestoTrabajo->idDepartamento);
		if ((isset($tblPuestoTrabajo->nombre)) && (!is_null($tblPuestoTrabajo->nombre)))
			$sqlQuery->set($tblPuestoTrabajo->nombre);
		if ((isset($tblPuestoTrabajo->descripcion)) && (!is_null($tblPuestoTrabajo->descripcion)))
			$sqlQuery->set($tblPuestoTrabajo->descripcion);
		if ((isset($tblPuestoTrabajo->salarioMin)) && (!is_null($tblPuestoTrabajo->salarioMin)))
			$sqlQuery->set($tblPuestoTrabajo->salarioMin);
		if ((isset($tblPuestoTrabajo->salarioMax)) && (!is_null($tblPuestoTrabajo->salarioMax)))
			$sqlQuery->set($tblPuestoTrabajo->salarioMax);

		$id = $this->executeInsert($sqlQuery);	
		$tblPuestoTrabajo->idPuestoTrabajo = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblPuestoTrabajoMySql tblPuestoTrabajo
 	 */
	public function update($tblPuestoTrabajo){
		$sql = 'UPDATE tbl_puesto_trabajo SET id_departamento = ?, nombre = ?, descripcion = ?, salario_min = ?, salario_max = ? WHERE id_puesto_trabajo = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPuestoTrabajo->idDepartamento)) || is_null($tblPuestoTrabajo->idDepartamento))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPuestoTrabajo->nombre)) || is_null($tblPuestoTrabajo->nombre))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPuestoTrabajo->descripcion)) || is_null($tblPuestoTrabajo->descripcion))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPuestoTrabajo->salarioMin)) || is_null($tblPuestoTrabajo->salarioMin))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPuestoTrabajo->salarioMax)) || is_null($tblPuestoTrabajo->salarioMax))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblPuestoTrabajo->idDepartamento)) && (!is_null($tblPuestoTrabajo->idDepartamento)))
			$sqlQuery->setNumber($tblPuestoTrabajo->idDepartamento);
		if ((isset($tblPuestoTrabajo->nombre)) && (!is_null($tblPuestoTrabajo->nombre)))
			$sqlQuery->set($tblPuestoTrabajo->nombre);
		if ((isset($tblPuestoTrabajo->descripcion)) && (!is_null($tblPuestoTrabajo->descripcion)))
			$sqlQuery->set($tblPuestoTrabajo->descripcion);
		if ((isset($tblPuestoTrabajo->salarioMin)) && (!is_null($tblPuestoTrabajo->salarioMin)))
			$sqlQuery->set($tblPuestoTrabajo->salarioMin);
		if ((isset($tblPuestoTrabajo->salarioMax)) && (!is_null($tblPuestoTrabajo->salarioMax)))
			$sqlQuery->set($tblPuestoTrabajo->salarioMax);

		$sqlQuery->setNumber($tblPuestoTrabajo->idPuestoTrabajo);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_puesto_trabajo';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdDepartamento($value){
		$sql = 'SELECT * FROM tbl_puesto_trabajo WHERE id_departamento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM tbl_puesto_trabajo WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM tbl_puesto_trabajo WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySalarioMin($value){
		$sql = 'SELECT * FROM tbl_puesto_trabajo WHERE salario_min = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySalarioMax($value){
		$sql = 'SELECT * FROM tbl_puesto_trabajo WHERE salario_max = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdDepartamento($value){
		$sql = 'DELETE FROM tbl_puesto_trabajo WHERE id_departamento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNombre($value){
		$sql = 'DELETE FROM tbl_puesto_trabajo WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM tbl_puesto_trabajo WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySalarioMin($value){
		$sql = 'DELETE FROM tbl_puesto_trabajo WHERE salario_min = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySalarioMax($value){
		$sql = 'DELETE FROM tbl_puesto_trabajo WHERE salario_max = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblPuestoTrabajoMySql 
	 */
	protected function readRow($row){
		$tblPuestoTrabajo = new TblPuestoTrabajo();
		
		$tblPuestoTrabajo->idPuestoTrabajo = $row['id_puesto_trabajo'];
		$tblPuestoTrabajo->idDepartamento = $row['id_departamento'];
		$tblPuestoTrabajo->nombre = $row['nombre'];
		$tblPuestoTrabajo->descripcion = $row['descripcion'];
		$tblPuestoTrabajo->salarioMin = $row['salario_min'];
		$tblPuestoTrabajo->salarioMax = $row['salario_max'];

		return $tblPuestoTrabajo;
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
	 * @return TblPuestoTrabajoMySql 
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