include ../header.php
<div class="mainnotfixed">
    <h1>Your current appoinment</h1>
    <h2>This will be cancelsed your current appoinment automatically</h2>
    <h3>Do you wish to proceed....</h3>
    <form class="" action="" method="post">
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <button type="submit" value="1" name="for2">Yes</button>
    <button type="submit" value="0" name="for2">No</button><br>
</form>
</div>
<div class='mainnotfixed' id="mainnotfixed">
        <form action="" method="post">
            <fieldset>
                <legend>Change Date</legend>
                <div>
                    <h3><u>Your current appointment Details</u></h3>
                    <label>Assigned Physiotherapist</label><br><br>
                    <input type="text" name="physiotherapist_name" autocomplete="off" /><br><br>
                    <label>Assigned Date</label><br><br>
                    <input type="date" name="date" autocomplete="off" />
                </div>
                <div>
                    <p><strong>Changing the appointment date will cancel your current appointment date!</strong>
                        <p>
                </div>
                <h4>Do you want to continue?</h4>
                <input type="submit" name="submit" value="Yes" />
                <input type="submit" name="submit" value="No" />
            </fieldset>
        </form>
    </div>