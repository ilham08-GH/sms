Jika ada perubahan template,BAST maupun SPK agar tidka menghilangkan template yang lama
Copy List di spk/list, kemudian ganti dengan print spk atau bast baru misal spk2027
Buat Menu baru aja dengan nama SPK 2027 misal, yang lama maish tetap dipertahankan

cukup ubah di SPK atau BAST di View. View 1 untuk Surat SPK View2 untuk lampiran Surat

BAST, view untuk surat

jadi buat view 2027 atau apa terserah


Yang tidak di generate PHPRAD tapi manual ada tambahan script sendiri
1. detail matrik honor controller hanya fungsi di bagian akhir untuk centang TU, sebelumnya buat tambahan toogle_field di tabel detail_matrik_honor agar terbaca rolenya
2. detail matrik translok controller hanya fungsi di bagian akhir untuk centang TU
3. view spk sesuai template
4. view bast sesuai template
5. master petugas controller fungsi paling akhir mulai import, tetapi import default diatas harus dihapus
6. main layout untuk select2 css
7.

Import Excel ada di ed_detail_matrik_honorController
View di folder partials ed_detail_matrik_honorController

pastikan copy phpspreadsheet di folder libs ada2 folder
1. Phpspreadsheet
2. Psr
panggil di controller atas sendiri


PHPspreadsheet jika error di hosting, tapi jalan di lokal


copy semua file phpspreadsheet dan psr di lib, copy dari web yang sdh jalan karena dari localhost masih error

Master controller saat function import berhasil di Lokal tapi di hosting gagal, copy function import dari master_petugas controller di hosting
