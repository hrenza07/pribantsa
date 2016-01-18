<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
interface TblDepartamentoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblDepartamento 
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
 	 * @param tblDepartamento primary key
 	 */
	public function delete($id_departamento);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblDepartamento tblDepartamento
 	 */
	public function insert($tblDepartamento);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblDepartamento tblDepartamento
 	 */
	public function update($tblDepartamento);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombre($value);

	public function queryByDescripcion($value);


	public function deleteByNombre($value);

	public function deleteByDescripcion($value);


}
?>