<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style type="text/css">
    #background {
        background-image: url(image1.jpg);
        padding: 100px;
    }

    #textbox {
        width: auto;
        height: 100px;
        opacity: 0.9;
        background-color: skyblue;
        padding: 10px;
    }

    #text {
        color: white;
    }

    .pagination {
        display: inline-block;

    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination a.active {
        background-color: skyblue;
        color: white;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }
    </style>
</head>

<body>

    <div id="background">
        <div id="textbox">
            <div id="text">
                <h1 align="center">PAEDIATRIC PHYSIOTHERAPY ASSESSMENT</h1>
            </div>
        </div>
    </div>
    <br>
    <br>
    <form>
        <table width="600" border="0" cellspacing="2" cellpadding="2">
            <tr>
                <td>1) Date</td>
                <td><input type="text" name="date" maxlength="50" /></td>
            </tr>
            <tr>
                <td>2) Name of the child</td>
                <td><input type="text" name="name" maxlength="50" /></td>
            </tr>
            <tr>
                <td>3) Date of Birth</td>
                <td><input type="text" name="birthdate" maxlength="50" /></td>
            </tr>
            <tr>
                <td>4) Address/Telephone Number</td>
                <td><input type="text" name="address" maxlength="120" /></td>
            </tr>
            <tr>
                <td>5) Patient Number</td>
                <td><input type="text" name="number" maxlength="20" /></td>
            </tr>
            <tr>
                <td>6) Referred By</td>
                <td><input type="text" name="referredby" maxlength="50" /></td>
            </tr>
            <tr>
                <td>7) Name of Therapist</td>
                <td><input type="text" name="therapistname" maxlength="50" /></td>
            </tr>

            <tr>
                <td>8) Medical Diagnosis</td>
                <td><input type="checkbox" name="msp" />Musculo Skeletal Problem
                    <input type="checkbox" name="np" />Neurological Problem
                    <input type="checkbox" name="ca" />Congenital abnormality
                    <input type="checkbox" name="syn" />Syndrom
                    <input type="checkbox" name="oth" />Other
                </td>
            </tr>
        </table>
        <br>
        <fieldset>
            <legend><b>History</b></legend>
            <br>
            <table width="600" border="0" cellspacing="2" cellpadding="2">
                <tr>
                    <td>Birth History:</td>
                    <td><textarea name="birthhistory" cols="45" rows="5" /></textarea></td>
                </tr>
                <tr>
                    <td>Past Medical History:</td>
                    <td><textarea name="birthhistory" cols="45" rows="5" /></textarea></td>
                </tr>
                <tr>
                    <td>Therapy History/Effects:</td>
                    <td><textarea name="birthhistory" cols="45" rows="5" /></textarea></td>
                </tr>
                <tr>
                    <td>Used Equipments:</td>
                    <td><textarea name="birthhistory" cols="45" rows="5" /></textarea></td>
                </tr>

            </table>
            <br>
            <fieldset>
                <legend><b>Family/Social Situation</b></legend>
                <br>
                <table width="600" border="0" cellspacing="2" cellpadding="2">
                    <tr>
                        <td>Father</td>
                        <td><textarea name="birthhistory" cols="45" rows="5" /></textarea></td>
                    </tr>
                    <tr>
                        <td>Mother</td>
                        <td><textarea name="birthhistory" cols="45" rows="5" /></textarea></td>
                    </tr>
                    <tr>
                        <td>Siblings</td>
                        <td><textarea name="birthhistory" cols="45" rows="5" /></textarea></td>
                    </tr>
                </table>
            </fieldset>
            <table width="600" border="0" cellspacing="2" cellpadding="2">
                <tr>
                    <td><b>Wishes/Concerns of the child and parents</b></td>
                    <td><textarea name="likesdislikes" cols="45" rows="5" /></textarea></td>
                </tr>
            </table>
            <br><br>
            <table width="600" border="0" cellspacing="2" cellpadding="2">
                <tr>
                    <td><b>Likes/Dislikes of the Child</b></td>
                    <td><input type="radio" name="choice" value="colourfultoys" />Colourful Toys</td>
                    <td><input type="radio" name="choice" value="noisytoys" />Noisy Toys</td>
                    <td><input type="radio" name="choice" value="other" />Other</td>
                </tr>

                <tr>
                    <td><b>Communication:Vocalisation</b></td>
                    <td><input type="radio" name="communication" value="oneword" />One Word</td>
                    <td><input type="radio" name="communication" value="twowords" />Two words</td>
                    <td><input type="radio" name="communication" value="sentence" />Sentence</td>
                </tr>

                <tr>
                    <td><b>Vision</b></td>
                    <td><input type="radio" name="vision" value="normal" />Normal</td>
                    <td><input type="radio" name="vision" value="affected" />Affected</td>
                </tr>

                <tr>
                    <td><b>Hearing</b></td>
                    <td><input type="radio" name="hearing" value="normal" />Normal</td>
                    <td><input type="radio" name="hearing" value="affected" />Affected</td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br>
    <br>
    <div class="pagination">


        <a class="active" href="form1.html">1</a>
        <a href="form2.html">2</a>
        <a href="form3.html">3</a>
        <a href="form4.html">4</a>
        <a href="form5.html">5</a>
        <a href="form6.html">6</a>

    </div>

</body>

</html>