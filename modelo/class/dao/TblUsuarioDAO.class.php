<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-02-15 22:31
 */
interface TblUsuarioDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblUsuario 
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
 	 * @param tblUsuario primary key
 	 */
	public function delete($id_usuario);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblUsuario tblUsuario
 	 */
	public function insert($tblUsuario);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblUsuario tblUsuario
 	 */
	public function update($tblUsuario);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdEmpleado($value);

	public function queryByContrasena($value);

	public function queryByPrivilegio($value);

	public function queryByUsuario($value);


	public function deleteByIdEmpleado($value);

	public function deleteByContrasena($value);

	public function deleteByPrivilegio($value);

	public function deleteByUsuario($value);


}
?>