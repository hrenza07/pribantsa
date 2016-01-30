<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-01-27 22:07
 */
interface TblCriterioDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblCriterio 
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
 	 * @param tblCriterio primary key
 	 */
	public function delete($id_criterio);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblCriterio tblCriterio
 	 */
	public function insert($tblCriterio);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblCriterio tblCriterio
 	 */
	public function update($tblCriterio);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDescripcion($value);

	public function queryByPeso($value);

	public function queryByIdPuestoTrabajo($value);


	public function deleteByDescripcion($value);

	public function deleteByPeso($value);

	public function deleteByIdPuestoTrabajo($value);


}
?>