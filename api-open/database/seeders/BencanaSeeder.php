<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bencana;
use App\Models\Wilayah;

class BencanaSeeder extends Seeder
{
    public function run()
    {
        $bencanaData = [
           [
                'kib' => '3301102202412251',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2024-10-30',
                'kejadian' => 'Tanah Longsor Di Desa Madusari, Kecamatan Wanareja',
                'detail' => 'Tanah Longsor di Desa Madusari, Kecamatan Wanareja pada hari Rabu, 25 Desember 2024 Jam: 16.30 WIB',
            ],


            [
                'kib' => '3301102202412231',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2019-03-18',
                'kejadian' => 'Tanah Longsor Di Dusun Kroya Desa Kedungwadas Kecamatan Bantarsari',
                'detail' => 'Hari : Senin, 23 Desember 2024 Pukul : 15.30 wib selesai Lokasi kejadian : Dusun Kroya RT 04 RW 03 Desa Kedungwadas Kecamatan Bantarsari',
            ],


            [
                'kib' => '3374102202412231',
                'wilayah_id' => Wilayah::where('nama', 'Kota Kota Semarang, Jawa Tengah')->first()->id,
                'tanggal' => '2022-01-20',
                'kejadian' => 'Talud Makam Longsor',
                'detail' => 'Waktu Kejadian Hari : Senin. Tanggal : 23 Desember 2024. Pukul : 14.00 WIB.  Lokasi Kejadian Kota : Semarang. Kecamatan : Gunungpati. Kelurahan : Sekaran. Alamat : Bantar Dowo RT / RW : 03 / 07.  Kronologi Kejadian : Dikarenakan hujan intensitas tinggi di wilayah tersebut mengakibatkan tanah makam longsor dengan ukuran Tinggi 2m panjang 8m.  Kerugian : Rp 10.000.000,- Korban Jiwa : Nihil.',
            ],


            [
                'kib' => '3301102202412221',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2024-05-07',
                'kejadian' => 'Tanah Longsor Di Dusun Dukuh Petir Rt 02 Rw 06 Desa Karangsari Kecamatan Cimanggu Kabupaten Cilacap.',
                'detail' => 'Turap penguat jalan sekaligus penguat Bangunan rumah Bpk Warsum dengan Volume panjang 9 Meter tinggi 3 Meter Longsor dan manghantam kamar mandi  rumah Bapak Sakum ( tembok retak - retak ) yang ada dibawahnya.',
            ],


            [
                'kib' => '3301102202412151',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2016-07-08',
                'kejadian' => 'Kejadian Bencana Alam Tanah Longsor Di Desa Cibalung Kecamatan Cimanggu',
                'detail' => 'kejadian Bencana Alam Tanah Longsor di Desa Cibalung Kecamatan Cimanggu pada hari Minggu, 15 Desember 2024 pukul 17.55 WIB',
            ],


            [
                'kib' => '3301102202412092',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2024-01-18',
                'kejadian' => 'Tanah Longsor Di Belakang Kantor Balai Penyuluh Pertanian (bpp) Kecamatan Karangpucung',       
                'detail' => 'Tembok kantor BPP Pertanian tertimbun tanah setinggi 1,5 meter dan labar 5 meter, dan kaca ruang dapur pecah. Kerugian diperkirakan ± 25.000.000,-',
            ],


            [
                'kib' => '3301102202412091',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2023-06-12',
                'kejadian' => 'Kejadian  Bencana Alam Tanah Longsor  ( Hydrometerologi ) Di Wilayah Kecamatan Cimanggu',      
                'detail' => 'Kejadian  Bencana Alam Tanah Longsor  ( Hydrometerologi ) di Wilayah Kecamatan Cimanggu pada hari senin, 9 Desember 2024',
            ],


            [
                'kib' => '3301102202412081',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2022-03-27',
                'kejadian' => 'Bencana Alam Tanah Longsor Di Rt 02 Rw 04 Dusun Karangpucung Desa Karangpucung Kecamatan Karangpucung',
                'detail' => 'Bencana Alam tanah Longsor di RT 02 RW 04 Dusun Karangpucung Desa Karangpucung Kecamatan Karangpucung pada hari minggu 8 Desember 2024',
            ],


            [
                'kib' => '3301102202412052',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2015-08-23',
                'kejadian' => 'Tebing Longsor Menutup Akses  Jalan Lingkungan Di Dusun Sindanghaji Desa Bantarpanjang Kecamatan Cimanggu',
                'detail' => 'Tebing Longsor menutup akses  jalan Lingkungan di Desa Bantarpanjang Kecamatan Cimanggu RT 03 RW 05 Dusun: Sindanghaji Desa: Bantarpanjang Kecamatan Cimanggu Kabupaten Cilacap Hari : Kamis 05 Desember  2024 Pukul : 19.30 Wib',
            ],


            [
                'kib' => '3301102202411291',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2023-10-29',
                'kejadian' => 'Tanah Longsor Yang Merusak Jalan Desa Di Dusun Tipar Jaya Desa Ciwuni Kecamatan Kesugihan',    
                'detail' => 'Pada hari Jum\'at 29 November 2024 pukul 23.00 terjadi tanah longsor yang merusak jalan desa di dusun Tipar Jaya RT 05 RW 02 Desa Ciwuni Kecamatan Kesugihan',
            ],


            [
                'kib' => '3301102202412231',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2019-06-08',
                'kejadian' => 'Tanah Longsor Di Dusun Kroya Desa Kedungwadas Kecamatan Bantarsari',
                'detail' => 'Hari : Senin, 23 Desember 2024 Pukul : 15.30 wib selesai Lokasi kejadian : Dusun Kroya RT 04 RW 03 Desa Kedungwadas Kecamatan Bantarsari',
            ],


            [
                'kib' => '3374102202412231',
                'wilayah_id' => Wilayah::where('nama', 'Kota Kota Semarang, Jawa Tengah')->first()->id,
                'tanggal' => '2019-10-02',
                'kejadian' => 'Talud Makam Longsor',
                'detail' => 'Waktu Kejadian Hari : Senin. Tanggal : 23 Desember 2024. Pukul : 14.00 WIB.  Lokasi Kejadian Kota : Semarang. Kecamatan : Gunungpati. Kelurahan : Sekaran. Alamat : Bantar Dowo RT / RW : 03 / 07.  Kronologi Kejadian : Dikarenakan hujan intensitas tinggi di wilayah tersebut mengakibatkan tanah makam longsor dengan ukuran Tinggi 2m panjang 8m.  Kerugian : Rp 10.000.000,- Korban Jiwa : Nihil.',
            ],


            [
                'kib' => '3301102202412221',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2021-02-13',
                'kejadian' => 'Tanah Longsor Di Dusun Dukuh Petir Rt 02 Rw 06 Desa Karangsari Kecamatan Cimanggu Kabupaten Cilacap.',
                'detail' => 'Turap penguat jalan sekaligus penguat Bangunan rumah Bpk Warsum dengan Volume panjang 9 Meter tinggi 3 Meter Longsor dan manghantam kamar mandi  rumah Bapak Sakum ( tembok retak - retak ) yang ada dibawahnya.',
            ],


            [
                'kib' => '3301102202412151',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2024-02-02',
                'kejadian' => 'Kejadian Bencana Alam Tanah Longsor Di Desa Cibalung Kecamatan Cimanggu',
                'detail' => 'kejadian Bencana Alam Tanah Longsor di Desa Cibalung Kecamatan Cimanggu pada hari Minggu, 15 Desember 2024 pukul 17.55 WIB',
            ],


            [
                'kib' => '3301102202412092',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2020-08-27',
                'kejadian' => 'Tanah Longsor Di Belakang Kantor Balai Penyuluh Pertanian (bpp) Kecamatan Karangpucung',       
                'detail' => 'Tembok kantor BPP Pertanian tertimbun tanah setinggi 1,5 meter dan labar 5 meter, dan kaca ruang dapur pecah. Kerugian diperkirakan ± 25.000.000,-',
            ],


            [
                'kib' => '3301102202412091',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2015-01-30',
                'kejadian' => 'Kejadian  Bencana Alam Tanah Longsor  ( Hydrometerologi ) Di Wilayah Kecamatan Cimanggu',      
                'detail' => 'Kejadian  Bencana Alam Tanah Longsor  ( Hydrometerologi ) di Wilayah Kecamatan Cimanggu pada hari senin, 9 Desember 2024',
            ],


            [
                'kib' => '3301102202412081',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2024-06-14',
                'kejadian' => 'Bencana Alam Tanah Longsor Di Rt 02 Rw 04 Dusun Karangpucung Desa Karangpucung Kecamatan Karangpucung',
                'detail' => 'Bencana Alam tanah Longsor di RT 02 RW 04 Dusun Karangpucung Desa Karangpucung Kecamatan Karangpucung pada hari minggu 8 Desember 2024',
            ],


            [
                'kib' => '3301102202412052',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2017-05-03',
                'kejadian' => 'Tebing Longsor Menutup Akses  Jalan Lingkungan Di Dusun Sindanghaji Desa Bantarpanjang Kecamatan Cimanggu',
                'detail' => 'Tebing Longsor menutup akses  jalan Lingkungan di Desa Bantarpanjang Kecamatan Cimanggu RT 03 RW 05 Dusun: Sindanghaji Desa: Bantarpanjang Kecamatan Cimanggu Kabupaten Cilacap Hari : Kamis 05 Desember  2024 Pukul : 19.30 Wib',
            ],


            [
                'kib' => '3301102202411291',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2015-12-18',
                'kejadian' => 'Tanah Longsor Yang Merusak Jalan Desa Di Dusun Tipar Jaya Desa Ciwuni Kecamatan Kesugihan',    
                'detail' => 'Pada hari Jum\'at 29 November 2024 pukul 23.00 terjadi tanah longsor yang merusak jalan desa di dusun Tipar Jaya RT 05 RW 02 Desa Ciwuni Kecamatan Kesugihan',
            ],


            [
                'kib' => '3301102202411251',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2021-10-07',
                'kejadian' => 'Kejadian Tebing Batu Longsor Menutup Akses Jalan Kabupaten Di Desa  Bantarmangu, Kecamatan Cimanggu',
                'detail' => 'Terjadi Tebing Batu Longsor menutup akses jalan Kabupaten di Desa  Bantarmangu, Kecamatan Cimanggu pada Senin, 25 November 2024 jam 08.00 WIB',
            ],


            [
                'kib' => '3374102202412231',
                'wilayah_id' => Wilayah::where('nama', 'Kota Kota Semarang, Jawa Tengah')->first()->id,
                'tanggal' => '2019-01-02',
                'kejadian' => 'Talud Makam Longsor',
                'detail' => 'Waktu Kejadian Hari : Senin. Tanggal : 23 Desember 2024. Pukul : 14.00 WIB.  Lokasi Kejadian Kota : Semarang. Kecamatan : Gunungpati. Kelurahan : Sekaran. Alamat : Bantar Dowo RT / RW : 03 / 07.  Kronologi Kejadian : Dikarenakan hujan intensitas tinggi di wilayah tersebut mengakibatkan tanah makam longsor dengan ukuran Tinggi 2m panjang 8m.  Kerugian : Rp 10.000.000,- Korban Jiwa : Nihil.',
            ],


            [
                'kib' => '3301102202412221',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2018-06-29',
                'kejadian' => 'Tanah Longsor Di Dusun Dukuh Petir Rt 02 Rw 06 Desa Karangsari Kecamatan Cimanggu Kabupaten Cilacap.',
                'detail' => 'Turap penguat jalan sekaligus penguat Bangunan rumah Bpk Warsum dengan Volume panjang 9 Meter tinggi 3 Meter Longsor dan manghantam kamar mandi  rumah Bapak Sakum ( tembok retak - retak ) yang ada dibawahnya.',
            ],


            [
                'kib' => '3301102202412151',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2024-05-23',
                'kejadian' => 'Kejadian Bencana Alam Tanah Longsor Di Desa Cibalung Kecamatan Cimanggu',
                'detail' => 'kejadian Bencana Alam Tanah Longsor di Desa Cibalung Kecamatan Cimanggu pada hari Minggu, 15 Desember 2024 pukul 17.55 WIB',
            ],


            [
                'kib' => '3301102202412092',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2015-11-16',
                'kejadian' => 'Tanah Longsor Di Belakang Kantor Balai Penyuluh Pertanian (bpp) Kecamatan Karangpucung',       
                'detail' => 'Tembok kantor BPP Pertanian tertimbun tanah setinggi 1,5 meter dan labar 5 meter, dan kaca ruang dapur pecah. Kerugian diperkirakan ± 25.000.000,-',
            ],


            [
                'kib' => '3301102202412091',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2018-02-02',
                'kejadian' => 'Kejadian  Bencana Alam Tanah Longsor  ( Hydrometerologi ) Di Wilayah Kecamatan Cimanggu',      
                'detail' => 'Kejadian  Bencana Alam Tanah Longsor  ( Hydrometerologi ) di Wilayah Kecamatan Cimanggu pada hari senin, 9 Desember 2024',
            ],


            [
                'kib' => '3301102202412081',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2023-06-17',
                'kejadian' => 'Bencana Alam Tanah Longsor Di Rt 02 Rw 04 Dusun Karangpucung Desa Karangpucung Kecamatan Karangpucung',
                'detail' => 'Bencana Alam tanah Longsor di RT 02 RW 04 Dusun Karangpucung Desa Karangpucung Kecamatan Karangpucung pada hari minggu 8 Desember 2024',
            ],


            [
                'kib' => '3301102202412052',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2018-05-04',
                'kejadian' => 'Tebing Longsor Menutup Akses  Jalan Lingkungan Di Dusun Sindanghaji Desa Bantarpanjang Kecamatan Cimanggu',
                'detail' => 'Tebing Longsor menutup akses  jalan Lingkungan di Desa Bantarpanjang Kecamatan Cimanggu RT 03 RW 05 Dusun: Sindanghaji Desa: Bantarpanjang Kecamatan Cimanggu Kabupaten Cilacap Hari : Kamis 05 Desember  2024 Pukul : 19.30 Wib',
            ],


            [
                'kib' => '3301102202411291',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2024-08-18',
                'kejadian' => 'Tanah Longsor Yang Merusak Jalan Desa Di Dusun Tipar Jaya Desa Ciwuni Kecamatan Kesugihan',    
                'detail' => 'Pada hari Jum\'at 29 November 2024 pukul 23.00 terjadi tanah longsor yang merusak jalan desa di dusun Tipar Jaya RT 05 RW 02 Desa Ciwuni Kecamatan Kesugihan',
            ],


            [
                'kib' => '3301102202411251',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2018-02-01',
                'kejadian' => 'Kejadian Tebing Batu Longsor Menutup Akses Jalan Kabupaten Di Desa  Bantarmangu, Kecamatan Cimanggu',
                'detail' => 'Terjadi Tebing Batu Longsor menutup akses jalan Kabupaten di Desa  Bantarmangu, Kecamatan Cimanggu pada Senin, 25 November 2024 jam 08.00 WIB',
            ],


            [
                'kib' => '3301102202411241',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2022-04-19',
                'kejadian' => 'Kejadian Tanah Longsor Di Desa Citembong Kecamatan Bantarsari',
                'detail' => 'Minggu, 24 November 2024 Pukul 17.00 wib terjadi hujan dengan intensitas tinggi mengakibatkan tanah longsor di  Dusun Karangtengah  RT 01 RW 04, Desa Citembong Kecamatan Bantarsari',
            ],


            [
                'kib' => '3301102202412221',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2023-10-18',
                'kejadian' => 'Tanah Longsor Di Dusun Dukuh Petir Rt 02 Rw 06 Desa Karangsari Kecamatan Cimanggu Kabupaten Cilacap.',
                'detail' => 'Turap penguat jalan sekaligus penguat Bangunan rumah Bpk Warsum dengan Volume panjang 9 Meter tinggi 3 Meter Longsor dan manghantam kamar mandi  rumah Bapak Sakum ( tembok retak - retak ) yang ada dibawahnya.',
            ],


            [
                'kib' => '3301102202412151',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2017-10-16',
                'kejadian' => 'Kejadian Bencana Alam Tanah Longsor Di Desa Cibalung Kecamatan Cimanggu',
                'detail' => 'kejadian Bencana Alam Tanah Longsor di Desa Cibalung Kecamatan Cimanggu pada hari Minggu, 15 Desember 2024 pukul 17.55 WIB',
            ],


            [
                'kib' => '3301102202412092',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2016-05-18',
                'kejadian' => 'Tanah Longsor Di Belakang Kantor Balai Penyuluh Pertanian (bpp) Kecamatan Karangpucung',       
                'detail' => 'Tembok kantor BPP Pertanian tertimbun tanah setinggi 1,5 meter dan labar 5 meter, dan kaca ruang dapur pecah. Kerugian diperkirakan ± 25.000.000,-',
            ],


            [
                'kib' => '3301102202412091',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2022-10-31',
                'kejadian' => 'Kejadian  Bencana Alam Tanah Longsor  ( Hydrometerologi ) Di Wilayah Kecamatan Cimanggu',      
                'detail' => 'Kejadian  Bencana Alam Tanah Longsor  ( Hydrometerologi ) di Wilayah Kecamatan Cimanggu pada hari senin, 9 Desember 2024',
            ],


            [
                'kib' => '3301102202412081',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2017-05-27',
                'kejadian' => 'Bencana Alam Tanah Longsor Di Rt 02 Rw 04 Dusun Karangpucung Desa Karangpucung Kecamatan Karangpucung',
                'detail' => 'Bencana Alam tanah Longsor di RT 02 RW 04 Dusun Karangpucung Desa Karangpucung Kecamatan Karangpucung pada hari minggu 8 Desember 2024',
            ],


            [
                'kib' => '3301102202412052',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2015-06-15',
                'kejadian' => 'Tebing Longsor Menutup Akses  Jalan Lingkungan Di Dusun Sindanghaji Desa Bantarpanjang Kecamatan Cimanggu',
                'detail' => 'Tebing Longsor menutup akses  jalan Lingkungan di Desa Bantarpanjang Kecamatan Cimanggu RT 03 RW 05 Dusun: Sindanghaji Desa: Bantarpanjang Kecamatan Cimanggu Kabupaten Cilacap Hari : Kamis 05 Desember  2024 Pukul : 19.30 Wib',
            ],


            [
                'kib' => '3301102202411291',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2024-04-27',
                'kejadian' => 'Tanah Longsor Yang Merusak Jalan Desa Di Dusun Tipar Jaya Desa Ciwuni Kecamatan Kesugihan',    
                'detail' => 'Pada hari Jum\'at 29 November 2024 pukul 23.00 terjadi tanah longsor yang merusak jalan desa di dusun Tipar Jaya RT 05 RW 02 Desa Ciwuni Kecamatan Kesugihan',
            ],


            [
                'kib' => '3301102202411251',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2019-08-10',
                'kejadian' => 'Kejadian Tebing Batu Longsor Menutup Akses Jalan Kabupaten Di Desa  Bantarmangu, Kecamatan Cimanggu',
                'detail' => 'Terjadi Tebing Batu Longsor menutup akses jalan Kabupaten di Desa  Bantarmangu, Kecamatan Cimanggu pada Senin, 25 November 2024 jam 08.00 WIB',
            ],


            [
                'kib' => '3301102202411241',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2019-03-31',
                'kejadian' => 'Kejadian Tanah Longsor Di Desa Citembong Kecamatan Bantarsari',
                'detail' => 'Minggu, 24 November 2024 Pukul 17.00 wib terjadi hujan dengan intensitas tinggi mengakibatkan tanah longsor di  Dusun Karangtengah  RT 01 RW 04, Desa Citembong Kecamatan Bantarsari',
            ],


            [
                'kib' => '3301102202411242',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2020-06-08',
                'kejadian' => 'Kejadian Turap Penahan Tebing Jalan Lingkungan Dan Halaman Rumah Longsor Di Desa Madura, Kecamatan Wanareja',
                'detail' => 'Minggu, 24 November 2024, Jam : 16.30 WIB terjadi Turap penahan tebing jalan lingkungan dan halaman rumah longsor di Desa Madura, Kecamatan Wanareja di Dusun Margasari RT 01 RW 10 Desa Madura, Kecamatan Wanareja',
            ],


            [
                'kib' => '3301102202412151',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2021-08-29',
                'kejadian' => 'Kejadian Bencana Alam Tanah Longsor Di Desa Cibalung Kecamatan Cimanggu',
                'detail' => 'kejadian Bencana Alam Tanah Longsor di Desa Cibalung Kecamatan Cimanggu pada hari Minggu, 15 Desember 2024 pukul 17.55 WIB',
            ],


            [
                'kib' => '3301102202412092',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2018-05-10',
                'kejadian' => 'Tanah Longsor Di Belakang Kantor Balai Penyuluh Pertanian (bpp) Kecamatan Karangpucung',       
                'detail' => 'Tembok kantor BPP Pertanian tertimbun tanah setinggi 1,5 meter dan labar 5 meter, dan kaca ruang dapur pecah. Kerugian diperkirakan ± 25.000.000,-',
            ],


            [
                'kib' => '3301102202412091',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2020-04-10',
                'kejadian' => 'Kejadian  Bencana Alam Tanah Longsor  ( Hydrometerologi ) Di Wilayah Kecamatan Cimanggu',      
                'detail' => 'Kejadian  Bencana Alam Tanah Longsor  ( Hydrometerologi ) di Wilayah Kecamatan Cimanggu pada hari senin, 9 Desember 2024',
            ],


            [
                'kib' => '3301102202412081',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2018-12-18',
                'kejadian' => 'Bencana Alam Tanah Longsor Di Rt 02 Rw 04 Dusun Karangpucung Desa Karangpucung Kecamatan Karangpucung',
                'detail' => 'Bencana Alam tanah Longsor di RT 02 RW 04 Dusun Karangpucung Desa Karangpucung Kecamatan Karangpucung pada hari minggu 8 Desember 2024',
            ],


            [
                'kib' => '3301102202412052',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2019-03-21',
                'kejadian' => 'Tebing Longsor Menutup Akses  Jalan Lingkungan Di Dusun Sindanghaji Desa Bantarpanjang Kecamatan Cimanggu',
                'detail' => 'Tebing Longsor menutup akses  jalan Lingkungan di Desa Bantarpanjang Kecamatan Cimanggu RT 03 RW 05 Dusun: Sindanghaji Desa: Bantarpanjang Kecamatan Cimanggu Kabupaten Cilacap Hari : Kamis 05 Desember  2024 Pukul : 19.30 Wib',
            ],


            [
                'kib' => '3301102202411291',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2018-11-15',
                'kejadian' => 'Tanah Longsor Yang Merusak Jalan Desa Di Dusun Tipar Jaya Desa Ciwuni Kecamatan Kesugihan',    
                'detail' => 'Pada hari Jum\'at 29 November 2024 pukul 23.00 terjadi tanah longsor yang merusak jalan desa di dusun Tipar Jaya RT 05 RW 02 Desa Ciwuni Kecamatan Kesugihan',
            ],


            [
                'kib' => '3301102202411251',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2019-12-31',
                'kejadian' => 'Kejadian Tebing Batu Longsor Menutup Akses Jalan Kabupaten Di Desa  Bantarmangu, Kecamatan Cimanggu',
                'detail' => 'Terjadi Tebing Batu Longsor menutup akses jalan Kabupaten di Desa  Bantarmangu, Kecamatan Cimanggu pada Senin, 25 November 2024 jam 08.00 WIB',
            ],


            [
                'kib' => '3301102202411241',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2021-02-08',
                'kejadian' => 'Kejadian Tanah Longsor Di Desa Citembong Kecamatan Bantarsari',
                'detail' => 'Minggu, 24 November 2024 Pukul 17.00 wib terjadi hujan dengan intensitas tinggi mengakibatkan tanah longsor di  Dusun Karangtengah  RT 01 RW 04, Desa Citembong Kecamatan Bantarsari',
            ],


            [
                'kib' => '3301102202411242',
                'wilayah_id' => Wilayah::where('nama', 'Kab. Cilacap, Jawa Tengah')->first()->id,
                'tanggal' => '2024-11-30',
                'kejadian' => 'Kejadian Turap Penahan Tebing Jalan Lingkungan Dan Halaman Rumah Longsor Di Desa Madura, Kecamatan Wanareja',
                'detail' => 'Minggu, 24 November 2024, Jam : 16.30 WIB terjadi Turap penahan tebing jalan lingkungan dan halaman rumah longsor di Desa Madura, Kecamatan Wanareja di Dusun Margasari RT 01 RW 10 Desa Madura, Kecamatan Wanareja',
            ],


            [
                'kib' => '1273102202411221',
                'wilayah_id' => Wilayah::where('nama', 'Kota Kota Sibolga, Sumatera Utara')->first()->id,
                'tanggal' => '2023-08-12',
                'kejadian' => 'Tanah Longsor .',
                'detail' => 'Pada tanggal 22 November 2024 pukul 14 ; 00 wib dijalan oswal siahaan kelurahan Sibolga ilir kecamatan Sibolga Utara telah terjadi longsor .',
            ],
        ];

        foreach ($bencanaData as $bencana) {
            Bencana::create($bencana);
        }
    }
}


// ini digunakan untuk random di faktories

// class BencanaSeeder extends Seeder
// {
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     Bencana::factory()->count(50)->create();
    // }
// }
