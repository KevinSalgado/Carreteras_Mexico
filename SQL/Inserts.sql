use carreteras;

INSERT INTO categorias (Nombre) VALUES
    ('Locales'),
    ('Comerciales'),
    ('Regionales'),
    ('Nacionales'),
    ('Autovias');
    
INSERT INTO carreteras (Nombre, Kilometros, Categoria_id, Carretera_Anterior, Carretera_Posterior) VALUES
    ('Carretera A', 100.5, 1, null, null),  -- Carretera A no tiene anterior, posterior es Carretera B
    ('Carretera B', 150.2, 2, 1, null),  -- Anterior es Carretera A, posterior es Carretera C
    ('Carretera C', 80.8, 3, 2, 1),   -- Anterior es Carretera B, no tiene posterior
    ('Carretera D', 120.0, 4, 3, null),  -- Anterior es Carretera C, no tiene posterior
    ('Carretera E', 200.5, 5, null, 3);  -- No tiene anterior, posterior es Carretera C
    
INSERT INTO tramos (Nombre, Pos_Inicio, Pos_Final, Tramo_Anterior, Tramo_Posterior, Kilometros, Carretera_id) VALUES
    ('Tramo 1', 0.0, 50.0, NULL, NULL, 50.0, 1),   -- No tiene tramo anterior, posterior es Tramo 2
    ('Tramo 2', 50.0, 100.0, 1, NULL, 50.0, 1),    -- Tramo anterior es Tramo 1, posterior es Tramo 3
    ('Tramo 3', 100.0, 150.0, 2, 1, 50.0, 1), -- Tramo anterior es Tramo 2, no tiene tramo posterior
	('Tramo 4', 150.0, 180.0, 3, null, 30.0, 3),  -- Tramo anterior es Tramo 3, no tiene posterior
    ('Tramo 5', 180.0, 200.0, 4, null, 20.0, 3);  -- Tramo anterior es Tramo 4, no tiene posterior

INSERT INTO comunas (Nombre, Kilometros, Pos_Inicio, Pos_Final, Tramo_id, Comuna_Anterior, Comuna_Posterior) VALUES
    ('Comuna 1', 20.0, 0.0, 20.0, 1, NULL, NULL),   -- No tiene comuna anterior, posterior es Comuna 2
    ('Comuna 2', 30.0, 20.0, 50.0, 1, 1, NULL),      -- Comuna anterior es Comuna 1, posterior es Comuna 3
    ('Comuna 3', 50.0, 50.0, 100.0, 1, 2, 1),  -- Comuna anterior es Comuna 2, no tiene comuna posterior
    ('Comuna 4', 160.0, 150.0, 160.0, 4, 3, null),   -- Comuna anterior es Comuna 3, no tiene posterior
    ('Comuna 5', 180.0, 160.0, 180.0, 5, 4, null);      -- Comuna anterior es Comuna 4, no tiene posterior
    
insert into user (nombre,apellido,username,password,email) values (
			"Crack",
			"",
			"crack",
			sha1(md5("qwerty")),
			"crack@man.org"
		)
    