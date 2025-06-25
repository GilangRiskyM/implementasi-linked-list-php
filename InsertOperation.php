<?php
/*
INSERT OPERATION - LINKED LIST
==============================

File: InsertOperation.php
Author: GilangRiskyM
Date: 2025-06-25 14:28:34 UTC+7

Deskripsi:
Implementasi operasi insert (tambah di awal dan posisi tertentu) untuk LinkedList.
*/

require_once 'LinkedListBase.php';

trait InsertOperation
{

    // Tambah node di awal
    public function insertFirst($newNode)
    {
        echo "\n" . str_repeat("=", 50) . "\n";
        echo "🔹 OPERASI: INSERT FIRST (Tambah di awal)\n";
        echo "   Data yang akan ditambah: {$newNode->data}\n";

        $this->display("Sebelum insert first");

        echo "   ➤ Menghubungkan node baru ke head lama\n";
        $newNode->next = $this->head;
        echo "   ➤ Mengubah head ke node baru\n";
        $this->head = $newNode;

        $this->display("Setelah insert first");
        echo "✅ INSERT FIRST SELESAI\n";
        return true;
    }

    // Sisip node di posisi tertentu
    public function insert($newNode, $index)
    {
        echo "\n" . str_repeat("=", 50) . "\n";
        echo "🔹 OPERASI: INSERT (Sisip di index $index)\n";
        echo "   Data yang akan disisipkan: {$newNode->data}\n";

        $this->display("Sebelum insert");

        if ($index < 0) {
            echo "   ❌ Index tidak boleh negatif\n";
            return false;
        }

        if ($index === 0) {
            echo "   ➤ Index 0, menggunakan insert first\n";
            $newNode->next = $this->head;
            $this->head = $newNode;
        } else {
            echo "   ➤ Mencari posisi index " . ($index - 1) . " untuk menyisipkan...\n";
            $current = $this->head;
            for ($i = 0; $i < $index - 1 && $current !== null; $i++) {
                echo "     - Posisi $i: data={$current->data}\n";
                $current = $current->next;
            }

            if ($current !== null) {
                echo "   ➤ Posisi " . ($index - 1) . " ditemukan: data={$current->data}\n";
                echo "   ➤ Menghubungkan node baru ke next dari posisi ini\n";
                $newNode->next = $current->next;
                echo "   ➤ Menghubungkan posisi ini ke node baru\n";
                $current->next = $newNode;
            } else {
                echo "   ❌ Index $index tidak valid (melebihi panjang list)\n";
                return false;
            }
        }

        $this->display("Setelah insert");
        echo "✅ INSERT SELESAI\n";
        return true;
    }

    // Insert dengan data langsung
    public function insertData($data, $index)
    {
        $newNode = new Node($data);
        return $this->insert($newNode, $index);
    }

    // Insert first dengan data langsung
    public function insertFirstData($data)
    {
        $newNode = new Node($data);
        return $this->insertFirst($newNode);
    }
}