/*CREATE TABLE employes_tbl(
	id  INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	username VARCHAR(255) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	matricule CHAR(4) NOT NULL UNIQUE,
	role VARCHAR(255) NOT NULL ,
	firstName VARCHAR(255) NOT NULL,
	lastname VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	cin VARCHAR(255) NOT NULL UNIQUE,
	date_em date NOT NULL,
	departement VARCHAR(255) NOT NULL,
	fonction VARCHAR(255) NOT NULL,
	responsable VARCHAR(255) NOT NULL,
	burreaux VARCHAR(255) NOT NULL,
	post VARCHAR(255) NOT NULL ,
	address VARCHAR(255) NOT NULL,
	photo VARCHAR(255) NOT NULL,
	phone_portable VARCHAR(255) NOT NULL UNIQUE,
	phone_fix VARCHAR(255) NOT NULL UNIQUE,
	phone_extenstion VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE departments(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        department_name VARCHAR(255) NOT NULL,
        responsable_id INT NOT NULL CHECK (responsable_id = 'responsable'),
        FOREIGN KEY (responsable_id) references employes_tbl(id)
);
SELECT departments.firstName   FROM departments INNER JOIN employes_tbl  ON departments.departement = employes_tbl.departement ;
*/

-- ALTER TABLE employes_tbl ADD responsable_name VARCHAR(255) NOT NULL ;
-- UPDATE employes_tbl
-- SET responsable_name = (departments.firstName FROM employes_tbl INNER JOIN employes_tbl.department = deparments.departement);

DROP TABLE IF EXISTS puerto_dbs.departments ;
CREATE TABLE departments(
		CREATE TABLE departments AS SELECT id,firstName,lastName,departement FROM employes_tbl WHERE role='responsable' ;

);