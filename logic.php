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
    'macroevolution',
    'biogeography',
    'population',
    'gene',
    'dna',
    'mutation',
    'cline',
    'homozygous',
    'speciation',
    'polyploidy',
    'genus',
    'bacilli',
    'taxis',
    'methanogens',
    'biome'
);

// Biology word definitions
$bio_definitions = Array (
    'Carbohydrate component of plant cell walls.',
    'Extremely branched polymer of glucose.',
    'Steroid common in cell membranes, also in many hormones.',
    'Bases with a double-ring structure.',
    'Metabolic pathways that break down molecules, releasing energy.',
    'Evolutionary change above the species level.',
    'Geographic distribution of species.',
    'Group of individuals of the same species living in the same area.',
    'a unit of heredity that is transferred from a parent to offspring and is held to determine some characteristic of the offspring.',
    'deoxyribonucleic acid, a self-replicating material present in nearly all living organisms as the main constituent of chromosomes.',
    'Changes in the nucleotide sequence in DNA.',
    'A graded change in a trait along a geographic axis.',
    'An organism having a pair of identical alleles for a character, either dominant or recessive.',
    'Origin of new species and the source of biological diversity.',
    'In plants, the result of an extra set of chromosomes during cell division.',
    'First part of scientific name.',
    'Rod-shaped bacteria.',
    'Movement toward or away from a stimulus.',
    'Archaea that release methane, a greenhouse gas.',
    'Major types of ecological association that occupy broad geographic regions.'
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
