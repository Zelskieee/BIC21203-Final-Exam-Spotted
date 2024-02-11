-- SELECT statement --
SELECT firstName, age FROM employee;

-- WHERE statement --
SELECT firstName, lastName FROM employee WHERE age = 28;

-- AND statement --
SELECT firstName, lastName, age FROM employee WHERE lastName = 'James'
AND age > 20;

-- NOT statement --
SELECT firstName, lastName, age FROM employee WHERE NOT lastName = 'James';

-- LIKE statement --
SELECT firstName, lastName, age FROM employee WHERE lastName LIKE '%a%';

-- DISTINCT statement --
SELECT DISTINCT lastName FROM employee;

-- JOIN statement --
SELECT employee.firstName, department.division FROM employee INNER JOIN department
ON employee.empID = department.empID;

-- ORDER BY statement --
SELECT * FROM employee ORDER BY firstName;

-- ORDER BY ASC statement --
SELECT * FROM employee ORDER BY firstName ASC;

-- ORDER BY DESC statement --
SELECT * FROM employee ORDER BY firstName DESC;

-- INSERT statement --
INSERT INTO employee (empID, firstName, lastName, age) VALUES (4, 'Matt', 'Kent', 30);

-- UPDATE statement --
UPDATE employee SET firstName = 'John' WHERE firstName = 'Arif' AND lastName = 'Azinuddin';

-- DELETE statement --
DELETE employee WHERE firstName = 'John' AND lastName = 'Azinuddin';
