<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('major')->insert([
            ['name'=> 'Công Nghệ Thông Tin', 'slug'=>'cong-nghe-thong-tin','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Quản Trị Kinh Doanh', 'slug'=>'quan-tri-king-doanh','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Công Nghệ Kỹ Thuật Điều Khiển', 'slug'=>'cong-nghe-ky-thuat-dieu-khien','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Cơ Động Hóa', 'slug'=>'co-dong-hoa','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Thiết Kế Đồ Họa', 'slug'=>'thiet-ke-do-hoa','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Hướng Dẫn Du Lịch', 'slug'=>'huong-dan-du-lich','created_at'=>Now(), 'updated_at'=>Now()],
        ]);
    }
}
