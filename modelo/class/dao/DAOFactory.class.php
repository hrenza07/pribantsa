<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return TblBonoDAO
	 */
	public static function getTblBonoDAO(){
		return new TblBonoMySqlExtDAO();
	}

	/**
	 * @return TblCapacitacionDAO
	 */
	public static function getTblCapacitacionDAO(){
		return new TblCapacitacionMySqlExtDAO();
	}

	/**
	 * @return TblContratoDAO
	 */
	public static function getTblContratoDAO(){
		return new TblContratoMySqlExtDAO();
	}

	/**
	 * @return TblCriterioDAO
	 */
	public static function getTblCriterioDAO(){
		return new TblCriterioMySqlExtDAO();
	}

	/**
	 * @return TblDepartamentoDAO
	 */
	public static function getTblDepartamentoDAO(){
		return new TblDepartamentoMySqlExtDAO();
	}

	/**
	 * @return TblDescuentoDAO
	 */
	public static function getTblDescuentoDAO(){
		return new TblDescuentoMySqlExtDAO();
	}

	/**
	 * @return TblEducacionDAO
	 */
	public static function getTblEducacionDAO(){
		return new TblEducacionMySqlExtDAO();
	}

	/**
	 * @return TblEmpleadoDAO
	 */
	public static function getTblEmpleadoDAO(){
		return new TblEmpleadoMySqlExtDAO();
	}

	/**
	 * @return TblEvaluacionDAO
	 */
	public static function getTblEvaluacionDAO(){
		return new TblEvaluacionMySqlExtDAO();
	}

	/**
	 * @return TblPermisoDAO
	 */
	public static function getTblPermisoDAO(){
		return new TblPermisoMySqlExtDAO();
	}

	/**
	 * @return TblPlanillaDAO
	 */
	public static function getTblPlanillaDAO(){
		return new TblPlanillaMySqlExtDAO();
	}

	/**
	 * @return TblPuestoHistoricoDAO
	 */
	public static function getTblPuestoHistoricoDAO(){
		return new TblPuestoHistoricoMySqlExtDAO();
	}

	/**
	 * @return TblPuestoTrabajoDAO
	 */
	public static function getTblPuestoTrabajoDAO(){
		return new TblPuestoTrabajoMySqlExtDAO();
	}

	/**
	 * @return TblReconocimientoDAO
	 */
	public static function getTblReconocimientoDAO(){
		return new TblReconocimientoMySqlExtDAO();
	}

	/**
	 * @return TblSancionDAO
	 */
	public static function getTblSancionDAO(){
		return new TblSancionMySqlExtDAO();
	}

	/**
	 * @return TblTipoBonoDAO
	 */
	public static function getTblTipoBonoDAO(){
		return new TblTipoBonoMySqlExtDAO();
	}

	/**
	 * @return TblTipoDescuentoDAO
	 */
	public static function getTblTipoDescuentoDAO(){
		return new TblTipoDescuentoMySqlExtDAO();
	}

	/**
	 * @return TblUsuarioDAO
	 */
	public static function getTblUsuarioDAO(){
		return new TblUsuarioMySqlExtDAO();
	}

	/**
	 * @return TblVacacionDAO
	 */
	public static function getTblVacacionDAO(){
		return new TblVacacionMySqlExtDAO();
	}


}
?>