<?php
  include 'top.php';
  ?>

<main>
    <h1></h1>

    <section>
        <h2></h2>
        <p></p>
    </section>

    <section>
        <h3></h3>
        <figure class="rounded">
            <img class="rounded" alt="Boarding" src="image/snowboarding.jpg">
            <figcaption><cite><a href="https://www.vacationstravel.com/10-simple-snowboarding-tricks/vt-featured-size-35/"
            target="_blank">Aspiring Snowboard Trick</a></cite></figcaption>

        </figure>
    </section>


    <section>
        <h2></h2>
        <p></p>

        <ol>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

        </ol>
    </section>

    <section class=table>
        <h2>Snowboard Table</h2>
        <table>
            <caption>Skill level and Board sizing</caption>

            <tr>
                <th>Level</th>
                <th>Skills</th>
                <th>Board Size</th>
            </tr>
<?php
$sql = 'SELECT fldLevel, fldSkills, fldSize FROM tblBoardSize';
$statement = $pdo->prepare($sql);
$statement->execute();

$records = $statement->fetchAll();

foreach($records as $record){
    print '<tr>';
    print '<td>' . $record['fldLevel'] . '</td>';
    print '<td>' . $record['fldSkills'] . '</td>';
    print '<td>' . $record['fldSize'] . '</td>';
    print '<tr>' . PHP_EOL;
}
?>

            <tr>
                <td colspan="3">Source: <cite><a href="https://snowboardingprofiles.com/what-size-snowboard-do-i-need-the-critical-factors-for-snowboard-fit" 
                target="_blank">https://snowboardingprofiles.com/what-size-snowboard-do-i-need-the-critical-factors-for-snowboard-fit</a></cite></td>
            </tr>   
        </table>
    </section>

</main>

<?php
include 'footer.php';
?>