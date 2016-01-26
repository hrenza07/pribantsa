<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/TblBonoDAO.class.php');
	require_once('class/dto/TblBono.class.php');
	require_once('class/mysql/TblBonoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblBonoMySqlExtDAO.class.php');
	require_once('class/dao/TblCapacitacionDAO.class.php');
	require_once('class/dto/TblCapacitacion.class.php');
	require_once('class/mysql/TblCapacitacionMySqlDAO.class.php');
	require_once('class/mysql/ext/TblCapacitacionMySqlExtDAO.class.php');
	require_once('class/dao/TblContratoDAO.class.php');
	require_once('class/dto/TblContrato.class.php');
	require_once('class/mysql/TblContratoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblContratoMySqlExtDAO.class.php');
	require_once('class/dao/TblCriterioDAO.class.php');
	require_once('class/dto/TblCriterio.class.php');
	require_once('class/mysql/TblCriterioMySqlDAO.class.php');
	require_once('class/mysql/ext/TblCriterioMySqlExtDAO.class.php');
	require_once('class/dao/TblDepartamentoDAO.class.php');
	require_once('class/dto/TblDepartamento.class.php');
	require_once('class/mysql/TblDepartamentoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblDepartamentoMySqlExtDAO.class.php');
	require_once('class/dao/TblDescuentoDAO.class.php');
	require_once('class/dto/TblDescuento.class.php');
	require_once('class/mysql/TblDescuentoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblDescuentoMySqlExtDAO.class.php');
	require_once('class/dao/TblEducacionDAO.class.php');
	require_once('class/dto/TblEducacion.class.php');
	require_once('class/mysql/TblEducacionMySqlDAO.class.php');
	require_once('class/mysql/ext/TblEducacionMySqlExtDAO.class.php');
	require_once('class/dao/TblEmpleadoDAO.class.php');
	require_once('class/dto/TblEmpleado.class.php');
	require_once('class/mysql/TblEmpleadoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblEmpleadoMySqlExtDAO.class.php');
	require_once('class/dao/TblEvaluacionDAO.class.php');
	require_once('class/dto/TblEvaluacion.class.php');
	require_once('class/mysql/TblEvaluacionMySqlDAO.class.php');
	require_once('class/mysql/ext/TblEvaluacionMySqlExtDAO.class.php');
	require_once('class/dao/TblPermisoDAO.class.php');
	require_once('class/dto/TblPermiso.class.php');
	require_once('class/mysql/TblPermisoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblPermisoMySqlExtDAO.class.php');
	require_once('class/dao/TblPlanillaDAO.class.php');
	require_once('class/dto/TblPlanilla.class.php');
	require_once('class/mysql/TblPlanillaMySqlDAO.class.php');
	require_once('class/mysql/ext/TblPlanillaMySqlExtDAO.class.php');
	require_once('class/dao/TblPuestoHistoricoDAO.class.php');
	require_once('class/dto/TblPuestoHistorico.class.php');
	require_once('class/mysql/TblPuestoHistoricoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblPuestoHistoricoMySqlExtDAO.class.php');
	require_once('class/dao/TblPuestoTrabajoDAO.class.php');
	require_once('class/dto/TblPuestoTrabajo.class.php');
	require_once('class/mysql/TblPuestoTrabajoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblPuestoTrabajoMySqlExtDAO.class.php');
	require_once('class/dao/TblReconocimientoDAO.class.php');
	require_once('class/dto/TblReconocimiento.class.php');
	require_once('class/mysql/TblReconocimientoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblReconocimientoMySqlExtDAO.class.php');
	require_once('class/dao/TblSancionDAO.class.php');
	require_once('class/dto/TblSancion.class.php');
	require_once('class/mysql/TblSancionMySqlDAO.class.php');
	require_once('class/mysql/ext/TblSancionMySqlExtDAO.class.php');
	require_once('class/dao/TblTipoBonoDAO.class.php');
	require_once('class/dto/TblTipoBono.class.php');
	require_once('class/mysql/TblTipoBonoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblTipoBonoMySqlExtDAO.class.php');
	require_once('class/dao/TblTipoDescuentoDAO.class.php');
	require_once('class/dto/TblTipoDescuento.class.php');
	require_once('class/mysql/TblTipoDescuentoMySqlDAO.class.php');
	require_once('class/mysql/ext/TblTipoDescuentoMySqlExtDAO.class.php');
	require_once('class/dao/TblUsuarioDAO.class.php');
	require_once('class/dto/TblUsuario.class.php');
	require_once('class/mysql/TblUsuarioMySqlDAO.class.php');
	require_once('class/mysql/ext/TblUsuarioMySqlExtDAO.class.php');
	require_once('class/dao/TblVacacionDAO.class.php');
	require_once('class/dto/TblVacacion.class.php');
	require_once('class/mysql/TblVacacionMySqlDAO.class.php');
	require_once('class/mysql/ext/TblVacacionMySqlExtDAO.class.php');

?>