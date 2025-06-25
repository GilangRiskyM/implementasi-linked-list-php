<?php
/*
DEMO DELETE OPERATION - OPERASI HAPUS DATA
===========================================

File: demo_delete.php
Author: GilangRiskyM
Date: 2025-06-25

Deskripsi:
Demo khusus untuk operasi delete (menghapus data dari linked list).
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

// DEMO DELETE OPERATION
printDemoHeader("DEMO DELETE OPERATION");
echo "📝 Operasi: Menghapus data dari linked list\n";
echo "📂 File implementasi: DeleteOperation.php\n";

// Persiapan data untuk demo delete
echo "\n🏗️ Membuat LinkedList dengan data untuk penghapusan...\n";
$list = new LinkedList();
$testData = [10, 20, 30, 40, 50, 60, 70, 80];
foreach ($testData as $data) {
    $list->appendData($data);
}
$list->display("Data Awal untuk Demo Delete");
pauseDemo(1);

// Demo 1: Delete di index tertentu
echo "\n1️⃣ DEMO: Delete di index tertentu\n";
$list->delete(3); // hapus index 3 (data 40)
pauseDemo(1);

$list->delete(0); // hapus index 0 (head)
pauseDemo(1);

$list->delete(2); // hapus index 2
pauseDemo(1);

// Demo 2: Delete First
echo "\n2️⃣ DEMO: Delete First\n";
$list->deleteFirst();
pauseDemo(1);

$list->deleteFirst();
pauseDemo(1);

// Demo 3: Delete Last
echo "\n3️⃣ DEMO: Delete Last\n";
$list->deleteLast();
pauseDemo(1);

$list->deleteLast();
pauseDemo(1);

// Tambah data lagi untuk demo selanjutnya
echo "\n🔄 Menambah data kembali untuk demo selanjutnya...\n";
$newData = [100, 200, 300, 200, 400];
foreach ($newData as $data) {
    $list->appendData($data);
}
$list->display("Data Setelah Ditambah Kembali");
pauseDemo(1);

// Demo 4: Delete by Value
echo "\n4️⃣ DEMO: Delete by Value\n";
$list->deleteByValue(200); // hapus data 200 (kemunculan pertama)
pauseDemo(1);

$list->deleteByValue(300);
pauseDemo(1);

$list->deleteByValue(999); // hapus data yang tidak ada
pauseDemo(1);

// Demo 5: Test error handling
echo "\n5️⃣ DEMO: Test Error Handling\n";
echo "   ➤ Coba delete dengan index negatif:\n";
$list->delete(-1);
pauseDemo(1);

echo "   ➤ Coba delete dengan index terlalu besar:\n";
$list->delete(100);
pauseDemo(1);

// Demo 6: Delete sampai list kosong
echo "\n6️⃣ DEMO: Delete sampai list kosong\n";
$remainingSize = $list->getSize();
echo "   ➤ Menghapus semua data yang tersisa ($remainingSize data)...\n";
while (!$list->isEmpty()) {
    $list->deleteFirst();
    pauseDemo(1);
}

// Demo 7: Delete dari list kosong
echo "\n7️⃣ DEMO: Delete dari list kosong\n";
$list->delete(0);
pauseDemo(1);

$list->deleteFirst();
pauseDemo(1);

$list->deleteLast();
pauseDemo(1);

// Status akhir
echo "\n📊 STATUS AKHIR DELETE DEMO:\n";
$list->display("Hasil Akhir Delete Demo");
echo "📏 Total data: " . $list->getSize() . " node\n";
echo "🔍 List kosong? " . ($list->isEmpty() ? "✅ Ya" : "❌ Tidak") . "\n";

echo "\n✅ DELETE DEMO SELESAI!\n";
echo "🔗 Next: Jalankan 'php demo_advanced.php' untuk demo operasi lanjutan\n";