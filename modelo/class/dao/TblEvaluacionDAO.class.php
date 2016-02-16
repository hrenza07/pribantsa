<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-02-15 22:31
 */
interface TblEvaluacionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblEvaluacion 
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
 	 * @param tblEvaluacion primary key
 	 */
	public function delete($id_evaluacion);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblEvaluacion tblEvaluacion
 	 */
	public function insert($tblEvaluacion);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblEvaluacion tblEvaluacion
 	 */
	public function update($tblEvaluacion);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByPuntaje($value);

	public function queryByFecha($value);

	public function queryByIdEmpleado($value);

	public function queryByIdCriterio($value);


	public function deleteByPuntaje($value);

	public function deleteByFecha($value);

	public function deleteByIdEmpleado($value);

	public function deleteByIdCriterio($value);


}
?>