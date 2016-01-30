<?php
/**
 * Class that operate on table 'tbl_planilla'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-01-27 22:07
 */
class TblPlanillaMySqlDAO implements TblPlanillaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TblPlanillaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tbl_planilla WHERE id_planilla = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tbl_planilla';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tbl_planilla ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tblPlanilla primary key
 	 */
	public function delete($id_planilla){
		$sql = 'DELETE FROM tbl_planilla WHERE id_planilla = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_planilla);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblPlanillaMySql tblPlanilla
 	 */
	public function insert($tblPlanilla){
		$sql = 'INSERT INTO tbl_planilla (fecha_inicio, fecha_fin, planilla, dias_trabajados, horas, extras_diurnas, extras_nocturnas, feriado, ajuste, total_descuento, salario_devengado, id_empleado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->fechaInicio)) || is_null($tblPlanilla->fechaInicio))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->fechaFin)) || is_null($tblPlanilla->fechaFin))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->planilla)) || is_null($tblPlanilla->planilla))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->diasTrabajados)) || is_null($tblPlanilla->diasTrabajados))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->horas)) || is_null($tblPlanilla->horas))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->extrasDiurnas)) || is_null($tblPlanilla->extrasDiurnas))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->extrasNocturnas)) || is_null($tblPlanilla->extrasNocturnas))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->feriado)) || is_null($tblPlanilla->feriado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->ajuste)) || is_null($tblPlanilla->ajuste))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->totalDescuento)) || is_null($tblPlanilla->totalDescuento))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->salarioDevengado)) || is_null($tblPlanilla->salarioDevengado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->idEmpleado)) || is_null($tblPlanilla->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblPlanilla->fechaInicio)) && (!is_null($tblPlanilla->fechaInicio)))
			$sqlQuery->set($tblPlanilla->fechaInicio);
		if ((isset($tblPlanilla->fechaFin)) && (!is_null($tblPlanilla->fechaFin)))
			$sqlQuery->set($tblPlanilla->fechaFin);
		if ((isset($tblPlanilla->planilla)) && (!is_null($tblPlanilla->planilla)))
			$sqlQuery->set($tblPlanilla->planilla);
		if ((isset($tblPlanilla->diasTrabajados)) && (!is_null($tblPlanilla->diasTrabajados)))
			$sqlQuery->set($tblPlanilla->diasTrabajados);
		if ((isset($tblPlanilla->horas)) && (!is_null($tblPlanilla->horas)))
			$sqlQuery->set($tblPlanilla->horas);
		if ((isset($tblPlanilla->extrasDiurnas)) && (!is_null($tblPlanilla->extrasDiurnas)))
			$sqlQuery->set($tblPlanilla->extrasDiurnas);
		if ((isset($tblPlanilla->extrasNocturnas)) && (!is_null($tblPlanilla->extrasNocturnas)))
			$sqlQuery->set($tblPlanilla->extrasNocturnas);
		if ((isset($tblPlanilla->feriado)) && (!is_null($tblPlanilla->feriado)))
			$sqlQuery->set($tblPlanilla->feriado);
		if ((isset($tblPlanilla->ajuste)) && (!is_null($tblPlanilla->ajuste)))
			$sqlQuery->set($tblPlanilla->ajuste);
		if ((isset($tblPlanilla->totalDescuento)) && (!is_null($tblPlanilla->totalDescuento)))
			$sqlQuery->set($tblPlanilla->totalDescuento);
		if ((isset($tblPlanilla->salarioDevengado)) && (!is_null($tblPlanilla->salarioDevengado)))
			$sqlQuery->set($tblPlanilla->salarioDevengado);
		if ((isset($tblPlanilla->idEmpleado)) && (!is_null($tblPlanilla->idEmpleado)))
			$sqlQuery->setNumber($tblPlanilla->idEmpleado);

		$id = $this->executeInsert($sqlQuery);	
		$tblPlanilla->idPlanilla = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblPlanillaMySql tblPlanilla
 	 */
	public function update($tblPlanilla){
		$sql = 'UPDATE tbl_planilla SET fecha_inicio = ?, fecha_fin = ?, planilla = ?, dias_trabajados = ?, horas = ?, extras_diurnas = ?, extras_nocturnas = ?, feriado = ?, ajuste = ?, total_descuento = ?, salario_devengado = ?, id_empleado = ? WHERE id_planilla = ?';
		$qpos = 0;
		
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->fechaInicio)) || is_null($tblPlanilla->fechaInicio))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->fechaFin)) || is_null($tblPlanilla->fechaFin))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->planilla)) || is_null($tblPlanilla->planilla))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->diasTrabajados)) || is_null($tblPlanilla->diasTrabajados))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->horas)) || is_null($tblPlanilla->horas))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->extrasDiurnas)) || is_null($tblPlanilla->extrasDiurnas))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->extrasNocturnas)) || is_null($tblPlanilla->extrasNocturnas))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->feriado)) || is_null($tblPlanilla->feriado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->ajuste)) || is_null($tblPlanilla->ajuste))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->totalDescuento)) || is_null($tblPlanilla->totalDescuento))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->salarioDevengado)) || is_null($tblPlanilla->salarioDevengado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);
		$qpos = strpos($sql, '?', $qpos + 1);
		if ((!isset($tblPlanilla->idEmpleado)) || is_null($tblPlanilla->idEmpleado))
			$sql = substr_replace($sql, 'NULL', $qpos, 1);

		$sqlQuery = new SqlQuery($sql);
		
		if ((isset($tblPlanilla->fechaInicio)) && (!is_null($tblPlanilla->fechaInicio)))
			$sqlQuery->set($tblPlanilla->fechaInicio);
		if ((isset($tblPlanilla->fechaFin)) && (!is_null($tblPlanilla->fechaFin)))
			$sqlQuery->set($tblPlanilla->fechaFin);
		if ((isset($tblPlanilla->planilla)) && (!is_null($tblPlanilla->planilla)))
			$sqlQuery->set($tblPlanilla->planilla);
		if ((isset($tblPlanilla->diasTrabajados)) && (!is_null($tblPlanilla->diasTrabajados)))
			$sqlQuery->set($tblPlanilla->diasTrabajados);
		if ((isset($tblPlanilla->horas)) && (!is_null($tblPlanilla->horas)))
			$sqlQuery->set($tblPlanilla->horas);
		if ((isset($tblPlanilla->extrasDiurnas)) && (!is_null($tblPlanilla->extrasDiurnas)))
			$sqlQuery->set($tblPlanilla->extrasDiurnas);
		if ((isset($tblPlanilla->extrasNocturnas)) && (!is_null($tblPlanilla->extrasNocturnas)))
			$sqlQuery->set($tblPlanilla->extrasNocturnas);
		if ((isset($tblPlanilla->feriado)) && (!is_null($tblPlanilla->feriado)))
			$sqlQuery->set($tblPlanilla->feriado);
		if ((isset($tblPlanilla->ajuste)) && (!is_null($tblPlanilla->ajuste)))
			$sqlQuery->set($tblPlanilla->ajuste);
		if ((isset($tblPlanilla->totalDescuento)) && (!is_null($tblPlanilla->totalDescuento)))
			$sqlQuery->set($tblPlanilla->totalDescuento);
		if ((isset($tblPlanilla->salarioDevengado)) && (!is_null($tblPlanilla->salarioDevengado)))
			$sqlQuery->set($tblPlanilla->salarioDevengado);
		if ((isset($tblPlanilla->idEmpleado)) && (!is_null($tblPlanilla->idEmpleado)))
			$sqlQuery->setNumber($tblPlanilla->idEmpleado);

		$sqlQuery->setNumber($tblPlanilla->idPlanilla);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tbl_planilla';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFechaInicio($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaFin($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPlanilla($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE planilla = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDiasTrabajados($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE dias_trabajados = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHoras($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE horas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExtrasDiurnas($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE extras_diurnas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExtrasNocturnas($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE extras_nocturnas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFeriado($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE feriado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAjuste($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE ajuste = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTotalDescuento($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE total_descuento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySalarioDevengado($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE salario_devengado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEmpleado($value){
		$sql = 'SELECT * FROM tbl_planilla WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFechaInicio($value){
		$sql = 'DELETE FROM tbl_planilla WHERE fecha_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaFin($value){
		$sql = 'DELETE FROM tbl_planilla WHERE fecha_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPlanilla($value){
		$sql = 'DELETE FROM tbl_planilla WHERE planilla = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDiasTrabajados($value){
		$sql = 'DELETE FROM tbl_planilla WHERE dias_trabajados = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHoras($value){
		$sql = 'DELETE FROM tbl_planilla WHERE horas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExtrasDiurnas($value){
		$sql = 'DELETE FROM tbl_planilla WHERE extras_diurnas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExtrasNocturnas($value){
		$sql = 'DELETE FROM tbl_planilla WHERE extras_nocturnas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFeriado($value){
		$sql = 'DELETE FROM tbl_planilla WHERE feriado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAjuste($value){
		$sql = 'DELETE FROM tbl_planilla WHERE ajuste = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTotalDescuento($value){
		$sql = 'DELETE FROM tbl_planilla WHERE total_descuento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySalarioDevengado($value){
		$sql = 'DELETE FROM tbl_planilla WHERE salario_devengado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEmpleado($value){
		$sql = 'DELETE FROM tbl_planilla WHERE id_empleado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TblPlanillaMySql 
	 */
	protected function readRow($row){
		$tblPlanilla = new TblPlanilla();
		
		$tblPlanilla->idPlanilla = $row['id_planilla'];
		$tblPlanilla->fechaInicio = $row['fecha_inicio'];
		$tblPlanilla->fechaFin = $row['fecha_fin'];
		$tblPlanilla->planilla = $row['planilla'];
		$tblPlanilla->diasTrabajados = $row['dias_trabajados'];
		$tblPlanilla->horas = $row['horas'];
		$tblPlanilla->extrasDiurnas = $row['extras_diurnas'];
		$tblPlanilla->extrasNocturnas = $row['extras_nocturnas'];
		$tblPlanilla->feriado = $row['feriado'];
		$tblPlanilla->ajuste = $row['ajuste'];
		$tblPlanilla->totalDescuento = $row['total_descuento'];
		$tblPlanilla->salarioDevengado = $row['salario_devengado'];
		$tblPlanilla->idEmpleado = $row['id_empleado'];

		return $tblPlanilla;
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
	 * @return TblPlanillaMySql 
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