CREATE DATABASE cmpe272website;

CREATE TABLE cmpe272website.list_of_users (
	Fname VARCHAR(255) NOT NULL,
	Mname VARCHAR(255),
	Lname VARCHAR(255) NOT NULL,
	Email VARCHAR(255) NOT NULL,
	HomeAddress VARCHAR(255) NOT NULL,
	HomePhone VARCHAR(10),
	CellPhone VARCHAR(10),
	UserID VARCHAR(255) PRIMARY KEY
);

INSERT INTO cmpe272website.list_of_users
VALUES 
('John', null, 'Elec-Plumb', 'JohnElecPlumb@email.server', '1234 Plumb Tunnel', null, '0001234567', 'JEPOwner'),
('Bob', null, 'CEO', 'BobIsTheCEO@email.server', '1111 Junction Square', '0000000000', '000987654', 'BobIsCEO'),
('Bill', null, 'Secretary', 'SecretaryBill@email.server', '5050 File Street', null, '0000000000', 'BillSec')
;