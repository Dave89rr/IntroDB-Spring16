INSERT INTO CLIENTS(CLIENTID, FIRSTNAME, LASTNAME, ADDRESS, CITY, STATE, ZIP, PHONE, CELLPHONE, REFERRAL, EMAIL) VALUES
(3, 'Chris', 'Wootton', '256 nowhereville', 'whatevercity', 'GA', '35894', '2552584698', '1200456789','','woot@email.com'),
(4, 'Sam', 'Adams', '255 Somewhereville', 'whatevercity', 'GA', '35894', '2552584699', '1070000654', '', 'adams@email.com'),
(5, 'James', 'Bond', '007 Hiddenville', 'Atlanta', 'GA', '35894', '2552584700', '1238765438', '', '007bond@mi6.com'),
(6, 'Peyton', 'Mann', '0321 Swimmerville', 'Surfrcity', 'GA','35894', '2552584701','8705602200', '1', 'gold@olympics.com');

INSERT INTO PACKAGES (PACKAGEID, PRICE, DEPOSIT, TOTAL, P4X6, P5X7, P8X11, CANVAS, DIGITALCOPY, ONLINEALBUM, WALLETS) VALUES
(1, '$80', '$20', '$80', '10', '15', '10', 'Y', 'N', ''),
(2, '$50', '$60', '$20', '40', '15', '1', 'Y', 'N', ''),
(3, '$40', '$60', '$80', '5', '10', '1', 'N', 'N', ''),
(4, '$90', '$60', '$20', '2', '10', '20', 'N', 'N','');
  
  Insert INTO Payment VALUES(
 seqCLID.nextval, 'Cust_1211', 'TR_1244', 'VISA', 'Wells Fargo', '4727 01234 9009', '07-04- 17', 'FULL',);
seqCLID.nextval, 'Cust_2232', 'TR_1011', 'MS’, Bank of America', '03449267', '', '12-25-15', 'INT   DEPOSIT',);
  seqCLID.nextval, 'Cust_0419', 'TR_5967', 'CHECK 2150’,’ ‘SunTrust', 'NULL', '01-01-016', 'FULL',);
  seqCLID.nextval, 'Cust_0419', 'TR_6117', 'CASH', 'NULL', 'NULL', '02-14-16', 'FULL',);


  Insert INTO Order VALUES(
  seqVID.nextval, 'O1237', 'Cust_1254', 'PK45', 'Church', 'Wedding','04-14-14', 'Tripod');
seqVID.nextval, 'O1335', 'Cust_1155', 'PK35', 'School', 'Yearbook_pictures','10-24-14', 'Background, Lighting');
seqVID.nextval, 'O1347', 'Cust_0997', 'PK45', 'Church', 'Wedding','04-14-14', 'Tripod');
seqVID.nextval, 'O2255', 'Cust_1155', 'PK25', 'Office', 'Christmas','12-19-14', 'Tripod');

 Insert INTO Camera VALUES(
 seqCID.nextval, ‘5555’, 'Pentax', 3, '18-55mm');
seqCID.nextval, ‘TEF-S’, 'Cannon', ‘EOS-R’, '18-55mm');
seqCID.nextval, ‘D7100’, 'Nikon', ’24.1MP’, '55-300mm');
seqCID.nextval, ‘H5D-60’, 'Hasselblad', ’60.0MP’, '40.2-53.7mm');
  

  Insert INTO PaymentHistory VALUES(
 seqVID.nextval, 'TR_0998', 'Cust_0457', '$400', '04-14-15', ’04-28-15’);
 seqVID.nextval, 'TR_1185', 'Cust_1122', '$800', '05-15-15', ’05-30-15’);
 seqVID.nextval, 'TR_1298', 'Cust_3355', '$1500', '06-14-15', ’04-28-15’);
 seqVID.nextval, 'TR_4698', 'Cust_6677', '$2500', '07-17-15', ’07-31-15’);

  Insert INTO Employee VALUES(
  seqCLID.nextval, 'Peyton', 'Mann', '0321 Swimmerville', 'Surfrcity', ‘GA’, '35894', '404-258-4701', '770-258-8801');
 0000);
  seqCLID.nextval, 'Donald', 'Crump', '0321 BeverlyHills', 'Dallas', ‘GA’, '37784', '770-444-4701', '770—665-8801');
  seqCLID.nextval, 'Hilary', 'Linton', '0114 Beverly Hills', 'Dallas', ‘GA’, '37784', '678-258-6886', '678-775-5577');
  seqCLID.nextval, 'Lilburn Highschool', 'NULL', '345  Lilburn Ave', 'Lillburn', ‘GA’, '30049', '770-405-4000', 'NULL');

  Insert INTO Venues VALUES(
 seqVID.nextval, ‘V03’, '128 Coconut Ave', 'Jamrock', 'GA', '36584', ’678-675-8899’, ‘Jane Sands’, ‘Wedding’);
 seqVID.nextval, ‘V05’, ' 345 Beverley Hills', 'wheresville', 'GA', '36584', ’917-675-8899’, ‘Areil Grey’, ‘Graduation’);
 seqVID.nextval, ‘V03’, '0231 Beverly Hills', 'wheresville', 'GA', '36584', ’770-444-4701’, ‘Donald Crump’, ‘Wedding’);
 seqVID.nextval, ‘V05’, '188 Gwinnetplaceln', 'Lawrenceville', 'GA', '30046', ’770-675-9999’, ‘Georg Hush’, ‘Graduation’);
