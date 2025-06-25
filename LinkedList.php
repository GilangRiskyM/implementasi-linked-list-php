<?php
/*
LINKED LIST MAIN CLASS
======================

File: LinkedList.php
Author: GilangRiskyM
Date: 2025-06-25 14:28:34 UTC+7

Deskripsi:
Class utama LinkedList yang menggabungkan semua operasi dari trait-trait terpisah.
*/

require_once 'LinkedListBase.php';
require_once 'AppendOperation.php';
require_once 'InsertOperation.php';
require_once 'DeleteOperation.php';
require_once 'SearchOperation.php';

class LinkedList extends LinkedListBase
{
    use AppendOperation;
    use InsertOperation;
    use DeleteOperation;
    use SearchOperation;

    // Method tambahan untuk operasi kompleks
    public function reverse()
    {
        echo "\n" . str_repeat("=", 50) . "\n";
        echo "🔹 OPERASI: REVERSE (Membalik LinkedList)\n";

        $this->display("Sebelum reverse");

        if ($this->head === null || $this->head->next === null) {
            echo "   ➤ LinkedList kosong atau hanya 1 node, tidak perlu dibalik\n";
            return;
        }

        $previous = null;
        $current = $this->head;
        $next = null;

        echo "   ➤ Memulai proses reverse...\n";
        while ($current !== null) {
            echo "     - Current: {$current->data}\n";
            $next = $current->next;
            $current->next = $previous;
            $previous = $current;
            $current = $next;
        }

        $this->head = $previous;
        $this->display("Setelah reverse");
        echo "✅ REVERSE SELESAI\n";
    }

    // Method untuk mengecek apakah list kosong
    public function isEmpty()
    {
        return $this->head === null;
    }

    // Method untuk menghapus semua node
    public function clear()
    {
        echo "\n" . str_repeat("=", 50) . "\n";
        echo "🔹 OPERASI: CLEAR (Hapus semua node)\n";

        $this->display("Sebelum clear");

        $count = $this->getSize();
        $this->head = null;

        echo "   ✅ $count node berhasil dihapus\n";
        $this->display("Setelah clear");
        echo "✅ CLEAR SELESAI\n";
    }
}