# 🔗 LINKED LIST - IMPLEMENTASI MODULAR PHP

**Author:** GilangRiskyM  
**Last Updated:** 2025-06-25

**Version:** 2.0 - Separated Demo Edition

[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE.md)

## 📋 DESKRIPSI

Implementasi **LinkedList** dalam PHP dengan arsitektur modular menggunakan **traits**. Setiap operasi diimplementasikan dalam file terpisah untuk kemudahan maintenance, testing, dan pembelajaran. Dilengkapi dengan **demo terpisah** untuk setiap operasi utama.

## 📁 STRUKTUR FILE LENGKAP

### 🏗️ Core Implementation

| No  | File                  | Deskripsi                                  | Lines |
| --- | --------------------- | ------------------------------------------ | ----- |
| 1   | `Node.php`            | Class Node dasar                           | ~30   |
| 2   | `LinkedListBase.php`  | Class dasar dengan utilities               | ~100  |
| 3   | `AppendOperation.php` | Trait untuk operasi append                 | ~56   |
| 4   | `InsertOperation.php` | Trait untuk operasi insert                 | ~90   |
| 5   | `DeleteOperation.php` | Trait untuk operasi delete                 | ~99   |
| 6   | `SearchOperation.php` | Trait untuk operasi search                 | ~101  |
| 7   | `LinkedList.php`      | Class utama yang menggabungkan semua trait | ~79   |

### 🎮 Separated Demo Files

| No  | File              | Operasi  | Deskripsi                           |
| --- | ----------------- | -------- | ----------------------------------- |
| 8   | `demo_append.php` | Append   | Demo khusus operasi tambah di akhir |
| 9   | `demo_insert.php` | Insert   | Demo khusus operasi sisip data      |
| 10  | `demo_search.php` | Search   | Demo khusus operasi pencarian       |
| 11  | `demo_delete.php` | Delete   | Demo khusus operasi hapus data      |
| 12  | `Demo.php`        | Complete | Demo lengkap semua operasi          |

### 📜 Documentation

| No  | File         | Deskripsi                    |
| --- | ------------ | ---------------------------- |
| 13  | `README.md`  | Dokumentasi utama (file ini) |
| 14  | `LICENSE.md` | Lisensi MIT                  |

## 🚀 CARA MENJALANKAN

### 1. 🎯 Demo Individual (Recommended untuk Learning)

```bash
# Demo operasi tambah di akhir
php demo_append.php

# Demo operasi sisip data
php demo_insert.php

# Demo operasi pencarian
php demo_search.php

# Demo operasi hapus data
php demo_delete.php
```

### 2. 🏃‍♂️ Demo Lengkap

```bash
# Demo semua operasi sekaligus
php Demo.php
```

### 3. 🔄 Menjalankan Semua Demo Manual

```bash
# Windows/Cross-platform - jalankan satu per satu
php demo_append.php
php demo_insert.php
php demo_search.php
php demo_delete.php
php Demo.php
```

### 4. 🧪 Penggunaan Modular Custom

```php
<?php
// Hanya menggunakan operasi append dan search
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

## 📚 OPERASI YANG TERSEDIA

### 🔹 AppendOperation.php

| Method              | Parameter   | Return  | Deskripsi            |
| ------------------- | ----------- | ------- | -------------------- |
| `append($node)`     | Node object | boolean | Tambah node di akhir |
| `appendData($data)` | mixed       | boolean | Tambah data di akhir |

### 🔹 InsertOperation.php

| Method                      | Parameter   | Return  | Deskripsi                     |
| --------------------------- | ----------- | ------- | ----------------------------- |
| `insertFirst($node)`        | Node object | boolean | Tambah node di awal           |
| `insertFirstData($data)`    | mixed       | boolean | Tambah data di awal           |
| `insert($node, $index)`     | Node, int   | boolean | Sisip node di posisi tertentu |
| `insertData($data, $index)` | mixed, int  | boolean | Sisip data di posisi tertentu |

### 🔹 DeleteOperation.php

| Method                  | Parameter | Return | Deskripsi                     |
| ----------------------- | --------- | ------ | ----------------------------- |
| `delete($index)`        | int       | mixed  | Hapus node di posisi tertentu |
| `deleteFirst()`         | -         | mixed  | Hapus node pertama            |
| `deleteLast()`          | -         | mixed  | Hapus node terakhir           |
| `deleteByValue($value)` | mixed     | mixed  | Hapus berdasarkan nilai       |

### 🔹 SearchOperation.php

| Method               | Parameter | Return  | Deskripsi                                   |
| -------------------- | --------- | ------- | ------------------------------------------- |
| `search($target)`    | mixed     | int     | Cari data, return index (-1 jika tidak ada) |
| `searchAll($target)` | mixed     | array   | Cari semua kemunculan, return array index   |
| `contains($target)`  | mixed     | boolean | Cek apakah data ada                         |
| `get($index)`        | int       | mixed   | Ambil data di index tertentu                |

### 🔹 LinkedList.php (Advanced)

| Method      | Parameter | Return  | Deskripsi               |
| ----------- | --------- | ------- | ----------------------- |
| `reverse()` | -         | void    | Balik urutan LinkedList |
| `isEmpty()` | -         | boolean | Cek apakah list kosong  |
| `clear()`   | -         | void    | Hapus semua node        |

### 🔹 LinkedListBase.php (Utilities)

| Method            | Parameter | Return | Deskripsi               |
| ----------------- | --------- | ------ | ----------------------- |
| `display($title)` | string    | void   | Tampilkan isi list      |
| `getSize()`       | -         | int    | Hitung jumlah node      |
| `showSize()`      | -         | int    | Tampilkan ukuran detail |

## 🏗️ ARSITEKTUR MODULAR

```
📦 LinkedList Architecture
├── 🏛️ LinkedListBase (base class)
│   ├── 📋 Node management
│   ├── 🎨 Display utilities
│   └── 📊 Size calculation
├── 🔧 AppendOperation (trait)
├── 🔧 InsertOperation (trait)
├── 🔧 DeleteOperation (trait)
├── 🔧 SearchOperation (trait)
└── 🎯 LinkedList (main class)
    └── 🚀 Advanced operations (reverse, clear, isEmpty)
```

## 🎯 KEUNTUNGAN STRUKTUR MODULAR

### ✅ **Development Benefits**

- **Modular** - Setiap operasi dalam file terpisah
- **Maintainable** - Mudah maintain dan update
- **Reusable** - Bisa menggunakan operasi tertentu saja
- **Testable** - Test individual untuk setiap operasi
- **Scalable** - Mudah menambah operasi baru

### ✅ **Learning Benefits**

- **Step-by-step** - Belajar satu operasi dalam satu waktu
- **Focused Demo** - Demo terpisah untuk setiap operasi
- **Clear Output** - Output yang jelas dan terarah
- **Progressive Learning** - Dari operasi sederhana ke kompleks

### ✅ **Code Quality**

- **Clean Code** - Kode lebih mudah dibaca
- **Single Responsibility** - Setiap trait punya tanggung jawab tunggal
- **DRY Principle** - Tidak ada duplikasi kode
- **SOLID Principles** - Mengikuti prinsip SOLID

## 🔬 TESTING & DEBUGGING

### Individual Operation Testing

```bash
# Test operasi tertentu
php demo_append.php     # Test append only
php demo_insert.php     # Test insert only
php demo_search.php     # Test search only
php demo_delete.php     # Test delete only

# Test semua operasi
php Demo.php
```

### Custom Testing

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
$list->reverse();
$list->display("Test Result");
?>
```

## 📊 CONTOH OUTPUT

### Demo Append Output:

```
🚀 DEMO APPEND OPERATION
========================
📝 Operasi: Menambah data di akhir linked list

🏗️ Membuat LinkedList kosong...
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

### Demo Search Output:

```
==================================================
🔹 OPERASI: SEARCH (Mencari data: 20)

📋 LinkedList saat ini:
   [0: 10] -> [1: 20] -> [2: 30] -> NULL
   ➤ Memulai pencarian dari head...
     - Index 0: data=10 (bukan yang dicari)
     - Index 1: data=20 ✅ DITEMUKAN!
   ✅ Data 20 ditemukan pada index ke-1
```

## 🎓 LEARNING PATH YANG DISARANKAN

### 1. **Pemula**

```
Start Here → demo_append.php → demo_search.php → demo_insert.php
```

### 2. **Intermediate**

```
demo_delete.php → Demo.php (complete) → Custom combinations
```

### 3. **Advanced**

```
Create your own operations → Extend functionality → Performance optimization
```

## 🛠️ TROUBLESHOOTING

### ❌ Error: "Class not found"

```bash
# Check if all files exist
ls -la *.php

# Ensure proper require_once paths
grep -n "require_once" *.php
```

### ❌ Error: "Call to undefined method"

```bash
# Check if trait is included in class
grep -A5 -B5 "use.*Operation" LinkedList.php
```

### ❌ Demo tidak jalan

```bash
# Check PHP version (requires 7.4+)
php --version

# Test syntax
php -l demo_append.php
```

### ❌ Hasil tidak sesuai ekspektasi

```bash
# Run specific operation demo
php demo_append.php

# Check step by step
php -d display_errors=1 demo_append.php
```

## 📞 SUPPORT & CONTACT

- **👨‍💻 Author:** GilangRiskyM
- **📅 Created:** 2025-06-25 07:28:34 UTC
- **📅 Last Updated:** 2025-06-25 08:24:08 UTC
- **🏷️ Version:** 2.0 - Separated Demo Edition
- **📂 Repository:** implementasi-linked-list-php
- **📄 License:** MIT License

### 🤝 Contributing

Feel free to:

- Report bugs atau issues
- Suggest new features atau improvements
- Submit pull requests
- Add more demo examples

### 📚 Documentation

- Main docs: `README.md` (this file)
- Demo docs: `DEMO_README.md`
- License: `LICENSE.md`

---

**🎯 Goal:** Implementasi LinkedList yang modular, mudah dipahami, dan mudah di-extend dengan demo terpisah untuk setiap operasi dasar.

**© 2025 GilangRiskyM - Modular LinkedList Implementation with Separated Demo**
