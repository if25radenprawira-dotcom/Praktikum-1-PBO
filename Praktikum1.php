<?php

class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    // Menggunakan static method
    public static function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

$produk = new Produk();
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

$formatHarga = "Rp" . number_format($produk->harga, 0, ',', '.');
$formatTotal = "Rp" . number_format($produk->total(), 0, ',', '.');

echo "Produk: " . $produk->nama . "\n";
echo "Harga: " . $formatHarga . "\n";
echo "Stok: " . $produk->stok . "\n";

echo "Pajak: " . Produk::pajak() . "%\n";
echo "Total harga setelah pajak: " . $formatTotal . "\n";