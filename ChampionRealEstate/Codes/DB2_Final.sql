CREATE DATABASE IF NOT EXISTS realDB;
USE realDB;

DROP TABLE IF EXISTS property;
CREATE TABLE property (
  pid int NOT NULL auto_increment PRIMARY KEY,
  title varchar(200) NOT NULL,
  pcontent longtext NOT NULL,
  type varchar(100) NOT NULL,
  bhk varchar(50) NOT NULL,
  stype varchar(100) NOT NULL,
  bedroom int NOT NULL,
  bathroom int NOT NULL,
  balcony int NOT NULL,
  kitchen int NOT NULL,
  hall int NOT NULL,
  floor varchar(50) NOT NULL,
  size int NOT NULL,
  price int NOT NULL,
  location varchar(200) NOT NULL,
  city varchar(100) NOT NULL,
  state varchar(100) NOT NULL,
  pimage varchar(300) NOT NULL,
  uid int NOT NULL, 
  pstatus varchar(50) NOT NULL,
  date datetime NOT NULL DEFAULT current_timestamp()
);

INSERT INTO property (pid, title, pcontent, type, bhk, stype, bedroom, bathroom, balcony, kitchen,
 hall, floor, size, price, location, city, state, pimage, uid, pstatus, date) VALUES
(default, '8 Fieldstone Lane Ave', 'Beautiful family home in the sought after community of Whitemud Hills! Located in a quiet 
cul-de-sac and sitting upon a picturesque 8600+ sqft lot, this 2350+ sqft 2-storey has been well maintained 
and offers an attractive traditional layout. The main floor features a grand entrance, bright and open floorplan, 
vaulted ceilings in the living area that allows for an abundance of natural light. Spacious kitchen w/granite counters 
and s.s. appliances, formal dining area/flex space, family room w/gas fireplace, breakfast nook, and home office.
 Upstairs you will find 4 large bedrooms, including the master suite w/4-pc ensuite and walk-in closet, additional
 4-pc bath, and laundry room. The FULLY FINISHED lower level offers a large rec area, den, 4-pc bath and plenty of 
 storage. Outside you will enjoy the gorgeous yard w/mature landscaping, above ground pool, hot tub, and gazebo. 
 Located minutes to great schools, parks, Terwillegar Rec Centre, and all other amenities. Great home for a family', 
 'office', '2 BHK', 'sale', 1, 2, 3, 4, 5, '3rd Floor', 4321, 897898, 'Mayfield Road', 'Caledon', 'Ontario',
  '1.jpg', 2, 'sold out', '2021-04-03 00:28:14'),
 
 
 
(default, '35 Northgate Blvd', 'Welcome Home To This Sought After Lakefront Building In Downtown Burlington.
 Close To Shopping, Restaurants, Spencer Smith Park, Bike Trails And So Much More. This Suite 
 Has Lake Views From The Balcony And Is Move In Ready Offering 2 Bedrooms And 2 Full Bathrooms 
 With Ensuite Laundry. Building Amenities Feature An Inground Heated Pool, Sauna, Exercise Rooms
 And Lounge. Quick closing available', 'apartment', '2 BHK', 'sale', 3, 2, 2, 1, 1, '4th Floor', 321,
 987898, '504 - 2210 Lakeshore Rd ', 'Burlington ', 'Ontario', 
 '2.jpg', 3, 'available', '2020-04-03 00:28:14'),
 
 
 
(default, '2 BELLEVILLE DR', 'This 4 level home features a large 75 ft lot backing onto an open area. Features 1458 sq. Ft. On 2 flrs.
 W all 4 levels finished, a huge kitchen with solid oak cabinets, granite countertops, main floor 
 office, open concept LR, DR. & KI. Main flr. laundry, 2 car garage w/furnace. family room with a 
 gas fireplace and den or 4th bedroom, 4th level features a large bar, games area and storage. Many 
 newer updates, furnace, A/C. Windows, roof is 10 yrs. Screen on gar. Door, conservation down the road',
 'flat', '3 BHK', 'rent', 3, 2, 2, 1, 1, '2nd Floor', 3241, 9878987, '322 Gary Ave', 'Windsor', 'Ontario',
 '3.jpg', 4, 'available','2020-04-03 00:40:48'),
 
 
 
(default, '48 Castlehill Rd', 'Ready for immediate possession. This 3 bedroom home is clean, spacious, and backs on to 
greenspace! Located in the Dunluce area1 and half bathrooms, in suite laundry. Wood burning fireplace, 
fridge, stove, hood fan, washer, dryer. Close to Castle Downs skate park and play ground and Dunluce school. 
Close to all amenities and close access to bus stops for quick transportaion. Private balcony facing west. 
This is a well run self managed condo corporation.', 'appartment', '2 BHK', 'rent', 2, 2, 1, 1, 1, '2nd Floor', 1500, 1556000, '279 Lancaster Terrace', 'Edmonton', 
'Ontario', 
'01.jpg', 2, 'available', '2020-04-03 14:45:49'),
 
 
(default, '4 FENTON WAY', 'Nestled in a desirable area close to town but with a country feel, this impeccable home 
will also satisfy your desire for elegance and sophistication. Enjoy nature and the gorgeous vista of the 
farm across the road from the front Palladian window. Popular open concept floor plan with the vaulted ceiling. 
Hardwood floors. Gas fireplace adds character to the livingroom. Quartz counters, gorgeous backsplash, modern 
cabinetry and centre island in the kitchen. Quaint side deck for easy access to BBQ. Spacious primary bedroom 
features a walk-in closet. This bathroom is a dream come true: glass shower, glass cabinetry with more storage 
than you could imagine plus quartz counter. In the lower level, discover the ultimate family room with an additional
 gas fireplace. Walk-out into the 3 season sunroom. Enchanting backyard complete with sprinkler system (front & back) ', 
 'flat', '2 BHK', 'rent', 2, 2, 1, 1, 1, '2nd Floor', 1500, 1550000, '534 Jerseyville Rd W', 
 'Hamilton', 'Ontario', 
 
 '02.jpg', 3, 'available', '2020-04-03 17:47:40'),
 
 
(default, '110 MADDYBETH CRES', 'Brand new home in Parkland Phase 4. This 3 bdrm 2 full bath 1390 sq. ft. Rancher has been designed 
for a convenient lifestyle. The Island Kitchen has a pantry area & comes with a stainless steel fridge, stove & dishwasher.
 The Living room has vaulted ceilings, and a cozy natural gas fireplace. covered patio with access from the kitchen.
 The large Master Bedroom has a walk-in closet, and ensuite bath with 5 foot shower & tile surround. There are two additional 
 bedrooms, & a full 4 piece bathroom. Easy care vinyl siding with cultured stone accent. A concrete driveway leads to the large
  double garage. Walking distance to tennis courts, ball parks, 2 shopping malls & the Rec Centre. You will love the 
 level walk & bike trails throughout the area. GST is included in the price.', 
 'flat', '2 BHK', 'sale', 3, 3, 2, 1, 2, '1st Floor', 343, 34243423, '1044 Celia Crescent', 'Gibsons', 'BC', 
 
 '33.jpg', 4, 'available', '2020-04-03 17:54:06'),
 
 (default, '11950 62 St Nw', 'Brand new home in Parkland Phase 4. This 3 bdrm 2 full bath 1390 sq. ft. Rancher has been designed 
for a convenient lifestyle. The Island Kitchen has a pantry area & comes with a stainless steel fridge, stove & dishwasher.
 The Living room has vaulted ceilings, and a cozy natural gas fireplace. covered patio with access from the kitchen.
 The large Master Bedroom has a walk-in closet, and ensuite bath with 5 foot shower & tile surround. There are two additional 
 bedrooms, & a full 4 piece bathroom. Easy care vinyl siding with cultured stone accent. A concrete driveway leads to the large
  double garage. Walking distance to tennis courts, ball parks, 2 shopping malls & the Rec Centre. You will love the 
 level walk & bike trails throughout the area. GST is included in the price.', 
 'flat', '2 BHK', 'sale', 3, 3, 2, 1, 2, '1st Floor', 343, 34243423, 'Edmonton, AB, T5W 4C6', 'Gibsons', 'BC', 

 '44.jpg', 4, 'available', '2020-04-03 17:54:06'),
 
 (default, '11 Towers Close', 'Nestled in a desirable area close to town but with a country feel, this impeccable home 
will also satisfy your desire for elegance and sophistication. Enjoy nature and the gorgeous vista of the 
farm across the road from the front Palladian window. Popular open concept floor plan with the vaulted ceiling. 
Hardwood floors. Gas fireplace adds character to the livingroom. Quartz counters, gorgeous backsplash, modern 
cabinetry and centre island in the kitchen. Quaint side deck for easy access to BBQ. Spacious primary bedroom 
features a walk-in closet. This bathroom is a dream come true: glass shower, glass cabinetry with more storage 
than you could imagine plus quartz counter. In the lower level, discover the ultimate family room with an additional
 gas fireplace. Walk-out into the 3 season sunroom. Enchanting backyard complete with sprinkler system (front & back) 
 and an adorable gazebo.', 
 'flat', '2 BHK', 'rent', 2, 2, 1, 1, 1, '2nd Floor', 1500, 1550000, 'Red Deer, AB, T4P 0K7', 
 'Ottawa', 'Ontario', 
 
 '222.jpg', 2, 'available', '2020-04-03 17:47:40'),
 
 (default, '4504 54 St', 'Nestled in a desirable area close to town but with a country feel, this impeccable home 
will also satisfy your desire for elegance and sophistication. Enjoy nature and the gorgeous vista of the 
farm across the road from the front Palladian window. Popular open concept floor plan with the vaulted ceiling. 
Hardwood floors. Gas fireplace adds character to the livingroom. Quartz counters, gorgeous backsplash, modern 
cabinetry and centre island in the kitchen. Quaint side deck for easy access to BBQ. Spacious primary bedroom 
features a walk-in closet. This bathroom is a dream come true: glass shower, glass cabinetry with more storage 
than you could imagine plus quartz counter. In the lower level, discover the ultimate family room with an additional
 gas fireplace. Walk-out into the 3 season sunroom. Enchanting backyard complete with sprinkler system (front & back) 
 and an adorable gazebo.', 
 'flat', '2 BHK', 'rent', 2, 2, 1, 1, 1, '2nd Floor', 1500, 1550000, 'Ponoka, AB, T4J 1J4', 
 'Hamilton', 'Ontario', 
  
 '111.jpg',  3, 'available',  '2020-04-03 17:47:40');
 
 --  Current
 DROP TABLE IF EXISTS user;
CREATE TABLE user (
  uid int NOT NULL auto_increment PRIMARY KEY,
  uname varchar(100) NOT NULL,
  uemail varchar(100) NOT NULL,
  uphone varchar(20) NOT NULL,
  upass varchar(50) NOT NULL,
  utype varchar(50) NOT NULL,
  uimage varchar(300) NOT NULL
);

--
-- Dumping data for table `user`
--

INSERT INTO user (uid, uname, uemail, uphone, upass, utype, uimage) VALUES
(default, 'admin', 'admin@gmail.com', '9876543210', 'admin', 'user', '3.jpg'),
(default, 'Parminder', 'parminder@gmail.com', '9878678678', 'parminder', 'agent', '2.jpg'),
(default, 'Yash', 'Yash@gmail.com', '7976956956', 'yash', 'agent', '2.jpg'),
(default, 'Randeep', 'randeep@gmail.com', '8997897869', 'randeep', 'agent', '1.jpg'),
(default, 'Jashandeep', 'jashndeep@gmail.com', '9869596597', 'jashndeep', 'user', '1.jpg'),
(default, 'Kunwar', 'kuwar@gmail.com', '9689698697', 'kunwar', 'user', '3.jpg'),
(default, 'Yuvraj', 'yuvraj@gmail.com', '9798678969', 'yuvraj', 'user', 'avatar-3.jpg');



-- Contact Table Current
DROP TABLE IF EXISTS contact;
CREATE TABLE contact (
  cid int(50) NOT NULL auto_increment primary key,
  u_name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  phone varchar(20) NOT NULL,
  m_subject varchar(100) NOT NULL,
  message varchar(250) NOT NULL
);

INSERT INTO contact (cid, u_name, email, phone, m_subject, message) VALUES
(default, 'parminder', 'parminder@gmail.com', '9878678678', 'demo', 'demo'),
(default, 'yash', 'yash@gmail.com', '7976976979', 'test', 'test'),
(default, 'Jashandeep', 'jashandeep@gmail.com', '7697967967', 'final', 'final'),
(default, 'Yuvraj', 'yuvraj@gmail.com', '7898797696', 'demo', 'demo');

DROP TABLE IF EXISTS feedback;
CREATE TABLE feedback (
  fid int(50) NOT NULL auto_increment PRIMARY KEY,
  fname varchar(50) NOT NULL,
  fcontact varchar(20) NOT NULL,
  fdescription varchar(300) NOT NULL
);

INSERT INTO feedback (fid, fname, fcontact, fdescription) VALUES
(default,'yuvraj', 5565566665, 'Magicbricks made my life easy. It helped me with the search for my first ever investment i.e. 1BHK apartment in Mira Road. Thanks to the team for providing relevant tools like EMI calculator and smart search.');



ALTER TABLE property
  ADD PRIMARY KEY (pid);
  
ALTER TABLE user
  ADD PRIMARY KEY (uid);
  
ALTER TABLE contact
  ADD PRIMARY KEY (cid);
  
ALTER TABLE feedback
  ADD PRIMARY KEY (fid);