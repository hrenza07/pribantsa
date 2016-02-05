<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-02-03 20:25
 */
interface TblReconocimientoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblReconocimiento 
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
 	 * @param tblReconocimiento primary key
 	 */
	public function delete($id_reconocimiento);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblReconocimiento tblReconocimiento
 	 */
	public function insert($tblReconocimiento);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblReconocimiento tblReconocimiento
 	 */
	public function update($tblReconocimiento);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDescripcion($value);

	public function queryByIdEmpleado($value);


	public function deleteByDescripcion($value);

	public function deleteByIdEmpleado($value);


}
?>