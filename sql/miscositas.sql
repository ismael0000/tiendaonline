DROP  DATABASE IF EXISTS miscositas;
CREATE DATABASE miscositas;
USE miscositas;

CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Categorias disponibles' AUTO_INCREMENT=1 ;

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'Categoria1'),
(2, 'Categoria2'),
(3, 'Categoria3'),
(4, 'Categoria4'),
(5, 'Categoria5');

CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `productPrice` DECIMAL(5,2) NOT NULL,
  `productDetails` text COLLATE utf8_spanish2_ci NOT NULL,
  `productManual` text COLLATE utf8_spanish2_ci NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productImage` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`productID`),
  FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Product' AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `users` (
  `userUsuario` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `userName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `userApellidos` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `userDireccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `userCP` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `userTelefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `userLocalidad` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `userProvincia` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `userEmail` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `userPassword` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `userRol` varchar(200) COLLATE utf8_spanish2_ci DEFAULT 'cliente',
  PRIMARY KEY (`userUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Usuarios' AUTO_INCREMENT=1 ;

INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1001, 'batman', 19.95, 'Altura: 20cm', 'Figura Batman con capa.',  1, 'tipo1');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1002, 'buzz', 21.95, 'Altura: 20cm', 'Figura Buzz lightyear de la película Toy Story.',  1, 'tipo2');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1003, 'jessie', 19.95, 'Altura: 20cm', 'Figura Jessie de la película Toy Story con sombrero incluido.',  1, 'tipo3');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1004, ' payaso', 21.95, 'Altura: 20cm', 'Payaso multicolor con pelo encrespado. Sombrero incluido.',  1, 'tipo4');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1005, ' campanilla', 19.95, 'Altura: 20cm', 'Figura Campanilla de la película y dibujos "Peter Pan" de Walt Disney',  1, 'tipo5');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(2001, ' novios', 44.95, 'Altura: 25cm', 'Pareja de novios, él con perilla y traje negro con chaleco gris y ella con pelo negro largo ondulado, vetido blanco liso y cinturón negro con ramito de flores blancas.',  2, 'personalizada2');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(2002, ' Iniesta', 23.95, 'Altura: 20cm', 'Jugador Iniesta con equipación del Barça',  2, 'personalizada1');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(3001, ' kit1', 14.95, '1 bola 70mm, 1 bola de 50mm, 4 bolas de 30mm, base de madera fina, 2 planchas de goma eva estampada color blanco con lunares negros 16cm X 34cm, 1 plancha de goma eva color carne de 16cm X 34cm, 1 plancha de goma eva de color negro para el pelo de 16cm X 34cm, 2 palitos para las piernas, un stencil para dibujar los ojos y cola para pegar los materiales. ', 'En este kit encontrarás todo lo necesario para montar una figurita de pelo moreno largo, con un vestido blanco de topos negros.',  3, 'kit1');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(3002, ' kit2', 15.95, '1 bola 70mm, 1 bola de 50mm, 4 bolas de 30mm, base de madera fina, 1 plancha de goma eva color blanco 16cm X 34cm,1 plancha de goma eva color carne de 16cm X 34cm, 1 plancha de goma eva de color negro de 16cm X 34cm, 1 plancha de goma eva de color rosa de 16cm X 34cm, 2 palitos para las piernas, un stencil para dibujar los ojos y cola para pegar los materiales. ', 'En este kit encontrarás todo lo necesario para montar una figurita Draculaura de la colección Monster High',  3, 'kit2');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(3003, ' kit3', 15.95, '1 bola 70mm, 1 bola de 50mm, 4 bolas de 30mm, base de madera fina, 1 plancha de goma eva color rojo 16cm X 34cm, 1 plancha de goma eva color amarillo 15cm X 22cm,1 plancha de goma eva color azul 15cm X 22cm,1 plancha de goma eva color negro 15cm X 22cm, 1 plancha de goma eva color carne 16cm X 34cm, y cola para pegar los materiales. Balón no incluído', 'En este kit encontrarás todo lo necesario para montar una figura de un jugador de fútbol de la selección española.',  3, 'kit3');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(3004, ' kit5', 13.65, '1 bola 70mm, 1 bola de 50mm, 4 bolas de 30mm, base de madera fina, 1 plancha de goma eva colores estampados  rayas rojo 15cm X 22cm, 1 plancha de goma eva de color amarillo 15cm X 22cm, 1 plancha de goma eva color carne 16cm X 34cm, 1 plancha de goma eva color azul 15cm X 22cm, 1 plancha de goma eva color verde 15cm X 22cm, 1 plancha de goma eva color amarillo 15cm X 22cm, 1 pote de acuarela blanco, un pote de acuarela rojo y cola para pegar los materiales.', 'En este kit encontrarás todo lo necesario para montar una figura de un payaso lleno de colores',  3, 'kit5');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(10001, ' estampado1', 2.95, 'Tamaño: 16 X 34 cm', 'Plancha de goma eva estampada blanca con puntitos de color lila.',  10, 'estampado1');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(10002, ' estampado2', 2.95, 'Tamaño: 16 X 34 cm', 'Plancha de goma eva estampada blanca con corazones.',  10, 'estampado2');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(10003, ' estampado3', 2.95, 'Tamaño: 16 X 34 cm', 'Plancha de goma eva estampada blanca con flores variadas.',  10, 'estampado3');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(10004, ' estampado4', 2.95, 'Tamaño: 16 X 34 cm', 'Plancha de goma eva estampada blanca con mariquitas.',  10, 'estampado4');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1201, ' cola', 4.95, 'Peso neto: 20gr', 'Cola para pegar material relacionado con la goma eva.',  12, 'cola');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1202, ' pistola', 14.95, 'Material: plástico. ', 'Pistola de silicona del tamaño ideal para las manualidades con goma eva.',  12, 'pistola');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1203, ' silicona', 3.95, 'Número barritas: 5', 'Barritas de silicona para la carga de pistola de silicona.',  12, 'silicona');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1204, ' tijeras1', 2.95, 'Forma del corte: zig-zag', 'Tijeras para hacer cortes especiales de diferentes formas en la goma eva.',  12, 'tijeras1');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1205, ' stencil1', 1.95, 'Material: plástico', 'Molde para dibujar diferentes tipos de ojos para las figuras de goma eva.',  12, 'stencil1');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1206, ' stencil2', 1.95, 'Material: plástico', 'Molde para dibujar diferentes tipos de ojos para las figuras de goma eva.',  12, 'stencil2');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1301, ' ojos1', 0.95, 'Material: plástico', 'Ojos móviles para las figuras de goma eva.',  13, 'ojos1');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1302, ' ojos2', 0.95, 'Material: plástico', 'Ojos móviles para las figuras de goma eva.',  13, 'ojos2');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1303, ' palillos', 1.95, 'Cantidad: 15', 'Palillos de madera que se utilizan para hacer figuras de goma eva.',  13, 'palillos');
INSERT INTO `product` (`productID`, `productName`, `productPrice`, `productDetails`, `productManual`, `categoryID`, `productImage`) VALUES
(1304, ' pompones', 1.95, 'Material de tejido textil', 'Pompones de adorno para decorar las figuras de goma eva.',  13, 'pompones');

CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` DECIMAL(5,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` DECIMAL(5,2) NOT NULL,
  `userUsuario` varchar(200)  COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`orderId`, `name`),
  FOREIGN KEY (`userUsuario`) REFERENCES `users` (`userUsuario`),
  FOREIGN KEY (`productId`) REFERENCES `product` (`productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8  COMMENT='Carrito';









