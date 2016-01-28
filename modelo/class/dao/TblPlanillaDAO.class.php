<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-01-27 22:07
 */
interface TblPlanillaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblPlanilla 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param tblPlanilla primary key
 	 */
	public function delete($id_planilla);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblPlanilla tblPlanilla
 	 */
	public function insert($tblPlanilla);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblPlanilla tblPlanilla
 	 */
	public function update($tblPlanilla);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFechaInicio($value);

	public function queryByFechaFin($value);

	public function queryByPlanilla($value);

	public function queryByDiasTrabajados($value);

	public function queryByHoras($value);

	public function queryByExtrasDiurnas($value);

	public function queryByExtrasNocturnas($value);

	public function queryByFeriado($value);

	public function queryByAjuste($value);

	public function queryByTotalDescuento($value);

	public function queryBySalarioDevengado($value);

	public function queryByIdEmpleado($value);


	public function deleteByFechaInicio($value);

	public function deleteByFechaFin($value);

	public function deleteByPlanilla($value);

	public function deleteByDiasTrabajados($value);

	public function deleteByHoras($value);

	public function deleteByExtrasDiurnas($value);

	public function deleteByExtrasNocturnas($value);

	public function deleteByFeriado($value);

	public function deleteByAjuste($value);

	public function deleteByTotalDescuento($value);

	public function deleteBySalarioDevengado($value);

	public function deleteByIdEmpleado($value);


}
?>