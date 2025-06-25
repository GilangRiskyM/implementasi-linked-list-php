<?php
/*
APPEND OPERATION - LINKED LIST
==============================

File: AppendOperation.php
Author: GilangRiskyM
Date: 2025-06-25 14:28:34 UTC+7

Deskripsi:
Implementasi operasi append (tambah di akhir) untuk LinkedList.
*/

require_once 'LinkedListBase.php';

trait AppendOperation
{

    // Tambah node di akhir
    public function append($newNode)
    {
        echo "\n" . str_repeat("=", 50) . "\n";
        echo "🔹 OPERASI: APPEND (Tambah di akhir)\n";
        echo "   Data yang akan ditambah: {$newNode->data}\n";

        $this->display("Sebelum append");

        if ($this->head === null) {
            echo "   ➤ LinkedList kosong, node baru akan menjadi head\n";
            $this->head = $newNode;
        } else {
            echo "   ➤ LinkedList tidak kosong, mencari node terakhir...\n";
            $current = $this->head;
            $position = 0;
            while ($current->next !== null) {
                echo "     - Posisi $position: data={$current->data}, lanjut ke next\n";
                $current = $current->next;
                $position++;
            }
            echo "     - Posisi $position: data={$current->data}, ini node terakhir\n";
            echo "   ➤ Menghubungkan node terakhir dengan node baru\n";
            $current->next = $newNode;
        }

        $this->display("Setelah append");
        echo "✅ APPEND SELESAI\n";
        return true;
    }

    // Overload append untuk data langsung
    public function appendData($data)
    {
        $newNode = new Node($data);
        return $this->append($newNode);
    }
}