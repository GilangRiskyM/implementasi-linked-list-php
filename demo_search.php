<?php
/*
DEMO SEARCH OPERATION - OPERASI PENCARIAN DATA
===============================================

File: demo_search.php
Author: GilangRiskyM
Date: 2025-06-25

Deskripsi:
Demo khusus untuk operasi search (pencarian data dalam linked list).
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

// DEMO SEARCH OPERATION
printDemoHeader("DEMO SEARCH OPERATION");
echo "📝 Operasi: Pencarian data dalam linked list\n";
echo "📂 File implementasi: SearchOperation.php\n";

// Persiapan data untuk demo search
echo "\n🏗️ Membuat LinkedList dengan data untuk pencarian...\n";
$list = new LinkedList();
$testData = [10, 20, 30, 20, 40, 50, 20, 60];
foreach ($testData as $data) {
    $list->appendData($data);
}
$list->display("Data untuk Demo Search");
pauseDemo(1);

// Demo 1: Search data yang ada
echo "\n1️⃣ DEMO: Search data yang ada\n";
$list->search(30);
pauseDemo(1);

$list->search(50);
pauseDemo(1);

$list->search(10);
pauseDemo(1);

// Demo 2: Search data yang tidak ada
echo "\n2️⃣ DEMO: Search data yang tidak ada\n";
$list->search(100);
pauseDemo(1);

$list->search(5);
pauseDemo(1);

// Demo 3: Search All (semua kemunculan)
echo "\n3️⃣ DEMO: Search All - mencari semua kemunculan\n";
$list->searchAll(20);
pauseDemo(1);

$list->searchAll(60);
pauseDemo(1);

$list->searchAll(999);
pauseDemo(1);

// Demo 4: Contains (cek keberadaan data)
echo "\n4️⃣ DEMO: Contains - cek apakah data ada\n";
$checkData = [20, 100, 30, 999];
foreach ($checkData as $data) {
    $exists = $list->contains($data);
    echo "   ➤ Apakah data $data ada? " . ($exists ? "✅ Ya" : "❌ Tidak") . "\n";
    pauseDemo(1);
}

// Demo 5: Get data by index
echo "\n5️⃣ DEMO: Get - ambil data berdasarkan index\n";
for ($i = 0; $i < $list->getSize(); $i += 2) {
    $list->get($i);
    pauseDemo(1);
}

// Demo 6: Get dengan index invalid
echo "\n6️⃣ DEMO: Get dengan index invalid\n";
$list->get(-1);
pauseDemo(1);

$list->get(100);
pauseDemo(1);

// Status akhir
echo "\n📊 STATUS AKHIR SEARCH DEMO:\n";
$list->display("Data Akhir Search Demo");
echo "📏 Total data: " . $list->getSize() . " node\n";

echo "\n✅ SEARCH DEMO SELESAI!\n";
echo "🔗 Next: Jalankan 'php demo_delete.php' untuk demo delete operation\n";