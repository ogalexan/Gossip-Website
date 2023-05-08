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
 
</main>
<?php
include 'footer.php'; 
?>