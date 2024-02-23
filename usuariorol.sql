--
-- Base de datos: `usuariorol`
-- 

-- --------------------------------------------------------
-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `idUsuario` bigint(20) NOT NULL,
  `usNombre` varchar(50) NOT NULL,
  `usPass` int(11) NOT NULL,
  `usMail` varchar(50) NOT NULL,
  `usDeshabilitado` timestamp NULL DEFAULT NULL, 
  PRIMARY KEY  (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 

INSERT INTO `usuario` (`idUsuario`, `usNombre`, `usPass`, `usMail`)
VALUES (1, 'Juan', 87654321, 'juan@example.com'),
       (2, 'María', 12345678, 'maria@example.com');


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `rol`
-- 

CREATE TABLE `rol` (
  `idRol` bigint(20) NOT NULL,
  `rolDescripcion` varchar(50) NOT NULL,
  PRIMARY KEY  (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `rol`
-- 

INSERT INTO `rol` (`idRol`, `rolDescripcion`)
VALUES (1, 'Administrador'),
       (2, 'Usuario regular');


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuariorol`
-- 

CREATE TABLE `usuariorol` (
  `idUsuario` bigint(20) NOT NULL,
  `idRol` bigint(20) NOT NULL,
  PRIMARY KEY  (`idUsuario`, `idRol`), -- Esta línea puede ser necesaria dependiendo de tu modelo de datos
  FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `usuariorol`
-- 

INSERT INTO `usuariorol` (`idUsuario`, `idRol`)
VALUES (1, 1), -- Asignar al usuario con ID 1 el rol con ID 1 (Administrador)
       (2, 2); -- Asignar al usuario con ID 2 el rol con ID 2 (Usuario regular)



