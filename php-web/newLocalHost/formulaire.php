<?php
    if (file_exists('head.php'))
    {
        include 'head.php';
    }
    else{
        echo'erreur';
    }
    echo'
    <div>Please complete thez form below. Mandatory fields marked <a class="etoile">*<br></div>
        <div id="formulaire">    
            <form action="" method= "get">
                <legend>Delivery Details</legend>
                <label for="GET-name">Name<a class="etoile">*</label>
                <input id= "GET-name" type= "text" name="name">    
            </form>
            <form action="" method="get">
                <label for="GET-address">Address<a class="etoile">*</label>
                <input id="GET-address" type= "text" name="address">
            </form>
            <form action="" method="get">
                <label for="GET-town/city">Town/City</label>
                <input id="GET-town/city" type = "text" name="Town/City">
            </form>
            <form action="" method="get">
                <label for="GET-country">Country<a class="etoile">*</label>
                <input id="GET-country" type= "text" name="Country">
            </form>
            <form action="" method="get">
                <label for="GET-postcode">Postcode<a class="etoile">*</label>
                <input id="GET-postcode" type = "text" name="Postcode">
            </form>
            <form action="" method="post">
                <fieldset>
                    <legend>Is this address also your invoice address?<a class ="etoile">*</legend>
                    <input type="radio" name="radio" id="radio"><label for="radio">Oui</label>
                    <input type="radio" name="radio2" id="radio2"><label for="radio2">Non</label>
                </fieldset>
            </form>
        </div>
    </body> 
</html>';