<?php
include 'top.php';

$NewestTrends = array(
    array(1970, 'Crochet Set', 'Sandals or sneakers, very versatile', 'Summer'),
    array(1990, 'Flared yoga pants', 'Sneakers', 'Fall, Winter, Spring'),
    array(1980, 'Parachute pants', 'Sneakers or even some heels for a night out', 'Fall, Winter, Spring'),
    array(2000, 'Ugg Boots', 'Anything! Maybe some flared pants could look cute', 'Fall and Winter'),
    array(1990, 'Juicy Couture', 'A pair of jeans','Winter') 
);
?>

<main>
<section>
  <h2>Makin a Comeback</h2>
  <p>Hard to beleive that some of the most loved fashion trends are making a comeback. Crochet Sets! Flared yoga pants! Parachute pants! Ugg Boots! Juicy Couture! You name it.</p>

  <p>Fashion trends come and go, but it is hard to predict how long they will last.  There are several factors that may cause a trend to fade away including current fashion and popularity. However, trends always come back. Nowadays, designers are so often creating new variations of old themes or creating variations on a theme.</p>

  <p>Fashion is ever-changing. Celebrities and models are at the forefront of the fashion indistry. When individuals witness their favorite celebrity wearing a new look, they frequently desire to emulate them. Therefore, they seek out the newest clothing, shoes, jewelry, and so on—in order to seem like the individuals they wish to mimic. Check out some books about the evolution of fashion at <a href="https://editorialist.com/lifestyle/best-fashion-books/" target="blank">https://editorialist.com/lifestyle/best-fashion-books/</a> to learn more!</p>
</section>

<section>
    <h2>Trending in 2023</h2>
    <figure class="rounded">
    <img class="rounded" src="images/trends.jpg">
    <figcaption>Strut, strut, strut! <cite><a href="https://fushr.com/tag/2023-ss-fashion-trend-forecast/" target="blank">Fashion trend forecast</a></cite></figcaption>
</section>

<section>
<h2>Newest <?php print count($NewestTrends); ?> trends</h2>
    <table>
        <tr>
            <th>Year</th>
            <th>Fit</th>
            <th>Pairing</th>
            <th>Season</th>
        </tr>
    <?php
    foreach ($NewestTrends as $NewestTrend) {
        print '<tr>';
        print '<td>' . $NewestTrend [0] . '</td>';
        print '<td>' . $NewestTrend [1] . '</td>';
        print '<td>' . $NewestTrend [2] . '</td>';
        print '<td>' . $NewestTrend [3] . '</td>';
        print '</tr>' . PHP_EOL;
    }
    ?>
            <tr>
                <td colspan="5"><cite>Data from Vogue <a href="https://www.vogue.com/article/spring-2023-trends-editors-picks" target="blank">Editors Picks</cite></a>
            </tr>
    </table>
</section>

</main>
<?php
include 'footer.php';
?>