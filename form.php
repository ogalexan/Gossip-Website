<?php
  include 'top.php';

  $experiences = array('First time', 'Beginner', 'Intermediate', 'Expert');

  $dataIsGood = false;
  $errorMessage = '';
  $experience = '';
  $name = '';
  $email = '';
  $song = '';
  $enthusiasm = '';
  $improvePark = 0;
  $improveSpeed = 1;
  $improveTurns = 0;
  $improveJumps = 0;

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
     
    $experience = getData('lstExperiences');
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

    if($experience == ''){
        $errorMessage .= '<p class="mistake">Please choose an experience level</p>';
        $dataIsGood = false;
    }elseif(!in_array($experience, $experiences)){
        $errorMessage .= '<p class="mistake">Please choose an experience level</p>';
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
    }elseif(!verifyAlphaNum($name)){
        $errorMessage .= '<p class="mistake">Your song contains invalid characters, please use letters</p>';
        $dataIsGood = false;
    }

    if ($enthusiasm != "Definitely" AND $enthusiasm != "Interested" AND $enthusiasm != "Soon to be"){
        $errorMessage .= '<p class="mistake">Please let us know enthusiastic you are about Snowboarding!</p>';
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
        $sql = 'INSERT INTO tblSnowboardSurvey
        (fldExperience, fldName, fldEmail, fldSong, fldEnthusiast, fldPark, fldSpeed, fldTurns, fldJumps)';
        $sql .= ' VALUES (?,?,?,?,?,?,?,?,?)';

        $data = array($experience, $name, $email, $song, $enthusiasm, $improvePark, $improveSpeed, $improveTurns, $improveJumps);

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

<main>
    <h1>Mostly For Our Benefit...</h1>
    <section>
        <figure class="rounded">
            <img class="rounded" alt="Boarder in Air"
            src="image/snowboarding.jpg">
            <figcaption><cite>Boarder Mid Air</cite></figcaption>
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

        <form action="#" id="ExperienceLvl" method="post">

            <fieldset class="listbox">
                <legend>Experience Level</legend>
                <p>
                    <select id="lstExperiences" name="lstExperiences" tabindex="120">
                        <option 
                        <?php if($experience == "First time") print 'selected'; ?>
                        value="First time">First time</option>
                        <option 
                        <?php if($experience == "Beginner") print 'selected'; ?>
                        value="Beginner">Beginner</option>
                        <option 
                        <?php if($experience == "Intermediate") print 'selected'; ?>
                        value="Intermediate">Intermediate</option>
                        <option 
                        <?php if($experience == "Expert") print 'selected'; ?>
                        value="Expert">Expert</option>
                    </select>
                </p>
            </fieldset>

            <fieldset class="textarea">
                <p>
                    <label for="txtExperience"> Tell us what you are missing, are they're any 
                        snowboarding tips and tricks we missed. Do you have any questions?</label>
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
                    tabindex="300" type="text" values="<?php print $name; ?>"required>
                </p>

                <p>
                    <label class="required" for="txtEmail">Email</label>
                    <input id="txtEmail" maxlength="30"
                    name="txtEmail" onfocus="this.select()"
                    tabindex="305" type="text" values="<?php print $email; ?>" required>
                </p>

                <p>
                    <label class="required" for="txtSong">Your song of choice cruising down the mountain</label>
                    <input id="txtSong" maxlength="30"
                    name="txtSong" onfocus="this.select()"
                    tabindex="310" type="text" value="<?php print $song; ?>" required>
                </p>
            </fieldset>

            <fieldset class="radio">
                <legend>How excited are you for the 2023 MET Gala</legend>
                <p>
                    <input type="radio" id="radEnthusiastDefinitely"
                    name="radEnthusiast" value="Definitely" tabindex="410" 
                    <?php if($enthusiasm == "Definitely") print 'checked'; ?>
                    required>
                    <label class="radio-field"
                    for="radEnthusiastDefinitely">Definitely</label>
                </p>

                <p>
                    <input type="radio" id="radEnthusiastInterested"
                    name="radEnthusiast" value="Interested" tabindex="420" 
                    <?php if($enthusiasm == "Interested") print 'checked'; ?>
                    required>
                    <label class="radio-field"
                    for="radEnthusiastInterested">Interested</label>
                </p>

                <p>
                    <input type="radio" id="radEnthusiastSoontobe"
                    name="radEnthusiast" value="Soon to be" tabindex="430" 
                    <?php if($enthusiasm == "Soon to be") print 'checked'; ?>
                    required>
                    <label class="radio-field"
                    for="radEnthusiastSoontobe">Soon to be</label>
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