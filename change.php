php<?php

// Core Initialization
require_once 'core/init.php';

// Header
include 'includes/header1.php';
?>
<link rel="stylesheet" type="text/css" href="css/changeDate1.css">

<div class=mainnotfixed>
    <div id="mainnotfixed">
        <form action="datechg.php" method="post">
            <fieldset>
                <legend>Change Date</legend>
                <div>
                    <h3><u>Your current appointment Details</u></h3>
                    <label>Assigned Physiotherapist</label><br><br>
                    <p><i>Physiotherapist</i></p><br><br>
                    <label>Assigned Date</label><br><br>
                    <p><i>Date</i></p>
                </div>
                <div>
                    <p><strong>Changing the appointment date will cancel your current appointment date!</strong>
                        <p>
                </div>
                <h4>Do you want to continue?</h4>
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                <input type="submit" name="for2" value="Yes" />
                <input type="submit" name="for2" value="No" />
            </fieldset>
        </form>
    </div>
</div>