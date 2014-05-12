<?php

// Game gets a random number
$rand_number = rand(1,100);

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'Pick a number between 1-100? ');

// Get the number from user
$guess = (int) fgets(STDIN);

while ($guess != $rand_number) {
	// If $guess is higher than $rand_number output
	if ($guess > $rand_number) {
		fwrite(STDOUT, "Lower\n");
	    $guess = (int) fgets(STDIN);
	}  
	else {
		// If $guess is lower than $rand_number output
        fwrite(STDOUT, "Higher\n");
    	$guess = (int) fgets(STDIN);
    }
}
// If $guess is equal to $rand_number output
fwrite(STDOUT, "#Winner\n");
 	

?>