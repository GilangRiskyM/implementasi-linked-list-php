<?php
/*
DELETE OPERATION - LINKED LIST
==============================

File: DeleteOperation.php
Author: GilangRiskyM
Date: 2025-06-25 14:28:34 UTC+7

Deskripsi:
Implementasi operasi delete (hapus node) untuk LinkedList.
*/

require_once 'LinkedListBase.php';

trait DeleteOperation
{

    // Hapus node pada index tertentu
    public function delete($index)
    {
        echo "\n" . str_repeat("=", 50) . "\n";
        echo "🔹 OPERASI: DELETE (Hapus di index $index)\n";

        $this->display("Sebelum delete");

        if ($this->head === null) {
            echo "   ❌ LinkedList kosong, tidak ada yang bisa dihapus\n";
            return -1;
        }

        if ($index < 0) {
            echo "   ❌ Index tidak boleh negatif\n";
            return -1;
        }

        if ($index === 0) {
            echo "   ➤ Menghapus head (index 0)\n";
            $deletedValue = $this->head->data;
            echo "   ➤ Data yang akan dihapus: $deletedValue\n";
            echo "   ➤ Mengubah head ke node berikutnya\n";
            $this->head = $this->head->next;
            echo "   ✅ Data $deletedValue berhasil dihapus\n";
            $this->display("Setelah delete");
            return $deletedValue;
        } else {
            echo "   ➤ Mencari posisi index $index untuk dihapus...\n";
            $current = $this->head;
            $previous = null;

            for ($i = 0; $i < $index && $current !== null; $i++) {
                echo "     - Posisi $i: data={$current->data}\n";
                $previous = $current;
                $current = $current->next;
            }

            if ($current !== null) {
                $deletedValue = $current->data;
                echo "   ➤ Node ditemukan di index $index: data=$deletedValue\n";
                echo "   ➤ Menghubungkan node sebelumnya ke node setelah yang dihapus\n";
                $previous->next = $current->next;
                echo "   ✅ Data $deletedValue berhasil dihapus\n";
                $this->display("Setelah delete");
                return $deletedValue;
            } else {
                echo "   ❌ Index $index tidak ditemukan\n";
                return -1;
            }
        }
    }

    // Hapus node pertama
    public function deleteFirst()
    {
        return $this->delete(0);
    }

    // Hapus node terakhir
    public function deleteLast()
    {
        if ($this->head === null) {
            echo "\n❌ LinkedList kosong, tidak ada yang bisa dihapus\n";
            return -1;
        }

        $size = $this->getSize();
        return $this->delete($size - 1);
    }

    // Hapus berdasarkan nilai data
    public function deleteByValue($value)
    {
        echo "\n" . str_repeat("=", 50) . "\n";
        echo "🔹 OPERASI: DELETE BY VALUE (Hapus data: $value)\n";

        $index = $this->search($value);
        if ($index !== -1) {
            return $this->delete($index);
        } else {
            echo "   ❌ Data $value tidak ditemukan untuk dihapus\n";
            return -1;
        }
    }
}