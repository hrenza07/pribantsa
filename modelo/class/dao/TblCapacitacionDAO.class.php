<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-02-03 20:25
 */
interface TblCapacitacionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblCapacitacion 
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
 	 * @param tblCapacitacion primary key
 	 */
	public function delete($id_capacitacion);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblCapacitacion tblCapacitacion
 	 */
	public function insert($tblCapacitacion);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblCapacitacion tblCapacitacion
 	 */
	public function update($tblCapacitacion);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombre($value);

	public function queryByDescripcion($value);

	public function queryByLugar($value);

	public function queryByFechaInicio($value);

	public function queryByFechaFin($value);

	public function queryByIdEmpleado($value);


	public function deleteByNombre($value);

	public function deleteByDescripcion($value);

	public function deleteByLugar($value);

	public function deleteByFechaInicio($value);

	public function deleteByFechaFin($value);

	public function deleteByIdEmpleado($value);


}
?>