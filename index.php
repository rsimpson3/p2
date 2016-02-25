<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Digital BioLab Password Generator</title>
        <link rel='stylesheet' href='styles.css' type='text/css'>
        <?php require 'logic.php'; ?>
    </head>
    <body>
        <div class="wrapper">
            <h1>Digital BioLab Password Generator</h1>
            <div class="pwdbox">
                <table id="passwords" class="center">
                    <tr>
                        <?php
                        if ($word_count >= 2 AND $word_count < 7 AND is_numeric($word_count)) {
                            $rand_keys = array_rand($bio_passwords, $word_count);
                            foreach ($rand_keys AS $keys => $value) { ?>
                                <td> <?php echo $bio_passwords[$value]; ?> </td> <?php
                            }
                            if (array_key_exists('number', $_GET)) { ?>
                                <td> <?php echo $random_num; ?> </td>
                            <?php }
                            if (array_key_exists('symbol', $_GET)) { ?>
                                <td> <?php echo $symbol_array[$symbol_key]; ?> </td> <?php
                            }
                        }
                        elseif ((empty($word_count )) || !(is_numeric($word_count))) {
                            echo "Missing number"; ?> <br> <?php
                            $message = 'Please enter a number: 2-6. ';
                            echo $message;
                        } ?>
                    </tr>
                </table>

            </div>
            <!-- show/hide class if valid entry needed -->
            <p class="pwdfeedback">
                My password has <?php echo $word_count ?> words.

            </p>

            <form action="index.php" method="GET">
                <label for='number_of_words'># of Words</label>
                <input maxlength=1 type='text' name='number_of_words' id='number_of_words' value=''>  (Max 6)
    				<br>
                Add a number <input type="checkbox" name='number'> <br>
                Add a symbol <input type="checkbox" name='symbol'> <br>
                <input type='submit' value='Synthesize My Password'>
            </form
        </div>

    </body>
</html>
