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

--UPDATE employes_tbl INNER JOIN ( SELECT firstName ,count(*) as cnt FROM departments GROUP BY firstName ) departemnts ON employes_tbl.firstName = departments.firstName SET set A.firstName = departments.firstName ;

INSERT INTO demands (employee_id,responsable_id,matricule_employee,firstName,lastname,type_demand,departement,date_start,date_end,heur_start,heur_end,
replacement,status,fonction,justification,created_date)VALUES(
25,45,'999','chaymae','chaymae','DEMAND DABSENCE','IT',DATE_FORMAT('2022-04-08','%Y-%m-%d'),DATE_FORMAT('2022-03-22','%Y-%m-%d'),'11:30','15:04','akram el kalkha',NULL,'DEV','DOCTOR',DATE_FORMAT('2022-03-12','%Y-%m-%d'));
