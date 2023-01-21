<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\education;
use App\Models\gender;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Job;
use App\Models\Personal_identity;
use \App\Models\Selection_type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
      User::create([
        'email'=> 'kepalahrd@gmail.com',
        'username' => 'kepalahrd',
        'password' => bcrypt('kepalahrd123'),
        'role' => 'superadmin',
        'last_login_at' => '1'
      ]);
      User::create([
          'email'=> 'staff@gmail.com',
          'username' => 'staff',
          'password' => bcrypt('staff123'),
          'role' => 'admin',
          'last_login_at' => '1'
        ]);
      User::create([
          'email'=> 'priscaaudyaa@gmail.com',
          'username' => 'priscaaudya',
          'password' => bcrypt('prisca123'),
          'role' => 'applicant',
          'last_login_at' => '1'
        ]);

      User::create([
        'email'=> 'arnav@gmail.com',
        'username' => 'arnav',
        'password' => bcrypt('arnav123'),
        'role' => 'applicant',
        'last_login_at' => '1'
      ]);

      Personal_identity::create([
        'user_id' => '3',
        'name' => 'Prisca Audya',
        'gender_id' => '2',
        'dob' => '2000-04-29',
        'edu_id' => '4',
        'address' => 'Perumahan Permata Harmoni',
        'phone' => '085956279168',
      ]);
        // User::create([
        //     'email'=> 'applicant@gmail.com',
        //     'username' => 'applicant',
        //     'password' => bcrypt('applicant123'),
        //     'role' => 'applicant'
        //   ]);


        Selection_type::create([
          'name' => 'Tes Tertulis '
        ]);
        
        Selection_type::create([
          'name' => 'Tes Praktik'
        ]);
        
        Selection_type::create([
          'name' => 'Tes Wawancara'
        ]);
        
        Job::create([
            'position' => 'Perawat Gigi',
            'slug' => 'perawat-gigi',
            'requirement' => '
              1. Pendidikan diutamakan D3 Keperawatan Gigi
              2. IPK minimal 3.0
              3. Memiliki Surat Tanda Registrasi (STR)
              4. Memiliki sertifikat BTCLS
              5. Usia maksimal 30 tahun
              6. Menyertakan Surat Keterangan Sehat
              7. Menyertakan SKCK
              8. Menguasai keterampilan dasar keperawatan
              9. Bertanggungjawab dan mempunyai jiwa melayani
              10. Mempunyai sikap dan perilaku yang baik, jujur, sabar, dan ramah
              11. Mampu bekerja sebagai individu maupun tim
              12. Mampu berkomunikasi efektif
              13. Mampu mengoperasikan komputer minimal Ms.Office
            ',
            'attachment' =>'
            1. Curriculum Vitae
            2. Surat Lamaran
            3. Pas Foto Berwarna
            4. Foto KTP
            5. Transkip Nilai
            6. STR Legalisir
            7. Scan KK
            8. Scan SKCK
            9. Surat Keterangan Sehat
            10. Sertifikat Vaksi Dosis 1 & 2
            11. Dan Sertifikat Pendukung Lainnya 
            ',
            'approval' => '1',
            'close_date' => '2022-06-01',
            'announ_date' => '2022-06-05',
            'published_at' => '2021-12-04'
        ]);
        Job::create([
            'position' => 'Perawat Umum',
            'slug' => 'perawat-umum',
            'requirement' => '
            1. Pendidikan diutamakan D3 Keperawatan
            2. IPK minimal 3.0
            3. Memiliki Surat Tanda Registrasi (STR)
            4. Memiliki sertifikat BTCLS
            5. Usia maksimal 30 tahun
            6. Menyertakan Surat Keterangan Sehat
            7. Menyertakan SKCK
            8. Menguasai keterampilan dasar keperawatan
            9. Bertanggungjawab dan mempunyai jiwa melayani
            10. Mempunyai sikap dan perilaku yang baik, jujur, sabar, dan ramah
            ',
            'attachment' =>'
            1. Curriculum Vitae
            2. Surat Lamaran
            3. Pas Foto Berwarna
            4. Foto KTP
            5. Transkip Nilai
            6. Scan KK
            7. Scan SKCK
            8. Surat Keterangan Sehat
            9. Sertifikat Vaksi Dosis 1 & 2
            10. Dan Sertifikat Pendukung Lainnya 
            ',
            'approval' => '1',
            'close_date' => '2022-08-01',
            'announ_date' => '2022-08-05',
            'published_at' => '2021-12-04'
        ]);
        Job::create([
            'position' => 'Analisis Kesehatan',
            'slug' => 'analisis-kesehatan',
            'requirement' => '
            1. Pendidikan diutamakan D3  Analisis Kesehatan
            2. IPK minimal 3.0
            3. Memiliki Surat Tanda Registrasi (STR)
            4. Memiliki sertifikat Pelatihan Plebotomi
            5. Usia maksimal 30 tahun
            6. Menyertakan Surat Keterangan Sehat
            7. Menyertakan SKCK
            8. Menguasai keterampilan dasar keperawatan
            9. Bertanggungjawab dan mempunyai jiwa melayani
            10. Mempunyai sikap dan perilaku yang baik, jujur, sabar, dan ramah
            11. Mampu bekerja sebagai individu maupun tim
            12. Mampu berkomunikasi efektif
            13. Mampu mengoperasikan komputer minimal Ms.Office',
            'attachment' =>'
            1. Curriculum Vitae
            2. Surat Lamaran
            3. Pas Foto Berwarna
            4. Foto KTP
            5. Transkip Nilai
            6. Scan KK
            7. Scan SKCK
            8. Surat Keterangan Sehat
            9. Sertifikat Vaksi Dosis 1 & 2
            10. Dan Sertifikat Pendukung Lainnya 
            ',
            'approval' => '1',
            'close_date' => '2022-08-01',
            'announ_date' => '2022-08-05',
            'published_at' => '2021-12-04'
        ]);
        Job::create([
            'position' => 'Petugas Kasir',
            'slug' => 'petugas-kasir',
            'requirement' => '
            1. Pendidikan D3 Akuntansi
            2. Usia maksimal 30 tahun
            3. Menyertakan Surat Keterangan Sehat
            4. Menyertakan SKCK
            5. Memiliki kemampuan menghitung cepat dan teliti
            6. Bertanggungjawab dan mempunyai jiwa melayani
            7. Mempunyai sikap dan perilaku yang baik, jujur, sabar, dan ramah
            8. Mampu bekerja sebagai individu maupun tim
            9. Mampu berkomunikasi efektif
            10. Mampu mengoperasikan komputer minimal Ms.Office',
            'attachment' =>'
            1. Curriculum Vitae
            2. Surat Lamaran
            3. Pas Foto Berwarna
            4. Foto KTP
            5. Transkip Nilai
            6. Scan KK
            7. Scan SKCK
            8. Surat Keterangan Sehat
            9. Sertifikat Vaksi Dosis 1 & 2
            10. Dan Sertifikat Pendukung Lainnya 
            ',
            'approval' => '1',
            'close_date' => '2022-08-01',
            'announ_date' => '2022-08-05',
            'published_at' => '2021-12-04'
        ]);
    

        education::create([
          'name' => 'SMA/Sederajat'
        ]);

        education::create([
          'name' => 'Diploma I (D1)'
        ]);

        education::create([
          'name' => 'Diploma III (D3)'
        ]);

        education::create([
          'name' => 'Diploma IV (D4)'
        ]);
        
        education::create([
          'name' => 'Sarjana (S1)'
        ]);

        education::create([
          'name' => 'Magister (S2)'
        ]);

        education::create([
          'name' => 'Doktor (S3)'
        ]);

        gender::create([
          'name' => 'Laki-laki'
        ]);

        gender::create([
          'name' => 'Perempuan'
        ]);

        
      Personal_identity::create([
        'user_id' => '4',
        'name' => 'Arnav Shailendra',
        'gender_id' => '1',
        'dob' => '2000-06-11',
        'edu_id' => '4',
        'address' => 'Perumahan Permata Harmoni',
        'phone' => '085956279199',
      ]);

      Schedule::create([
        'job_id' => 2,
        'selection_id' => 1,
        'location' => 'Aula',
        'date' => '2022-07-04',
        'time' => '08:00',
        'status' => 1,
        'provision' => 'Berpakaian rapi menggunakan, atasan Kemeja Putih, celana Kain Warna Hitam, dan jilbab hitam (bagi yang memakai)'
      ]);

      Schedule::create([
        'job_id' => 2,
        'selection_id' => 2,
        'location' => 'Aula',
        'date' => '2022-07-14',
        'time' => '08:00',
        'status' => 1,
        'provision' => 'Berpakaian rapi menggunakan, atasan Kemeja Putih, celana Kain Warna Hitam, dan jilbab hitam (bagi yang memakai)'
      ]);

      Schedule::create([
        'job_id' => 2,
        'selection_id' => 3,
        'location' => 'Aula',
        'date' => '2022-07-18',
        'time' => '08:00',
        'status' => 1,
        'provision' => 'Berpakaian rapi menggunakan,atasan Kemeja Putih, celana Kain Warna Hitam, jilbab hitam (bagi yang memakai), wajib Ber-MASKER dan taat PROKES, dan mempersiapkan presentasi proposal yang telah dikirim'
      ]);
    }
}
