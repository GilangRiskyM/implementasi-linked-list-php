# LINKED LIST - IMPLEMENTASI TERPISAH

**Author:** GilangRiskyM  
**Date:** 2025-06-25 14:28:34 UTC+7

## 📁 STRUKTUR FILE

| No  | File                  | Deskripsi                                  |
| --- | --------------------- | ------------------------------------------ |
| 1   | `Node.php`            | Class Node dasar                           |
| 2   | `LinkedListBase.php`  | Class dasar dengan utilities               |
| 3   | `AppendOperation.php` | Trait untuk operasi append                 |
| 4   | `InsertOperation.php` | Trait untuk operasi insert                 |
| 5   | `DeleteOperation.php` | Trait untuk operasi delete                 |
| 6   | `SearchOperation.php` | Trait untuk operasi search                 |
| 7   | `LinkedList.php`      | Class utama yang menggabungkan semua trait |
| 8   | `demo.php`            | Demo lengkap semua operasi                 |
| 9   | `test_append.php`     | Test khusus untuk operasi append           |
| 10  | `README.md`           | Dokumentasi ini                            |

## 🚀 CARA MENJALANKAN

### 1. Demo Lengkap Semua Operasi

```bash
php Demo.php
```

### 2. Test Khusus Append

```bash
php test_append.php
```

### 3. Menggunakan Operasi Tertentu Saja

```php
<?php
require_once 'LinkedListBase.php';
require_once 'AppendOperation.php';

class MyList extends LinkedListBase {
    use AppendOperation;
}

$list = new MyList();
$list->appendData(10);
?>
```

## 📋 CARA MENJALANKAN APPEND

### Metode 1: Manual Append

```php
<?php
require_once 'LinkedList.php';

$list = new LinkedList();
$list->appendData(10);
$list->append(new Node(20));
$list->display("My List");
?>
```

### Metode 2: Test Append

```bash
php test_append.php
```

### Metode 3: Dalam Demo Lengkap

```bash
php Demo.php
```

## 🔧 OPERASI APPEND YANG TERSEDIA

### AppendOperation.php

- **`append($node)`** - Tambah node object di akhir
- **`appendData($data)`** - Tambah data langsung di akhir

## 💡 CONTOH PENGGUNAAN APPEND

```php
<?php
require_once 'LinkedList.php';

$list = new LinkedList();

// Metode 1: dengan Node
$node = new Node(100);
$list->append($node);

// Metode 2: dengan data langsung
$list->appendData(200);

// Tampilkan hasil
$list->display("Final List");
?>
```

## ✨ FITUR APPEND

- ✅ Step-by-step explanation
- ✅ Visual representation
- ✅ Error handling
- ✅ Return value validation
- ✅ Support Node object dan data langsung

## 📚 SEMUA OPERASI YANG TERSEDIA

### AppendOperation.php

- `append($node)` - Tambah node di akhir
- `appendData($data)` - Tambah data di akhir

### InsertOperation.php

- `insertFirst($node)` - Tambah node di awal
- `insertFirstData($data)` - Tambah data di awal
- `insert($node, $index)` - Sisip node di posisi tertentu
- `insertData($data, $index)` - Sisip data di posisi tertentu

### DeleteOperation.php

- `delete($index)` - Hapus node di posisi tertentu
- `deleteFirst()` - Hapus node pertama
- `deleteLast()` - Hapus node terakhir
- `deleteByValue($value)` - Hapus berdasarkan nilai

### SearchOperation.php

- `search($target)` - Cari data, return index
- `searchAll($target)` - Cari semua kemunculan
- `contains($target)` - Cek apakah data ada
- `get($index)` - Ambil data di index tertentu

### LinkedList.php (Advanced)

- `reverse()` - Balik urutan LinkedList
- `isEmpty()` - Cek apakah list kosong
- `clear()` - Hapus semua node

## 🏗️ ARSITEKTUR

```
LinkedListBase (base class)
├── AppendOperation (trait)
├── InsertOperation (trait)
├── DeleteOperation (trait)
├── SearchOperation (trait)
└── LinkedList (main class yang use semua trait)
```

## 🎯 KEUNTUNGAN STRUKTUR TERPISAH

- **✅ Modular** - setiap operasi dalam file terpisah
- **✅ Maintainable** - mudah maintain dan update
- **✅ Reusable** - bisa menggunakan operasi tertentu saja
- **✅ Testable** - test individual untuk setiap operasi
- **✅ Scalable** - mudah menambah operasi baru
- **✅ Readable** - kode lebih mudah dibaca dan dipahami

## 📝 CONTOH PENGGUNAAN MODULAR

### Hanya Menggunakan Append dan Search

```php
<?php
require_once 'LinkedListBase.php';
require_once 'AppendOperation.php';
require_once 'SearchOperation.php';

class SimpleList extends LinkedListBase {
    use AppendOperation;
    use SearchOperation;
}

$list = new SimpleList();
$list->appendData(10);
$list->search(10);
?>
```

### Hanya Menggunakan Insert dan Delete

```php
<?php
require_once 'LinkedListBase.php';
require_once 'InsertOperation.php';
require_once 'DeleteOperation.php';

class EditableList extends LinkedListBase {
    use InsertOperation;
    use DeleteOperation;
}

$list = new EditableList();
$list->insertFirstData(5);
$list->delete(0);
?>
```

## 🔬 TESTING

### Unit Testing Individual

```bash
# Test semua operasi
php Demo.php

# Test khusus append
php test_append.php
```

### Manual Testing

```php
<?php
require_once 'LinkedList.php';

$list = new LinkedList();

// Test berbagai operasi
$list->appendData(1);
$list->insertFirstData(0);
$list->insertData(2, 2);
$list->search(1);
$list->delete(1);
$list->display("Test Result");
?>
```

## 📊 OUTPUT EXAMPLE

Ketika menjalankan `php Demo.php`, Anda akan melihat output seperti:

```
✓ LinkedList kosong berhasil dibuat

==================================================
🔹 OPERASI: APPEND (Tambah di akhir)
   Data yang akan ditambah: 10

📋 Sebelum append:
   [KOSONG] - tidak ada node
   ➤ LinkedList kosong, node baru akan menjadi head

📋 Setelah append:
   [0: 10] -> NULL
✅ APPEND SELESAI
```

## 🛠️ TROUBLESHOOTING

### Error: "Class not found"

**Solusi:** Pastikan semua file di direktori yang sama dan menggunakan `require_once` yang benar.

### Error: "Call to undefined method"

**Solusi:** Pastikan trait yang berisi method tersebut sudah di-include dalam class.

### Hasil tidak sesuai ekspektasi

**Solusi:** Jalankan `test_append.php` untuk validasi operasi append.

## 📞 SUPPORT

Jika ada pertanyaan atau masalah:

- **Author:** GilangRiskyM
- **Date Created:** 2025-06-25 07:28:34 UTC
- **Repository:** Implementasi Linked List di PHP

---

**© 2025 GilangRiskyM - Implementasi Linked List**
