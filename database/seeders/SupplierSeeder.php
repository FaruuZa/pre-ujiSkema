<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'name' => "Soerabaja'45 Cab. Bondowoso",
            "address" => "Jl. Diponegoro No.31, Kotakulon",
            "fulladdress" => "Jl. Diponegoro No.31, Kotakulon, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68211",
            "categories" => "Toko Percetakan, Printer Digital, Industri Percetakan",
            "phone" => "0811-3113-3355",
            "gmaps" => "https://www.google.com/maps?cid=15121624604792167921",
            "website" => "http://soerabaja45.co.id/",
            "open_hours" => "Senin: [08.00-21.00]| Selasa: [08.00-21.00]| Rabu: [08.00-21.00]| Kamis: [08.00-21.00]| Jumat: [08.00-11.00, 12.30-21.00]| Sabtu: [08.00-18.00]| Minggu: [10.00-18.00]",
            "image" => "https://lh5.googleusercontent.com/p/AF1QipNxFa_mVFpYDTsUoQ05J2G96NWTLUJaQh-pUjaO=w92-h92-k-no"
        ]);
        Supplier::create([
            'name' => "Sparkling Digital Printing",
            "address" => "Jl. Mt. Haryono No.40B, Badean, Kec. Bondowoso",
            "fulladdress" => "Jl. Mt. Haryono No.40B, Badean, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68214",
            "categories" => "Layanan cetak digital, Jasa Bordir, Toko Sablon, Perusahaan jahit",
            "phone" => "0812-3388-9100",
            "gmaps" => "https://www.google.com/maps?cid=15256636907997662096",
            "website" => "https://instagram.com/sparklingdigitalprinting?igshid=1l417t64tzz1x",
            "open_hours" => "Senin: [07.30-21.00]| Selasa: [07.30-21.00]| Rabu: [07.30-21.00]| Kamis: [07.30-21.00]| Jumat: [07.30-21.00]| Sabtu: [07.30-21.00]| Minggu: [07.30-21.00]",
             "image" => "https://lh5.googleusercontent.com/p/AF1QipOQJiU7PqJ0z0TLgo2i--wg9ciGaa4wRQG7pgUJ=w169-h92-k-no"
        ]);
        Supplier::create([
            'name' => "creAtive",
            "address" => "Jl. Letjen S Parman, Asrama, Badean.",
            "fulladdress" => "Jl. Letjen S Parman, Asrama, Badean, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68214",
            "categories" => "Toko Percetakan, Toko Sablon, Toko Alat Tulis",
            "phone" => "0812-3471-3539",
            "gmaps" => "https://www.google.com/maps?cid=17059566942747155718",
            "website" => " - ",
            "open_hours" => "Jumat: [07.00-21.00]| Sabtu: [07.00-16.00]| Minggu: [18.00-22.00]| Senin: [07.00-21.00]| Selasa: [07.00-21.00]| Rabu: [07.00-21.00]| Kamis: [07.00-21.00]",
            "image" => "https://lh5.googleusercontent.com/p/AF1QipOEa_f7gqXMuAdOdHUz-Wm_jvBIruk9AKSL-VTU=w163-h92-k-no"
        ]);
        Supplier::create([
            'name' => "Rejeki Cetak",
            "address" => "Jl. Branjangan, Puring, Kabupaten Jember.",
            "fulladdress" => "Jl. Branjangan, Puring, Slawu, Slawu Lor, Kec. Patrang, Kabupaten Jember, Jawa Timur 68114",
            "categories" => "Toko Percetakan",
            "phone" => "(0331) 411319",
            "gmaps" => "https://www.google.com/maps?cid=18270351757287761736",
            "website" => "http://www.rejekicetak.co.id/",
            "open_hours" => "Senin: [08.00-17.00]| Selasa: [08.00-17.00]| Rabu: [08.00-17.00]| Kamis: [08.00-17.00]| Jumat: [08.00-17.00]| Sabtu: [08.00-17.00]| Minggu: [Tutup]| ",
            "image" => "https://lh5.googleusercontent.com/p/AF1QipMwcY64dHj5eXF7Jq5V3bebwBGF45oHE1ggDgsZ=w122-h92-k-no"
        ]);
    }
}
