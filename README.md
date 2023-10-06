# Assessment Development

Hello there! Glad you're here. In this repository, are two tasks with each a piece of sample code. Each task requires a
specific function to be defined which is described in the task.

It's not about getting the right answer, they're about understanding your coding style and how you tackle problems.
Each task should be finished within an hour. Supplying PHPUnit tests for each tasks is a plus

To run the tests, you can use the following command:

```bash
composer install
```

## Task 1: Reverse Linked List

### Problem Description

Write a function called reverse() which reverses given linked list built using instances
of the LinkedList class.

```php
class LinkedList {
    public $val;
    public $next = null;

    public function __construct($val) {
        $this->val = $val;
    }
}

/** 
 * In this exercise, your goal is to reverse a single linked list.
 *  
 * For example:  
 * 1 -> 2 -> 3 -> 4 -> 5 -> null 
 * 
 * Should be reversed to: 
 * 5 -> 4 -> 3 -> 2 -> 1 -> null 
 */ 

// Current list:  1 -> 2 -> 3 -> null
$head = new LinkedList(1);
$head->next = new LinkedList(2);
$head->next->next = new LinkedList(3);

// Expected result: 3 -> 2 -> 1 -> null
$reversedHead = reverse($head);

var_dump($reversedHead->val);       // 3
var_dump($reversedHead->next->val);  // 2
var_dump($reversedHead->next->next->val); // 1
```

## Task 2: Word Search

### Problem Description

Write a function called searchWord() that takes a board in the form of a
multidimensional array of characters as its first parameter and a string as its second
parameter and returns whether the given string can be formed using adjacent
characters from the board.

***Note: Diagonal connections are not considered adjacent.***

### Sample Code

```php
$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];

var_dump(searchWord($board, 'abcd'));  // true
var_dump(searchWord($board, 'abcl'));  // true
var_dump(searchWord($board, 'admfbl')); // true
var_dump(searchWord($board, 'abcc'));   // false
var_dump(searchWord($board, 'abcdc'));  // false
var_dump(searchWord($board, 'dklml'));  // false
```