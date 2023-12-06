use carreteras;

CREATE TABLE categorias (
    id_Categoria INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL
);

CREATE TABLE carreteras (
    id_Carretera INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Kilometros DECIMAL(10, 2) NOT NULL,
    Categoria_id INT NOT NULL,
    Carretera_Anterior INT,
    Carretera_Posterior INT,
    FOREIGN KEY (Categoria_id) REFERENCES categorias(id_Categoria),
    FOREIGN KEY (Carretera_Anterior) REFERENCES carreteras(id_Carretera),
    FOREIGN KEY (Carretera_Posterior) REFERENCES carreteras(id_Carretera)
);

CREATE TABLE tramos (
    id_Tramo INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Pos_Inicio DECIMAL(10, 2) NOT NULL,
    Pos_Final DECIMAL(10, 2) NOT NULL,
    Tramo_Anterior INT,
    Tramo_Posterior INT,
    Kilometros DECIMAL(10, 2) NOT NULL,
    Carretera_id INT,
    FOREIGN KEY (Tramo_Anterior) REFERENCES tramos(id_Tramo),
    FOREIGN KEY (Tramo_Posterior) REFERENCES tramos(id_Tramo),
    FOREIGN KEY (Carretera_id) REFERENCES carreteras(id_Carretera)
);

CREATE TABLE comunas (
    id_Comuna INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Kilometros DECIMAL(10, 2) NOT NULL,
    Pos_Inicio DECIMAL(10, 2) NOT NULL,
    Pos_Final DECIMAL(10, 2) NOT NULL,
    Tramo_id INT,
    Comuna_Anterior INT,
    Comuna_Posterior INT,
    FOREIGN KEY (Tramo_id) REFERENCES tramos(id_Tramo),
    FOREIGN KEY (Comuna_Anterior) REFERENCES comunas(id_Comuna),
    FOREIGN KEY (Comuna_Posterior) REFERENCES comunas(id_Comuna)
);