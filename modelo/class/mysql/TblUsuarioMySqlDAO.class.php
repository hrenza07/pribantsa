<?php
/**
 * Class that operate on table 'tbl_usuario'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-02-03 20:25
 */
class TblUsuarioMySqlDAO implements TblUsuarioDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblUsuarioMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_usuario WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_usuario';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
        public function queryAllUsuarioContrasena($usuario,$contrasena){
                $sql = 'SELECT * FROM tbl_usuario WHERE nombre ="'.$usuario.'" AND contrasena = "'.$contrasena.'"';
                $sqlQuery = new SqlQuery($sql);
                return $this->getList($sqlQuery);
        }


	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_usuario ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblUsuario primary key
 	 */
	public function delete($id_usuario){
		$sql = 'DELETE FROM tbl_usuario WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_usuario);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblUsuarioMySql tblUsuario
 	 */
	public function insert($tblUsuario){
		$sql = 'INSERT INTO tbl_usuario (id_empleado, contrasena, privilegio, nombre) VALUES (?, ?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblUsuario->idEmpleado)) || is_null($tblUsuario->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblUsuario->contrasena)) || is_null($tblUsuario->contrasena))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblUsuario->privilegio)) || is_null($tblUsuario->privilegio))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblUsuario->nombre)) || is_null($tblUsuario->nombre))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblUsuario->idEmpleado)) && (!is_null($tblUsuario->idEmpleado)))
			$sqlQuery->setNumber($tblUsuario->idEmpleado);
		if ((isset($tblUsuario->contrasena)) && (!is_null($tblUsuario->contrasena)))
			$sqlQuery->set($tblUsuario->contrasena);
		if ((isset($tblUsuario->privilegio)) && (!is_null($tblUsuario->privilegio)))
			$sqlQuery->setNumber($tblUsuario->privilegio);
		if ((isset($tblUsuario->nombre)) && (!is_null($tblUsuario->nombre)))
			$sqlQuery->set($tblUsuario->nombre);

		$id = $this->executeInsert($sqlQuery);	
		$tblUsuario->idUsuario = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblUsuarioMySql tblUsuario
 	 */
	public function update($tblUsuario){
		$sql = 'UPDATE tbl_usuario SET id_empleado = ?, contrasena = ?, privilegio = ?, nombre = ? WHERE id_usuario = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblUsuario->idEmpleado)) || is_null($tblUsuario->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblUsuario->contrasena)) || is_null($tblUsuario->contrasena))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblUsuario->privilegio)) || is_null($tblUsuario->privilegio))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblUsuario->nombre)) || is_null($tblUsuario->nombre))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblUsuario->idEmpleado)) && (!is_null($tblUsuario->idEmpleado)))
			$sqlQuery->setNumber($tblUsuario->idEmpleado);
		if ((isset($tblUsuario->contrasena)) && (!is_null($tblUsuario->contrasena)))
			$sqlQuery->set($tblUsuario->contrasena);
		if ((isset($tblUsuario->privilegio)) && (!is_null($tblUsuario->privilegio)))
			$sqlQuery->setNumber($tblUsuario->privilegio);
		if ((isset($tblUsuario->nombre)) && (!is_null($tblUsuario->nombre)))
			$sqlQuery->set($tblUsuario->nombre);

		$sqlQuery->setNumber($tblUsuario->idUsuario);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_usuario';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_usuario WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContrasena($value){
		$sql = 'SELECT * FROM tbl_usuario WHERE contrasena = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPrivilegio($value){
		$sql = 'SELECT * FROM tbl_usuario WHERE privilegio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM tbl_usuario WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_usuario WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContrasena($value){
		$sql = 'DELETE FROM tbl_usuario WHERE contrasena = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPrivilegio($value){
		$sql = 'DELETE FROM tbl_usuario WHERE privilegio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNombre($value){
		$sql = 'DELETE FROM tbl_usuario WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblUsuarioMySql 
	 */
	protected function readRow($row){
		$tblUsuario = new TblUsuario();
		
		$tblUsuario->idUsuario = $row['id_usuario'];
		$tblUsuario->idEmpleado = $row['id_empleado'];
		$tblUsuario->contrasena = $row['contrasena'];
		$tblUsuario->privilegio = $row['privilegio'];
		$tblUsuario->nombre = $row['nombre'];

		return $tblUsuario;
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
	 * @return TblUsuarioMySql 
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
