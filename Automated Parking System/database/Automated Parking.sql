--Login Table
CREATE TABLE Login(
Log_ID char(6) not null,
Username char(20),
User_password char(6),
constraint Login_PK PRIMARY KEY(Log_ID),
constraint Log_ck check (Log_ID LIKE'[C\E][0-9][0-9][0-9][0-9][0-9]'), constraint userid check (User_password LIKE'[0-9][0-9][0-9][0-9][a-z][A-Z]')
);


---Registered Member Table
CREATE TABLE Registered_Member(
M_ID char(6) not null,
f_name varchar(20),
l_name varchar(20),
e_mail varchar(40),
con_number char(10),
M_address char(50),
Log_ID char(6) not null,

constraint C_PK PRIMARY KEY(M_ID),
constraint CHK_MID check (M_ID LIKE '[m\M][0-9][0-9][0-9][0-9]'),

constraint CHK_cont check (con_number LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]'),
constraint C_FK FOREIGN KEY (Log_ID) references Login(Log_ID));


---Inquiry Table
CREATE table Inquiry(
M_ID char(6) not null,
M_name varchar(20),
E_Mail	char (20),
Req_Type varchar(50),
Req_Date date,

Constraint PK_Inquiry PRIMARY KEY (M_ID),
Constraint check_Inquiry_E_Mail check (E_Mail LIKE '%@%.%' )

);


---Park Location Table
CREATE table Park_Location(
Location_ID char(6) not null,
Location_name	char(30),
Details char (60),
Price int,

constraint Location_PK PRIMARY KEY(Location_ID),
constraint loc_ck check (Location_ID LIKE'[L\l][0-9][0-9][0-9][0-9]')
);

---Payment Table
CREATE table Payment(
P_ID int not null,
Customer_ID char(6) not null,
M_name char(20),
P_type varchar(20),
Amount float,
P_status varchar(10),
Rtype varchar(10),
c_number char(16),

constraint PK_Payment PRIMARY KEY (Customer_ID),
constraint Customer_ID check (Customer_ID LIKE '[m\c][0-9][0-9][0-9][0-9]'), constraint CHK_contNO check (c_number LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-
--9][0-9][0-9]'),
);


--Reservation Table
CREATE table Reservation(
Reserv_ID char(6) not null,
Location_ID char(6) not null,
Customer_ID char(6) not null,
Duration char(20),
Resev_Date date,

constraint Reservation_PK PRIMARY KEY(Reserv_ID),
constraint rev_ck check (Reserv_ID LIKE'[H\S][0-9][0-9][0-9][0-9]'), constraint Reservation_FK1 FOREIGN KEY (Location_ID) references
Park_Location(Location_ID),
constraint Reservation_FK2 FOREIGN KEY (Customer_ID) references Payment(Customer_ID),
);

--Admin Table
CREATE table Admin_s (
A_ID int,
Log_ID char(6),
A_Name varchar(20),
A_Position varchar(20),
A_ConNo char(10),

constraint PKADMIN PRIMARY KEY (A_ID),
constraint FKADMIN FOREIGN KEY (Log_ID) references Login (Log_ID));


--Sample Data
INSERT into Login values ('C11223','Nandun','1234bB'); 
INSERT into Login values ('C22112','Kaveendra','4569sG'); 
INSERT into Login values ('E12346','Asmitha','4567bB'); 
INSERT into Login values ('E23457','Abiramy','4568bB'); 
INSERT into Login values ('C10234','Prasanga','1267dE'); 

--Member Info
INSERT into Registered_Member
values('M0001','Nandun','Godage','donnandun@gmail.com','0715589299','Sirisevana,Pahalagama, Wellawaya','C11223');
INSERT into Registered_Member
values('M0002','Kaveendra','Kodithuwakku','kaveendrak@gmail.com','0771231231','100/1, Matale','C22112');
INSERT into Registered_Member 
values('M0003','Prasanga','De Davin','prasanga@hotmail.com','0764564560','20/2, Kandy','C10234');
INSERT into Registered_Member
values('M0004','Asmitha','Thiraviyarasa','asmithat@yahoo.com','0726767676','50/1, Jaffna','E12346');
INSERT into Registered_Member
values('M0005','Abiramy','Kumaresan','abiramyk@yahoo.com','0718989898','20/2, Jaffna','E23457');


--Location Info
INSERT into Park_Location values('L0001','Malabe','Kandy Rd,Malabe',500);
INSERT into Park_Location values('L0002','Majestic City',' Station Rd, Colombo',600); 
INSERT into Park_Location values('L0003','Liberty Plaza','R. A. De Mel Mawatha, Colombo',450); 
INSERT into Park_Location values('l0004','Kandy City Center','High Rd,Kandy',550); 
INSERT into Park_Location values('l0005','CarSafe','Kurunegala',650);


--Payment Info
INSERT into payment values('0022','M0001','Nandun','QR',4500,'Done','Hourly','0715589299');
INSERT into payment values('0033','M0002','Kaveendra','Debit Card ',500,'Done','Hourly','0771231231');
INSERT into payment values('0024','M0003','Asmitha','Debit Card',4400,'Done','Monthly','0726767676');
INSERT into payment values('0067','M0004','Abiramy','Credit Card',800,'Done','Hourly','0718989898');
INSERT into payment values('0078','M0005','prasanga','Paypal',3500,'Done','Monthly','0764564560'); 


--Reservation Info
INSERT into Reservation values('S0111','L0002','m0001','Hourly','04-28-22'); 
INSERT into Reservation values('H0002','L0001','m0004','Hourly','04-28-22'); 
INSERT into Reservation values('H0003','L0002','c2278','Monthly','04-28-22'); 
INSERT into Reservation values('S0044','L0004','m0005','Hourly','04-28-22'); 
INSERT into Reservation values('H0005','L0003','c2234','Monthly','04-28-22');



--Admin Details
INSERT into Admin_s values('0001','E12345','Kumar','Operational Manager','0111231231'); 
INSERT into Admin_s values('0002','E13452','Clark','Security Expert','0114564564'); 
INSERT into Admin_s values('0003','E12345','Arun','Assistant Manager','0117897897');
INSERT into Admin_s values('0004','E13452','Angela','Web Developer','0712462462');
INSERT into Admin_s values('0005','E65783','Perera','Support Agent','0773693693'); 


--Inquiry Info
INSERT into INQUIRY values('M0011','Kamal','kamal123@gmail.com','Payment issuse','2022-04-28');
INSERT into INQUIRY values('M0090','Amal','amal123@gmail.com','Location issuse','2022-04-28');
INSERT into INQUIRY values('M0033','Ravin','ravin123@gmail.com','Parking place issuse','2022-04-28');
INSERT into INQUIRY values('M0024','Kavin','kavin123@gmail.com','Reservation issuse','2022-04-28');
INSERT into INQUIRY values('M0085','Afra','afra123@gmail.com','Parking place issuse','2022-04-28');




SELECT * FROM Login;

SELECT * FROM Registered_Member;


SELECT * FROM Reservation; --not working

SELECT * FROM Park_Location;

SELECT * FROM Payment; --not working

SELECT * FROM Admin_s; --not working

SELECT * FROM Inquiry; 

Drop table Admin_s;

SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;



INSERT into INQUIRY values('M0080','Sunil','sunil@gmail.com','System Not responsive','2022-05-06');

SELECT * FROM Inquiry;













