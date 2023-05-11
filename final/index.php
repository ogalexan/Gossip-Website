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


    <h1>Drama on the Hill</h1>
    
    <main>
    <section>
        <h2>Depiction of Politics in Film</h2>
        <p>Politics has played a role in movies since the dawn of cinema. They play a key role in the story line for films of all types and often reflect where we are as a nation. Political films portray various society conditions and partisan perspectives. Normally,people are drawn to political films because they are a reflection of the society we live in.</p> 
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
            <ol>
                <li>Betrayed by the White House, Congressman Frank Underwood embarks on a ruthless rise to power. Blackmail, seduction and ambition are his weapons.</li>
            </ol>
            <li>Deadwood</li>
            <ol>
                <li>"Deadwood" is set in a mining town that was not part of any U.S. state or territory in the post-Civil War years, and thus was literally lawless.</li>
            </ol>
            <li>The Expanse</li>
            <ol>
                <li>Rising tensions between Earth and Mars have put them on the brink of war. Against this backdrop, a hardened detective and a rogue ship's captain come together to investigate the case of a missing young woman</li>
            </ol>
            <li>Battlestar Galactica</li>
            <ol>
                <li>This update of the late-1970s programme takes a decidedly darker tone as what's left of humankind struggles for survival against the robot Cylons, who have killed millions</li>
            </ol>
            <li>Show Me a Hero</li>
            <ol>
                <li>Tells the story of how civil rights violations tear apart Yonkers, N.Y., paralyze the municipal government, and forever change the lives of a rising politician and his constituents</li>
            </ol>
            <li>Designated Survivor</li>
            <ol>
                <li>A low-level Cabinet member becomes President of the United States after a catastrophic attack kills everyone above him in the line of succession.</li>
            </ol>
            <li>The Diplomat</li>
            <ol>
                <li>Amid an international crisis, a career diplomat juggles her new high-profile job as ambassador to the UK and her turbulent marriage.</li>
            </ol>


        </ol>
    </section>

    <section>
    <h2>Some greatest <?php print count($actorsTable); ?> hits</h2>
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

<section>
        <h3></h3>
        <figure class="rounded">
            <img class="rounded" alt="Veep" src="images/veep.jpg">
            <figcaption><a
            target="_blank">Veep Propaganda</a></figcaption>
        </figure>
    </section>

</main>

<?php
include 'footer.php';
?>