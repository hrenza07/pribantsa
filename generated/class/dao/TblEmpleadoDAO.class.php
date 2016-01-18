<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-01-17 21:09
 */
interface TblEmpleadoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblEmpleado 
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
 	 * @param tblEmpleado primary key
 	 */
	public function delete($id_empleado);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblEmpleado tblEmpleado
 	 */
	public function insert($tblEmpleado);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblEmpleado tblEmpleado
 	 */
	public function update($tblEmpleado);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDui($value);

	public function queryByNit($value);

	public function queryByIsss($value);

	public function queryByAfp($value);

	public function queryByNombre($value);

	public function queryByApellido($value);

	public function queryBySexo($value);

	public function queryByCuenta($value);

	public function queryByFechaNacimiento($value);

	public function queryBySalario($value);

	public function queryByIdPuestoTrabajo($value);


	public function deleteByDui($value);

	public function deleteByNit($value);

	public function deleteByIsss($value);

	public function deleteByAfp($value);

	public function deleteByNombre($value);

	public function deleteByApellido($value);

	public function deleteBySexo($value);

	public function deleteByCuenta($value);

	public function deleteByFechaNacimiento($value);

	public function deleteBySalario($value);

	public function deleteByIdPuestoTrabajo($value);


}
?>