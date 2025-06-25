<?php
/*
DEMO LINKED LIST - SEMUA OPERASI TERPISAH
=========================================

File: demo.php
Author: GilangRiskyM
Date: 2025-06-25 14:28:34 UTC+7

Deskripsi:
File demo yang menguji semua operasi LinkedList dari file-file terpisah.
*/

require_once 'LinkedList.php';

function printHeader($title)
{
    echo "\n" . str_repeat("=", 60) . "\n";
    echo "$title\n";
    echo str_repeat("=", 60) . "\n";
}

function printSubHeader($title)
{
    echo "\n" . str_repeat("-", 40) . "\n";
    echo "$title\n";
    echo str_repeat("-", 40) . "\n";
}

function pauseExecution($seconds = 1)
{
    sleep($seconds);
}

// Main Demo Function
function runCompleteDemo()
{
    printHeader("DEMO LINKED LIST - OPERASI TERPISAH");
    echo "Author: GilangRiskyM\n";
    echo "Date: 2025-06-25 07:22:30 UTC\n";
    echo "Setiap operasi diimplementasikan dalam file terpisah\n";

    // Inisialisasi
    printSubHeader("INISIALISASI");
    $list = new LinkedList();
    pauseExecution();

    // Demo Append Operations
    printSubHeader("DEMO APPEND OPERATIONS");
    $list->append(new Node(10));
    pauseExecution();
    $list->appendData(20);
    pauseExecution();
    $list->append(new Node(30));
    pauseExecution();

    // Demo Insert Operations
    printSubHeader("DEMO INSERT OPERATIONS");
    $list->insertFirst(new Node(5));
    pauseExecution();
    $list->insertFirstData(1);
    pauseExecution();
    $list->insert(new Node(15), 3);
    pauseExecution();
    $list->insertData(25, 5);
    pauseExecution();

    // Demo Search Operations
    printSubHeader("DEMO SEARCH OPERATIONS");
    $list->search(20);
    pauseExecution();
    $list->search(100);
    pauseExecution();
    $list->get(2);
    pauseExecution();
    $list->searchAll(20);
    pauseExecution();

    // Tambah data duplikat untuk test searchAll
    $list->append(new Node(20));
    $list->searchAll(20);
    pauseExecution();

    // Demo Delete Operations
    printSubHeader("DEMO DELETE OPERATIONS");
    $list->delete(0);
    pauseExecution();
    $list->deleteFirst();
    pauseExecution();
    $list->deleteLast();
    pauseExecution();
    $list->deleteByValue(20);
    pauseExecution();

    // Demo Advanced Operations
    printSubHeader("DEMO ADVANCED OPERATIONS");
    $list->reverse();
    pauseExecution();
    $list->showSize();
    pauseExecution();

    // Summary
    printHeader("RINGKASAN AKHIR");
    $list->display("LinkedList Final");
    echo "\n📊 Status akhir:\n";
    echo "- Total node: " . $list->getSize() . "\n";
    echo "- List kosong? " . ($list->isEmpty() ? "Ya" : "Tidak") . "\n";
    echo "\n✅ Demo selesai! Semua operasi dari file terpisah berhasil dijalankan.\n";

    printHeader("DEMO SELESAI");
}

// Jalankan demo
if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    runCompleteDemo();
}