create database RacBD;

DROP TABLE IF EXISTS `BD_SISTEMA_MANTENIMIENTO`.`perfiles_usuario` ;

CREATE TABLE IF NOT EXISTS `RacBD`.`usuarios` (
  `id_usuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `apellidos` VARCHAR(50) NOT NULL,
  `departamento` VARCHAR(100) NOT NULL,
  `correo` VARCHAR(50) NOT NULL,
  `contraseña` VARCHAR(20) NULL,
  `tipo_usuario` smallint(1) NOT NULL default 0,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB; 

CREATE TABLE IF NOT EXISTS `RacBD`.`solicitudes` (
  `id_solicitud` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `folio` VARCHAR(6) NOT NULL,
  `area_solicitante` VARCHAR(70) NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  `responsable` VARCHAR(70) NOT NULL,
  `req_accion` VARCHAR(2) NULL,
  `req_correccion` VARCHAR(2) NULL,
  `tecnica` VARCHAR(200) NOT NULL,
  `causa` VARCHAR(200) NOT NULL,
  `fecha_programada` date NOT NULL,
  `fecha_terminacion` date NOT NULL,
  `rac_activo` smallint(1) NOT NULL default 1,
  PRIMARY KEY (`id_solicitud`))
ENGINE = InnoDB;

CREATE TABLE `racbd`.`evidencias` (
  `id_evidencias` INT NOT NULL AUTO_INCREMENT,
  `folio` VARCHAR(6) NOT NULL,
  `imagenes` VARCHAR(200) NOT NULL,
 `evidencia_activa` smallint(1) NOT NULL default 1,
  `id_solicitud` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_evidencias`),
  foreign key (`id_solicitud`) references solicitudes(`id_solicitud`),
  UNIQUE INDEX `id_evidencias_UNIQUE` (`id_evidencias` ASC) VISIBLE);
  

START TRANSACTION;
USE `RacBD`;
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DIRECCION', 'INSTITUTO TECNOLOGICO DE LA PIEDAD','DIRECCION','dir_piedad@piedad.tecnm.mx','direccionITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('SUBDIRECCION', 'ACADEMICA','SUBDIRECCION ACADEMICA','sub_acad@piedad.tecnm.mx','subdireccionITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'BIOQUIMICA','DEPARTAMENTO BIOQUIMICA','depto_bioquimica@piedad.tecnm.mx','deptoBioquimicaITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'CIENCIAS BASICAS','DEPARTAMENTO CIENCIAS BASICAS','depto_cbasicas@piedad.tecnm.mx','deptoCBasicasITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'CIENCIAS ECONOMICO ADMINISTRATIVAS','DEPARTAMENTO CIENCIAS ECONOMICO ADMINISTRATIVAS','depto_cea@piedad.tecnm.mx','deptoCeaITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'ELECTRICA Y ELECTRONICA','DEPARTAMENTO ELECTRICA Y ELECTRONICA','depto_electrica@piedad.tecnm.mx','deptoElectricaITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'INDUSTRIAL','DEPARTAMENTO INDUSTRIAL','depto_industrial@piedad.tecnm.mx','deptoIndustrialITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'SISTEMAS Y COMPUTACION','DEPARTAMENTO SISTEMAS Y COMPUTACION','depto_sistemas@piedad.tecnm.mx','deptoSistemasITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'DIVISION DE ESTUDIOS PROFESIONALES','DEPARTAMENTO DIVISION DE ESTUDIOS PROFESIONALES','depto_dep@piedad.tecnm.mx','deptoDepITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'DESARROLLO ACADEMICO','DEPARTAMENTO DE DESARROLLO ACADEMICO','depto_desacad@piedad.tecnm.mx','deptoDesacadITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('SUBDIRECCION', 'DE PLANEACION','SUBDIRECCION DE PLANEACION','sub_planea@piedad.tecnm.mx','subPlaneamientoITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'DE PLANEACION PROGRAMACION Y PRESUPUESTACION','DEPARTAMENTO DE PLANEACION PROGRAMACION Y PRESUPUESTACION','depto_ppp@piedad.tecnm.mx','deptoPppITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'DE COMUNICACION Y DIFUSION','DEPARTAMENTO DE COMUNICACION Y DIFUSION','depto_cyd@piedad.tecnm.mx','deptoCydITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'DE SERVICIOS ESCOLARES','DEPARTAMENTO DE SERVICIOS ESCOLARES','depto_se@piedad.tecnm.mx','deptoSeITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO', 'DE GESTION TECNOLOGICA Y VINCULACION','DEPARTAMENTO DE GESTION TECNOLOGICA Y VINCULACION','depto_gtv@piedad.tecnm.mx','deptogtvITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO','DE CENTRO DE INFORMACIÓN','DEPARTAMENTO DE CENTRO DE INFORMACIÓN','depto_ci@piedad.tecnm.mx','deptoCiITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO','DE ACTIVIDADES EXTRAESCOLARES','DEPARTAMENTO DE ACTIVIDADES EXTRAESCOLARES','depto_actext@piedad.tecnm.mx','deptoActExtITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('SUBDIRECCION','DE SERVICIOS ADMINISTRATIVOS','SUBDIRECCION DE SERVICIOS ADMINISTRATIVOS','sub_admva@piedad.tecnm.mx','subAdmvaITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO','DE RECURSOS HUMANOS','DEPARTAMENTO DE RECURSOS HUMANOS','depto_rh@piedad.tecnm.mx','deptoRhITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO','DE RECURSOS FINANCIEROS','DEPARTAMENTO DE RECURSOS FINANCIEROS','depto_rf@piedad.tecnm.mx','deptoRfITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO','DE RECURSOS MATERIALES Y SERVICIOS','DEPARTAMENTO DE RECURSOS MATERIALES Y SERVICIOS','depto_rms@piedad.tecnm.mx','deptoRmsITLP');
INSERT INTO `RacBD`.`usuarios` (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`) VALUES ('DEPARTAMENTO','DE CENTRO DE COMPUTO','DEPARTAMENTO DE CENTRO DE COMPUTO','depto_cc@piedad.tecnm.mx','deptoCcITLP');
COMMIT;

use racbd;



select * from usuarios;
select * from solicitudes;
select * from evidencias;

-- usuario admin
INSERT INTO usuarios (`nombre`, `apellidos`, `departamento`, `correo`, `contraseña`, `tipo_usuario`) 
VALUES ('ADMINISTRADOR','DEL RAC','ADMINISTRADOR DEL RAC','adminRac@piedad.tecnm.mx','adminRacITLP', 1);

-- drop table usuarios;
-- drop table solicitudes;
-- drop table evidencias;

select u.departamento, s.folio, e.imagenes
from evidencias e
inner join usuarios u on e.id_usuario = u.id_usuario
INNER JOIN solicitudes s ON e.id_solicitud = s.id_solicitud; 

SELECT s.responsable, e.folio, e.imagenes 
                             FROM evidencias e
                             INNER JOIN solicitudes s ON 
                             e.id_solicitud = s.id_solicitud
                             WHERE e.evidencia_activa = 1;