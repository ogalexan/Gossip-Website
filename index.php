<!DOCTYPE HTML> 
<html lang="en">
<head>
<meta charset="UTF-8">
<title> CS 008-A Spring 2023 </title>
<meta name="Rachel Amster" content="How good is Vermont at Recycling">
<link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
</head>

<head>
     <style>
            /* basic CSS */
            body {
                margin: auto;
                padding: 3%;
                width: 90%;
            }

            figure {
                border: thin solid darkslategray;
                border-radius: 3%;
                padding: 3%;
                text-align: center;
            }

            figcaption {
                color: #839e99;
                font-style: italic;
                text-align: center;
            }

            img{
                border-radius: 3%;
                max-width: 100%
            }

            .right{
                float: right;
                margin-left: 3%;
            }

            .small {
                width: 20%;
            }
            
            /* Setting up a grid layout for the main inded page */
            .header{
                grid-area: header;
                grid-column: 1 / 3;
                padding: .5%;
                margin: .5%;
            }  
            .public-files{
                grid-area: public-files;
                padding: .5%;
                margin: .5%;
            }

            .supporting-files{
                grid-area: supporting-files;
                padding: .5%;
                margin: .5%;
            }
            .grader-notes{
                grid-area: grader-notes;
                padding: .5%;
                margin: .5%;
            }
            .grid-layout{
                border-bottom: thin dashed navy;
                display: inline-grid;
                grid-template-columns: 25% 25% 50%;
                grid-template-areas: "header header header"
                    "public-files supporting-files grader-notes"; 
                padding: .5%;
                margin: .5%;
                width: 100%;    
            }

        </style>
    </head>
<main>
        <figure class="right small">
            <img alt="Rachel Amster Africa- 2022" src="images/rachel-amster.jpg">
            <figcaption>My first time visiting Africa. </figcaption>
        </figure>

        <h1>CS 008 A-</em> Spring 2023</h1>
        <h2>Rachel Amster - Site map</h2>
        <p><a href="ADMIN/">My Admin Folder</a></p>
        <p><a href="ADMIN/table-viewer.php?getDatabase">Database Viewer</a></p>

        <section class="grid-layout">
            <h2 class="header">Final Project.</h2>
            <section class="public-files">
            <h3>Public Files</h3>
                <p><a href="final/detail.php">detail.php</a></p> 
                <p><a href="final/form.php">form.php</a></p> 
                <p><a href="final/index.php">index.php</a></p>
                <p><a href="final/array.php">array.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="final/css/custom.css">custom.css</a> </p>
                <p><a href="final/css/custom-phone.css">custom-phone.css</a> </p>
                <p><a href="final/css/custom-tablet.css">custom-tablet.css</a> </p>
                <p><a href="final/DB-SQL-Statements.png">D8 SQL Statements</a></p>
                <p><a href="final/DB-records.png">D8 records</a></p>
                <p><a href="final/footer.php">footer.php</a></p>
                <p><a href="final/header.php">header.php</a></p>
                <p><a href="final/nav.php">nav.php</a></p>
                <p><a href="final/top.php">top.php</a></p>
                <p><a href="final/images/wireframe-desktop.png">wireframe desktop</a></p>
                <p><a href="final/images/wireframe-phone.png">wireframe phone</a></p>
                <p><a href="final/images/wireframe-tablet.png">wireframe tablet</a></p>
                <p><a href="final/images/phpMyAdmin-screenshot.png">MyAdmin screenhot</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Nine - Saving forms data.</h2>
            <section class="public-files">
            <h3>Public Files</h3>
                <p><a href="lab9/detail.php">detail.php</a></p> 
                <p><a href="lab9/form.php">form.php</a></p> 
                <p><a href="lab9/index.php">index.php</a></p>
                <p><a href="lab9/array.php">array.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab9/css/custom.css">custom.css</a> </p>
                <p><a href="lab9/css/custom-phone.css">custom-phone.css</a> </p>
                <p><a href="lab9/css/custom-tablet.css">custom-tablet.css</a> </p>
                <p><a href="lab9/DB-SQL-Statements.png">D8 SQL Statements</a></p>
                <p><a href="lab9/DB-records.png">D8 records</a></p>
                <p><a href="lab9/footer.php">footer.php</a></p>
                <p><a href="lab9/header.php">header.php</a></p>
                <p><a href="lab9/nav.php">nav.php</a></p>
                <p><a href="lab9/top.php">top.php</a></p>
                <p><a href="lab9/images/wireframe-desktop.png">wireframe desktop</a></p>
                <p><a href="lab9/images/wireframe-phone.png">wireframe phone</a></p>
                <p><a href="lab9/images/wireframe-tablet.png">wireframe tablet</a></p>
                <p><a href="lab9/images/phpMyAdmin-screenshot.png">MyAdmin screenhot</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Eight - Database to display data.</h2>
            <section class="public-files">
            <h3>Public Files</h3>
                <p><a href="lab8/detail.php">detail.php</a></p> 
                <p><a href="lab8/form.php">form.php</a></p> 
                <p><a href="lab8/index.php">index.php</a></p>
                <p><a href="lab8/array.php">array.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab8/css/custom.css">custom.css</a> </p>
                <p><a href="lab8/css/custom-phone.css">custom-phone.css</a> </p>
                <p><a href="lab8/css/custom-tablet.css">custom-tablet.css</a> </p>
                <p><a href="lab8/DB-SQL-Statements.png">D8 SQL Statements</a></p>
                <p><a href="lab8/DB-records.png">D8 records</a></p>
                <p><a href="lab8/footer.php">footer.php</a></p>
                <p><a href="lab8/header.php">header.php</a></p>
                <p><a href="lab8/nav.php">nav.php</a></p>
                <p><a href="lab8/top.php">top.php</a></p>
                <p><a href="lab8/images/wireframe-desktop.png">wireframe desktop</a></p>
                <p><a href="lab8/images/wireframe-phone.png">wireframe phone</a></p>
                <p><a href="lab8/images/wireframe-tablet.png">wireframe tablet</a></p>
                <p><a href="lab8/images/phpMyAdmin-screenshot.png">MyAdmin screenhot</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Seven - Arrays and Includes.</h2>
            <section class="public-files">
            <h3>Public Files</h3>
                <p><a href="lab7/detail.php">detail.php</a></p> 
                <p><a href="lab7/form.php">form.php</a></p> 
                <p><a href="lab7/index.php">index.php</a></p>
                <p><a href="lab7/array.php">array.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab7/css/custom.css">custom.css</a> </p>
                <p><a href="lab7/images/wireframe.png">Laptop wireframe</a></p>
                <p><a href="lab7/images/wireframe-tablet.png">Tablet wireframe</a></p>
                <p><a href="lab7/images/wireframe-phone.png">Phone wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Six - Responsive design.</h2>
            <section class="public-files">
            <h3>Public Files</h3>
                <p><a href="lab6/detail.php">detail.php</a></p> 
                <p><a href="lab6/form.php">form.php</a></p> 
                <p><a href="lab6/index.php">index.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab6/css/custom.css">custom.css</a> </p>
                <p><a href="lab6/images/wireframe.png">Laptop wireframe</a></p>
                <p><a href="lab6/images/wireframe-tablet.png">Tablet wireframe</a></p>
                <p><a href="lab6/images/wireframe-phone.png">Phone wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Five - Adding more style.</h2>
            <section class="public-files">
            <h3>Public Files</h3>
                <p><a href="lab5/detail.php">detail.php</a></p> 
                <p><a href="lab5/form.php">form.php</a></p> 
                <p><a href="lab5/index.php">index.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab5/css/custom.css">custom.css</a> </p>
                <p><a href="lab5/images/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        
        <section class="grid-layout">
            <h2 class="header">Lab Four - Styling your site.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab4/detail.php">detail.php</a></p> 
                <p><a href="lab4/form.php">form.php</a></p> 
                <p><a href="lab4/index.php">index.php</a></p> 
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab4/css/custom.css">custom.css</a> </p>
                <p><a href="lab4/images/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Three - Adding detail and a form.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <nav>
                <p><a href="lab3/index.php">index.php</a></p>
                <p><a href="lab3/detail.php">detail.php</a></p>
                <p><a href="lab3/form.php">form.php</a></p>
                </nav>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab3/css/custom.css">custom.css</a></p>
                <p><a href="lab3/images/wireframe.png">wireframe.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
        </main>

        <section class="grid-layout">
            <h2 class="header">Lab Two - Choosing your topic.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab2/index.php">index.php</a></p>      
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2>Lab one - Setting up your sitemap.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="demo.php">Testing Page</a></p>      
            </section>
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>
    </body>
</html>