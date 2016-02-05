<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-02-03 20:25
 */
interface TblBonoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblBono 
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
 	 * @param tblBono primary key
 	 */
	public function delete($id_bono);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblBono tblBono
 	 */
	public function insert($tblBono);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblBono tblBono
 	 */
	public function update($tblBono);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFecha($value);

	public function queryByIdTipoBono($value);

	public function queryByIdEmpleado($value);


	public function deleteByFecha($value);

	public function deleteByIdTipoBono($value);

	public function deleteByIdEmpleado($value);


}
?>