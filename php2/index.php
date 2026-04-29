<!DOCTYPE html>
<head>
    <title>Medical experiment</title>
</head>
<body>


<?php
$points = 0;
if (isset($_GET["organ"])) {
    if (isset($_GET["consent"])) {
        if (isset($_GET["will"])) {
            if (isset($_GET["responsible"])) {
                echo "<h1>No matter the consequences, since you affirmatively said '" . $_GET["consent"] . "' of your own free will (" . $_GET["will"] . "), your '" . $_GET["organ"] . "' has been transplanted successfully. You may experience short term nausea, pain or death.</h1>";
            }
            else {
                echo "<h1>Since you affirmatively said '" . $_GET["consent"] . "' of your own free will (" . $_GET["will"] . "), your '" . $_GET["organ"] . "' has been transplanted successfully. You may experience short term nausea, pain or death.</h1>";
            }
            }
            
        else {
            if (isset($_GET["responsible"])) {
                echo "<h1>No matter the consequences, since you affirmatively said '" . $_GET["consent"] . "', your '" . $_GET["organ"] . "' has been transplanted successfully. You may experience short term nausea, pain or death.</h1>";
            }
            else {
                echo "<h1>Since you affirmatively said '" . $_GET["consent"] . "' of your own free will (" . $_GET["will"] . "), your '" . $_GET["organ"] . "' has been transplanted successfully. You may experience short term nausea, pain or death.</h1>";
            }
        }
    
}
else {
        if (isset($_GET["responsible"])) {
            echo "<h1>No matter the consequences, your '" . $_GET["organ"] . "' has been transplanted successfully. You may experience short term nausea, pain or death.</h1>";
        }
        else {
            echo "<h1>Your '" . $_GET["organ"] . "' has been transplanted successfully. You may experience short term nausea, pain or death.</h1>";
        }
}
}
else{
     echo "<h1>Why have you come here when you do not need a surgery?</h1>";
     };

if ($_GET["consent"] == "yes" or $_GET["consent"] == "Yes") {$points ++;
};
if ($_GET["will"] == "yes" or $_GET["will"] == "Yes") {$points ++;
};
if ($_GET["responsible"] == "yes" or $_GET["responsible"] == "Yes") {$points ++;
};
echo "<h1>You have been rated by our services " . $points . "/3. </h1>";
?>



<form>
    <label>Do you consent to the surgery?</label>
    <input type="text" name="consent">
    <br>
    <label>Are you doing so of your own free will?</label>
    <input type="text" name="will">
    <br>
    <label>Do you acknowledge that no matter the result, we cannot be held accountable?</label>
    <input type="text" name="responsible">
    <br>
    <label>What should we change?</label>
    <input type="text" name="organ">
    <br>
    <button>Send</button>
</form>
</body>
</html>
