/*
CREATE TABLE employes(
	ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	lastName VARCHAR(50) NOT NULL,
	email  VARCHAR(50) NOT NULL ,
	role VARCHAR(50) NOT NULL
);
--CREATE TABLE departments AS SELECT id ,firstName,department FROM employes WHERE role='responsable';
*/

UPDATE employes_tbl INNER JOIN ( SELECT firstName ,count(*) as cnt FROM departments GROUP BY firstName ) departemnts ON employes_tbl.firstName = departments.firstName SET set A.firstName = departments.firstName ;
