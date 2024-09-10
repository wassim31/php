
<?php
if (isset($_POST["question"])) {
    $value = (int) $_POST["question"];
    if ($value == 25) {
        echo "congrats you got it";
    } else {
        echo "false";
    }
}
/*if (isset($_GET["string"])) {
        $string = rtrim(trim(htmlspecialchars($_GET["string"])));
        $email = " hi wassim@gmail.com 4";
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        $counter = 1;
        for ($i = 0; $i < strlen($string); $i++) {
            if ($string[$i] == " ") {
                $counter++;
            }
        }
        echo "number of words" . +$counter;
    }
    */
?>
