<?php

define('MIN_NUMBER', $argv[1]);
define('MAX_NUMBER', $argv[2]);

// Game gets a random number and counts number of guesses
$rand_number = mt_rand(MIN_NUMBER,MAX_NUMBER);
$counter = 1;
// Write the output sking user to pick a number
fwrite(STDOUT, 'Pick a number between ' . MIN_NUMBER . ' and ' . MAX_NUMBER .' ? ');

// Get the number from user
$guess = (int) fgets(STDIN);

while ($guess != $rand_number) {
	// If $guess is higher than $rand_number output
	if ($guess > $rand_number) {
		fwrite(STDOUT, "Lower\n");
	    $guess = (int) fgets(STDIN);
	    $counter++;
	}  
	else {
		// If $guess is lower than $rand_number output
        fwrite(STDOUT, "Higher\n");
    	$guess = (int) fgets(STDIN);
    	$counter++;
    }
}
// If $guess is equal to $rand_number output
fwrite(STDOUT, "#WINNING! It only took {$counter} tries!\n");

?>	
