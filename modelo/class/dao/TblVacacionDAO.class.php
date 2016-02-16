<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-02-15 22:31
 */
interface TblVacacionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblVacacion 
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
 	 * @param tblVacacion primary key
 	 */
	public function delete($id_vacacion);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblVacacion tblVacacion
 	 */
	public function insert($tblVacacion);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblVacacion tblVacacion
 	 */
	public function update($tblVacacion);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFechaInicio($value);

	public function queryByFechaFin($value);

	public function queryByIdEmpleado($value);


	public function deleteByFechaInicio($value);

	public function deleteByFechaFin($value);

	public function deleteByIdEmpleado($value);


}
?>