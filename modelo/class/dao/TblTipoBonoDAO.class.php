<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-02-15 22:31
 */
interface TblTipoBonoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblTipoBono 
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
 	 * @param tblTipoBono primary key
 	 */
	public function delete($id_tipo_bono);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblTipoBono tblTipoBono
 	 */
	public function insert($tblTipoBono);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblTipoBono tblTipoBono
 	 */
	public function update($tblTipoBono);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdPuestoTrabajo($value);

	public function queryByMonto($value);

	public function queryByPorcentaje($value);

	public function queryByNombre($value);


	public function deleteByIdPuestoTrabajo($value);

	public function deleteByMonto($value);

	public function deleteByPorcentaje($value);

	public function deleteByNombre($value);


}
?>