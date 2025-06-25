<?php
/*
SEARCH OPERATION - LINKED LIST
==============================

File: SearchOperation.php
Author: GilangRiskyM
Date: 2025-06-25 14:28:34 UTC+7

Deskripsi:
Implementasi operasi search (pencarian) untuk LinkedList.
*/

require_once 'LinkedListBase.php';

trait SearchOperation
{

    // Cari data dalam linked list
    public function search($target)
    {
        echo "\n" . str_repeat("=", 50) . "\n";
        echo "🔹 OPERASI: SEARCH (Mencari data: $target)\n";

        $this->display("LinkedList saat ini");

        echo "   ➤ Memulai pencarian dari head...\n";
        $current = $this->head;
        $index = 0;

        while ($current !== null) {
            echo "     - Index $index: data={$current->data}";
            if ($current->data === $target) {
                echo " ✅ DITEMUKAN!\n";
                echo "   ✅ Data $target ditemukan pada index ke-$index\n";
                return $index;
            } else {
                echo " (bukan yang dicari)\n";
            }
            $current = $current->next;
            $index++;
        }

        echo "   ❌ Data $target tidak ditemukan dalam linked list\n";
        return -1;
    }

    // Cari semua kemunculan data
    public function searchAll($target)
    {
        echo "\n" . str_repeat("=", 50) . "\n";
        echo "🔹 OPERASI: SEARCH ALL (Mencari semua kemunculan: $target)\n";

        $this->display("LinkedList saat ini");

        $found = [];
        $current = $this->head;
        $index = 0;

        echo "   ➤ Memulai pencarian semua kemunculan...\n";
        while ($current !== null) {
            echo "     - Index $index: data={$current->data}";
            if ($current->data === $target) {
                echo " ✅ DITEMUKAN!\n";
                $found[] = $index;
            } else {
                echo " (bukan yang dicari)\n";
            }
            $current = $current->next;
            $index++;
        }

        if (count($found) > 0) {
            echo "   ✅ Data $target ditemukan pada index: " . implode(", ", $found) . "\n";
            echo "   📊 Total kemunculan: " . count($found) . "\n";
        } else {
            echo "   ❌ Data $target tidak ditemukan dalam linked list\n";
        }

        return $found;
    }

    // Cek apakah data ada dalam list
    public function contains($target)
    {
        return $this->search($target) !== -1;
    }

    // Dapatkan data pada index tertentu
    public function get($index)
    {
        echo "\n" . str_repeat("=", 50) . "\n";
        echo "🔹 OPERASI: GET (Ambil data di index $index)\n";

        if ($index < 0) {
            echo "   ❌ Index tidak boleh negatif\n";
            return null;
        }

        $current = $this->head;
        for ($i = 0; $i < $index && $current !== null; $i++) {
            echo "     - Posisi $i: data={$current->data}\n";
            $current = $current->next;
        }

        if ($current !== null) {
            echo "   ✅ Data pada index $index: {$current->data}\n";
            return $current->data;
        } else {
            echo "   ❌ Index $index tidak valid\n";
            return null;
        }
    }
}