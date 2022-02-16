CREATE TABLE Employee (
  employee_ID        int(11) NOT NULL AUTO_INCREMENT, 
  name               varchar(30) NOT NULL, 
  email              varchar(50) NOT NULL UNIQUE, 
  password           varchar(60) NOT NULL UNIQUE, 
  phone_no           char(11) NOT NULL UNIQUE, 
  volunteer_ID       int(11) NOT NULL, 
  rank               int(11), 
  curr_location_name varchar(20) NOT NULL, 
  PRIMARY KEY (employee_ID));
CREATE TABLE veterinary_hospital (
  doctor_name varchar(20) NOT NULL, 
  doctor_id   char(10) NOT NULL, 
  email       varchar(30) NOT NULL UNIQUE, 
  location_id int(3) NOT NULL, 
  EmployeeID  int(11) NOT NULL, 
  animal_id   int(11) NOT NULL, 
  PRIMARY KEY (doctor_id));
CREATE TABLE Users (
  id             int(11) NOT NULL AUTO_INCREMENT, 
  name           varchar(20) NOT NULL, 
  phone_no       char(11) NOT NULL UNIQUE, 
  email          varchar(30) NOT NULL UNIQUE, 
  password       varchar(60) NOT NULL UNIQUE, 
  shopproduct_id char(4), 
  curr_location  varchar(20) NOT NULL, 
  PRIMARY KEY (id));

CREATE TABLE Users_veterinary_hospital (
  Usersid   int(11) NOT NULL, 
  doctor_id char(10) NOT NULL, 
  PRIMARY KEY (Usersid, 
  doctor_id));
CREATE TABLE rescue_table (
  animal_id   int(11) NOT NULL AUTO_INCREMENT, 
  animal_type varchar(10) NOT NULL, 
  location_name VARCHAR(50) NOT NULL, 
  rescue_date date NOT NULL, 
  age         varchar(15) NOT NULL, 
  image       varchar(100) NOT NULL, 
  PRIMARY KEY (animal_id));
CREATE TABLE Employee_rescue_table (
  EmployeeID int(11) NOT NULL, 
  animal_id  int(11) NOT NULL, 
  PRIMARY KEY (EmployeeID, 
  animal_id));
CREATE TABLE adoption_table (
  animal_id      int(11) NOT NULL AUTO_INCREMENT, 
  animal_type    varchar(5) NOT NULL, 
  adopted_date   date NOT NULL, 
  adoption_cost  double NOT NULL, 
  payment_status varchar(10) NOT NULL, 
  Usersid        char(11) NOT NULL, 
  age            varchar(20) NOT NULL, 
  image          varchar(100) NOT NULL, 
  PRIMARY KEY (animal_id));
CREATE TABLE employee_adoption_table (
  EmployeeID int(11) NOT NULL, 
  animal_id  int(11) NOT NULL, 
  PRIMARY KEY (EmployeeID, 
  animal_id));
CREATE TABLE shop (
  product_id   char(4) NOT NULL, 
  product_name varchar(30) NOT NULL, 
  quantity     int(10) NOT NULL, 
  price        double NOT NULL, 
  AdminID      int(11) NOT NULL, 
  PRIMARY KEY (product_id));
CREATE TABLE Users_shop (
  Usersid    int(11) NOT NULL, 
  product_id char(4) NOT NULL, 
  PRIMARY KEY (Usersid, 
  product_id));
CREATE TABLE payment (
  payment_id      int(11) NOT NULL AUTO_INCREMENT, 
  payment_date    date NOT NULL, 
  delivery_status varchar(10), 
  animal_id       int(11) NOT NULL, 
  Usersid         int(11) NOT NULL, 
  PRIMARY KEY (payment_id));
CREATE TABLE donation (
  user_name      varchar(20) NOT NULL, 
  account_number char(11) NOT NULL, 
  amount         double NOT NULL, 
  PRIMARY KEY (account_number));


ALTER TABLE Users_veterinary_hospital ADD INDEX FKUsers_vete947274 (Usersid), ADD CONSTRAINT FKUsers_vete947274 FOREIGN KEY (Usersid) REFERENCES Users (id);
ALTER TABLE Users_veterinary_hospital ADD INDEX FKUsers_vete723021 (doctor_id), ADD CONSTRAINT FKUsers_vete723021 FOREIGN KEY (doctor_id) REFERENCES veterinary_hospital (doctor_id);
ALTER TABLE Employee_rescue_table ADD INDEX FKEmployee_r7623 (EmployeeID), ADD CONSTRAINT FKEmployee_r7623 FOREIGN KEY (EmployeeID) REFERENCES Employee (employee_ID);
ALTER TABLE Employee_rescue_table ADD INDEX FKEmployee_r877031 (animal_id), ADD CONSTRAINT FKEmployee_r877031 FOREIGN KEY (animal_id) REFERENCES rescue_table (animal_id);
ALTER TABLE employee_adoption_table ADD INDEX FKemployee_a616702 (EmployeeID), ADD CONSTRAINT FKemployee_a616702 FOREIGN KEY (EmployeeID) REFERENCES Employee (employee_ID);
ALTER TABLE employee_adoption_table ADD INDEX FKemployee_a872979 (animal_id), ADD CONSTRAINT FKemployee_a872979 FOREIGN KEY (animal_id) REFERENCES adoption_table (animal_id);
ALTER TABLE Users_shop ADD INDEX FKUsers_shop964461 (Usersid), ADD CONSTRAINT FKUsers_shop964461 FOREIGN KEY (Usersid) REFERENCES Users (id);
ALTER TABLE Users_shop ADD INDEX FKUsers_shop27165 (product_id), ADD CONSTRAINT FKUsers_shop27165 FOREIGN KEY (product_id) REFERENCES shop (product_id);
ALTER TABLE shop ADD INDEX FKshop225568 (AdminID), ADD CONSTRAINT FKshop225568 FOREIGN KEY (AdminID) REFERENCES Employee (employee_ID);
ALTER TABLE veterinary_hospital ADD INDEX FKveterinary340888 (EmployeeID, animal_id), ADD CONSTRAINT FKveterinary340888 FOREIGN KEY (EmployeeID, animal_id) REFERENCES Employee_rescue_table (EmployeeID, animal_id);
ALTER TABLE payment ADD INDEX FKpayment439093 (animal_id), ADD CONSTRAINT FKpayment439093 FOREIGN KEY (animal_id) REFERENCES adoption_table (animal_id);
ALTER TABLE payment ADD INDEX FKpayment888376 (Usersid), ADD CONSTRAINT FKpayment888376 FOREIGN KEY (Usersid) REFERENCES Users (id);

