<?php
  include 'top.php';
  ?>

<main>
    <h1>Drama on the Hill</h1>

    <section>
        <h2></h2>
        <p></p>
    </section>

    <section>
        <h3></h3>
        <figure class="rounded">
            <img class="rounded" alt="Oscar Isaac" src="images/show-me.jpg">
            <figcaption><cite><a href="https://www.pastemagazine.com/tv/tv-politics/the-best-political-tv-shows-of-all-time"
            target="_blank">Oscar Isaac starring in Show Me a Hero</a></cite></figcaption>
        </figure>
    </section>


    <section>
        <h2>Looking for a new political drama?</h2>
        <p>Here's a list of some classic political movies and tv shows.</p>

        <ol>
            <li>Veep</li>
            <li>The West Wing</li>
            <li>The Wire</li>
            <li>Parks and Recreation</li>
            <li>The Good Fight</li>
            <li>House of Cards</li>
            <li>Deadwood</li>
            <li>The Expanse</li>
            <li>Battlestar Galactica</li>
            <li>Show Me a Hero</li>

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