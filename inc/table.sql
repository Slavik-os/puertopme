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
	phone_portable VARCHAR(255) NOT NULL ,
	phone_fix VARCHAR(255) NOT NULL ,
	phone_extenstion VARCHAR(255) NOT NULL 
);

CREATE TABLE departments(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        department_name VARCHAR(255) NOT NULL,
        responsable_id INT NOT NULL CHECK (responsable_id = 'responsable'),
        FOREIGN KEY (responsable_id) references employes_tbl(id)
);
SELECT departments.firstName   FROM departments INNER JOIN employes_tbl  ON departments.departement = employes_tbl.departement ;

-- ALTER TABLE employes_tbl ADD responsable_name VARCHAR(255) NOT NULL ;
-- UPDATE employes_tbl
-- SET responsable_name = (departments.firstName FROM employes_tbl INNER JOIN employes_tbl.department = deparments.departement);

DROP TABLE IF EXISTS puerto_dbs.departments ;
CREATE TABLE departments(
		CREATE TABLE departments AS SELECT id,firstName,lastName,departement FROM employes_tbl WHERE role='responsable' ;

);

INSERT INTO employes_tbl(
                        matricule,firstName,lastname,photo,email,username,password,
                        cin,date_em,departement,burreaux,post,fonction,address,phone_portable,phone_extenstion,phone_fix,role)
                        VALUES('1234','akram','elkalkha','photo','wqe@gmail.com','kb','768a0f027c2142bf3f626e9422a6ffe9','456',DATE_FORMAT('2022-03-09','%Y-%d-%m'),'bbb','ppp','IT','DEV','1233333','11111111','eeeeee','2222','');


CREATE TABLE permissions(
	responsable_name VARCHAR(255) NOT NULL ,
	responsable_depar VARCHAR(255) NOT NULL,
	allowed_permitiion VARCHAR(255) ,
	total_access VARCHAR(255)
);

*/

CREATE TABLE employee_status(
	matricule VARCHAR(255) NOT NULL,
	status VARCHAR(255) NOT NULL,
	comment VARCHAR(255) NOT NULL,
	date_perm date NOT NULL
);
