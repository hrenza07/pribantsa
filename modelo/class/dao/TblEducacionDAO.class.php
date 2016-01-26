<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
interface TblEducacionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblEducacion 
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
 	 * @param tblEducacion primary key
 	 */
	public function delete($id_educacion);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblEducacion tblEducacion
 	 */
	public function insert($tblEducacion);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblEducacion tblEducacion
 	 */
	public function update($tblEducacion);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTitulo($value);

	public function queryByFechaInicio($value);

	public function queryByFechaFin($value);

	public function queryByIdEmpleado($value);


	public function deleteByTitulo($value);

	public function deleteByFechaInicio($value);

	public function deleteByFechaFin($value);

	public function deleteByIdEmpleado($value);


}
?>