INSERT INTO `usuario` VALUES (1,'santiago','vilca','san@gmail.com','san','123','989898988',1),
(2,'life','Kaname','santi@gmail.com','san','123','949309464',NULL);

INSERT INTO `sesion` VALUES (1,'07:45:00','1220-12-12','Extra',4),
(2,'08:12:00','1223-11-11','Fufa',4);

INSERT INTO `organizador` VALUES (1,'remilia','filia','re@unsa.pe','rem','123','989898987');

INSERT INTO `invitado` VALUES (1,'Daniel','Ramiro Saavedra','Dani@ude.pe','788899444','Militar'),(2,'Felipe','Felipez','fel@gmail.com','787878945','Bachiller');

INSERT INTO `evento_sesion` VALUES (4,1),(4,2);

INSERT INTO `evento_organizador` VALUES (4,1);

INSERT INTO `evento_invitado` VALUES (4,1),(4,2);

INSERT INTO `evento_documento` VALUES (4,1),(4,2);

INSERT INTO `evento` VALUES (4,'Juila',NULL,'HOlis','bolivia',54);

INSERT INTO `documento` VALUES (1,'FG','Base de Datos',12),(2,'GGH','Gondolas',15),(3,'LLO','Girandinos',12);

INSERT INTO `categoria` VALUES (1,'computo'),(2,'full'),(3,'partial');