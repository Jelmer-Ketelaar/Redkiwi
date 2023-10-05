# Assessment Development

Welcome to the coding assessment. This repository contains two coding tasks, each accompanied by a piece of sample
code. These tasks are designed to gauge your coding skills and problem-solving abilities. While you are expected to
complete each task within one hour, it's important to focus on the quality of your code. For those familiar with
PHPUnit, providing tests for your solutions is a strong plus.
***
## Task 1: Reverse Linked List

### Problem Description

Implement a function named reverse() that takes a linked list and returns its reversed form. Use the LinkedList class
provided below to represent the linked list nodes:

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
***
## Task 2: Word Search

### Problem Description

Create a function named searchWord() that accepts a multidimensional array of characters representing a board as its
first parameter and a string as its second. The function should determine and return whether the provided string can be
constructed by connecting adjacent characters on the board.

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