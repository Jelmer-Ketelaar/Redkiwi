<?php

use PHPUnit\Framework\TestCase;

require '../src/LinkedList.php';

class LinkedListTest extends TestCase
{
    public function testReverseFunctionality()
    {
        // Setup test linked list: 1 -> 2 -> 3 -> null
        $head = new LinkedList(1);
        $head->next = new LinkedList(2);
        $head->next->next = new LinkedList(3);

        // Reverse the list: 3 -> 2 -> 1 -> null
        $reversedList = reverse($head);

        // Check reversed list values
        $this->assertEquals(3, $reversedList->val);
        $this->assertEquals(2, $reversedList->next->val);
        $this->assertEquals(1, $reversedList->next->next->val);
        $this->assertNull($reversedList->next->next->next);
    }
}