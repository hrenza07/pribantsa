<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-01-27 22:07
 */
interface TblTipoDescuentoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblTipoDescuento 
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
 	 * @param tblTipoDescuento primary key
 	 */
	public function delete($id_tipo_descuento);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTipoDescuento tblTipoDescuento
 	 */
	public function insert($tblTipoDescuento);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTipoDescuento tblTipoDescuento
 	 */
	public function update($tblTipoDescuento);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombre($value);

	public function queryByPorcentaje($value);

	public function queryByMonto($value);


	public function deleteByNombre($value);

	public function deleteByPorcentaje($value);

	public function deleteByMonto($value);


}
?>