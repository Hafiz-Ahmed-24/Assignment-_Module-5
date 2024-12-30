<?php

// array of strings:
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($str) {
    // Define the vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    // Initialize the vowel count
    $vowelCount = 0;

    // Loop through each character in the string
    for ($i = 0; $i < strlen($str); $i++) {
        // If the character is a vowel, increment the count
        if (in_array($str[$i], $vowels)) {
            $vowelCount++;
        }
    }

    // Return the total number of vowels
    return $vowelCount;
}

// Loop through each word in the array and count vowels
foreach ($strings as $word) {
    $vowelCount = countVowels($word);
    $rev = strrev($word);
    echo "Original String : $word, Vowel Count : $vowelCount vowels, Reversed String: $rev.<br>";
}









