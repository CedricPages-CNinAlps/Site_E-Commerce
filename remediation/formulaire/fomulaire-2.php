
<html>
<body>


<form action="reception.php" method="post"><!-- on crée l'enveloppe du formulaire -->
    <div>
        <label for="">texte</label>
        <input type="text" name="input_text">
        <!-- le paramètre "name" permet d'envoyer la donnée avec ce nom -->


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

    <hr>

    <fieldset>
        <input type="checkbox" name="options[]" value="4"> <label for="">Option 4</label>
        <input type="checkbox" name="options[]" value="6"> <label for="">Option 6</label>
    </fieldset>

    <div>
        <button>Button 1</button>
    </div>

</form>

</body>
</html>