<?php
namespace App\Controllers;
class Page extends BaseController
{
    public function about()
    {
    return view('about', [
    'title' => 'Halaman About',
    'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
    halaman ini.Aplikasi Pengelolaan Iuran KAS RT,
    
    Menglola data Warga (CRUD)
    • Menampilkan data Wrga
    • Tambah Warga
    • Ubah dan Hapus Warga
    • Transaksi Iuran Warga
    • Daftar KAS Warga
    • Tambah Iuran Warga
    • Laporan Transaksi
    • Data Warga yang belum Iuran (perbulan/pertahun)
    • Data Jumlah KAS (bulanan/tahunan)
    '
    ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact'
        ]);
    }
    public function artikel()
    {
        return view('artikel', [
            'title' => 'Halaman Artikel',
            'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi
            halaman ini.'
            ]);
    }
    public function faqs()
    {
        echo "Ini halaman FAQ";
    }

    public function tos()
    {
        echo "ini halaman Term of Services";
    }

}
?>