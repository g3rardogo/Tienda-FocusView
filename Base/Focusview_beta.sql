CREATE DATABASE IF NOT EXISTS FocusView;
USE FocusView;

CREATE TABLE TipoUsuario(
    id_Tipousuario INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    Nombre_usuario VARCHAR(20),
    Descripcion VARCHAR(1000),
    Estado TINYINT(1) NOT NULL DEFAULT 1 COMMENT '1 es activo 0 es inactivo');

CREATE TABLE Nacionalidad (
    id_nacionalidad INT(1) UNSIGNED NOT NULL AUTO_INCREMENT,
    iso CHAR(2) DEFAULT NULL,
    nombre_nacionalidad VARCHAR(80) DEFAULT NULL,
    PRIMARY KEY (id_nacionalidad)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

   
CREATE TABLE Cliente(
    id_cliente INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(20) NOT NULL,
    Apellido VARCHAR(20) NOT NULL,
    Nombre_usuario VARCHAR(20) NOT NULL,
    Fecha_nacimiento DATE,
    Genero ENUM('M','F','ND') DEFAULT 'ND',
    Correo VARCHAR(100) UNIQUE NOT NULL,
    Clave VARCHAR(30) NOT NULL,
    Codigo_Postal VARCHAR(15) NOT NULL,
    Direccion VARCHAR(200),
    id_Tipousuario INT UNSIGNED,
    FOREIGN KEY (id_Tipousuario) REFERENCES TipoUsuario(id_Tipousuario),
    id_nacionalidad INT UNSIGNED,
    FOREIGN KEY (id_nacionalidad) REFERENCES Nacionalidad(id_nacionalidad));

CREATE TABLE Categoria(
    id_categoria INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    Nombre_categoria VARCHAR(50) NOT NULL,
    Imagen_categoria varchar(50) NOT NULL,
    Descripcion_categoria VARCHAR(200)) NOT NULL;

CREATE TABLE Producto(
    id_producto INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    Nombre_producto VARCHAR(50),
    Descripcion_producto VARCHAR(200),
    Precio_producto decimal(5,2) DEFAULT '0.00' NOT NULL,
    Imagen_producto varchar(50) NOT NULL,
    Estado_producto tinyint(1) NOT NULL DEFAULT '1',
    id_categoria INT UNSIGNED,
    FOREIGN KEY (id_categoria) REFERENCES Categoria(id_categoria));
    
    

CREATE TABLE Compra(
    id_compra INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    Descripcion VARCHAR(1000),
    id_producto INT UNSIGNED,
    Fecha_compra TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_producto) REFERENCES Producto(id_producto),
    id_cliente INT UNSIGNED,
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente));

CREATE TABLE Garantia(
    id_garantia INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    Descripcion VARCHAR(100) NULL,
    Estado TINYINT(1) NOT NULL DEFAULT 1 COMMENT '1 es activo 0 es inactivo',
    id_cliente INT UNSIGNED,
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente),
    id_producto INT UNSIGNED,
    FOREIGN KEY (id_producto) REFERENCES Producto(id_producto));

CREATE TABLE Usuarios(
    id_usuario INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(50) NOT NULL,
    Apellido VARCHAR(50) NOT NULL,
    Nombre_Usuario VARCHAR (20) NOT NULL,
    Correo VARCHAR(100) UNIQUE NOT NULL,
    Clave VARCHAR(100) NOT NULL;

   
CREATE TABLE DetalleVenta(
    id_detalleventa INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    id_compra INT UNSIGNED,
    FOREIGN KEY (id_compra) REFERENCES Compra(id_compra),
    id_producto INT UNSIGNED,
    FOREIGN KEY (id_producto) REFERENCES Producto(id_producto),
    -- Cantidad INT NOT NULL,
    id_garantia INT UNSIGNED,
    FOREIGN KEY (id_garantia) REFERENCES Garantia(id_garantia));

CREATE TABLE Bitacora(
    id_bitacora INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    Usuario VARCHAR(20),
    Fecha DATETIME,
    Accion VARCHAR(50)
);



--insert tipo usuarios
INSERT INTO TipoUsuario(Nombre_usuario, Descripcion) VALUES
    ('Administrador','Tiene acceso a todas las funciones del programa web'),
    ('Cliente','Tiene acceso a todas las funciones del programa web menos la parte privada');
--final insert tipo usuarios


--insert categoria
INSERT INTO Categoria(Nombre_categoria, Descripcion) VALUES
    ('Camaras', 'Camaras de todos los estilos y tipos'),
    ('Accesorios', 'Extensiones de las camaras, para mejorarlas y aumentar su rendimiento y darles nuevos usos');
--final categoria


--Insert de Nacionalidad  
INSERT INTO Nacionalidad VALUES(1, 'AF', 'Afganistán');
INSERT INTO Nacionalidad VALUES(2, 'AX', 'Islas Gland');
INSERT INTO Nacionalidad VALUES(3, 'AL', 'Albania');
INSERT INTO Nacionalidad VALUES(4, 'DE', 'Alemania');
INSERT INTO Nacionalidad VALUES(5, 'AD', 'Andorra');
INSERT INTO Nacionalidad VALUES(6, 'AO', 'Angola');
INSERT INTO Nacionalidad VALUES(7, 'AI', 'Anguilla');
INSERT INTO Nacionalidad VALUES(8, 'AQ', 'Antártida');
INSERT INTO Nacionalidad VALUES(9, 'AG', 'Antigua y Barbuda');
INSERT INTO Nacionalidad VALUES(10, 'AN', 'Antillas Holandesas');
INSERT INTO Nacionalidad VALUES(11, 'SA', 'Arabia Saudí');
INSERT INTO Nacionalidad VALUES(12, 'DZ', 'Argelia');
INSERT INTO Nacionalidad VALUES(13, 'AR', 'Argentina');
INSERT INTO Nacionalidad VALUES(14, 'AM', 'Armenia');
INSERT INTO Nacionalidad VALUES(15, 'AW', 'Aruba');
INSERT INTO Nacionalidad VALUES(16, 'AU', 'Australia');
INSERT INTO Nacionalidad VALUES(17, 'AT', 'Austria');
INSERT INTO Nacionalidad VALUES(18, 'AZ', 'Azerbaiyán');
INSERT INTO Nacionalidad VALUES(19, 'BS', 'Bahamas');
INSERT INTO Nacionalidad VALUES(20, 'BH', 'Bahréin');
INSERT INTO Nacionalidad VALUES(21, 'BD', 'Bangladesh');
INSERT INTO Nacionalidad VALUES(22, 'BB', 'Barbados');
INSERT INTO Nacionalidad VALUES(23, 'BY', 'Bielorrusia');
INSERT INTO Nacionalidad VALUES(24, 'BE', 'Bélgica');
INSERT INTO Nacionalidad VALUES(25, 'BZ', 'Belice');
INSERT INTO Nacionalidad VALUES(26, 'BJ', 'Benin');
INSERT INTO Nacionalidad VALUES(27, 'BM', 'Bermudas');
INSERT INTO Nacionalidad VALUES(28, 'BT', 'Bhután');
INSERT INTO Nacionalidad VALUES(29, 'BO', 'Bolivia');
INSERT INTO Nacionalidad VALUES(30, 'BA', 'Bosnia y Herzegovina');
INSERT INTO Nacionalidad VALUES(31, 'BW', 'Botsuana');
INSERT INTO Nacionalidad VALUES(32, 'BV', 'Isla Bouvet');
INSERT INTO Nacionalidad VALUES(33, 'BR', 'Brasil');
INSERT INTO Nacionalidad VALUES(34, 'BN', 'Brunéi');
INSERT INTO Nacionalidad VALUES(35, 'BG', 'Bulgaria');
INSERT INTO Nacionalidad VALUES(36, 'BF', 'Burkina Faso');
INSERT INTO Nacionalidad VALUES(37, 'BI', 'Burundi');
INSERT INTO Nacionalidad VALUES(38, 'CV', 'Cabo Verde');
INSERT INTO Nacionalidad VALUES(39, 'KY', 'Islas Caimán');
INSERT INTO Nacionalidad VALUES(40, 'KH', 'Camboya');
INSERT INTO Nacionalidad VALUES(41, 'CM', 'Camerún');
INSERT INTO Nacionalidad VALUES(42, 'CA', 'Canadá');
INSERT INTO Nacionalidad VALUES(43, 'CF', 'República Centroafricana');
INSERT INTO Nacionalidad VALUES(44, 'TD', 'Chad');
INSERT INTO Nacionalidad VALUES(45, 'CZ', 'República Checa');
INSERT INTO Nacionalidad VALUES(46, 'CL', 'Chile');
INSERT INTO Nacionalidad VALUES(47, 'CN', 'China');
INSERT INTO Nacionalidad VALUES(48, 'CY', 'Chipre');
INSERT INTO Nacionalidad VALUES(49, 'CX', 'Isla de Navidad');
INSERT INTO Nacionalidad VALUES(50, 'VA', 'Ciudad del Vaticano');
INSERT INTO Nacionalidad VALUES(51, 'CC', 'Islas Cocos');
INSERT INTO Nacionalidad VALUES(52, 'CO', 'Colombia');
INSERT INTO Nacionalidad VALUES(53, 'KM', 'Comoras');
INSERT INTO Nacionalidad VALUES(54, 'CD', 'República Democrática del Congo');
INSERT INTO Nacionalidad VALUES(55, 'CG', 'Congo');
INSERT INTO Nacionalidad VALUES(56, 'CK', 'Islas Cook');
INSERT INTO Nacionalidad VALUES(57, 'KP', 'Corea del Norte');
INSERT INTO Nacionalidad VALUES(58, 'KR', 'Corea del Sur');
INSERT INTO Nacionalidad VALUES(59, 'CI', 'Costa de Marfil');
INSERT INTO Nacionalidad VALUES(60, 'CR', 'Costa Rica');
INSERT INTO Nacionalidad VALUES(61, 'HR', 'Croacia');
INSERT INTO Nacionalidad VALUES(62, 'CU', 'Cuba');
INSERT INTO Nacionalidad VALUES(63, 'DK', 'Dinamarca');
INSERT INTO Nacionalidad VALUES(64, 'DM', 'Dominica');
INSERT INTO Nacionalidad VALUES(65, 'DO', 'República Dominicana');
INSERT INTO Nacionalidad VALUES(66, 'EC', 'Ecuador');
INSERT INTO Nacionalidad VALUES(67, 'EG', 'Egipto');
INSERT INTO Nacionalidad VALUES(68, 'SV', 'El Salvador');
INSERT INTO Nacionalidad VALUES(69, 'AE', 'Emiratos Árabes Unidos');
INSERT INTO Nacionalidad VALUES(70, 'ER', 'Eritrea');
INSERT INTO Nacionalidad VALUES(71, 'SK', 'Eslovaquia');
INSERT INTO Nacionalidad VALUES(72, 'SI', 'Eslovenia');
INSERT INTO Nacionalidad VALUES(73, 'ES', 'España');
INSERT INTO Nacionalidad VALUES(74, 'UM', 'Islas ultramarinas de Estados Unidos');
INSERT INTO Nacionalidad VALUES(75, 'US', 'Estados Unidos');
INSERT INTO Nacionalidad VALUES(76, 'EE', 'Estonia');
INSERT INTO Nacionalidad VALUES(77, 'ET', 'Etiopía');
INSERT INTO Nacionalidad VALUES(78, 'FO', 'Islas Feroe');
INSERT INTO Nacionalidad VALUES(79, 'PH', 'Filipinas');
INSERT INTO Nacionalidad VALUES(80, 'FI', 'Finlandia');
INSERT INTO Nacionalidad VALUES(81, 'FJ', 'Fiyi');
INSERT INTO Nacionalidad VALUES(82, 'FR', 'Francia');
INSERT INTO Nacionalidad VALUES(83, 'GA', 'Gabón');
INSERT INTO Nacionalidad VALUES(84, 'GM', 'Gambia');
INSERT INTO Nacionalidad VALUES(85, 'GE', 'Georgia');
INSERT INTO Nacionalidad VALUES(86, 'GS', 'Islas Georgias del Sur y Sandwich del Sur');
INSERT INTO Nacionalidad VALUES(87, 'GH', 'Ghana');
INSERT INTO Nacionalidad VALUES(88, 'GI', 'Gibraltar');
INSERT INTO Nacionalidad VALUES(89, 'GD', 'Granada');
INSERT INTO Nacionalidad VALUES(90, 'GR', 'Grecia');
INSERT INTO Nacionalidad VALUES(91, 'GL', 'Groenlandia');
INSERT INTO Nacionalidad VALUES(92, 'GP', 'Guadalupe');
INSERT INTO Nacionalidad VALUES(93, 'GU', 'Guam');
INSERT INTO Nacionalidad VALUES(94, 'GT', 'Guatemala');
INSERT INTO Nacionalidad VALUES(95, 'GF', 'Guayana Francesa');
INSERT INTO Nacionalidad VALUES(96, 'GN', 'Guinea');
INSERT INTO Nacionalidad VALUES(97, 'GQ', 'Guinea Ecuatorial');
INSERT INTO Nacionalidad VALUES(98, 'GW', 'Guinea-Bissau');
INSERT INTO Nacionalidad VALUES(99, 'GY', 'Guyana');
INSERT INTO Nacionalidad VALUES(100, 'HT', 'Haití');
INSERT INTO Nacionalidad VALUES(101, 'HM', 'Islas Heard y McDonald');
INSERT INTO Nacionalidad VALUES(102, 'HN', 'Honduras');
INSERT INTO Nacionalidad VALUES(103, 'HK', 'Hong Kong');
INSERT INTO Nacionalidad VALUES(104, 'HU', 'Hungría');
INSERT INTO Nacionalidad VALUES(105, 'IN', 'India');
INSERT INTO Nacionalidad VALUES(106, 'ID', 'Indonesia');
INSERT INTO Nacionalidad VALUES(107, 'IR', 'Irán');
INSERT INTO Nacionalidad VALUES(108, 'IQ', 'Iraq');
INSERT INTO Nacionalidad VALUES(109, 'IE', 'Irlanda');
INSERT INTO Nacionalidad VALUES(110, 'IS', 'Islandia');
INSERT INTO Nacionalidad VALUES(111, 'IL', 'Israel');
INSERT INTO Nacionalidad VALUES(112, 'IT', 'Italia');
INSERT INTO Nacionalidad VALUES(113, 'JM', 'Jamaica');
INSERT INTO Nacionalidad VALUES(114, 'JP', 'Japón');
INSERT INTO Nacionalidad VALUES(115, 'JO', 'Jordania');
INSERT INTO Nacionalidad VALUES(116, 'KZ', 'Kazajstán');
INSERT INTO Nacionalidad VALUES(117, 'KE', 'Kenia');
INSERT INTO Nacionalidad VALUES(118, 'KG', 'Kirguistán');
INSERT INTO Nacionalidad VALUES(119, 'KI', 'Kiribati');
INSERT INTO Nacionalidad VALUES(120, 'KW', 'Kuwait');
INSERT INTO Nacionalidad VALUES(121, 'LA', 'Laos');
INSERT INTO Nacionalidad VALUES(122, 'LS', 'Lesotho');
INSERT INTO Nacionalidad VALUES(123, 'LV', 'Letonia');
INSERT INTO Nacionalidad VALUES(124, 'LB', 'Líbano');
INSERT INTO Nacionalidad VALUES(125, 'LR', 'Liberia');
INSERT INTO Nacionalidad VALUES(126, 'LY', 'Libia');
INSERT INTO Nacionalidad VALUES(127, 'LI', 'Liechtenstein');
INSERT INTO Nacionalidad VALUES(128, 'LT', 'Lituania');
INSERT INTO Nacionalidad VALUES(129, 'LU', 'Luxemburgo');
INSERT INTO Nacionalidad VALUES(130, 'MO', 'Macao');
INSERT INTO Nacionalidad VALUES(131, 'MK', 'ARY Macedonia');
INSERT INTO Nacionalidad VALUES(132, 'MG', 'Madagascar');
INSERT INTO Nacionalidad VALUES(133, 'MY', 'Malasia');
INSERT INTO Nacionalidad VALUES(134, 'MW', 'Malawi');
INSERT INTO Nacionalidad VALUES(135, 'MV', 'Maldivas');
INSERT INTO Nacionalidad VALUES(136, 'ML', 'Malí');
INSERT INTO Nacionalidad VALUES(137, 'MT', 'Malta');
INSERT INTO Nacionalidad VALUES(138, 'FK', 'Islas Malvinas');
INSERT INTO Nacionalidad VALUES(139, 'MP', 'Islas Marianas del Norte');
INSERT INTO Nacionalidad VALUES(140, 'MA', 'Marruecos');
INSERT INTO Nacionalidad VALUES(141, 'MH', 'Islas Marshall');
INSERT INTO Nacionalidad VALUES(142, 'MQ', 'Martinica');
INSERT INTO Nacionalidad VALUES(143, 'MU', 'Mauricio');
INSERT INTO Nacionalidad VALUES(144, 'MR', 'Mauritania');
INSERT INTO Nacionalidad VALUES(145, 'YT', 'Mayotte');
INSERT INTO Nacionalidad VALUES(146, 'MX', 'México');
INSERT INTO Nacionalidad VALUES(147, 'FM', 'Micronesia');
INSERT INTO Nacionalidad VALUES(148, 'MD', 'Moldavia');
INSERT INTO Nacionalidad VALUES(149, 'MC', 'Mónaco');
INSERT INTO Nacionalidad VALUES(150, 'MN', 'Mongolia');
INSERT INTO Nacionalidad VALUES(151, 'MS', 'Montserrat');
INSERT INTO Nacionalidad VALUES(152, 'MZ', 'Mozambique');
INSERT INTO Nacionalidad VALUES(153, 'MM', 'Myanmar');
INSERT INTO Nacionalidad VALUES(154, 'NA', 'Namibia');
INSERT INTO Nacionalidad VALUES(155, 'NR', 'Nauru');
INSERT INTO Nacionalidad VALUES(156, 'NP', 'Nepal');
INSERT INTO Nacionalidad VALUES(157, 'NI', 'Nicaragua');
INSERT INTO Nacionalidad VALUES(158, 'NE', 'Níger');
INSERT INTO Nacionalidad VALUES(159, 'NG', 'Nigeria');
INSERT INTO Nacionalidad VALUES(160, 'NU', 'Niue');
INSERT INTO Nacionalidad VALUES(161, 'NF', 'Isla Norfolk');
INSERT INTO Nacionalidad VALUES(162, 'NO', 'Noruega');
INSERT INTO Nacionalidad VALUES(163, 'NC', 'Nueva Caledonia');
INSERT INTO Nacionalidad VALUES(164, 'NZ', 'Nueva Zelanda');
INSERT INTO Nacionalidad VALUES(165, 'OM', 'Omán');
INSERT INTO Nacionalidad VALUES(166, 'NL', 'Países Bajos');
INSERT INTO Nacionalidad VALUES(167, 'PK', 'Pakistán');
INSERT INTO Nacionalidad VALUES(168, 'PW', 'Palau');
INSERT INTO Nacionalidad VALUES(169, 'PS', 'Palestina');
INSERT INTO Nacionalidad VALUES(170, 'PA', 'Panamá');
INSERT INTO Nacionalidad VALUES(171, 'PG', 'Papúa Nueva Guinea');
INSERT INTO Nacionalidad VALUES(172, 'PY', 'Paraguay');
INSERT INTO Nacionalidad VALUES(173, 'PE', 'Perú');
INSERT INTO Nacionalidad VALUES(174, 'PN', 'Islas Pitcairn');
INSERT INTO Nacionalidad VALUES(175, 'PF', 'Polinesia Francesa');
INSERT INTO Nacionalidad VALUES(176, 'PL', 'Polonia');
INSERT INTO Nacionalidad VALUES(177, 'PT', 'Portugal');
INSERT INTO Nacionalidad VALUES(178, 'PR', 'Puerto Rico');
INSERT INTO Nacionalidad VALUES(179, 'QA', 'Qatar');
INSERT INTO Nacionalidad VALUES(180, 'GB', 'Reino Unido');
INSERT INTO Nacionalidad VALUES(181, 'RE', 'Reunión');
INSERT INTO Nacionalidad VALUES(182, 'RW', 'Ruanda');
INSERT INTO Nacionalidad VALUES(183, 'RO', 'Rumania');
INSERT INTO Nacionalidad VALUES(184, 'RU', 'Rusia');
INSERT INTO Nacionalidad VALUES(185, 'EH', 'Sahara Occidental');
INSERT INTO Nacionalidad VALUES(186, 'SB', 'Islas Salomón');
INSERT INTO Nacionalidad VALUES(187, 'WS', 'Samoa');
INSERT INTO Nacionalidad VALUES(188, 'AS', 'Samoa Americana');
INSERT INTO Nacionalidad VALUES(189, 'KN', 'San Cristóbal y Nevis');
INSERT INTO Nacionalidad VALUES(190, 'SM', 'San Marino');
INSERT INTO Nacionalidad VALUES(191, 'PM', 'San Pedro y Miquelón');
INSERT INTO Nacionalidad VALUES(192, 'VC', 'San Vicente y las Granadinas');
INSERT INTO Nacionalidad VALUES(193, 'SH', 'Santa Helena');
INSERT INTO Nacionalidad VALUES(194, 'LC', 'Santa Lucía');
INSERT INTO Nacionalidad VALUES(195, 'ST', 'Santo Tomé y Príncipe');
INSERT INTO Nacionalidad VALUES(196, 'SN', 'Senegal');
INSERT INTO Nacionalidad VALUES(197, 'CS', 'Serbia y Montenegro');
INSERT INTO Nacionalidad VALUES(198, 'SC', 'Seychelles');
INSERT INTO Nacionalidad VALUES(199, 'SL', 'Sierra Leona');
INSERT INTO Nacionalidad VALUES(200, 'SG', 'Singapur');
INSERT INTO Nacionalidad VALUES(201, 'SY', 'Siria');
INSERT INTO Nacionalidad VALUES(202, 'SO', 'Somalia');
INSERT INTO Nacionalidad VALUES(203, 'LK', 'Sri Lanka');
INSERT INTO Nacionalidad VALUES(204, 'SZ', 'Suazilandia');
INSERT INTO Nacionalidad VALUES(205, 'ZA', 'Sudáfrica');
INSERT INTO Nacionalidad VALUES(206, 'SD', 'Sudán');
INSERT INTO Nacionalidad VALUES(207, 'SE', 'Suecia');
INSERT INTO Nacionalidad VALUES(208, 'CH', 'Suiza');
INSERT INTO Nacionalidad VALUES(209, 'SR', 'Surinam');
INSERT INTO Nacionalidad VALUES(210, 'SJ', 'Svalbard y Jan Mayen');
INSERT INTO Nacionalidad VALUES(211, 'TH', 'Tailandia');
INSERT INTO Nacionalidad VALUES(212, 'TW', 'Taiwán');
INSERT INTO Nacionalidad VALUES(213, 'TZ', 'Tanzania');
INSERT INTO Nacionalidad VALUES(214, 'TJ', 'Tayikistán');
INSERT INTO Nacionalidad VALUES(215, 'IO', 'Territorio Británico del Océano Índico');
INSERT INTO Nacionalidad VALUES(216, 'TF', 'Territorios Australes Franceses');
INSERT INTO Nacionalidad VALUES(217, 'TL', 'Timor Oriental');
INSERT INTO Nacionalidad VALUES(218, 'TG', 'Togo');
INSERT INTO Nacionalidad VALUES(219, 'TK', 'Tokelau');
INSERT INTO Nacionalidad VALUES(220, 'TO', 'Tonga');
INSERT INTO Nacionalidad VALUES(221, 'TT', 'Trinidad y Tobago');
INSERT INTO Nacionalidad VALUES(222, 'TN', 'Túnez');
INSERT INTO Nacionalidad VALUES(223, 'TC', 'Islas Turcas y Caicos');
INSERT INTO Nacionalidad VALUES(224, 'TM', 'Turkmenistán');
INSERT INTO Nacionalidad VALUES(225, 'TR', 'Turquía');
INSERT INTO Nacionalidad VALUES(226, 'TV', 'Tuvalu');
INSERT INTO Nacionalidad VALUES(227, 'UA', 'Ucrania');
INSERT INTO Nacionalidad VALUES(228, 'UG', 'Uganda');
INSERT INTO Nacionalidad VALUES(229, 'UY', 'Uruguay');
INSERT INTO Nacionalidad VALUES(230, 'UZ', 'Uzbekistán');
INSERT INTO Nacionalidad VALUES(231, 'VU', 'Vanuatu');
INSERT INTO Nacionalidad VALUES(232, 'VE', 'Venezuela');
INSERT INTO Nacionalidad VALUES(233, 'VN', 'Vietnam');
INSERT INTO Nacionalidad VALUES(234, 'VG', 'Islas Vírgenes Británicas');
INSERT INTO Nacionalidad VALUES(235, 'VI', 'Islas Vírgenes de los Estados Unidos');
INSERT INTO Nacionalidad VALUES(236, 'WF', 'Wallis y Futuna');
INSERT INTO Nacionalidad VALUES(237, 'YE', 'Yemen');
INSERT INTO Nacionalidad VALUES(238, 'DJ', 'Yibuti');
INSERT INTO Nacionalidad VALUES(239, 'ZM', 'Zambia');
INSERT INTO Nacionalidad VALUES(240, 'ZW', 'Zimbabue');
-- fin de los insert masivos nacionalidad

--insert clientes
INSERT INTO Cliente(Nombre,Apellido,Nombre_usuario,Fecha_nacimiento,Genero,Correo,
 Clave, Codigo_Postal, Direccion, id_Tipousuario, id_nacionalidad) VALUES
      ('Josue', 'Avalos', 'aezeq', '2000-09-14', 'M', 'aezequiel14@hotmail.com','123','503',
        'Col. San S, Pje 2, block B, Casa #33',2,68),
      ('Carlos', 'Quijano','Carlox' , '2001-06-29', 'M', 'carlo@hotmail.com','123','503',
        'Col. San S, Pje 2, block B, Casa #33',2,68),
      ('Jason', 'Lowe','Lowe2' , '1997-09-12', 'M', 'Jason@hotmail.com','123','111',
        'Col. San S, Pje 2, block B, Casa #33',2,27),
      ('Brenden', 'Gibson', 'Brinfx', '1990-05-22', 'F', 'Brenden@hotmail.com','123','12',
        'Col. San S, Pje 2, block B, Casa #33',2,30),
      ('Aniyah', 'Koepp','Jysus', '1997-09-12', 'F', 'Aniyah@hotmail.com','123','75',
        'Col. San S, Pje 2, block B, Casa #33',2,7);   
--final insert clientes


--insert usuarios
INSERT INTO Usuarios(Nombre, Apellido, Genero, Correo, Clave, id_Tipousuario) VALUES
    ('Ocie', 'Abernathy', 'M', 'Ocie@gmail.com', '123', 1),
    ('Fannie', 'Renner', 'F', 'Fannie@gmail.com', '123', 1),
    ('Antoinette', 'Runolfsson', 'M', 'Antoi@gmail.com', '123', 1),
    ('Remington', 'Armstrong', 'M', 'Remi@gmail.com', '123', 1),
    ('Breanne', 'Ernser', 'F', 'Breanne@gmail.com', '123', 1);
--final insert usuarios


--insert productos
INSERT INTO Producto(Nombre_producto, Descripcion, Precio, Cantidad, id_categoria) VALUES
    ('FocusView Mercury', 'Camara mercury especial para los deportes extremos con resistencia a todo tipo de climas.',
      '100.50', 50, 1),
    ('FocusView Pro', 'Camara de alta calidad que graba a 4k con resistencia al agua y al polvo.',
      '200.00', 100, 1),
    ('FocusView XPro', 'Camara especializada al agua, sumergible hasta 30 metros de profundidad.',
      '250.50', 100, 1),
    ('Kit de aventura', 'Aprovecha una suculenta oferta ideal para hacerte selfies, fotos de grupo y mucho más mientras exploras.',
      '60.35', 50, 2),
    ('Kit de viaje', 'Equípate con soportes imprescindibles para capturar contenido inmersivo en primera persona y cámara en mano.',
      '45.00', 50, 2),
    ('Kit de deporte', 'Hazte con dos de nuestros soportes más populares para capturar contenido sin manos y montando la cámara en tu equipo.',
      '85.00', 50, 2),
    ('Estuche Compacto', 'Este estuche ligero y portátil tiene espacio para tu cámara, soportes y accesorios, pero es lo suficientemente compacto como para llevarlo contigo o en una mochila.',
      '10.00', 150, 2),
    ('Soporte para manubrio', 'Un soporte compacto de aluminio que permite opciones de captura de 360°.',
      '25.50', 500, 2),
    ('Soporte frontal y lateral para casco', 'Sujeta tu FocusView Pro a la parte frontal o lateral de los cascos.',
      '45.00', 70, 2),
    ('SanDisk Ultra', 'SanDisk Ultra tarjeta de memoria de 128GB, para que guardes todos tus videos',
      '21.40', 80, 2);
--final insert productos

--insert compras
INSERT INTO Compra(Descripcion, id_producto, id_cliente) VALUES
    ('FocusView Mercury', 1, 1),
    ('FocusView Pro', 2, 2),
    ('FocusView XPro', 3, 3),
    ('Kit de aventura', 4, 4),
    ('Kit de viaje', 5, 5),
    ('Kit de deporte', 6, 1),
    ('Estuche compacto', 7, 2),
    ('Soporte para manubrio', 8, 3),
    ('Soporte frontal y lateral para casco', 9, 4),
    ('SanDisk de 128gb', 10, 5),
    ('FocusView Mercury', 1, 1),
    ('FocusView Pro', 2, 2),
    ('FocusView XPro', 3, 3),
    ('Kit de aventura', 4, 4),
    ('Kit de viaje', 5, 5);
--final insert compras


--insert garantia
    INSERT INTO Garantia(id_cliente, id_producto) VALUES
    (1,1), (1,6), (2,2), (2,7),
    (3,3), (3,8), (4,4), (4,9),
    (5,5), (5,10);
--final insert garantia


--insert detalle de venta
    INSERT INTO DetalleVenta(id_compra, id_producto, id_garantia) VALUES
    (1,1,1), (6,6,2), (11,1,1), (2,2,2),
    (7,7,4), (12,2,2), (3,3,5), (8,8,6),
    (13,3,5), (4,4,7), (9,9,8), (14,4,7),
    (5,5,8), (10,10,9), (15,5,8);
--final insert detalle de venta


--TRIGGER INSERT
CREATE TRIGGER Llenar_bitacora AFTER INSERT ON Producto
FOR EACH ROW
INSERT INTO Bitacora(Usuario, Fecha, Accion) Values ('Josue', now(), 'Agrego un producto');
--FINAL TRIGGER INSERT

--TRIGGER UPDATE
CREATE TRIGGER Llenar_bitacora1 AFTER UPDATE ON Producto
FOR EACH ROW
INSERT INTO Bitacora(Usuario, Fecha, Accion) Values ('Josue', now(), 'Modifico un producto');
--FINAL TRIGGER UPDATE

--Procedure
DELIMITER $$
CREATE PROCEDURE `Productos` (IN `id_producto` INT UNSIGNED, IN `Nombre_producto` VARCHAR(20), IN `Descripcion` VARCHAR(1000),
IN `Precio` DOUBLE(6,2), IN `Cantidad` INT, IN `id_categoria` INT)
BEGIN
INSERT INTO Producto(id_producto, Nombre_producto, Descripcion, Precio, Cantidad, id_categoria)
VALUES (id_producto, Nombre_producto, Descripcion, Precio, Cantidad, id_categoria);
END$$
DELIMITER ;
--Procedure

--Procedure
DELIMITER $$
CREATE PROCEDURE `Detalleventa` (IN `id_detalleventa` INT UNSIGNED, IN `id_compra` INT, IN `id_producto` INT,
IN `id_garantia` INT)
BEGIN
INSERT INTO DetalleVenta(id_detalleventa, id_compra, id_producto, id_garantia)
VALUES (id_detalleventa, id_compra, id_producto, id_garantia);
END$$
DELIMITER ;
--Procedure

/* --Update tipo usuarios
UPDATE TipoUsuario SET Nombre_usuario = `ADMIN` where id_Tipousuario = 1;
UPDATE TipoUsuario SET Estado = 0 where id_Tipousuario = 1;
--Update tipo usuarios

--Update categoria
UPDATE Categoria SET Nombre_categoria = 'KItS' where id_categoria = 2;
--Update tipo usuarios

--Update Nacionalidad
UPDATE Nacionalidad SET nombre_nacionalidad = 'Canadar' where id_nacionalidad = 42;
--Update nacionalidad 

--Update cliente
UPDATE Cliente SET Nombre = 'Sebastian' where id_cliente = 2;
--Update cliente

--Update compra
UPDATE Compra SET Descripcion = 'KItS' where id_compra = 2;
--Update Compra

--Update GARANTIA
UPDATE Garantia SET Estado = 0 where id_garantia = 1;
--Update GARANTIA

--Update detalle de venta
UPDATE DetalleVenta SET id_producto = 7 where id_detalleventa = 3;
--Update detalle de venta

--Update Producto
UPDATE Producto SET Nombre_producto = 'USB' where id_producto = 10;
--Update Producto

--Update Usuario
UPDATE Usuarios SET Nombre = 'Ronaldo' where id_usuario = 3;
--Update usuario

--Delete no se usa, pero es un ejemplo de como se haria, solo se maneja como activo o inactivo
DELETE FROM TipoUsuario WHERE id_Tipousuario = 1; 
--Delete no se usa, pero es un ejemplo de como se haria, solo se maneja como activo o inactivo

--Delete no se usa, pero es un ejemplo de como se haria.
DELETE FROM Categoria WHERE id_categoria = 2; 
--Delete no se usa, pero es un ejemplo de como se haria.


--Delete no se usa, pero es un ejemplo de como se haria.
DELETE FROM Nacionalidad WHERE id_nacionalidad = 42; 
--Delete no se usa, pero es un ejemplo de como se haria.


--Delete no se usa, pero es un ejemplo de como se haria.
DELETE FROM Cliente WHERE id_cliente = 2; 
--Delete no se usa, pero es un ejemplo de como se haria.


--Delete no se usa, pero es un ejemplo de como se haria.
DELETE FROM usuarios WHERE id_usuario = 3; 
--Delete no se usa, pero es un ejemplo de como se haria.


--Delete no se usa, pero es un ejemplo de como se haria.
DELETE FROM Producto WHERE id_producto = 10; 
--Delete no se usa, pero es un ejemplo de como se haria.


--Delete no se usa, pero es un ejemplo de como se haria.
DELETE FROM Compra WHERE id_compra = 2; 
--Delete no se usa, pero es un ejemplo de como se haria.


--Delete no se usa, pero es un ejemplo de como se haria.
DELETE FROM Garantia WHERE id_garantia = 1; 
--Delete no se usa, pero es un ejemplo de como se haria.


--Delete detalle de venta
DELETE FROM DetalleVenta WHERE id_detalleventa = 15;  */
--Delete detalle de venta

--Consultas multitabla
SELECT d.id_detalle, Descripcion, Cantidad_pedido
FROM DetalleVenta d, Producto p
where d.id_producto = p.id_producto order by id_detalle;

SELECT Cliente.Nombre, Cliente.Nombre_usuario, Nacionalidad.nombre_nacionalidad
FROM Cliente
INNER JOIN Nacionalidad ON Cliente.id_nacionalidad = Nacionalidad.id_nacionalidad;

SELECT Producto.Nombre_producto, Producto.Precio, Producto.Cantidad, Categoria.Nombre_categoria
FROM Producto
INNER JOIN Categoria ON Producto.id_categoria = Categoria.id_categoria;
--Consultas multitabla  

--Selects
SELECT * FROM TipoUsuario;
SELECT * FROM Usuario;
SELECT * FROM Nacionalidad;
SELECT * FROM Cliente;
SELECT * FROM Categoria;
SELECT * FROM Producto;
SELECT * FROM Compra;
SELECT * FROM Garantia;
SELECT * FROM Bitacora;
SELECT * FROM Usuarios;
SELECT * FROM DetalleVenta;
--Final selects