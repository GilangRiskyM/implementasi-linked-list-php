<?php
/*
NODE CLASS - LINKED LIST IMPLEMENTATION
=======================================

File: Node.php
Author: GilangRiskyM
Date: 2025-06-25 14:28:34 UTC+7

Deskripsi:
Class Node adalah unit dasar dari LinkedList yang berisi data dan referensi ke node berikutnya.
*/

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        echo "✓ Node dengan data '$data' berhasil dibuat\n";
    }

    public function __toString()
    {
        return "Node(data: {$this->data})";
    }
}