<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
interface TblSancionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblSancion 
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
 	 * @param tblSancion primary key
 	 */
	public function delete($id_sancion);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblSancion tblSancion
 	 */
	public function insert($tblSancion);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblSancion tblSancion
 	 */
	public function update($tblSancion);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByGravedad($value);

	public function queryByDescripcion($value);

	public function queryByFecha($value);

	public function queryByIdEmpleado($value);


	public function deleteByGravedad($value);

	public function deleteByDescripcion($value);

	public function deleteByFecha($value);

	public function deleteByIdEmpleado($value);


}
?>