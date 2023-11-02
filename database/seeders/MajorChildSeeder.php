<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MajorChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('major_child')->insert([
            ['name'=> 'Lập Trình Web', 'slug'=>'lap-trinh-web','id_major'=>'1','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Phát Triển Phần Mềm', 'slug'=>'phat-trien-phan-mem','id_major'=>'1','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Lập Trình Mobile', 'slug'=>'lap-trinh-mobile','id_major'=>'1','created_at'=>Now(), 'updated_at'=>Now()],

            ['name'=> 'Marketing', 'slug'=>'marketing','id_major'=>'2','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Quan Hệ Công Chúng và Tổ Chức Sự Kiện', 'slug'=>'quan-he-cong-chung-va-to-chuc-su-kien','id_major'=>'2','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Digital Marketing', 'slug'=>'digital-marketing','id_major'=>'2','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Quản Trị Khách Sạn', 'slug'=>'quan-tri-khach-san','id_major'=>'2','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Quản Trị Nhà Hàng', 'slug'=>'quantri-nha-hang','id_major'=>'2','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Logistic', 'slug'=>'logistic','id_major'=>'2','created_at'=>Now(), 'updated_at'=>Now()],

            ['name'=> 'Công Nghệ Kỹ Thuận Điện, Điện Tử', 'slug'=>'cong-nghe-ky-thuat-dien-dien-tu','id_major'=>'3','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Công Nghệ Kỹ Thuận Điều Khiển, Tự Động Hóa', 'slug'=>'cong-nghe-ky-thuat-dieu-khien-tu-dong-hoa','id_major'=>'3','created_at'=>Now(), 'updated_at'=>Now()],
            ['name'=> 'Điện Công Nghiệp', 'slug'=>'dien-cong-nghiep','id_major'=>'3','created_at'=>Now(), 'updated_at'=>Now()],

        ]);
    }
}
