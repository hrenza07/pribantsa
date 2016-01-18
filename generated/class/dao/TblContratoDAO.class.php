<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
interface TblContratoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblContrato 
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
 	 * @param tblContrato primary key
 	 */
	public function delete($id_contrato);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblContrato tblContrato
 	 */
	public function insert($tblContrato);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblContrato tblContrato
 	 */
	public function update($tblContrato);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFechaInicio($value);

	public function queryByFechaFin($value);

	public function queryByTipoContrato($value);

	public function queryByIdEmpleado($value);


	public function deleteByFechaInicio($value);

	public function deleteByFechaFin($value);

	public function deleteByTipoContrato($value);

	public function deleteByIdEmpleado($value);


}
?>