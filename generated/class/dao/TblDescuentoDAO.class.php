<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
interface TblDescuentoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblDescuento 
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
 	 * @param tblDescuento primary key
 	 */
	public function delete($id_descuento);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblDescuento tblDescuento
 	 */
	public function insert($tblDescuento);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblDescuento tblDescuento
 	 */
	public function update($tblDescuento);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFecha($value);

	public function queryByIdTipoDescuento($value);

	public function queryByIdEmpleado($value);


	public function deleteByFecha($value);

	public function deleteByIdTipoDescuento($value);

	public function deleteByIdEmpleado($value);


}
?>