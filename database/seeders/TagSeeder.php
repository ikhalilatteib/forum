<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->truncateTable();
        $data = [
            [
                'name' => 'Programlama I'
            ], [
                'name' => 'Programlama II'
            ], [
                'name' => 'Nesne Dayalı Programala'
            ], [
                'name' => 'Internet Programla'
            ], [
                'name' => 'Veri Yapıları'
            ], [
                'name' => 'Veri Tabani Yönetim Sistemi'
            ], [
                'name' => 'İşletim Sistemi'
            ], [
                'name' => 'Bilgisayar Ağları'
            ], [
                'name' => 'Mobil Programlama'
            ], [
                'name' => 'Genel'
            ],
        ];
        foreach ($data as $item) {
            Tag::query()->create([
                'name' => $item['name']
            ]);
        }
    }
    
    public function truncateTable(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('tags')->truncate();
    }
}
