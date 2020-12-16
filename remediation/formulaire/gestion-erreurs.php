
<form action="gestion-erreurs-destination.php" method="post"><!-- on crée l'enveloppe du formulaire -->
    <div>
        <label for="">texte</label>
        <input type="text" name="input_text" >

        <?php if(array_key_exists('input_text_not_valid', $_GET)) { echo "LE champ n'est pas valid"; }  ?>

        <!-- le paramètre "name" permet d'envoyer la donnée avec ce nom -->
        <button>valid</button>
    </div>
</form>