<?php
include 'top.php';
?>
<main> 
<h1>SQL</h1>

<h2>Create table lab 9 form</h2>
<pre>
CREATE TABLE tblActorActress(
    pmkActorActress INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fldMetGlam varchar(30) DEFAULT NULL,
    fldAnyGos varchar(30) DEFAULT NULL,
    fldFirstName varchar(50) DEFAULT NULL,
    fldEmail varchar(40),
    fldDrive varchar(40),
    fldExcitment varchar(15)
    fldFashionTrends tinyint(1),
    fldLoveInterests tinyint(1),
    fldMusicScene tinyint(1),
    fldCapitolHill tinyint(1)
)
</pre>

<h2>Insert record</h2>
<pre>
INSERT INTO tblRecyclingInVermont  
    (fldMetGlam, fldAnyGos, fldFirstName, fldEmail, fldDrive, fldExcitment, fldFashionTrends, fldLoveInterests, fldMusicScene, fldCapitolHill)
VALUES
    ('Florence Pugh', 'Nope!','Rachel','ramster@uvm.edu','Low by SZA','So excited','Fashion Trends')
</pre>
 
<pre>
CREATE TABLE tblNewestTrends (
    pmkNewestTrends INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fldYear varchar(10),
    fldFit varchar(30),
    fldPairing varchar(30),
    fldSeason varchar(30),
)
</pre>

<h2>Insert Data</h2>
<pre>
INSERT INTO tblNewestTrends (fldYear, fldFit, fldPairing, fldSeason) VALUES
('1970', 'Crochet Set','Sandals or sneakers, very versatile', 'Summer'),
('1990', 'Flared yoga pants','Sneakers','Fall, Winter, Spring'),
('1980','Parachute pants','Sneakers or even some heels for a night out','Fall, Winter, Spring'),
('2000','Ugg Boots','Anything! Maybe some flared pants could look cute', 'Fall and Winter'),
('1990','Juicy Couture','A pair of jeans', 'Winter')
</pre>

<h2>Select records</h2>
<pre>
SELECT fldYear, fldFit, fldPairing, fldSeason FROM tblNewestTrends
</pre>