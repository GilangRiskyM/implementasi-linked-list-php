<?php
/*
DEMO INSERT OPERATION - OPERASI SISIP DATA
===========================================

File: demo_insert.php
Author: GilangRiskyM
Date: 2025-06-25

Deskripsi:
Demo khusus untuk operasi insert (menyisipkan data di posisi tertentu).
*/

require_once 'LinkedList.php';

function printDemoHeader($title)
{
    echo "\n" . str_repeat("=", 60) . "\n";
    echo "🚀 $title\n";
    echo str_repeat("=", 60) . "\n";
}

function pauseDemo($seconds = 2)
{
    echo "\n⏳ Tunggu $seconds detik...\n";
    sleep($seconds);
}

// DEMO INSERT OPERATION
printDemoHeader("DEMO INSERT OPERATION");
echo "📝 Operasi: Menyisipkan data di posisi tertentu\n";
echo "📂 File implementasi: InsertOperation.php\n";

// Persiapan data awal
echo "\n🏗️ Membuat LinkedList dan mengisi data awal...\n";
$list = new LinkedList();
$list->appendData(20);
$list->appendData(40);
$list->appendData(60);
$list->display("Data Awal untuk Demo Insert");
pauseDemo(1);

// Demo 1: Insert First dengan Node
echo "\n1️⃣ DEMO: Insert First dengan Node object\n";
$list->insertFirst(new Node(10));
pauseDemo(1);

$list->insertFirst(new Node(5));
pauseDemo(1);

// Demo 2: Insert First dengan data langsung
echo "\n2️⃣ DEMO: Insert First dengan data langsung\n";
$list->insertFirstData(1);
pauseDemo(1);

// Demo 3: Insert di posisi tengah
echo "\n3️⃣ DEMO: Insert di posisi tengah\n";
$list->insert(new Node(15), 2);
pauseDemo(1);

$list->insertData(25, 4);
pauseDemo(1);

$list->insertData(35, 6);
pauseDemo(1);

// Demo 4: Insert di posisi akhir
echo "\n4️⃣ DEMO: Insert di posisi terakhir\n";
$lastIndex = $list->getSize();
$list->insertData(70, $lastIndex);
pauseDemo(1);

// Demo 5: Test error handling
echo "\n5️⃣ DEMO: Test Error Handling\n";
echo "   ➤ Coba insert di index negatif:\n";
$list->insertData(999, -1);
pauseDemo(1);

echo "   ➤ Coba insert di index yang terlalu besar:\n";
$list->insertData(999, 100);
pauseDemo(1);

// Status akhir
echo "\n📊 STATUS AKHIR INSERT DEMO:\n";
$list->display("Hasil Akhir Insert Demo");
echo "📏 Total data: " . $list->getSize() . " node\n";

echo "\n✅ INSERT DEMO SELESAI!\n";
echo "🔗 Next: Jalankan 'php demo_search.php' untuk demo search operation\n";