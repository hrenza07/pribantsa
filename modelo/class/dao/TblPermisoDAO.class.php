<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-02-03 20:25
 */
interface TblPermisoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblPermiso 
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
 	 * @param tblPermiso primary key
 	 */
	public function delete($id_permiso);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblPermiso tblPermiso
 	 */
	public function insert($tblPermiso);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblPermiso tblPermiso
 	 */
	public function update($tblPermiso);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByRemunerado($value);

	public function queryByInicio($value);

	public function queryByFin($value);

	public function queryByTipoPermiso($value);

	public function queryByIdEmpleado($value);


	public function deleteByRemunerado($value);

	public function deleteByInicio($value);

	public function deleteByFin($value);

	public function deleteByTipoPermiso($value);

	public function deleteByIdEmpleado($value);


}
?>