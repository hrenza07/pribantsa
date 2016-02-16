<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-02-15 22:31
 */
interface TblPuestoHistoricoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TblPuestoHistorico 
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
 	 * @param tblPuestoHistorico primary key
 	 */
	public function delete($id_puesto_historico);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TblPuestoHistorico tblPuestoHistorico
 	 */
	public function insert($tblPuestoHistorico);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TblPuestoHistorico tblPuestoHistorico
 	 */
	public function update($tblPuestoHistorico);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdEmpleado($value);

	public function queryByIdPuestoTrabajo($value);

	public function queryByFechaInicio($value);

	public function queryByFechaFin($value);


	public function deleteByIdEmpleado($value);

	public function deleteByIdPuestoTrabajo($value);

	public function deleteByFechaInicio($value);

	public function deleteByFechaFin($value);


}
?>