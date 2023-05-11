<?php
  include 'top.php';

  $metnames = array('Florence Pugh', 'Kim K', 'Jacob Elordi', 'Rihanna');

  $dataIsGood = false;
  $errorMessage = '';
  $met = '';
  $name = '';
  $email = '';
  $song = '';
  $enthusiasm = '';
  $seeFashion = 0;
  $seeLove = 1;
  $seeMusic = 0;
  $seeCapitol = 0;

  function getData($field){
    if (!isset($_POST[$field])) {
        $data = "";
    } else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
  }
function verifyAlphaNum($testString) {
    return (preg_match ("/^([[:alum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    print PHP_EOL . '<!-- Starting Sanitiation -->' . PHP_EOL;
     
    $met = getData('lstMET');
    $name = getData('txtFirstName');
    $email = getData('txtEmail');
    $song = getData('txtSong');
    $enthusiasm = getData('radEnthusiast');

    $seeFashion = (int) getData('chkFashion');
    $seeLove = (int) getData('chkLove');
    $seeMusic = (int) getData('chkMusic');
    $seeCapitol = (int) getData('chkCapitol');
    
    print PHP_EOL . '<!-- Starting Validation -->' . PHP_EOL;
    $dataIsGood = true;

    if($met == ''){
        $errorMessage .= '<p class="mistake">Please choose how enthusiastic you are</p>';
        $dataIsGood = false;
    }elseif(!in_array($met, $metnames)){
        $errorMessage .= '<p class="mistake">Please choose how enthusiastic you are</p>';
        $dataIsGood = false;
    } 
    if($name == ''){
        $errorMessage .= '<p class="mistake">Please tell us your name</p>';
        $dataIsGood = false;
    }elseif(!verifyAlphaNum($name)){
        $errorMessage .= '<p class="mistake">Your name contains invalid characters, please use letters</p>';
        $dataIsGood = false;
    }
    if($email == ''){
        $errorMessage .= '<p class="mistake">Please type in your email</p>';
        $dataIsGood = false;
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMessage .= '<p class="mistake">Your email contains invalid characters</p>';
        $dataIsGood = false;
    }
    if($song == ''){
        $errorMessage .= '<p class="mistake">Please enter your song</p>';
        $dataIsGood = false;
    }elseif(!verifyAlphaNum($song)){
        $errorMessage .= '<p class="mistake">Your song contains invalid characters, please use letters</p>';
        $dataIsGood = false;
    }

    if ($enthusiasm != "Icantwait" AND $enthusiasm != "Ehnotthatexcited" AND $enthusiasm != "Couldntcareless"){
        $errorMessage .= '<p class="mistake">Please let us know enthusiastic you are about the 2023 Met Gala!</p>';
        $dataIsGood = false;
    }

    $totalChecked = 0;

    if($seeFashion != 1)$seeFashion = 0;
    $totalChecked += $seeFashion;

    if($seeLove != 1)$seeLove = 0;
    $totalChecked += $seeLove;

    if($seeMusic != 1)$seeMusic = 0;
    $totalChecked += $seeMusic;

    if($seeCapitol != 1)$seeCapitol = 0;
    $totalChecked += $seeCapitol;
    
    if($totalChecked == 0) {
        $errorMessage .= '<p class="mistake">Please choose at least one checkbox that describes you.</p>';
        $dataIsGood = false;
    }

    print '<!-- Starting Saving -->';
    if($dataIsGood) {
        $sql = 'INSERT INTO tblCelebritySurvey
    (fldMetGlam, fldAnyGos, fldFirstName, fldEmail, fldDrive, fldExcitment, fldFashionTrends, fldLoveInterests, fldMusicScene, fldCapitolHill)';
    $sql .= ' VALUES (?,?,?,?,?,?,?,?,?)';


        $data = array($met, $experience, $name, $email, $song, $enthusiasm, $seeFashion, $seeLove, $seeMusic, $seeCapitol);

        try{
            $statement = $pdo->prepare($sql);
            if($statement->execute($data)){
                $message .= '<h2>Thank you</h2>';
                $message .= '<p>Your information was successfully saved.</p>';
            } else {
                $message .= '<p>Record was NOT successfully saved.</p>';
            }
        } catch(PDOException $e){
                $message .= '<p>Something went wrong :/ We\re on it!</p>';
        }
        
    }
}

?>

     <h1>Mostly For Our Benefit...</h1>
     <main>
    <section>
        <figure class="rounded">
            <img class="rounded" alt="Faces you should know"
            src="images/hollywood.jpg">
            <figcaption><cite></cite></figcaption>
        </figure>
        <h2>Survey</h2>
        <p>We want to hear from our readers!</p>   
    </section>

    <section>
        <h2>Thank you!</h2>
        <?php
        print $messages;
        print $errorMessage;

        print '<p>Post Array:</p>';
        print_r($_POST);
        print '</pre>';
        ?>
    </section>

    <section>
        <h2></h2>

        <form action="#" id="METLvl" method="post">

            <fieldset class="listbox">
                <legend>Whose MET Glam are you most hype to see</legend>
                <p>
                    <select id="lstMET" name="lstMET" tabindex="120">
                        <option 
                        <?php if($met == "Florence Pugh") print 'selected'; ?>
                        value="Florence Pugh">Florence Pugh</option>
                        <option 
                        <?php if($met == "Kim K") print 'selected'; ?>
                        value="Kim K">Kim K</option>
                        <option 
                        <?php if($met == "Jacob Elordi") print 'selected'; ?>
                        value="Jacob Elordi">Jacob Elordi</option>
                        <option 
                        <?php if($met == "Rihanna") print 'selected'; ?>
                        value="Rihanna">Rihanna</option>
                    </select>
                </p>
            </fieldset>

            <fieldset class="textarea">
                <p>
                    <label for="txtExperience"> Got any fun Gos? We want to hear from you!</label>
                    <textarea id="txtExperience" name="txtExperience"
                    tabindex="200"><?php print $experience; ?></textarea>
                </p>
            </fieldset>

            <fieldset class="contact">
                <legend>What about you?</legend>
                <p>
                    <label class="required" for="txtFirstName">First Name</label>
                    <input id="txtFirstName" maxlength="30"
                    name="txtFirstName" onfocus="this.select()"
                    tabindex="300" type="text" values="<?php print $name; ?>" required>
                </p>

                <p>
                    <label class="required" for="txtEmail">Email</label>
                    <input id="txtEmail" maxlength="30"
                    name="txtEmail" onfocus="this.select()"
                    tabindex="305" type="text" values="<?php print $email; ?>" required>
                </p>

                <p>
                    <label class="required" for="txtSong">Your take a drive song</label>
                    <input id="txtSong" maxlength="30"
                    name="txtSong" onfocus="this.select()"
                    tabindex="310" type="text" value="<?php print $song; ?>" required>
                </p>
            </fieldset>

            <fieldset class="radio">
                <legend>How excited are you for the 2023 MET Gala</legend>
                <p>
                    <input type="radio" id="radEnthusiastIcantwait"
                    name="radEnthusiast" value= "I can't wait!" tabindex="410" 
                    <?php if($enthusiasm == "I can't wait!") print 'checked'; ?>
                    required>
                    <label class="radio-field"
                    for="radEnthusiastIcantwait">I can't wait!</label>
                </p>

                <p>
                    <input type="radio" id="radEnthusiastEhnotthatexcited"
                    name="radEnthusiast" value="Eh, not that excited" tabindex="420" 
                    <?php if($enthusiasm == "Eh, not that excited") print 'checked'; ?>
                    required>
                    <label class="radio-field"
                    for="radEnthusiastEhnotthatexcited">Eh, not that excited</label>
                </p>

                <p>
                    <input type="radio" id="radEnthusiastCouldntcareless"
                    name="radEnthusiast" value="Couldn't care less" tabindex="430" 
                    <?php if($enthusiasm == "Couldn't care less") print 'checked'; ?>
                    required>
                    <label class="radio-field"
                    for="radEnthusiastCouldntcareless">Couldn't care less</label>
                </p>


            </fieldset>

            <fieldset class="checkbox">
                <legend>What would you like to see more of?</legend>
                <p>
                    <input id="chkFashion" name="chkFashion" tabindex="510"
                    <?php if($seeFashion) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkFashion">Fashion Trends</label>
                </p>
                <p>
                    <input id="chkLove" name="chkLove" tabindex="520"
                    <?php if($seeLove) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkLove">Newest Love Interests</label>
                </p>
                <p>
                    <input id="chkMusic" name="chkMusic" tabindex="530"
                    <?php if($seeMusic) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkMusic">What's new in the Music Scene</label>
                </p>
                <p>
                    <input id="chkCapitol" name="chkCapitol" tabindex="540"
                    <?php if($seeCapitol) print 'checked'; ?>
                    type="checkbox" value="1">
                    <label for="chkCapitol">Capitol Hill Drama</label>
                </p>
            </fieldset>

            <fieldset class="buttons">
                <input id="btnSubmit" name="btnSubmit" tabindex="900"
                type="submit" value="Submit">
            </fieldset>
        </form>

    </section>

</main>

<?php
include 'footer.php';
?>

