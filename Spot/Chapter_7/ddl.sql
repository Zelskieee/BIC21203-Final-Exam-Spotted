-- CREATE TABLE statement --
CREATE TABLE Employee (
    EmployeeID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    BirthDate DATE,
    Gender CHAR(1),
    Department VARCHAR(50),
    Salary DECIMAL(10, 2)
);

-- ALTER new column statement --
ALTER TABLE Employee
ADD Email VARCHAR(100);

-- ALTER modify data type statement --
ALTER TABLE Employee
MODIFY Salary DECIMAL(12, 2);

-- ALTER add primary key statement --
ALTER TABLE Employee
ADD CONSTRAINT PK_EmployeeID PRIMARY KEY (EmployeeID);

-- ALTER add foreign key statement --
ALTER TABLE Employee
ADD CONSTRAINT FK_Department FOREIGN KEY (DepartmentID) REFERENCES Department(DepartmentID);

-- ALTER drop column statement --
ALTER TABLE Employee
DROP COLUMN Email;

-- DROP statement --
DROP TABLE Employee;
