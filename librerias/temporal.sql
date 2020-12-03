INSERT INTO `menues` (`id`, `id_vista`, `tipo_usuario_menu`, `descripcion`, `orden`, `nivel`, `fecha_proceso`) 
VALUES (NULL, '1', '1', 'Consultas',                  '1', '1', CURRENT_TIMESTAMP), 
       (NULL, '1', '1', 'Panel de Control',           '2', '2', CURRENT_TIMESTAMP),
       (NULL, '1', '2', 'Captura Movimientos',        '3', '2', CURRENT_TIMESTAMP),
       (NULL, '1', '1', 'Consulta Movimientos',       '4', '2', CURRENT_TIMESTAMP),
       (NULL, '1', '2', 'Adm. Ctas. y Movimientos',   '5', '1', CURRENT_TIMESTAMP),
       (NULL, '1', '2', 'Cuentas Bancarias',          '6', '2', CURRENT_TIMESTAMP),
       (NULL, '1', '2', 'Rubros',                     '7', '2', CURRENT_TIMESTAMP),
       (NULL, '1', '2', 'Bancos',                     '8', '2', CURRENT_TIMESTAMP),
       (NULL, '1', '2', 'Tipos Movimientos',          '9', '2', CURRENT_TIMESTAMP),
       (NULL, '1', '3', 'Administración Sitio',       '10', '1', CURRENT_TIMESTAMP),
       (NULL, '1', '3', 'Usuarios',                   '11', '2', CURRENT_TIMESTAMP),
       (NULL, '1', '3', 'Rutas',                      '12', '2', CURRENT_TIMESTAMP),
       (NULL, '1', '3', 'Elementos',                  '13', '2', CURRENT_TIMESTAMP),
       (NULL, '1', '3', 'Entidades',                  '14', '2', CURRENT_TIMESTAMP);

SELECT TABLE_NAME,
       COLUMN_NAME,
       CONSTRAINT_NAME,
       REFERENCED_TABLE_NAME,
       REFERENCED_COLUMN_NAME
FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = "ctasctes" 
      AND TABLE_NAME = "menues" 
      AND REFERENCED_COLUMN_NAME IS NOT NULL


CREATE TABLE `menues` (
  `id` int(11) NOT NULL,
  `id_vista` int(11) NOT NULL,
  `tipo_usuario_menu` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


CREATE TABLE product (
    category INT NOT NULL, id INT NOT NULL,
    price DECIMAL,
    PRIMARY KEY(category, id)
)   ENGINE=INNODB;

CREATE TABLE customer (
    id INT NOT NULL,
    PRIMARY KEY (id)
)   ENGINE=INNODB;

CREATE TABLE product_order (
    no INT NOT NULL AUTO_INCREMENT,
    product_category INT NOT NULL,
    product_id INT NOT NULL,
    customer_id INT NOT NULL,

    PRIMARY KEY(no),
    INDEX (product_category, product_id),
    INDEX (customer_id),

    FOREIGN KEY (product_category, product_id)
      REFERENCES product(category, id)
      ON UPDATE CASCADE ON DELETE RESTRICT,

    FOREIGN KEY (customer_id)
      REFERENCES customer(id)
)   ENGINE=INNODB;