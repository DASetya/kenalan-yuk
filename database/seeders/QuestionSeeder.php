<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $questions = [
            [
                'question' => 'Saya merasa tidak bahagia dengan diri saya',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya sangat tertarik dengan permasalahan orang lain',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya ingin hidup saya lebih bermanfaat',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya bisa menerima keberadaan orang lain dalam hidup saya',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Ketika saya bangun tidur, Saya kurang bersemangat',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya merasa pesimis dengan masa depan',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya menemukan banyak kebahagiaan dalam kehidupan',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya selalu berkotmitmen dengan yang saya kerjakan',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Hidup itu menyenangkan',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya merasa dunia ini merupakan tempat yang kurang menyenangkan',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya suka tertawa',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya merasa puas dengan segala hal dalam hidup saya',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya merasa tidak menarik',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Terdapat perbedaan antara harapan saya dengan pencapaian yang saya dapatkan',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya merasa sangat bahagia',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya bisa melihat kehidupan dalam banyak sudut pandang',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya bisa membuat orang lain gembira',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya bisa dengan mudah beradaptasi dengan orang lain',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya tidak bisa mengontrol diri saya',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya merasa bisa mendapatkan apa yang saya inginkan',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya selalu waspada pada apapun',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya sering merasa bahagia',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya kesulitan dalam mengambil keputusan',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya merasa tidak memiliki makna dan tujuan dalam hidup saya',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya meras memiliki banyak kekuatan',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya memiliki pengaruh yang baik pada lingkungan saya',
                'reverse' => 0,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya tidak bahagia dengan orang lain',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya merasa tidak sehat',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'question' => 'Saya memiliki kenang dimasa lalau yang kurang baik',
                'reverse' => 1,
                'description' => 'deskripsi singkat',
                'created_at' => $now,
                'updated_at' => $now,
            ],

        ];

        // Insert data dummy ke db
        Question::insert($questions);

        // Logic Konversi
        /*
            Buat array desc = [6, 5, 4, 3, 2, 1]
            Skor reversi dikurangi 1 sebagai index array desc = 4 - 1 = 3 (3 ini indexya)
            Ambil skor asli dari array desc sesuai indexnya = index ketiga berarti = 3
            jadi skor reverse dari 4 adalah 3
        */

        // Counting
        /*
            Langkah 1. 
                Item bertanda (R) harus diberi skor terbalik: Misalnya, jika Anda memberi diri Anda "1", coret dan ubah menjadi "6."
                Ubah "2 ″ menjadi" 5 ″
                Ubah "3 ″ menjadi" 4 ″
                Ubah "4 ″ menjadi" 3 ″
                Ubah "5 ″ menjadi" 2 ″
                Ubah "6 ″ menjadi" 1 ″

            Langkah 2.
                Tambahkan nomor untuk semua 29 pertanyaan. (Gunakan angka yang dikonversi untuk 12 item yang skor terbalik.)

            Langkah 3.
                Bagi dengan 29. Jadi skor kebahagiaan Anda = total (dari langkah 2) dibagi 29.
        **/
    }
}
