<?php
/*
TEST APPEND OPERATION
=====================

File: test_append.php
Author: GilangRiskyM
Date: 2025-06-25 14:28:34 UTC+7

Deskripsi:
File khusus untuk menguji operasi append secara detail.
*/

require_once 'LinkedList.php';

echo "=== TEST APPEND OPERATION ===\n";
echo "Author: GilangRiskyM\n";
echo "Date: 2025-06-25 07:22:30 UTC\n\n";

// 1. Buat LinkedList baru
$list = new LinkedList();

// 2. Test append dengan Node object
echo "--- TEST 1: Append dengan Node Object ---\n";
$node1 = new Node(10);
$result1 = $list->append($node1);
echo "Result: " . ($result1 ? "SUCCESS" : "FAILED") . "\n";

sleep(1);

$node2 = new Node(20);
$result2 = $list->append($node2);
echo "Result: " . ($result2 ? "SUCCESS" : "FAILED") . "\n";

sleep(1);

// 3. Test append dengan data langsung
echo "\n--- TEST 2: Append dengan Data Langsung ---\n";
$result3 = $list->appendData(30);
echo "Result: " . ($result3 ? "SUCCESS" : "FAILED") . "\n";

sleep(1);

$result4 = $list->appendData(40);
echo "Result: " . ($result4 ? "SUCCESS" : "FAILED") . "\n";

sleep(1);

// 4. Tampilkan hasil akhir
echo "\n--- HASIL AKHIR ---\n";
$list->display("LinkedList Setelah Semua Append");
$list->showSize();

// 5. Validasi
echo "\n--- VALIDASI ---\n";
$expectedSize = 4;
$actualSize = $list->getSize();
echo "Expected size: $expectedSize\n";
echo "Actual size: $actualSize\n";
echo "Size validation: " . ($expectedSize === $actualSize ? "PASS" : "FAIL") . "\n";

echo "\n✅ Test append selesai!\n";