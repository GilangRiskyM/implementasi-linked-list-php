<?php
/*
LINKED LIST BASE CLASS
======================

File: LinkedListBase.php
Author: GilangRiskyM
Date: 2025-06-25 14:28:34 UTC+7

Deskripsi:
Class dasar LinkedList dengan fungsi helper untuk display dan utilities.
*/

require_once 'Node.php';

class LinkedListBase
{
    public $head;

    public function __construct()
    {
        $this->head = null;
        echo "✓ LinkedList kosong berhasil dibuat\n";
    }

    // Fungsi helper untuk menampilkan linked list
    public function display($title = "Status LinkedList")
    {
        echo "\n📋 $title:\n";
        if ($this->head === null) {
            echo "   [KOSONG] - tidak ada node\n";
            return;
        }

        $current = $this->head;
        $output = "   ";
        $index = 0;
        while ($current !== null) {
            $output .= "[$index: {$current->data}]";
            if ($current->next !== null) {
                $output .= " -> ";
            }
            $current = $current->next;
            $index++;
        }
        $output .= " -> NULL";
        echo "$output\n";
    }

    // Fungsi untuk menghitung ukuran
    public function getSize()
    {
        $count = 0;
        $current = $this->head;

        while ($current !== null) {
            $count++;
            $current = $current->next;
        }

        return $count;
    }

    // Fungsi untuk menampilkan ukuran detail
    public function showSize()
    {
        echo "\n📊 MENGHITUNG UKURAN LINKEDLIST:\n";
        $count = 0;
        $current = $this->head;

        while ($current !== null) {
            echo "   - Node $count: data={$current->data}\n";
            $count++;
            $current = $current->next;
        }

        echo "   ➤ Total ukuran LinkedList: $count node\n";
        return $count;
    }

    // Fungsi untuk validasi index
    protected function isValidIndex($index)
    {
        return $index >= 0 && $index < $this->getSize();
    }

    // Fungsi untuk mencari node pada posisi tertentu
    protected function getNodeAt($index)
    {
        if ($index < 0)
            return null;

        $current = $this->head;
        for ($i = 0; $i < $index && $current !== null; $i++) {
            $current = $current->next;
        }

        return $current;
    }
}