<?php

use PHPUnit\Framework\TestCase;

require '../src/searchWord.php';

class searchWordTest extends TestCase
{
    private array $board = [
        ['a', 'b', 'c', 'd'],
        ['d', 'k', 'l', 'm'],
        ['m', 'f', 'b', 's']
    ];

    // The test cases for when the word has been found
    public function testSearchWordFound()
    {
        $this->assertTrue(searchWord($this->board, 'abcd'));
        $this->assertTrue(searchWord($this->board, 'abcl'));
        $this->assertTrue(searchWord($this->board, 'admfbl'));
    }

    // The test cases for when the word has not been found
    public function testSearchWordNotFound()
    {
        $this->assertFalse(searchWord($this->board, 'abcc'));
        $this->assertFalse(searchWord($this->board, 'abcdc'));
        $this->assertFalse(searchWord($this->board, 'dklml'));
    }
}
