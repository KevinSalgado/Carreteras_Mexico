use carreteras;

INSERT INTO categorias (Nombre) VALUES
    ('Locales'),
    ('Comerciales'),
    ('Regionales'),
    ('Nacionales'),
    ('Autovias'),
    ('Interurbanas'),
    ('Autopistas'),
    ('Locales Secundarias'),
    ('Nacionales Principales'),
    ('Carreteras Costeras'),
    ('Autopistas de Peaje'),
    ('Carreteras Escénicas'),
    ('Vías Expresas'),
    ('Carreteras Urbanas'),
    ('Caminos Rurales'),
    ('Carreteras de Montaña'),
    ('Autovías Metropolitanas'),
    ('Rutas Turísticas'),
    ('Caminos Históricos'),
    ('Vías de Conexión Internacional'),
    ('Carreteras de la Costa'),
    ('Autopistas Subterráneas'),
    ('Rutas Panorámicas'),
    ('Vías Históricas'),
    ('Carreteras Marítimas'),
    ('Caminos Verdes'),
    ('Rutas Gastronómicas'),
    ('Vías de Aventura'),
    ('Carreteras del Patrimonio'),
    ('Autovías Ecológicas'),
    ('Rutas del Vino'),
    ('Caminos Románticos'),
    ('Vías de Innovación Tecnológica'),
    ('Carreteras Culturales'),
    ('Autopistas Deportivas'),
    ('Rutas Literarias'),
    ('Vías de Energía Renovable'),
    ('Carreteras Arqueológicas'),
    ('Autovías de la Ciencia'),
    ('Rutas del Arte'),
    ('Caminos de la Biodiversidad'),
    ('Vías Solidarias'),
    ('Carreteras de la Imaginación'),
    ('Autopistas del Futuro'),
    ('Rutas de la Diversidad'),
    ('Vías de la Música'),
    ('Carreteras Zen'),
    ('Autovías del Espacio'),
    ('Rutas del Conocimiento');

    
INSERT INTO carreteras (Nombre, Kilometros, Categoria_id, Carretera_Anterior, Carretera_Posterior) VALUES
    ('Carretera A', 100.5, 1, null, null),  -- Carretera A no tiene anterior, posterior es Carretera B
    ('Carretera B', 150.2, 2, 1, null),  -- Anterior es Carretera A, posterior es Carretera C
    ('Carretera C', 80.8, 3, 2, 1),   -- Anterior es Carretera B, no tiene posterior
    ('Carretera D', 120.0, 4, 3, null),  -- Anterior es Carretera C, no tiene posterior
    ('Carretera E', 200.5, 5, null, 3),  -- No tiene anterior, posterior es Carretera C
    ('Carretera F', 80.3, 1, null, 2),  
    ('Carretera G', 90.7, 2, 1, 3),    
    ('Carretera H', 110.5, 3, 2, 4),  
    ('Carretera I', 75.2, 4, 3, null),  
    ('Carretera J', 180.8, 5, null, 4),
    ('Carretera K', 120.8, 1, null, 2),   
    ('Carretera L', 95.4, 2, 1, 3),      
    ('Carretera M', 85.0, 3, 2, 4),     
    ('Carretera N', 110.2, 4, 3, null), 
    ('Carretera O', 200.0, 5, null, 4),
    ('Carretera P', 150.3, 1, null, 2),
    ('Carretera Q', 80.6, 2, 1, 3),
    ('Carretera R', 110.9, 3, 2, 4),
    ('Carretera S', 95.2, 4, 3, 5),
    ('Carretera T', 200.5, 5, null, 4),
    ('Carretera U', 120.8, 1, null, 2),
    ('Carretera V', 95.4, 2, 6, 3),
    ('Carretera W', 85.0, 3, 7, 4),
    ('Carretera X', 110.2, 4, 8, null),
    ('Carretera Y', 180.7, 5, null, 9),
    ('Carretera Z', 130.1, 1, null, 10),
    ('Carretera Alpha', 120.5, 23, null, 2),
    ('Carretera Beta', 80.2, 15, 1, 3),
    ('Carretera Gamma', 110.8, 30, 2, 4),
    ('Carretera Delta', 95.6, 12, 3, 5),
    ('Carretera Epsilon', 200.3, 5, null, 4),
    ('Carretera Zeta', 120.0, 38, null, 2),
    ('Carretera Eta', 85.7, 29, 6, 3),
    ('Carretera Theta', 110.1, 20, 7, 4),
    ('Carretera Iota', 100.9, 35, 8, 5),
    ('Carretera Kappa', 180.4, 14, null, 9),
    ('Carretera Lambda', 130.7, 25, 10, null),
    ('Carretera Mu', 95.0, 18, 11, null),
    ('Carretera Nu', 105.3, 32, 12, 13),
    ('Carretera Xi', 75.8, 9, 14, null),
    ('Carretera Omicron', 150.6, 21, 15, 16),
    ('Carretera Pi', 120.2, 37, 17, null),
    ('Carretera Rho', 90.5, 28, 18, 19),
    ('Carretera Sigma', 110.4, 16, 20, 21),
    ('Carretera Tau', 85.1, 33, 22, 23),
    ('Carretera Upsilon', 200.8, 8, null, 22),
    ('Carretera Phi', 120.9, 24, null, 2),
    ('Carretera Chi', 85.2, 13, 21, 3),
    ('Carretera Psi', 110.0, 19, 12, 4),
    ('Carretera Omega', 95.3, 34, 10, 5),
    ('Carretera Aleph', 180.6, 39, null, 2),
    ('Carretera Beth', 130.5, 40, 26, 3),
    ('Carretera Gimel', 95.9, 27, 27, 4),
    ('Carretera Daleth', 105.1, 36, 28, 5),
    ('Carretera He', 150.4, 31, 29, 30),
    ('Carretera Vau', 120.1, 17, 31, null),
    ('Carretera Zain', 90.6, 26, 32, 33),
    ('Carretera Cheth', 110.3, 22, 34, 35),
    ('Carretera Teth', 85.4, 11, 36, 37),
    ('Carretera Yod', 200.1, 7, null, 36),
    ('Carretera Kaph', 120.7, 1, null, 2),
    ('Carretera Lamed', 85.3, 5, 39, 3),
    ('Carretera Mem', 110.6, 40, 2, 4),
    ('Carretera Nun', 95.7, 3, 4, 5),
    ('Carretera Samekh', 180.2, 10, null, 6),
    ('Carretera Ayin', 130.9, 2, 10, null),
    ('Carretera Pe', 95.5, 4, 11, null),
    ('Carretera Tsade', 105.8, 6, 12, 13),
    ('Carretera Qoph', 75.7, 26, 14, null),
    ('Carretera Resh', 150.2, 9, 15, 16),
    ('Carretera Shin', 120.3, 36, 17, null),
    ('Carretera Tav', 90.8, 14, 18, 19),
    ('Carretera Aleph-Bet', 110.7, 23, 20, 21),
    ('Carretera Gimel-Daleth', 85.0, 30, 22, 23),
    ('Carretera Kaph-Lamed', 200.4, 16, null, 22);


    
INSERT INTO tramos (Nombre, Pos_Inicio, Pos_Final, Tramo_Anterior, Tramo_Posterior, Kilometros, Carretera_id) VALUES
    ('Tramo 1', 0.0, 50.0, NULL, NULL, 50.0, 1),   -- No tiene tramo anterior, posterior es Tramo 2
    ('Tramo 2', 50.0, 100.0, 1, NULL, 50.0, 1),    -- Tramo anterior es Tramo 1, posterior es Tramo 3
    ('Tramo 3', 100.0, 150.0, 2, 1, 50.0, 1), -- Tramo anterior es Tramo 2, no tiene tramo posterior
    ('Tramo 4', 150.0, 180.0, 3, null, 30.0, 3),  -- Tramo anterior es Tramo 3, no tiene posterior
    ('Tramo 5', 180.0, 200.0, 4, null, 20.0, 3),  -- Tramo anterior es Tramo 4, no tiene posterior
    ('Tramo 1A', 0.0, 40.0, NULL, NULL, 40.0, 1),
    ('Tramo 1B', 40.0, 80.0, 1, NULL, 40.0, 1),
    ('Tramo 1C', 80.0, 120.0, 2, NULL, 40.0, 1),
    ('Tramo 2A', 0.0, 30.0, NULL, NULL, 30.0, 2),
    ('Tramo 2B', 30.0, 60.0, 4, NULL, 30.0, 2),
    ('Tramo 2C', 60.0, 100.0, 5, NULL, 40.0, 2),
    ('Tramo 3A', 0.0, 20.0, NULL, NULL, 20.0, 3),
    ('Tramo 3B', 20.0, 50.0, 7, NULL, 30.0, 3),
    ('Tramo 3C', 50.0, 80.0, 8, NULL, 30.0, 3),
    ('Tramo 4A', 0.0, 30.0, NULL, NULL, 30.0, 4),
    ('Tramo 4B', 30.0, 60.0, 10, NULL, 30.0, 4),
    ('Tramo 4C', 60.0, 90.0, 11, NULL, 30.0, 4),
    ('Tramo 5A', 0.0, 20.0, NULL, NULL, 20.0, 5),
    ('Tramo 5B', 20.0, 40.0, 13, NULL, 20.0, 5),
    ('Tramo 5C', 40.0, 60.0, 14, NULL, 20.0, 5),
    ('Tramo 5D', 60.0, 80.0, 15, NULL, 20.0, 5),
    ('Tramo 6A', 0.0, 25.0, NULL, NULL, 25.0, 6),
    ('Tramo 6B', 25.0, 55.0, 17, NULL, 30.0, 6),
    ('Tramo 6C', 55.0, 80.0, 18, NULL, 25.0, 6),
    ('Tramo 7A', 0.0, 15.0, NULL, NULL, 15.0, 7),
    ('Tramo 7B', 15.0, 35.0, 20, NULL, 20.0, 7),
    ('Tramo 7C', 35.0, 60.0, 21, NULL, 25.0, 7),
    ('Tramo 8A', 0.0, 30.0, NULL, NULL, 30.0, 8),
    ('Tramo 8B', 30.0, 70.0, 23, NULL, 40.0, 8),
    ('Tramo 8C', 70.0, 100.0, 24, NULL, 30.0, 8),
    ('Tramo 9A', 0.0, 15.0, NULL, NULL, 15.0, 9),
    ('Tramo 9B', 15.0, 40.0, 26, NULL, 25.0, 9),
    ('Tramo 9C', 40.0, 75.0, 27, NULL, 35.0, 9),
    ('Tramo 10A', 0.0, 35.0, NULL, NULL, 35.0, 10),
    ('Tramo 10B', 35.0, 75.0, 29, NULL, 40.0, 10),
    ('Tramo 10C', 75.0, 110.0, 30, NULL, 35.0, 10),
    ('Tramo 11A', 0.0, 20.0, NULL, NULL, 20.0, 11),
    ('Tramo 11B', 20.0, 50.0, 32, NULL, 30.0, 11),
    ('Tramo 11C', 50.0, 80.0, 33, NULL, 30.0, 11),
    ('Tramo 12A', 0.0, 25.0, NULL, NULL, 25.0, 12),
    ('Tramo 12B', 25.0, 55.0, 35, NULL, 30.0, 12),
    ('Tramo 12C', 55.0, 80.0, 36, NULL, 25.0, 12),
    ('Tramo 13A', 0.0, 15.0, NULL, NULL, 15.0, 13),
    ('Tramo 13B', 15.0, 40.0, 38, NULL, 25.0, 13),
    ('Tramo 13C', 40.0, 75.0, 39, NULL, 35.0, 13),
    ('Tramo 14A', 0.0, 35.0, NULL, NULL, 35.0, 14),
    ('Tramo 14B', 35.0, 75.0, 41, NULL, 40.0, 14),
    ('Tramo 14C', 75.0, 110.0, 42, NULL, 35.0, 14),
    ('Tramo 15A', 0.0, 20.0, NULL, NULL, 20.0, 15),
    ('Tramo 15B', 20.0, 50.0, 44, NULL, 30.0, 15),
    ('Tramo 15C', 50.0, 80.0, 45, NULL, 30.0, 15),
    ('Tramo 16A', 0.0, 25.0, NULL, NULL, 25.0, 16),
    ('Tramo 6', 0.0, 20.0, NULL, NULL, 20.0, 6),
    ('Tramo 7', 20.0, 40.0, 6, NULL, 20.0, 6),
    ('Tramo 8', 0.0, 30.0, NULL, NULL, 30.0, 7),
    ('Tramo 9', 30.0, 50.0, 8, NULL, 20.0, 7),
    ('Tramo 10', 0.0, 35.0, NULL, NULL, 35.0, 8),
    ('Tramo 11', 35.0, 60.0, 10, NULL, 25.0, 8),
    ('Tramo 12', 0.0, 25.0, NULL, NULL, 25.0, 9),
    ('Tramo 13', 25.0, 45.0, 12, NULL, 20.0, 9),
    ('Tramo 14', 0.0, 30.0, NULL, NULL, 30.0, 10),
    ('Tramo 15', 30.0, 50.0, 14, NULL, 20.0, 10),
    ('Tramo 16', 0.0, 40.0, NULL, NULL, 40.0, 11),
    ('Tramo 17', 40.0, 70.0, 16, NULL, 30.0, 11),
    ('Tramo 18', 0.0, 20.0, NULL, NULL, 20.0, 12),
    ('Tramo 19', 20.0, 40.0, 18, NULL, 20.0, 12),
    ('Tramo 20', 0.0, 30.0, NULL, NULL, 30.0, 13),
    ('Tramo 21', 30.0, 50.0, 20, NULL, 20.0, 13),
    ('Tramo 22', 0.0, 25.0, NULL, NULL, 25.0, 14),
    ('Tramo 23', 25.0, 45.0, 22, NULL, 20.0, 14),
    ('Tramo 24', 0.0, 35.0, NULL, NULL, 35.0, 15),
    ('Tramo 25', 35.0, 60.0, 24, NULL, 25.0, 15),
    ('Tramo 26', 0.0, 20.0, NULL, NULL, 20.0, 16),
    ('Tramo 27', 20.0, 40.0, 26, NULL, 20.0, 16),
    ('Tramo 28', 0.0, 30.0, NULL, NULL, 30.0, 17),
    ('Tramo 29', 30.0, 50.0, 28, NULL, 20.0, 17),
    ('Tramo 30', 0.0, 40.0, NULL, NULL, 40.0, 18),
    ('Tramo 31', 40.0, 70.0, 30, NULL, 30.0, 18),
    ('Tramo 32', 0.0, 20.0, NULL, NULL, 20.0, 19),
    ('Tramo 33', 20.0, 40.0, 32, NULL, 20.0, 19),
    ('Tramo 34', 0.0, 30.0, NULL, NULL, 30.0, 20);

INSERT INTO comunas (Nombre, Kilometros, Pos_Inicio, Pos_Final, Tramo_id, Comuna_Anterior, Comuna_Posterior) VALUES
    ('Comuna 1', 20.0, 0.0, 20.0, 1, NULL, NULL),   -- No tiene comuna anterior, posterior es Comuna 2
    ('Comuna 2', 30.0, 20.0, 50.0, 1, 1, NULL),      -- Comuna anterior es Comuna 1, posterior es Comuna 3
    ('Comuna 3', 50.0, 50.0, 100.0, 1, 2, 1),  -- Comuna anterior es Comuna 2, no tiene comuna posterior
    ('Comuna 4', 160.0, 150.0, 160.0, 4, 3, null),   -- Comuna anterior es Comuna 3, no tiene posterior
    ('Comuna 5', 180.0, 160.0, 180.0, 5, 4, NULL),      -- Comuna anterior es Comuna 4, no tiene posterior
    ('Comuna 6', 25.0, 30.0, 55.0, 16, 5, NULL),
    ('Comuna 7', 30.0, 55.0, 85.0, 17, 6, NULL),
    ('Comuna 8', 20.0, 85.0, 105.0, 18, 7, NULL),
    ('Comuna 9', 35.0, 105.0, 140.0, 19, 8, NULL),
    ('Comuna 10', 40.0, 140.0, 180.0, 20, 9, NULL),
    ('Comuna 11', 30.0, 180.0, 210.0, 21, 10, NULL),
    ('Comuna 12', 25.0, 210.0, 235.0, 22, 11, NULL),
    ('Comuna 13', 20.0, 235.0, 255.0, 23, 12, NULL),
    ('Comuna 14', 30.0, 255.0, 285.0, 24, 13, NULL),
    ('Comuna 15', 40.0, 285.0, 325.0, 25, 14, NULL),
    ('Comuna 16', 25.0, 30.0, 55.0, 26, 15, NULL),
    ('Comuna 17', 30.0, 55.0, 85.0, 27, 16, NULL),
    ('Comuna 18', 20.0, 85.0, 105.0, 28, 17, NULL),
    ('Comuna 19', 35.0, 105.0, 140.0, 29, 18, NULL),
    ('Comuna 20', 40.0, 140.0, 180.0, 30, 19, NULL),
    ('Comuna 21', 30.0, 180.0, 210.0, 31, 20, NULL),
    ('Comuna 22', 25.0, 210.0, 235.0, 32, 21, NULL),
    ('Comuna 23', 20.0, 235.0, 255.0, 33, 22, NULL),
    ('Comuna 24', 30.0, 255.0, 285.0, 34, 23, NULL),
    ('Comuna 25', 40.0, 285.0, 325.0, 35, 24, NULL),
    ('Comuna 26', 25.0, 30.0, 55.0, 36, 25, NULL),
    ('Comuna 27', 30.0, 55.0, 85.0, 37, 26, NULL),
    ('Comuna 28', 20.0, 85.0, 105.0, 38, 27, NULL),
    ('Comuna 29', 35.0, 105.0, 140.0, 39, 28, NULL),
    ('Comuna 30', 40.0, 140.0, 180.0, 40, 29, NULL),
    ('Comuna 31', 30.0, 180.0, 210.0, 1, 30, NULL),
    ('Comuna 32', 25.0, 210.0, 235.0, 2, 31, NULL),
    ('Comuna 33', 20.0, 235.0, 255.0, 3, 32, NULL),
    ('Comuna 34', 30.0, 255.0, 285.0, 4, 33, NULL),
    ('Comuna 35', 40.0, 285.0, 325.0, 5, 34, NULL),
    ('Comuna 36', 25.0, 30.0, 55.0, 6, 35, NULL),
    ('Comuna 37', 30.0, 55.0, 85.0, 7, 36, NULL),
    ('Comuna 38', 20.0, 85.0, 105.0, 8, 37, NULL),
    ('Comuna 39', 35.0, 105.0, 140.0, 9, 38, NULL),
    ('Comuna 40', 40.0, 140.0, 180.0, 10, 39, NULL),
    ('Comuna 41', 30.0, 180.0, 210.0, 11, 40, NULL),
    ('Comuna 42', 25.0, 210.0, 235.0, 12, 41, NULL),
    ('Comuna 43', 20.0, 235.0, 255.0, 13, 42, NULL),
    ('Comuna 44', 30.0, 255.0, 285.0, 14, 43, NULL),
    ('Comuna 45', 40.0, 285.0, 325.0, 15, 44, NULL);    -- Comuna anterior es Comuna 4, no tiene posterior
    
insert into user (nombre,apellido,username,password,email) values (
			"Crack",
			"",
			"crack",
			sha1(md5("qwerty")),
			"crack@man.org"
		)
    