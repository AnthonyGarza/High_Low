<?php

// Game gets a random number and counts number of guesses
$rand_number = mt_rand(1,100);
$counter = 1;
// Write the output sking user to pick a number
fwrite(STDOUT, 'Pick a number between 1-100? ');

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
fwrite(STDOUT, "#Winner! It only took {$counter} tries!\n");

?>	
