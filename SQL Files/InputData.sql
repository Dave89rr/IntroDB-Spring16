INSERT INTO employees (EMPLOYEEID, EMPFIRSTNAME, EMPLASTNAME, EMPADDRESS, EMPCITY, EMPSTATE, EMPZIP, EMPPHONE, EMPCELLPHONE, EMPEMAIL, EMPPASS) VALUES
(1, 'David', 'Rivera', '1000 University Center Lane', 'Lawrenceville', 'GA', '30043', NULL, '123-555-1289', 'dav@email.com', 'password'),
(2, 'Sam', 'Allen', 'Highway 120', NULL, 'CA', '95321', NULL, '123-555-1289', 'sam@email.com', 'password'),
(3, 'Dan', 'Allen', '100 Center', NULL, NULL, '90210', NULL, '6784075000', 'jo@shmo.com', 'newone'),
(4, 'Joseph', 'Unk', '100 Center', NULL, NULL, '90210', NULL, '678-407-5000', 'joe@shmo.com', 'password'),
(5, 'Andrea', 'Vaca', '810 Colony Park', '', '', '3043', '', '1234567890', 'andrea@mail.com', 'password'),
(6, 'Andrew', 'Young', '100 Peachtree St', '', '', '30340', '', '678-555-1234', 'andy@history.com', 'password'),
(7, 'Peyton', 'Mann', '0321 Swimmerville', 'Surfrcity', 'GA', '35894', '404-258-4701', '770-258-8801', 'mann@mail.com', 'password'),
(8, 'Donald', 'Crump', '0321 BeverlyHills', 'Dallas', 'GA', '37784', '770-444-4701', '770—665-8801', 'crump@mail.com', 'password'),
(9, 'Hilary', 'Linton', '0114 Beverly Hills', 'Dallas', 'GA', '37784', '678-258-6886', '678-775-5577', 'lint@mail.com', 'password');

INSERT INTO clients (CLIENTID, FIRSTNAME, LASTNAME, ADDRESS, CITY, STATE, ZIP, PHONE, CELLPHONE, REFERRAL, EMAIL) VALUES
(1, 'Aaron', 'Butler', '635 Somewhere', 'l-ville', 'GA', '30062', '180059963', '8996852568', NULL, 'aaron@email.com'),
(2, 'Arthur', 'Reed', '32 Some Street', 'Suwannee', 'GA', '30962', '1234509876', '2135468790', '1', 'art@email.com'),
(3, 'Chris', 'Wootton', '256 nowhereville', 'whatevercity', 'GA', '35894', '2552584698', '1200456789', '', 'woot@email.com'),
(4, 'Sam', 'Adams', '255 Somewhereville', 'whatevercity', 'GA', '35894', '2552584699', '1070000654', '', 'adams@email.com'),
(5, 'James', 'Bond', '007 Hiddenville', 'Atlanta', 'GA', '35894', '2552584700', '1238765438', '', '007bond@mi6.com'),
(6, 'Peyton', 'Mann', '0321 Swimmerville', 'Surfrcity', 'GA', '35894', '2552584701', '8705602200', '1', 'gold@olympics.com');

INSERT INTO venues (VENUEID, VENUEADDRESS, VENUECITY, VENUESTATE, VENUEZIP, VENUENUMBER, VENUECONTACTNAME, VENUETYPE) VALUES
(1, '100 Center', '', 'GA', '30043', '1234567890', '', 'Church'),
(2, '1322 Buford Dr', '', 'GA', '30043', '1234567890', '', 'Church'),
(3, '128 Coconut Ave', 'Jamrock', 'GA', '36584', '678-675-8899', 'Jane Sands', 'Wedding'),
(4, '345 Beverley Hills', 'wheresville', 'GA', '36584', '917-675-8899', 'Areil Grey', 'Graduation'),
(5, '0231 Beverly Hills', 'wheresville', 'GA', '36584', '770-444-4701', 'Donald Crump', 'Wedding'),
(6, '188 Gwinnetplaceln', 'Lawrenceville', 'GA', '30046', '770-675-9999', 'Georg Hush', 'Graduation');

INSERT INTO cameras(CAMERAID, SHOTCOUNT, CAMERATYPE, BATTERIES, PRIMARYLENSE) VALUES
(1, '123', 'Nikon', '2', 'Nikon 20-200mm'),
(2, '52000', 'Nikon', '4', 'Nikon 40-300mm'),
(3, '1', 'Osmo', '1', 'N/A'),
(4, '555', 'Pentax', '3', 'Pentax 18-55mm'),
(5, '25000', 'Cannon', '2', 'Cannon 18-55mm'),
(6, '7100', 'Nikon', '1', 'Tamron 55-300mm'),
(7, '60', 'Hasselblad', '60', 'Tamron 40-53mm');

INSERT INTO packages (PACKAGEID, PRICE, DEPOSIT, TOTAL, P4X6, P5X7, P8X11, CANVAS, DIGITALCOPY, ONLINEALBUM, WALLETS) VALUES
(1, '80', '20', '80', '10', '15', '10', 'Y', 'N', 'N', '');
(2, '80', '20', '300', '10', '15', '10', 'Y', 'N', 'N', ''),
(3, '50', '60', '200', '40', '15', '1', 'Y', 'N', ''),
(4, '40', '60', '2500', '5', '10', '1', 'N', 'N', ''),
(5, '90', '60', '40', '2', '10', '20', 'N', 'N', '8');

INSERT INTO orders(ORDERID, CLIENTID, EMPLOYEEID, PACKAGEID, VENUEID, CAMERAID, EVENTTYPE, EVENTDATE, ACCESSORIES, SPECIALREQUESTS) VALUES
(1, 1, 1, 1, 1, 1, 'Wedding', '10/25/19', 'None', 'I Hope this goes well'),
(2, 2, 1, 1 , 2, 4, 'Sweet 16', '09/20/18', 'None', 'Osmo');

INSERT INTO payments (TRANSACTIONID, ORDERID, PAYMENTTYPE, CCNUM, EXPDATE, CCV, PAYMENTDATE, PAYMENTAMOUNT) VALUES
(1, 1, 'VISA', '4727 0123 4567 9009', '07/24', '009', '04-24-16', '$20'),
(2, 1, 'VISA', '4744 7500 6512 9874', '05/19', '125', '12-25-15', '40'),
(3, 1, 'CHECK 2150', '', '', '', '01-01-016', '40');
