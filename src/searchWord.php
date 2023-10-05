<?php

// Function to search if a word exists on the board
function searchWord($board, $word): bool
{
    // Get the number of rows and columns on the board
    $rows = count($board);
    $columns = count($board[0]);

    // Loop through each row and column of the board
    for ($i = 0; $i < $rows; $i++) {
        for ($a = 0; $a < $columns; $a++) {
            // If the current board character matches the first character of the word
            // then try to search for the rest of the word starting from this position
            if ($board[$i][$a] == $word[0] && findRestOfWord($board, $i, $a, 0, $word)) {
                // Return true if the word has been found
                return true;
            }
        }
    }
    // If we've searched the whole board and haven't found the word, return false
    return false;
}

// A recursive helper function to search for the rest of the word on the board
function findRestOfWord($board, $i, $a, $index, $word): bool
{
    // Return true if the word is complete
    if ($index == strlen($word)) {
        return true;
    }

    // Check if we're outside the board's limits
    // and check if the current position is equal to the current letter of the word
    if ($i < 0 || $a < 0 || $i >= count($board) || $a >= count($board[0]) || $board[$i][$a] != $word[$index]) {
        return false;
    }

    // Save the current letter of the board
    $currentLetter = $board[$i][$a];
    // mark the position to avoid reuse.
    $board[$i][$a] = '#';

    // List of possible movements on the board
    $directions = [
        'down' => [1, 0],
        'up' => [-1, 0],
        'right' => [0, 1],
        'left' => [0, -1]
    ];

    // Try to find the rest of the word in all possible directions
    foreach ($directions as $direction => [$rowChange, $colChange]) {
        // Trying to find the word in the current direction
        if (findRestOfWord($board, $i + $rowChange, $a + $colChange, $index + 1, $word)) {
            return true;
        }
    }

    // Returning to the original value of the current position, because the word couldn't be found
    $board[$i][$a] = $currentLetter;

    // Returning false because the word couldn't be found
    return false;
}

$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];

// Word can be constructed form letters of sequentially adjacent cell,
// where 'adjacent' cells are those horizontally or vertically neighboring.
var_dump(searchWord($board, 'abcd')); // true
var_dump(searchWord($board, 'abcl')); // true
var_dump(searchWord($board, 'admfbl')); // true

// It's not allowed to use the same letter twice
var_dump(searchWord($board, 'abcc')); // false
var_dump(searchWord($board, 'abcdc')); // false
var_dump(searchWord($board, 'dklml')); // false
