<?php

// Linked list data structure
class LinkedList
{
    public $val;
    public $next = null;

    public function __construct($val)
    {
        $this->val = $val;
    }
}

// This function reverses the linked list
function reverse(LinkedList $head): ?LinkedList
{
    $prev = null; // Previous element is null
    $current = $head; // Start with the first element

    while ($current !== null) {
        $nextElement = $current->next;  // Store the next element
        $current->next = $prev;  // Point current item to the one before it

        // Move forward in the list
        $prev = $current;
        $current = $nextElement;
    }

    return $prev;  // Return the reversed list
}

/**
 * In this exercise you'll need to reverse a single linked list
 *
 * For example:
 * 1 -> 2 -> 3 -> 4 -> 5 -> null
 *
 * Will be reversed to:
 * 5 -> 4 -> 3 -> 2 -> 1 -> null
 */

// Current list: 1 -> 2 -> 3 -> null
$head = new LinkedList(1);
$head->next = new LinkedList(2);
$head->next->next = new LinkedList(3);

// Reversed to: 3 -> 2 -> 1 -> null
$reversedHead = reverse($head);

var_dump($reversedHead->val); // 3
var_dump($reversedHead->next->val); // 2
var_dump($reversedHead->next->next->val); // 1