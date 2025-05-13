<?php
/**
 * Random Bootstrap Color Helper
 *
 * Helper function untuk menghasilkan warna Bootstrap secara acak
 */

// Pastikan function ini tidak didefinisikan sebelumnya
if (!function_exists('getRandomColor')) {
    /**
     * Menghasilkan warna Bootstrap secara acak
     *
     * @param bool $exclude_light_dark Opsional, jika TRUE maka warna 'light' dan 'dark' tidak dimasukkan
     * @return string Nama warna Bootstrap yang dipilih secara acak
     */
    function getRandomColor($exclude_light_dark = false)
    {
        // Array berisi daftar warna Bootstrap
        $colors = ['primary', 'secondary', 'success', 'info', 'warning', 'danger'];
        
        // Tambahkan warna 'light' dan 'dark' jika tidak diexclude
        if (!$exclude_light_dark) {
            $colors[] = 'light';
            $colors[] = 'dark';
        }
        
        // Mengacak array dan mengambil index acak
        $randomIndex = array_rand($colors);
        
        return $colors[$randomIndex];
    }
}

// Tambahan fungsi untuk mendapatkan beberapa warna acak sekaligus
if (!function_exists('getMultipleRandomColors')) {
    /**
     * Menghasilkan beberapa warna Bootstrap secara acak
     * 
     * @param int $count Jumlah warna yang diinginkan
     * @param bool $unique Jika TRUE, warna yang dihasilkan tidak akan ada yang sama
     * @param bool $exclude_light_dark Opsional, jika TRUE maka warna 'light' dan 'dark' tidak dimasukkan
     * @return array Array berisi warna-warna Bootstrap yang dipilih secara acak
     */
    function getMultipleRandomBootstrapColors($count = 3, $unique = true, $exclude_light_dark = false)
    {
        // Array berisi daftar warna Bootstrap
        $colors = ['primary', 'secondary', 'success', 'info', 'warning', 'danger'];
        
        // Tambahkan warna 'light' dan 'dark' jika tidak diexclude
        if (!$exclude_light_dark) {
            $colors[] = 'light';
            $colors[] = 'dark';
        }
        
        // Jumlah maksimal warna tidak boleh melebihi jumlah warna yang tersedia
        $max_colors = count($colors);
        $count = ($unique && $count > $max_colors) ? $max_colors : $count;
        
        $result = [];
        
        if ($unique) {
            // Acak array dan ambil sejumlah elemen yang dibutuhkan
            shuffle($colors);
            $result = array_slice($colors, 0, $count);
        } else {
            // Ambil warna secara acak, boleh duplikat
            for ($i = 0; $i < $count; $i++) {
                $randomIndex = array_rand($colors);
                $result[] = $colors[$randomIndex];
            }
        }
        
        return $result;
    }
}