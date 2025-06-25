<?php
/*
DEMO APPEND OPERATION - OPERASI TAMBAH DI AKHIR
================================================

File: demo_append.php
Author: GilangRiskyM
Date: 2025-06-25

Deskripsi:
Demo khusus untuk operasi append (menambah data di akhir linked list).
*/

require_once 'LinkedList.php';

function printDemoHeader($title)
{
    echo "\n" . str_repeat("=", 60) . "\n";
    echo "🚀 $title\n";
    echo str_repeat("=", 60) . "\n";
}

function pauseDemo($seconds = 1)
{
    echo "\n⏳ Tunggu $seconds detik...\n";
    sleep($seconds);
}

// DEMO APPEND OPERATION
printDemoHeader("DEMO APPEND OPERATION");
echo "📝 Operasi: Menambah data di akhir linked list\n";
echo "📂 File implementasi: AppendOperation.php\n";

// Inisialisasi
echo "\n🏗️ Membuat LinkedList kosong...\n";
$list = new LinkedList();
pauseDemo(3);

// Demo 1: Append dengan Node object
echo "\n1️⃣ DEMO: Append dengan Node object\n";
$list->append(new Node(10));
pauseDemo(3);

$list->append(new Node(20));
pauseDemo(3);

$list->append(new Node(30));
pauseDemo(3);

// Demo 2: Append dengan data langsung
echo "\n2️⃣ DEMO: Append dengan data langsung (appendData)\n";
$list->appendData(40);
pauseDemo(3);

$list->appendData(50);
pauseDemo(3);

$list->appendData(60);
pauseDemo(3);

// Demo 3: Append dalam loop
echo "\n3️⃣ DEMO: Append multiple data dalam loop\n";
$data_array = [70, 80, 90, 100];
foreach ($data_array as $data) {
    echo "   ➤ Menambah data: $data\n";
    $list->appendData($data);
    pauseDemo(3);
}

// Status akhir
echo "\n📊 STATUS AKHIR APPEND DEMO:\n";
$list->display("Hasil Akhir Append Demo");
echo "📏 Total data: " . $list->getSize() . " node\n";

echo "\n✅ APPEND DEMO SELESAI!\n";
echo "🔗 Next: Jalankan 'php demo_insert.php' untuk demo insert operation\n";