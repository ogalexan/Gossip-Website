<?php
  include 'top.php';

$actorsTable = array(
    array('Jennifer Lawrence', 'Causeway', 'Don\'t Look Up', 'The Hunger Games'),
    array('Timothee Chalamet', 'Little Women', 'Lady Bird', 'Call Me By Your Name'),
    array('Paul Mescal', 'Carmen', 'The Lost Daughter', 'Normal People'),
    array('Kate Blanchett', 'Tar', 'Where\'d You Go Bernadette', 'Ocean\'s 8'),
    array('Angela Bassett', 'Black Panther: Wakanda Forever', 'Wendell & Wild ','Otherhood') 
);
?>


<main>
    <h1>Drama on the Hill</h1>

    <section>
        <h2>Depiction of Politics in Film</h2>
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

    <section>
    <h2>Newest <?php print count($actorsTable); ?> trends</h2>
        <table>
            <tr>
                <th>Your Fav Actor/Actress! </th>
                <th>Top Hits!</th>
                <th></th>
                <th></th>
            </tr>
    <?php
    foreach ($actorsTable as $actorTable) {
        print '<tr>';
        print '<td>' . $actorTable [0] . '</td>';
        print '<td>' . $actorTable [1] . '</td>';
        print '<td>' . $actorTable [2] . '</td>';
        print '<td>' . $actorTable [3] . '</td>';
        print '</tr>' . PHP_EOL;
    }
    ?>
            <tr>
                <td colspan="5"><cite>Data from IMbD<a href="https://www.imdb.com/news/ni63707932" target="blank">Editors Picks</cite></a>
            </tr>
    </table>
</section>

</main>

<?php
include 'footer.php';
?>