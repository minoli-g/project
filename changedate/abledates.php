


    <style type="text/css">
    #mainnotfixed {
        width:450px;
        margin:auto;
        padding: 90px;
        font-family:Verdana, sans-serif;
		color:darkblue;
		text-align:center;
    }
    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff));
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4)
    }
    
    input[type="date"]
    {
        padding: 8px 6px;
        height: 22px;
        width:280px;
    }
    input[type="date"]:focus
     {
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    input[type="submit"]{
        background:lightblue;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: black;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
	input[type="button"]{
        background:lightblue;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: black;
        cursor: pointer;
        font-size: 11px;
        margin: 5px 0;
        padding: 3px 17px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
   
</style>
    <div id="mainnotfixed">
        <form action="" method="post">
            <fieldset>
                <legend>Change Date</legend>
                <div>
                    <h3>Select the time period you want to have your next appointment</h3>
                </div>
                
                <div>
                   <label><strong>From</strong></label><br><br>
				   <input type="date" name="from" autocomplete="off"/><br><br>
				   <label><strong>To</strong></label><br><br>
				   <input type="date" name="to" autocomplete="off"/><br><br><br>
                </div>   
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
				
				<input type="submit" name="for3" value="Search"/>
            </fieldset>    
        </form>
    </div>