<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeNumberController extends Controller
{
    // Function untuk mencari bilangan prima antara p_start dan p_end
    public function findPrimeNumbers($p_start = 1, $p_end = 100)
    {
        $primes = [];  // Array untuk menyimpan bilangan prima

        // Loop dari p_start sampai p_end
        for ($i = $p_start; $i <= $p_end; $i++) {
            if ($this->isPrime($i)) {
                $primes[] = $i;
            }
        }

        // Mengirim data ke view
        return view('prime-numbers', ['primes' => $primes, 'start' => $p_start, 'end' => $p_end]);
    }

    // Fungsi untuk mengecek apakah sebuah bilangan adalah bilangan prima
    private function isPrime($number)
    {
        if ($number <= 1) {
            return false;  // Bilangan kurang dari atau sama dengan 1 bukan bilangan prima
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;  // Jika habis dibagi, maka bukan bilangan prima
            }
        }

        return true;  // Jika tidak habis dibagi, maka bilangan prima
    }
}
