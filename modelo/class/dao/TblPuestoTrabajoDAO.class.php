<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-02-15 22:31
 */
interface TblPuestoTrabajoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblPuestoTrabajo 
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
 	 * @param tblPuestoTrabajo primary key
 	 */
	public function delete($id_puesto_trabajo);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblPuestoTrabajo tblPuestoTrabajo
 	 */
	public function insert($tblPuestoTrabajo);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblPuestoTrabajo tblPuestoTrabajo
 	 */
	public function update($tblPuestoTrabajo);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdDepartamento($value);

	public function queryByNombre($value);

	public function queryByDescripcion($value);

	public function queryBySalarioMin($value);

	public function queryBySalarioMax($value);


	public function deleteByIdDepartamento($value);

	public function deleteByNombre($value);

	public function deleteByDescripcion($value);

	public function deleteBySalarioMin($value);

	public function deleteBySalarioMax($value);


}
?>