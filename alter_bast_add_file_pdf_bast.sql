-- Tambahkan kolom file_pdf_bast ke tabel bast
ALTER TABLE bast ADD COLUMN file_pdf_bast VARCHAR(255) DEFAULT NULL AFTER waktu_ttd_selesai;