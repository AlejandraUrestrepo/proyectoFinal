-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2021 a las 04:38:07
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pulpof`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_barrio` ()  BEGIN
SELECT *
FROM barrio order by ID_Barrio Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_ciudad` ()  BEGIN
SELECT *
FROM ciudad order by ID_ciudad Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_clientes` ()  BEGIN
SELECT *
FROM cliente order by Cedula_Cliente Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_detalleV` ()  BEGIN
SELECT *
FROM detalla_venta order by ID_DetalleVenta Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_laboratorio` ()  BEGIN
SELECT *
FROM laboratorio order by ID_Laboratorio Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_lote` ()  BEGIN
SELECT *
FROM lote order by Fecha_vencimiento Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_presentacion` ()  BEGIN
SELECT *
FROM presentacion order by ID_Presentacion Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_producto` ()  BEGIN
SELECT *
FROM producto order by Codigo_Producto Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_provedor` ()  BEGIN
SELECT *
FROM provedor order by NiT_provedor Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_rol` ()  BEGIN
SELECT *
FROM rol order by ID_Rol Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_tipo` ()  BEGIN
SELECT *
FROM tipo order by ID_Tipo Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_usuario` ()  BEGIN
SELECT *
FROM usuario order by Cedula_Usuario Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_venta` ()  BEGIN
SELECT *
FROM venta order by ID_Venta Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_ventaP` ()  BEGIN
SELECT *
FROM ventaproducto order by ID_VentaProducto Desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_barrio` (IN `id` INT(25), IN `barrio` VARCHAR(25))  BEGIN
UPDATE barrio 
SET Nombre_barrio = barrio
WHERE ID_Barrio = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_ciudad` (`id` INT(25), `ciudad` VARCHAR(25))  BEGIN
UPDATE ciudad 
SET Nombre_ciudad = ciudad
WHERE ID_ciudad = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_cliente` (`cedula` VARCHAR(25), `nombre` VARCHAR(25), `apellido` VARCHAR(25), `direccion` VARCHAR(25), `telefono` INT(13), `barrioid` INT(25), `ciudadid` INT(25))  BEGIN
UPDATE cliente 
SET Nombre=nombre,Apellidos=apellido,Direccion=direccion,Telefono=telefono,BarrioID=barrioid,CiudadID=ciudadid 
WHERE Cedula_Cliente= cedula;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_detalleV` (`id_detalle` INT(25), `ventaid` INT(25), `detallelote` INT(25), `detalleproducto` INT(25), `detalleprovedor` INT(25))  BEGIN 
UPDATE detalla_venta SET VentaID=ventaid,Detalle_Lote=detallelote,
Detalle_producto=detalleproducto,detalle_provedorID=detalleprovedor 
WHERE ID_DetalleVenta=id_detalle;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_laboratorio` (`id` INT(25), `nombre` VARCHAR(25))  BEGIN
UPDATE laboratorio 
SET Nombre_Laboratorio = nombre
WHERE ID_Laboratorio = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_lote` (IN `a` INT(25), IN `b` DATE, IN `c` VARCHAR(25), IN `d` INT(11), IN `f` INT(25))  BEGIN
UPDATE lote 
SET Fecha_vencimiento=b,provedorID=c,Stock=d,IdProducto = f
WHERE ID_Lote = a;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_presentacion` (`id` INT(25), `nombre` VARCHAR(25))  BEGIN
UPDATE presentacion 
SET Nombre_Presentacion = nombre
WHERE ID_Presentacion = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_producto` (`codigo` INT(25), `nombre` VARCHAR(25), `precioentrada` FLOAT, `preciocaja` FLOAT, `precioblister` FLOAT, `preciounidad` FLOAT, `concentracion` VARCHAR(25), `tipo` INT(25), `laboratorio` INT(25), `presentacion` INT(25))  BEGIN
UPDATE producto SET Nombre_Producto=nombre,Precio_Entrada=precioentrada,Precio_Caja=preciocaja,Precio_Blister=precioblister,
Precio_unidad=preciounidad,concentracion=concentracion,TipoID=tipo,LaboratorioID=laboratorio,PresentacionID=presentacion
WHERE Codigo_Producto=codigo;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_provedor` (`nit` INT(25), `nombre` VARCHAR(25), `correo` VARCHAR(25), `telefono` VARCHAR(25), `direccion` VARCHAR(25))  BEGIN
UPDATE provedor SET Nombre=nombre,
Telefono=telefono,Correo=correo,Dirrecion=direccion
WHERE NiT_provedor=nit;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_rol` (`id` INT(25), `nombre` VARCHAR(25))  BEGIN
UPDATE rol 
SET Nombre_Rol = nombre
WHERE ID_Rol = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_tipo` (`id` INT(25), `nombre` VARCHAR(25))  BEGIN
UPDATE tipo 
SET Nombre_Tipo = nombre
WHERE ID_Tipo = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_usuario` (`cedula` VARCHAR(25), `nombre` VARCHAR(25), `apellido` VARCHAR(25), `contraseña` VARCHAR(25), `usuario` VARCHAR(25), `idrol` INT(25))  BEGIN
UPDATE usuario SET Nombre=nombre,Apellido=apellido,Contraseña=contraseña,
usuario=usuario,ROLID=idrol
WHERE Cedula_Usuario=cedula;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_venta` (`idventa` INT(25), `vproductoid` INT(25), `cliente` VARCHAR(25), `usuario` VARCHAR(25), `fecha` DATETIME)  BEGIN
UPDATE venta SET VentaProductoID=vproductoid,ClienteID=cliente,UsuarioID=usuario,
Fecha=fecha 
WHERE ID_Venta=idventa;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_ventaP` (`idventaproducto` INT(25), `idproducto` INT(25), `cantidad` INT(11), `subtotal` FLOAT, `descuento` FLOAT, `ventaid` INT(25), `idlote` INT(25))  BEGIN
UPDATE ventaproducto SET ID_producto=idproducto,Cantidad=cantidad,Sub_Total=subtotal,
Descuento=descuento,VentaID=ventaid,IdLote=idlote
WHERE ID_VentaProducto=idventaproducto;
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_barrio` (`del_id` INT(25))  BEGIN
 delete from barrio where ID_Barrio = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_ciudad` (`del_id` INT(25))  BEGIN
 delete from ciudad where ID_ciudad = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_cliente` (`del_id` VARCHAR(25))  BEGIN
 delete from cliente where Cedula_Cliente = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_detalleV` (`del_id` INT(25))  BEGIN
 delete from detalla_venta where ID_DetalleVenta = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_laboratorio` (`del_id` INT(25))  BEGIN
 delete from laboratorio where ID_Laboratorio = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_lote` (IN `del_id` VARCHAR(25))  BEGIN
 delete from lote where ID_Lote = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_presentacion` (`del_id` INT(25))  BEGIN
 delete from presentacion where ID_Presentacion = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_producto` (`del_id` INT(25))  BEGIN
 delete from producto where Codigo_Producto = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_provedor` (`del_id` INT(25))  BEGIN
 delete from provedor where NiT_provedor = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_rol` (`del_id` INT(25))  BEGIN
 delete from rol where ID_Rol = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_tipo` (`del_id` INT(25))  BEGIN
 delete from tipo where ID_Tipo = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_usuario` (`del_id` VARCHAR(25))  BEGIN
 delete from usuario where Cedula_Usuario = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_venta` (`del_id` INT(25))  BEGIN
 delete from venta where ID_Venta = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_ventaP` (`del_id` INT(25))  BEGIN
 delete from ventaproducto where ID_VentaProducto = del_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_barrio` (`id` INT(25), `barrio` VARCHAR(25))  BEGIN
INSERT INTO barrio(ID_Barrio, Nombre_barrio) 
VALUES (id,barrio);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_ciudad` (`id` INT(25), `ciudad` VARCHAR(25))  BEGIN
INSERT INTO ciudad(ID_ciudad, Nombre_ciudad) 
VALUES (id,ciudad);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_cliente` (`cedula` VARCHAR(25), `nombre` VARCHAR(25), `apellido` VARCHAR(25), `direccion` VARCHAR(25), `telefono` INT(13), `barrioid` INT(25), `ciudadid` INT(25))  BEGIN
INSERT INTO cliente(Cedula_Cliente, Nombre, Apellidos, Direccion,Telefono, BarrioID, CiudadID) 
VALUES (cedula,nombre,apellido,direccion,telefono,barrioid,ciudadid);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_detalleV` (`id_detalle` INT(25), `ventaid` INT(25), `detallelote` INT(25), `detalleproducto` INT(25), `detalleprovedor` INT(25))  BEGIN
INSERT INTO detalla_venta(ID_DetalleVenta, VentaID, Detalle_Lote, Detalle_producto, detalle_provedorID)
VALUES (id_detalle,ventaid,detallelote,detalleproducto,detalleprovedor);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_laboratorio` (`id` INT(25), `nombre` VARCHAR(25))  BEGIN
INSERT INTO laboratorio(ID_Laboratorio, Nombre_Laboratorio) 
VALUES (id,nombre);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_lote` (`ID_Lote` INT(25), `Fecha_vencimiento` DATE, `provedorID` VARCHAR(25), `Stock` INT(11), `IdProducto` INT(25))  BEGIN
INSERT INTO lote(ID_Lote, Fecha_vencimiento, provedorID, Stock, IdProducto) 
VALUES (ID_Lote, Fecha_vencimiento, provedorID, Stock, IdProducto);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_presentacion` (`id` INT(25), `nombre` VARCHAR(25))  BEGIN
INSERT INTO presentacion(ID_Presentacion, Nombre_Presentacion) 
VALUES (id,nombre);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_producto` (`codigo` INT(25), `nombre` VARCHAR(25), `precioentrada` FLOAT, `preciocaja` FLOAT, `precioblister` FLOAT, `preciounidad` FLOAT, `concentracion` VARCHAR(25), `tipo` INT(25), `laboratorio` INT(25), `presentacion` INT(25))  BEGIN
INSERT INTO producto(Codigo_Producto, Nombre_Producto, Precio_Entrada, Precio_Caja, Precio_Blister, Precio_unidad,
concentracion, TipoID, LaboratorioID, PresentacionID )
VALUES (codigo,nombre,precioentrada,preciocaja,precioblister,
preciounidad,concentracion,tipo,laboratorio,presentacion);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_provedor` (`nit` INT(25), `nombre` VARCHAR(25), `correo` VARCHAR(25), `telefono` VARCHAR(25), `direccion` VARCHAR(25))  BEGIN
INSERT INTO provedor(NiT_provedor, Nombre, Telefono, Correo, Dirrecion)
VALUES (nit,nombre,correo,telefono,direccion);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_rol` (`id` INT(25), `nombre` VARCHAR(25))  BEGIN
INSERT INTO rol(ID_Rol, Nombre_Rol) 
VALUES (id,nombre);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_tipo` (`id` INT(25), `nombre` VARCHAR(25))  BEGIN
INSERT INTO tipo(ID_Tipo, Nombre_Tipo) 
VALUES (id,nombre);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_usuario` (`cedula` VARCHAR(25), `nombre` VARCHAR(25), `apellido` VARCHAR(25), `contraseña` VARCHAR(25), `usuario` VARCHAR(25), `idrol` INT(25))  BEGIN
INSERT INTO usuario(Cedula_Usuario, Nombre, Apellido, Contraseña, usuario, ROLID)
VALUES (cedula,nombre,apellido,contraseña,usuario,idrol);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_venta` (`idventa` INT(25), `vproductoid` INT(25), `cliente` VARCHAR(25), `usuario` VARCHAR(25), `fecha` DATETIME)  BEGIN
INSERT INTO venta(ID_Venta, VentaProductoID, ClienteID, UsuarioID, Fecha) 
VALUES (idventa,vproductoid,cliente,usuario,fecha);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_ventaP` (`idventaproducto` INT(25), `idproducto` INT(25), `cantidad` INT(11), `subtotal` FLOAT, `descuento` FLOAT, `ventaid` INT(25), `idlote` INT(25))  BEGIN
INSERT INTO ventaproducto(ID_VentaProducto, ID_producto, Cantidad, Sub_Total, Descuento, VentaID, IdLote)
 VALUES (idventaproducto,idproducto,cantidad,subtotal,descuento,ventaid,idlote);
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio`
--

CREATE TABLE `barrio` (
  `ID_Barrio` int(25) NOT NULL,
  `Nombre_barrio` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `barrio`
--

INSERT INTO `barrio` (`ID_Barrio`, `Nombre_barrio`) VALUES
(1, 'Milagrosa'),
(2, 'Villa hermosa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `ID_ciudad` int(25) NOT NULL,
  `Nombre_ciudad` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ID_ciudad`, `Nombre_ciudad`) VALUES
(1, 'Medellin'),
(2, 'Bello');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Cedula_Cliente` varchar(25) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Apellidos` varchar(25) DEFAULT NULL,
  `Direccion` varchar(25) DEFAULT NULL,
  `Telefono` int(13) NOT NULL,
  `BarrioID` int(25) DEFAULT NULL,
  `CiudadID` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Cedula_Cliente`, `Nombre`, `Apellidos`, `Direccion`, `Telefono`, `BarrioID`, `CiudadID`) VALUES
('10003', 'Sebastian', 'Carmona', 'Calle 35 #32-80', 22589654, 1, 1),
('525535', 'Sebastian', 'Cardona', 'Calle 35 #32-80', 222365, 1, 1),
('555535', 'Sebastian', 'Cardona', '222222', 0, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalla_venta`
--

CREATE TABLE `detalla_venta` (
  `ID_DetalleVenta` int(25) NOT NULL,
  `VentaID` int(25) DEFAULT NULL,
  `Detalle_Lote` int(25) DEFAULT NULL,
  `Detalle_producto` int(25) DEFAULT NULL,
  `detalle_provedorID` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalla_venta`
--

INSERT INTO `detalla_venta` (`ID_DetalleVenta`, `VentaID`, `Detalle_Lote`, `Detalle_producto`, `detalle_provedorID`) VALUES
(1, 1, 4, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `ID_Laboratorio` int(25) NOT NULL,
  `Nombre_Laboratorio` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`ID_Laboratorio`, `Nombre_Laboratorio`) VALUES
(1, 'LAPROFF'),
(2, 'AMERICAN GENERICS'),
(3, 'MENARINI'),
(4, 'MENARINI'),
(5, 'A.F.'),
(9, 'ABBOTT'),
(10, 'ABBVIE'),
(11, 'ACCORD FARMA'),
(12, 'ACTELION'),
(13, 'ADVAITA'),
(14, 'ALCON'),
(15, 'ALERIA'),
(16, 'ALLEN LABORATORIOS'),
(17, 'ALLERGAN'),
(18, 'ALMIRALL'),
(19, 'ALPHARMA'),
(20, 'ALVARTIS'),
(21, 'AMGEN MÉXICO'),
(22, 'ANCHOR FARMA'),
(23, 'ANDRÓMACO'),
(24, 'AMSA'),
(25, 'APOPHARMA'),
(26, 'APOTEX'),
(27, 'ARLEX'),
(28, 'ARMSTRONG'),
(29, 'ASOFARMA'),
(30, 'ASPEN LABS'),
(31, 'ASPID'),
(32, 'ASTRAZENECA'),
(33, 'ATLANTIS'),
(34, 'AVIVIA PHARMA'),
(35, 'ALFASIGMA'),
(36, NULL),
(37, NULL),
(38, NULL),
(39, NULL),
(40, NULL),
(41, 'ABBOTT'),
(42, 'ABBVIE'),
(43, 'ACCORD FARMA'),
(44, 'ACTELION'),
(45, 'ADVAITA'),
(46, 'ALCON'),
(47, 'ALERIA'),
(48, 'ALLEN LABORATORIOS'),
(49, 'ALLERGAN'),
(50, 'ALMIRALL'),
(51, 'ALPHARMA'),
(52, 'ALVARTIS'),
(53, 'AMGEN MÉXICO'),
(54, 'ANCHOR FARMA'),
(55, 'ANDRÓMACO'),
(56, 'AMSA'),
(57, 'APOPHARMA'),
(58, 'APOTEX'),
(59, 'ARLEX'),
(60, 'ARMSTRONG'),
(61, 'ASOFARMA'),
(62, 'ASPEN LABS'),
(63, 'ASPID'),
(64, 'ASTRAZENECA'),
(65, 'ATLANTIS'),
(66, 'AVIVIA PHARMA'),
(67, 'ALFASIGMA'),
(68, NULL),
(69, NULL),
(70, NULL),
(71, NULL),
(72, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `ID_Lote` int(25) NOT NULL,
  `Fecha_vencimiento` date DEFAULT NULL,
  `provedorID` int(25) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `IdProducto` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`ID_Lote`, `Fecha_vencimiento`, `provedorID`, `Stock`, `IdProducto`) VALUES
(4, '2021-09-08', 1, 25, 2),
(6, '2021-09-21', 1, 85, NULL),
(13, '2021-09-02', 1, 54, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `ID_Presentacion` int(25) NOT NULL,
  `Nombre_Presentacion` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`ID_Presentacion`, `Nombre_Presentacion`) VALUES
(1, 'Jarabe'),
(2, 'Pastillas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Codigo_Producto` int(25) NOT NULL,
  `Nombre_Producto` varchar(25) DEFAULT NULL,
  `Precio_Entrada` float DEFAULT NULL,
  `Precio_Caja` float DEFAULT NULL,
  `Precio_Blister` float DEFAULT NULL,
  `Precio_unidad` float DEFAULT NULL,
  `concentracion` varchar(25) DEFAULT NULL,
  `TipoID` int(25) DEFAULT NULL,
  `LaboratorioID` int(25) DEFAULT NULL,
  `PresentacionID` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Codigo_Producto`, `Nombre_Producto`, `Precio_Entrada`, `Precio_Caja`, `Precio_Blister`, `Precio_unidad`, `concentracion`, `TipoID`, `LaboratorioID`, `PresentacionID`) VALUES
(1, 'acetaminofen22', 10000, 15000, 2000, 300, '500g', 2, 2, 2),
(2, 'acetaminofen', 10000, 15000, 2000, 300, '500g', 2, 2, 2),
(3, 'bupivacaína', 50000, 40000, 10000, 5000, '500g', 1, 10, 2),
(4, 'METFORMINA ', 50000, 30000, 10000, 500, '500mg', 6, 47, 2),
(5, 'GLIBENCLAMIDA ', 80000, 90000, 50000, 10000, '5MG', 10, 10, 2),
(6, 'MEDROXIPROGESTERONA ACETA', 10000, 12000, 6000, 600, '150MG', 4, 43, 2),
(8, 'NORETISTERONA ', 10000, 15000, 7000, 700, '0.35MG', 9, 41, 1),
(9, 'ATENOLOL ', 25000, 30000, 15000, 1500, '25MG', 8, 21, 2),
(10, 'CAPTOPRIL ', 15000, 20000, 5000, 500, '25MG', 10, 10, 2),
(11, 'Tuper', 7000, 10000, 10, 0, '15MG', 1, 10, 2),
(12, 'Acetaminofen', 2, 2, 1, 200, '500MG', 1, 1, 1),
(13, 'Acetaminofen', 2, 2, 1, 200, '500MG', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedor`
--

CREATE TABLE `provedor` (
  `NiT_provedor` int(25) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Telefono` varchar(25) DEFAULT NULL,
  `Correo` varchar(25) DEFAULT NULL,
  `Dirrecion` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provedor`
--

INSERT INTO `provedor` (`NiT_provedor`, `Nombre`, `Telefono`, `Correo`, `Dirrecion`) VALUES
(1, 'Monaco', '2393939', 'Alguien@gmail.com', 'Calle 35#32-80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_Rol` int(25) NOT NULL,
  `Nombre_Rol` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_Rol`, `Nombre_Rol`) VALUES
(1, 'Administrador'),
(2, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `ID_Tipo` int(25) NOT NULL,
  `Nombre_Tipo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`ID_Tipo`, `Nombre_Tipo`) VALUES
(1, 'Analgesico'),
(2, 'Antiinflamatorios'),
(3, 'Antiácidos'),
(4, 'antiulcerosos'),
(5, 'Antialérgicos'),
(6, 'Antidiarreicos'),
(7, 'laxantes'),
(8, 'Antiinfecciosos'),
(9, 'Antiinflamatorios'),
(10, 'Antipiréticos'),
(11, 'Antitusivos'),
(12, 'mucolíticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Cedula_Usuario` varchar(25) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Apellido` varchar(25) DEFAULT NULL,
  `Contraseña` varchar(25) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `ROLID` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Cedula_Usuario`, `Nombre`, `Apellido`, `Contraseña`, `usuario`, `ROLID`) VALUES
('1000394148', 'Sebastian ', 'Cardona', '123', 'admin', 1),
('101723385', 'juan pablo', 'cano gallo', '123', 'Jpcano', 1),
('1017233853', 'juan pablo', 'cano gallo', '123456', NULL, NULL),
('1564', 'manuelito', 'gallego', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `ID_Venta` int(25) NOT NULL,
  `VentaProductoID` int(25) DEFAULT NULL,
  `ClienteID` varchar(25) DEFAULT NULL,
  `UsuarioID` varchar(25) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`ID_Venta`, `VentaProductoID`, `ClienteID`, `UsuarioID`, `Fecha`) VALUES
(1, 1, '10003', '101723385', '2021-09-02 22:36:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaproducto`
--

CREATE TABLE `ventaproducto` (
  `ID_VentaProducto` int(25) NOT NULL,
  `ID_producto` int(25) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Sub_Total` float DEFAULT NULL,
  `Descuento` float DEFAULT NULL,
  `VentaID` int(25) DEFAULT NULL,
  `IdLote` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventaproducto`
--

INSERT INTO `ventaproducto` (`ID_VentaProducto`, `ID_producto`, `Cantidad`, `Sub_Total`, `Descuento`, `VentaID`, `IdLote`) VALUES
(1, 3, 6, 80000, 5000, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrio`
--
ALTER TABLE `barrio`
  ADD PRIMARY KEY (`ID_Barrio`),
  ADD KEY `ID_Barrio` (`ID_Barrio`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`ID_ciudad`),
  ADD KEY `ID_ciudad` (`ID_ciudad`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cedula_Cliente`),
  ADD KEY `BarrioID` (`BarrioID`,`CiudadID`),
  ADD KEY `CiudadID` (`CiudadID`);

--
-- Indices de la tabla `detalla_venta`
--
ALTER TABLE `detalla_venta`
  ADD PRIMARY KEY (`ID_DetalleVenta`),
  ADD KEY `VentaID` (`VentaID`,`Detalle_Lote`,`Detalle_producto`,`detalle_provedorID`),
  ADD KEY `Detalle_Lote` (`Detalle_Lote`),
  ADD KEY `Detalle_producto` (`Detalle_producto`),
  ADD KEY `detalle_provedorID` (`detalle_provedorID`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`ID_Laboratorio`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`ID_Lote`),
  ADD KEY `provedorID` (`provedorID`),
  ADD KEY `provedorID_2` (`provedorID`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`ID_Presentacion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Codigo_Producto`),
  ADD KEY `TipoID` (`TipoID`,`LaboratorioID`,`PresentacionID`),
  ADD KEY `LaboratorioID` (`LaboratorioID`),
  ADD KEY `PresentacionID` (`PresentacionID`);

--
-- Indices de la tabla `provedor`
--
ALTER TABLE `provedor`
  ADD PRIMARY KEY (`NiT_provedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_Rol`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`ID_Tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Cedula_Usuario`),
  ADD KEY `ROLID` (`ROLID`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`ID_Venta`),
  ADD KEY `ClienteID` (`ClienteID`,`UsuarioID`),
  ADD KEY `VentaProductoID` (`VentaProductoID`),
  ADD KEY `UsuarioID` (`UsuarioID`);

--
-- Indices de la tabla `ventaproducto`
--
ALTER TABLE `ventaproducto`
  ADD PRIMARY KEY (`ID_VentaProducto`),
  ADD KEY `ID_producto` (`ID_producto`,`VentaID`),
  ADD KEY `VentaID` (`VentaID`),
  ADD KEY `IdLote` (`IdLote`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barrio`
--
ALTER TABLE `barrio`
  MODIFY `ID_Barrio` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `ID_ciudad` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalla_venta`
--
ALTER TABLE `detalla_venta`
  MODIFY `ID_DetalleVenta` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `ID_Laboratorio` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `ID_Lote` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `ID_Presentacion` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Codigo_Producto` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `ID_Venta` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventaproducto`
--
ALTER TABLE `ventaproducto`
  MODIFY `ID_VentaProducto` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`BarrioID`) REFERENCES `barrio` (`ID_Barrio`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`CiudadID`) REFERENCES `ciudad` (`ID_ciudad`);

--
-- Filtros para la tabla `detalla_venta`
--
ALTER TABLE `detalla_venta`
  ADD CONSTRAINT `detalla_venta_ibfk_1` FOREIGN KEY (`VentaID`) REFERENCES `venta` (`ID_Venta`),
  ADD CONSTRAINT `detalla_venta_ibfk_2` FOREIGN KEY (`Detalle_Lote`) REFERENCES `lote` (`ID_Lote`),
  ADD CONSTRAINT `detalla_venta_ibfk_3` FOREIGN KEY (`Detalle_producto`) REFERENCES `producto` (`Codigo_Producto`),
  ADD CONSTRAINT `detalla_venta_ibfk_4` FOREIGN KEY (`detalle_provedorID`) REFERENCES `provedor` (`NiT_provedor`);

--
-- Filtros para la tabla `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`provedorID`) REFERENCES `provedor` (`NiT_provedor`),
  ADD CONSTRAINT `lote_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`PresentacionID`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`LaboratorioID`) REFERENCES `laboratorio` (`ID_Laboratorio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`TipoID`) REFERENCES `tipo` (`ID_Tipo`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`PresentacionID`) REFERENCES `presentacion` (`ID_Presentacion`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ROLID`) REFERENCES `rol` (`ID_Rol`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`VentaProductoID`) REFERENCES `ventaproducto` (`ID_VentaProducto`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`UsuarioID`) REFERENCES `usuario` (`Cedula_Usuario`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`ClienteID`) REFERENCES `cliente` (`Cedula_Cliente`);

--
-- Filtros para la tabla `ventaproducto`
--
ALTER TABLE `ventaproducto`
  ADD CONSTRAINT `ventaproducto_ibfk_1` FOREIGN KEY (`ID_producto`) REFERENCES `producto` (`Codigo_Producto`),
  ADD CONSTRAINT `ventaproducto_ibfk_2` FOREIGN KEY (`IdLote`) REFERENCES `lote` (`ID_Lote`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
