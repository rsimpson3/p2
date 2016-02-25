<?php

#server side validation of word count needed

$_GET;
echo '<pre>';
var_dump($_GET);
echo '</pre>';

print_r(array_values($_GET));

# formfield empty default to 4 words
$word_count = $_GET['number_of_words'];
echo "this is input no of words :" . $word_count;

// Biology Passwords Array
$bio_passwords = Array (
    'cellulose',
    'glycogen',
    'cholesterol',
    'purines',
    'catabolism',
    'evolution',
    'biogeography',
    'population',
    'gene',
    'dna',
    'mutation',
    'cline',
    'heterozygote',
    'speciation',
    'isolation',
    'genus',
    'bacilli',
    'taxis',
    'methanogens',
    'biome'
);

// Symbol array values
$symbol_array = Array (
    '!',
    '@',
    '#',
    '$',
    '%',
    '^',
    '&',
    '*'
);

//generate random symbol
$symbol_key = array_rand($symbol_array, 1);

// generate random number
$random_num = rand(1, 9);

?>
