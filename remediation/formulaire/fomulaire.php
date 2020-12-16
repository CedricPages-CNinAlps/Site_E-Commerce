
<html>
<body>

<pre>GET : <?php var_dump($_GET); ?></pre>
<hr>
<pre>POST : <?php var_dump($_POST); ?></pre>




<form action="" method="post"><!-- on crée l'enveloppe du formulaire -->
    <div>
        <label for="">texte</label>
        <input type="text" name="input_text">
        <!-- le paramètre "name" permet d'envoyer la donnée avec ce nom -->

        <?php
        if(array_key_exists('input_text', $_POST)) {
            echo $_POST['input_text'];
        }
        ?>

    </div>

    <div>
        <label>Gender</label>
        <select name="input_select" id="">
            <option value="man">Homme</option>
            <option value="woman">Femme</option>
        </select>
    </div>

    <fieldset>
        <input type="checkbox" name="option1" value="oui"> <label for="">Option 1</label>
        <input type="checkbox" name="option2" value="oui"> <label for="">Option 2</label>
        <input type="checkbox" name="option3" value="oui"> <label for="">Option 3</label>
        <input type="checkbox" name="option4" value="oui"> <label for="">Option 4</label>
        <input type="checkbox" name="option5" value="oui"> <label for="">Option 5</label>
    </fieldset>
    <?php
        if(array_key_exists('option1', $_POST)) {
            echo "Option 1 checked";
        }
        if(array_key_exists('option2', $_POST)) {
            echo "Option 2 checked";
        }
        if(array_key_exists('option3', $_POST)) {
            echo "Option 3 checked";
        }

    ?>

    <hr>

    <fieldset>
        <input type="checkbox" name="options[]" value="4"> <label for="">Option 4</label>
        <input type="checkbox" name="options[]" value="6"> <label for="">Option 6</label>
    </fieldset>

    <?php
        if(isset($_POST['options'])) {
            for($i = 0; $i < count($_POST['options']); $i++) {
                echo "Option ".$_POST['options'][$i]." checked";
            }
        }
    ?>

    <div>
        <button name="button_1">Button 1</button>
        <button name="button_2">Button 2</button>

        <button name="button[]" value="1">Button 1</button>
        <button name="button[]" value="2">Button 2</button>

    </div>

</form>

</body>
</html>