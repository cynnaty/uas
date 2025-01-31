# Business Requirements Document (BRD)

## **1. Pendahuluan**
**TechEdu Indonesia** adalah perusahaan yang bergerak di bidang pelatihan teknologi dan informasi. Tujuan dari proyek ini adalah mengembangkan **Sistem Manajemen Pelatihan Teknologi dan Informasi** yang akan membantu dalam mengelola pelatihan, peserta, sertifikasi, serta aspek lainnya.

## **2. Tujuan Proyek**
Sistem ini bertujuan untuk:
- Menyediakan platform digital untuk mengelola pelatihan teknologi.
- Mempermudah pemantauan perkembangan peserta secara real-time.
- Mengotomatiskan penilaian, sertifikasi, dan laporan performa peserta.
- Menjalin kerja sama dengan perusahaan teknologi dalam rekrutmen peserta terbaik.

## **3. Ruang Lingkup Proyek**
Fitur utama yang akan dikembangkan:
- **Manajemen Peserta:**
   1. Registrasi peserta
   2. Profil peserta (data pribadi, riwayat pelatihan, sertifikasi, dll.)
   3. Statistik performa dan evaluasi
- **Jadwal Pelatihan & Workshop:**
   1. Pengelolaan jadwal kursus dan workshop
   2. Notifikasi dan pengingat sesi pelatihan
- **Klasifikasi & Sertifikasi Peserta:**
   1. Sistem penilaian berbasis skor
   2. Sertifikasi berbasis blockchain untuk transparansi
- **Manajemen Proyek & Penugasan:**
   1. Pembuatan dan pengelolaan proyek
   2. Kolaborasi peserta dalam proyek tim
- **Laporan Keuangan & Sponsorship:**
   1. Manajemen pendanaan dan sponsor
   2. Laporan biaya operasional
- **Sistem Reward & Gamifikasi:**
   1. Leaderboard dan pencapaian peserta
   2. Poin dan badge berdasarkan performa

## **4. Pemangku Kepentingan (Stakeholders)**
- **Manajemen TechEdu Indonesia**: Pemilik dan pengelola sistem.
- **Peserta Pelatihan**: Pengguna utama yang mengikuti kursus dan pelatihan.
- **Instruktur & Mentor**: Bertanggung jawab dalam penyampaian materi dan evaluasi peserta.
- **Mitra Perusahaan Teknologi**: Pihak yang bekerja sama untuk rekrutmen lulusan terbaik.
- **Tim Pengembang Sistem**: Tim IT yang akan membangun dan memelihara platform.

## **5. Persyaratan Fungsional**
- Sistem harus menyediakan fitur **registrasi dan login** untuk peserta dan mentor.
- Dashboard peserta harus menampilkan **statistik performa dan progres pelatihan**.
- **Jadwal pelatihan** harus dapat diperbarui secara dinamis dan disinkronkan dengan kalender pengguna.
- Sistem harus mendukung **evaluasi berbasis skor** untuk menentukan tingkat kemampuan peserta.
- **Manajemen proyek** harus memungkinkan kolaborasi tim dengan fitur pelacakan tugas.
- Sistem harus memiliki fitur **sertifikasi berbasis blockchain** untuk validasi sertifikat peserta.
- Implementasi **sistem reward dan leaderboard** untuk meningkatkan motivasi peserta.

## **6. Persyaratan Non-Fungsional**
- **Keamanan Data**: Sistem harus menerapkan enkripsi data peserta dan transaksi.
- **Skalabilitas**: Mampu menangani peningkatan jumlah pengguna yang signifikan.
- **Kinerja Tinggi**: Respons sistem harus optimal dengan waktu muat maksimal 3 detik per halaman.
- **Aksesibilitas**: Dapat diakses melalui web dan mobile.
- **Integrasi**: Harus dapat terhubung dengan sistem eksternal seperti LMS (Learning Management System) dan platform pembayaran online.

## **7. Risiko dan Mitigasi**
| Risiko | Mitigasi |
|--------|----------|
| Data peserta hilang atau diretas | Menggunakan enkripsi tingkat tinggi dan backup berkala |
| Kurangnya partisipasi peserta dalam pelatihan | Menerapkan sistem reward dan notifikasi pengingat |
| Integrasi sistem dengan pihak ketiga mengalami kendala | Menyediakan API yang fleksibel dan dokumentasi teknis yang jelas |
| Kesalahan dalam perhitungan skor peserta | Menerapkan validasi otomatis dan verifikasi manual |

## **8. Kesimpulan**
Dokumen ini merangkum kebutuhan bisnis untuk pengembangan **Sistem Manajemen Pelatihan Teknologi dan Informasi**. Dengan fitur yang telah dirancang, sistem ini diharapkan dapat meningkatkan efektivitas pelatihan, memastikan transparansi sertifikasi, serta meningkatkan peluang kerja bagi peserta yang telah menyelesaikan pelatihan mereka.
