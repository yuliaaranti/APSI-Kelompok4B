<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            ['email' => 'afiqramadhan@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Afiq Ramadhan', 'semester' => 7],
            ['email' => 'rahmatherpradipto@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Rahmat Herpradipto', 'semester' => 7],
            ['email' => 'angelareginemutiaraputi@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Angela Regine Mutiaraputi', 'semester' => 7],
            ['email' => 'adriankwanadis@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Adrian Kwanadi S', 'semester' => 7],
            ['email' => 'ilhamfairuzaman@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Ilham Fairuzaman', 'semester' => 7],
            ['email' => 'fahruddinari@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Fahruddin Ari', 'semester' => 7],
            ['email' => 'candrikadewi@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Candrika Dewi', 'semester' => 7],
            ['email' => 'alfinadiva@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Alfina Diva Ramadhanty', 'semester' => 7],
            ['email' => 'fariduddinattar@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Fariduddin Attar Rahman', 'semester' => 7],
            ['email' => 'deadilaaa@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Deadila Defiatri', 'semester' => 7],
            ['email' => 'sekarzanet@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Sekar Zaneta Amirulputri', 'semester' => 7],
            ['email' => 'tsaniasana@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Tsania Sana Az-Zahra', 'semester' => 7],
            ['email' => 'ardaneshwaraa12@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Ardaneshwara Gea', 'semester' => 7],
            ['email' => 'ryanhikmah@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Ryan Hikmah Fadilla', 'semester' => 7],
            ['email' => 'yukurihanjani@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Yukuri Hanjani', 'semester' => 7],
            ['email' => 'alifianarahma@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Alifiana Rahma', 'semester' => 7],
            ['email' => 'aratiakianapiandhani@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Aratia Kiana Piandhani', 'semester' => 7],
            ['email' => 'divananayumiluckypratama@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Divana Nayumi Lucky Pratama', 'semester' => 7],
            ['email' => 'funnygustantyaryndhy@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Funny Gustanty Aryndhy', 'semester' => 7],
            ['email' => 'erysaputrivaraafifa@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Erysa Putri Vara Afifa', 'semester' => 7],
            ['email' => 'efasetyaningsih@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Efa Setyaningsih', 'semester' => 7],
            ['email' => 'desyanaratnapinasthi@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Desyana Ratna Pinasthi', 'semester' => 7],
            ['email' => 'ajimanarulaziz@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Aji Manarul Aziz', 'semester' => 7],
            ['email' => 'muhammadhafizaditya@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Muhammad Hafiz Aditya', 'semester' => 7],
            ['email' => 'nauvalhernandoko@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Nauval Hernandoko', 'semester' => 7],
            ['email' => 'mirayunisaamalia@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Mira Yunisa Amalia', 'semester' => 7],
            ['email' => 'elzanaomialifahzain@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Elza Naomi Alifah Zain', 'semester' => 7],
            ['email' => 'anisasulistyaningsih@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Anisa Sulistyaningsih', 'semester' => 7],
            ['email' => 'erlindamadiastutinurhafifah@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Erlinda Madiastuti Nur Hafifah', 'semester' => 7],
            ['email' => 'fadhiladiahayup@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Fadhila Diah Ayu P', 'semester' => 7],
            ['email' => 'berliansafri@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Berlian Safri', 'semester' => 7],
            ['email' => 'ervizalbuanajatiputra@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Ervizal Buana Jatiputra', 'semester' => 7],
            ['email' => 'bonangrespatistamoko@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Bonang Respati Satmoko', 'semester' => 7],
            ['email' => 'rafiuddarojat@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Rafi\'ud Darojat', 'semester' => 7],
            ['email' => 'nurkiputramahardika@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Nurki Putra Mahardika', 'semester' => 7],
            ['email' => 'mochabelalambanaarthasyach@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Moch. Abel Alambana Arthasyach', 'semester' => 7],
            ['email' => 'ahmadrafiadnanta@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Ahmad Rafi Adnanta', 'semester' => 7],
            ['email' => 'dhiaulamar@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Dhiaul Amar', 'semester' => 7],
            ['email' => 'williamanderson@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'William Anderson', 'semester' => 7],
            ['email' => 'hasnarifkyafifah@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Hasna Rifky Afifah', 'semester' => 7],
            ['email' => 'issacianmutiarapaska@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Issacian Mutiara Paska', 'semester' => 7],
            ['email' => 'dwizakinurfaizi@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Dwi Zaki Nurfaizi', 'semester' => 7],
            ['email' => 'aguskurniaakbar@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Agus Kurnia Akbar', 'semester' => 7],
            ['email' => 'titoadamperwirayudha@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Tito Adam Perwirayudha', 'semester' => 7],
            ['email' => 'muhammadhafizhrafisusanto@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Muhammad Hafizh Rafi Susanto', 'semester' => 7],
            ['email' => 'muhammadjefrisaputra@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Muhammad Jefri Saputra', 'semester' => 7],
            ['email' => 'truelynurhafidz@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Truely Nur Hafidz', 'semester' => 7],
            ['email' => 'hasanravir@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Hasan Ravi R', 'semester' => 7],
            ['email' => 'ahmadrifqiwaskita@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Ahmad Rifqi Waskita', 'semester' => 7],
            ['email' => 'halidyasitihanifah@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Halidya Siti Hanifah', 'semester' => 7],
            ['email' => 'iffaazzahra@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Iffa Azzahra', 'semester' => 7],
            ['email' => 'yukirizkylawati@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Yuki Rizkylawati', 'semester' => 7],
            ['email' => 'tazkiyamutiaYogasani@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Tazkiya Mutia Yogasani', 'semester' => 7],
            ['email' => 'athallahnaufalkur@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Athallah Naufal Kuranityo', 'semester' => 7],
            ['email' => 'tituskurniawansandypurwanto@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Titus Kurniawan Sandy Purwanto', 'semester' => 7],
            ['email' => 'larasatifadhilahadani@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Larasati Fadhilah Adani', 'semester' => 7],
            ['email' => 'ivanindrarizkypratama@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Ivanindra Rizky Pratama', 'semester' => 7],
            ['email' => 'dheanaomikenlaksita@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Dhea Naomi Kenlaksita', 'semester' => 7],
            ['email' => 'naufalrakazaky@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Naufal Raka Zaky', 'semester' => 7],
            ['email' => 'oktavianusauwdri@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Oktavianus Auwdri', 'semester' => 7],
            ['email' => 'ghaisannalf@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Ghaisan Nabiel Alfian Arsyad', 'semester' => 4],
            ['email' => 'fitrinidhomun@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Fitri Nidhomun N', 'semester' => 4],
            ['email' => 'jagadsurya@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Jagad Surya Andromeda', 'semester' => 4],
            ['email' => 'khalifahtur@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Khalifahtur Alfi', 'semester' => 4],
            ['email' => 'irvianaam@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Irviana Amanatul Mufaida', 'semester' => 4],
            ['email' => 'yuliaranti@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Yulia Puspa Nur Ranti', 'semester' => 4],
            ['email' => 'yusufucup@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Yusuf Dzakwan', 'semester' => 2],
            ['email' => 'rehan123@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Reihan Rei', 'semester' => 2],
            ['email' => 'Bimasakti@student.uns.ac.id', 'password' => Hash::make('password'), 'nama' => 'Bima Sakti', 'semester' => 2],
        ]);

        DB::table('kps')->insert(['status' => 'Diterima', 'lokasi' => 'PT Dirgantara Indonesia', 'bidang' => 'PC2000 (Controliing Work Order)', 'review' => 'Seru jadi tau proses pembuatan pesawat, welcome banget divisinya dan orang-orangnya, soal data gampang buat dicari, dan buat CV oke banget bakal dilirik', 'mahasiswa_id' => 1]);

        DB::table('kps')->insert(['status' => 'Diterima', 'lokasi' => 'PT Dirgantara Indonesia', 'bidang' => 'PPIC', 'review' => 'mudah cari data', 'laporan' => 'PERBANDINGAN ANTARA METODE EOQ DAN LUC PADA PENGENDALIAN PERSEDIAAN BAHAN BAKU PRODUK PANEL 3 FUEL LOWER ASSEMBLY UNTUK MENENTUKAN MATERIAL REQUIREMENT PLANNING DI PT. DIRGANTARA INDONESIA', 'mahasiswa_id' => 2]);

        DB::table('kps')->insert(['status' => 'Diterima', 'lokasi' => 'PT Komatsu Indonesia', 'kontak' => 'agnesia.putri@global.komatsu', 'bidang' => 'QC', 'review' => 'Tempat sih enak ya tapi balik lagi ke penempatan, kalau berhubungan sama produksi pasti di pabrik tapi masih aman karena didalam pabrik ada officenya. Disini dapet makan siang. Ilmu dapet aja tapi harus inisiatif untuk banyak nanya tapi orang-orangnya welcome mau ngajarin kalau kita tanya. Untuk data menurutku mudah karena mereka open tapi tetep harus dipastiin data yang dipake rahasia atau ga. Kalau divisiku ribetnya laporan harus udah selesai sebelum KP selesai karena harus report di hari terakhir', 'laporan' => 'ANALISIS PENGENDALIAN KUALITAS PRODUK SILINDER HIDROLIK PADA PROSES PAINTING DENGAN METODE SIX SIGMA DI HYDRAULIC PLANT PT KOMATSU INDONESIA', 'mahasiswa_id' => 3]);

        DB::table('kps')->insert(['status' => 'Diterima', 'lokasi' => 'PT Komatsu Indonesia', 'bidang' => 'Warehouse & MCS', 'laporan' => 'ANALISIS POSTUR KERJA PROSES STORAGE PADA BAGIAN WAREHOUSE & MCS DENGAN MENGGUNAKAN METODE RAPID ENTIRE BODY ASSESMENT (REBA) DI PT KOMATSU INDONESIA', 'mahasiswa_id' => 4]);

        DB::table('kps')->insert(['status' => 'Diterima', 'lokasi' => 'PT. Komatsu Undercarriage Indonesia (PT. KUI)', 'bidang' => 'Production Engineering', 'review' => 'Berasa kerja beneran, dikasih meja sendiri.', 'laporan' => 'PENINGKATAN EFISIENSI PROSES ASSEMBLY TRACK SHOE BULLDOZER D155 MENGGUNAKAN STANDARDISASI KERJA', 'mahasiswa_id' => 5]);

        DB::table('kps')->insert(['status' => 'Verifikasi Ajuan', 'lokasi' => 'PT. Komatsu Undercarriage Indonesia (PT. KUI)', 'mahasiswa_id' => 6]);
        DB::table('kps')->insert(['status' => 'Verifikasi Ajuan', 'lokasi' => 'PT. Delta Merlin Sandang Tekstil IV', 'mahasiswa_id' => 7]);


        DB::table('matkuls')->insert([
            ['nama' => 'Manajemen Proyek', 'sks' => 2],
            ['nama' => 'Rekayasa Rantai Pasok', 'sks' => 2],
            ['nama' => 'Teori Penjadwalan', 'sks' => 3],
            ['nama' => 'Rekayasa Pemasran', 'sks' => 3],
            ['nama' => 'Robotika Modern', 'sks' => 3],
            ['nama' => 'Ergonomi Kognitif', 'sks' => 3],
            ['nama' => 'Analisa Multivariat', 'sks' => 3],
            ['nama' => 'Proyek Perancangan Terpadu', 'sks' => 2],
            ['nama' => 'Teori Persediaan', 'sks' => 3],
            ['nama' => 'Manufaktur Cerdas', 'sks' => 3],
        ]);

        DB::table('dosbings')->insert([
            ['nama' => 'Prof. Dr. Ir. SUSY SUSMARTINI, MSIE'],
            ['nama' => 'Prof. Dr. Ir. BAMBANG SUHARDI, S.T., M.T., IPM, ASEAN. Eng'],
            ['nama' => 'Prof. Dr. CUCUK NUR ROSYIDI, S.T., M.T.'],
            ['nama' => 'Prof. Dr. WAHYUDI SUTOPO, S.T.,M.Si'],
            ['nama' => 'Dr.Eng. ILHAM PRIADYTHAMA, S.T.,M.T'],
            ['nama' => 'Dr. Ir. LOBES HERDIMAN, M.T.'],
            ['nama' => 'Dr. MUH. HISJAM, S.T.P.,M.T.'],
            ['nama' => 'Dr.Eng. PRINGGO WIDYO LAKSONO, ST., M.Eng.'],
            ['nama' => 'Dr. RETNO WULAN DAMAYANTI, S.T., M.T'],
            ['nama' => 'Dr. Ir. R HARI SETYANTO, M.Si.'],
            ['nama' => 'Dr. WAKHID AHMAD JAUHARI, S.T.,M.T.'],
            ['nama' => 'FAKHRINA FAHMA, STP., M.T. '],
            ['nama' => 'RONI ZAKARIA, S.T.,M.T. '],
            ['nama' => 'TAUFIQ ROCHMAN, S.TP.,M.T.'],
            ['nama' => 'RAHMANIYAH DWI ASTUTI, S.T.,M.T'],
            ['nama' => 'YUNIARISTANTO, S.T.,M.T. '],
            ['nama' => 'YUSUF PRIYANDARI, S.T.,M.T'],
            ['nama' => 'IRWAN IFTADI, S.T., M.Eng.'],
            ['nama' => 'I WAYAN SULETRA, S.T.,M.T.'],
        ]);

        DB::table('magangs')->insert(['status' => 'Diterima', 'lokasi' => 'Hijaz Textile Industri', 'kontak' => '+62 878-3096-7873 (Pak Jefri, pembimbing lapangan)', 'bidang' => 'Production', 'laporan' => 'ANALISIS BEBAN KERJA MENTAL OPERATOR SOFTCONE BERDASARKAN METODE NASA-TLX PT HIJAZ TEXTILE INDUSTRY', 'mahasiswa_id' => 8, 'dosbing_id' => 1]);

        DB::table('magangs')->insert(['status' => 'Verifikasi Rekognisi', 'lokasi' => 'Hijaz Textile Industri', 'kontak' => '+62 878-3096-7873 (Pak Jefri, pembimbing lapangan)', 'bidang' => 'Production', 'laporan' => 'ANALISIS BEBAN KERJA MENTAL OPERATOR SOFTCONE BERDASARKAN METODE NASA-TLX PT HIJAZ TEXTILE INDUSTRY', 'mahasiswa_id' => 9, 'dosbing_id' => 1]);

        DB::table('magangs')->insert(['status' => 'Verifikasi Rekognisi', 'lokasi' => 'PT Mega Andalan Kalasan', 'kontak' => '+62 818-0793-8788 Pak Gunawan', 'bidang' => 'RnD (Product Development)', 'laporan' => 'ANALISIS KEGAGALAN PADA RANCANGAN PREMIUM PLUS 3 SECTION DENGAN METODE FMEA (FAILURE MODE AND EFFECT ANALYSIS) DESAIN DAN FISHBONE DIAGRAM (Studi Kasus di PT. Mega Andalan Kalasan, Yogyakarta)', 'mahasiswa_id' => 10, 'dosbing_id' => 3]);

        DB::table('magangs')->insert(['status' => 'Diterima', 'lokasi' => 'PT Mega Andalan Kalasan', 'kontak' => '+62 818-0793-8788 Pak Gunawan', 'bidang' => 'Lantai Produksi Hospital Equipment', 'laporan' => 'PENGENDALIAN KUALITAS ELECTRIC LOVINA BED 3 MOTOR MENGGUNAKAN METODE SIX SIGMA DAN PAIRWISE COMPARISON', 'mahasiswa_id' => 11, 'dosbing_id' => 4]);

        DB::table('magangs')->insert(['status' => 'Verifikasi Ajuan', 'lokasi' => 'PT Mega Andalan Kalasan', 'mahasiswa_id' => 12, 'dosbing_id' => 5]);

        DB::table('magangs')->insert(['status' => 'Ditolak', 'lokasi' => 'PT Mega Andalan Kalasan', 'mahasiswa_id' => 12, 'dosbing_id' => 6]);

        DB::table('magang_matkul')->insert([
            ['magang_id' => 2, 'matkul_id' => 1],
            ['magang_id' => 2, 'matkul_id' => 4],
            ['magang_id' => 2, 'matkul_id' => 6],
            ['magang_id' => 2, 'matkul_id' => 7],
            ['magang_id' => 3, 'matkul_id' => 2],
            ['magang_id' => 3, 'matkul_id' => 4],
            ['magang_id' => 3, 'matkul_id' => 5],
            ['magang_id' => 3, 'matkul_id' => 9],
        ]);

        DB::table('kaprodis')->insert([
            [
                'email' => 'liquiddanu@kaprodi.uns.ac.id',
                'password' => Hash::make('password'),
                'nama' => 'Eko Liquiddanu'
            ],
        ]);

        DB::table('koors')->insert([
            [
                'email' => 'taufiqrochman@koor.uns.ac.id',
                'password' => Hash::make('password'),
                'nama' => 'Taufiq Rochman'
            ],
        ]);

        DB::table('admins')->insert(['email' => 'admin@mail.com', 'password' => Hash::make('password')]);
    }
}
