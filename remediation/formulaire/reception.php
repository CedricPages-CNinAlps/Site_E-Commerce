<pre><?php

var_dump($_GET);

var_dump($_POST);



if(array_key_exists('input_text', $_POST)) {
    echo $_POST['input_text'];
}

if(array_key_exists('option1', $_POST)) {
    echo "Option 1 checked";
}
if(array_key_exists('option2', $_POST)) {
    echo "Option 2 checked";
}
if(array_key_exists('option3', $_POST)) {
    echo "Option 3 checked";
}


if(isset($_POST['options'])) {
    for($i = 0; $i < count($_POST['options']); $i++) {
        echo "Option ".$_POST['options'][$i]." checked";
    }
}

?></pre>