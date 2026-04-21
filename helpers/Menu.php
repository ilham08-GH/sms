<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'master_petugas/list_petugas', 
			'label' => 'Master', 
			'icon' => '<i class="fa fa-database "></i>',
'submenu' => array(
		array(
			'path' => 'master_petugas/list_petugas', 
			'label' => 'Master Petugas', 
			'icon' => '<i class="fa fa-user "></i>'
		),
		
		array(
			'path' => 'master_rincian_output', 
			'label' => 'Master Rincian Output', 
			'icon' => '<i class="fa fa-bookmark "></i>'
		),
		
		array(
			'path' => 'master_survei', 
			'label' => 'Master Survei', 
			'icon' => '<i class="fa fa-bookmark-o "></i>'
		),
		
		array(
			'path' => 'master_ppk', 
			'label' => 'Master PPK', 
			'icon' => '<i class="fa fa-user-secret "></i>'
		),
		
		array(
			'path' => 'master_sbml', 
			'label' => 'Master SBML', 
			'icon' => '<i class="fa fa-dollar "></i>'
		),
		
		array(
			'path' => 'master_jabatan_petugas', 
			'label' => 'Master Jabatan Petugas', 
			'icon' => '<i class="fa fa-user-md "></i>'
		),
		
		array(
			'path' => 'master_satuan', 
			'label' => 'Master Satuan', 
			'icon' => '<i class="fa fa-at "></i>'
		),
		
		array(
			'path' => 'master_bulan', 
			'label' => 'Master Bulan', 
			'icon' => '<i class="fa fa-calendar "></i>'
		),
		
		array(
			'path' => 'master_tim', 
			'label' => 'Master Tim', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'user', 
			'label' => 'User/Pegawai', 
			'icon' => '<i class="fa fa-user-plus "></i>'
		)
	)
		),
		
		array(
			'path' => 'matrik_honor', 
			'label' => 'Menu Ketua Tim', 
			'icon' => '<i class="fa fa-user-plus "></i>',
'submenu' => array(
		array(
			'path' => 'matrik_honor', 
			'label' => 'Matrik Honor', 
			'icon' => '<i class="fa fa-list-alt "></i>'
		),
		
		array(
			'path' => 'matrik_translok', 
			'label' => 'Matrik Translok', 
			'icon' => '<i class="fa fa-pinterest-p "></i>'
		)
	)
		),
		
		array(
			'path' => 'matrik_honor/List_tu', 
			'label' => 'Menu TU', 
			'icon' => '<i class="fa fa-location-arrow "></i>',
'submenu' => array(
		array(
			'path' => 'spk', 
			'label' => 'SPK', 
			'icon' => '<i class="fa fa-newspaper-o "></i>'
		),
		
		array(
			'path' => 'bast', 
			'label' => 'BAST', 
			'icon' => '<i class="fa fa-tags "></i>'
		),
		
		array(
			'path' => 'matrik_honor/List_tu', 
			'label' => 'Matrik Honor', 
			'icon' => '<i class="fa fa-book "></i>'
		),
		
		array(
			'path' => 'matrik_translok/list_tu', 
			'label' => 'Matrik Translok', 
			'icon' => '<i class="fa fa-pinterest "></i>'
		),
		
		array(
			'path' => 'jadwal_translok_view', 
			'label' => 'Lihat Jadwal Translok', 
			'icon' => '<i class="fa fa-calendar-check-o "></i>'
		)
	)
		),
		
		array(
			'path' => 'matrik_honor/list_admin', 
			'label' => 'Menu Admin', 
			'icon' => '<i class="fa fa-user-secret "></i>',
'submenu' => array(
		array(
			'path' => 'matrik_honor/List_admin', 
			'label' => 'List Admin Matrik Honor', 
			'icon' => '<i class="fa fa-list "></i>'
		),
		
		array(
			'path' => 'matrik_translok/List_admin', 
			'label' => 'List Admin Matrik Translok', 
			'icon' => '<i class="fa fa-pinterest-square "></i>'
		)
	)
		),
		
		array(
			'path' => 'cek_honor_petugas_view', 
			'label' => 'Cek Honor Petugas', 
			'icon' => '<i class="fa fa-credit-card "></i>'
		),
		
		array(
			'path' => 'jadwal_translok', 
			'label' => 'Jadwal Translok', 
			'icon' => '<i class="fa fa-calendar "></i>'
		),
		
		array(
			'path' => 'rekap_translok_view/Translok_petugas', 
			'label' => 'Rekap Translok Saya', 
			'icon' => '<i class="fa fa-motorcycle "></i>'
		),
		
		array(
			'path' => 'spk_view/rekap_honor', 
			'label' => 'Rekapitulasi', 
			'icon' => '<i class="fa fa-shopping-bag "></i>',
'submenu' => array(
		array(
			'path' => 'spk_view/Rekap_honor', 
			'label' => 'Rekap Honor', 
			'icon' => '<i class="fa fa-info "></i>'
		),
		
		array(
			'path' => 'rekap_translok_view', 
			'label' => 'Rekap Translok', 
			'icon' => '<i class="fa fa-bookmark-o "></i>'
		)
	)
		),
		array(
			'path'    => 'spk',
			'label'   => 'Menu Mitra',
			'icon'    => '<i class="fa fa-handshake-o"></i>',
			'submenu' => array(
				array('path' => 'spk',  'label' => 'SPK',  'icon' => '<i class="fa fa-newspaper-o"></i>'),
				array('path' => 'bast', 'label' => 'BAST', 'icon' => '<i class="fa fa-tags"></i>'),
			)
		),
	);
		
	
	
			public static $kecamatan = array(
		array(
			"value" => "[010] Wringinanom", 
			"label" => "[010] Wringinanom", 
		),
		array(
			"value" => "[020] Driyorejo", 
			"label" => "[020] Driyorejo", 
		),
		array(
			"value" => "[030] Kedamean", 
			"label" => "[030] Kedamean", 
		),
		array(
			"value" => "[040] Menganti", 
			"label" => "[040] Menganti", 
		),
		array(
			"value" => "[050] Cerme", 
			"label" => "[050] Cerme", 
		),
		array(
			"value" => "[060] Benjeng", 
			"label" => "[060] Benjeng", 
		),
		array(
			"value" => "[070] Balongpanggang", 
			"label" => "[070] Balongpanggang", 
		),
		array(
			"value" => "[080] Duduksampeyan", 
			"label" => "[080] Duduksampeyan", 
		),
		array(
			"value" => "[090] Kebomas", 
			"label" => "[090] Kebomas", 
		),
		array(
			"value" => "[100] Gresik", 
			"label" => "[100] Gresik", 
		),
		array(
			"value" => "[110] Manyar", 
			"label" => "[110] Manyar", 
		),
		array(
			"value" => "[120] Bungah", 
			"label" => "[120] Bungah", 
		),
		array(
			"value" => "[130] Sidayu", 
			"label" => "[130] Sidayu", 
		),
		array(
			"value" => "[140] Dukun", 
			"label" => "[140] Dukun", 
		),
		array(
			"value" => "[150] Panceng", 
			"label" => "[150] Panceng", 
		),
		array(
			"value" => "[160] Ujungpangkah", 
			"label" => "[160] Ujungpangkah", 
		),
		array(
			"value" => "[170] Sangkapura", 
			"label" => "[170] Sangkapura", 
		),
		array(
			"value" => "[180] Tambak", 
			"label" => "[180] Tambak", 
		),);
		
			public static $jabatan = array(
		array(
			"value" => "Mitra", 
			"label" => "Mitra", 
		),);
		
			public static $status_petugas = array(
		array(
			"value" => "Aktif", 
			"label" => "Aktif", 
		),
		array(
			"value" => "Non Aktif", 
			"label" => "Non Aktif", 
		),);
		
			public static $jabatan2 = array(
		array(
			"value" => "Pencacahan Lapangan", 
			"label" => "Pencacahan Lapangan", 
		),
		array(
			"value" => "Pengawasan Lapangan", 
			"label" => "Pengawasan Lapangan", 
		),
		array(
			"value" => "Pengolahan", 
			"label" => "Pengolahan", 
		),);
		
			public static $status_pengajuan_honor = array(
		array(
			"value" => "Belum ", 
			"label" => "Belum", 
		),
		array(
			"value" => "Final", 
			"label" => "Final", 
		),);
		
			public static $status_pengajuan_honor2 = array(
		array(
			"value" => "Belum", 
			"label" => "Belum", 
		),
		array(
			"value" => "Final", 
			"label" => "Final", 
		),);
		
			public static $role = array(
		array(
			"value" => "Administrator", 
			"label" => "Administrator", 
		),
		array(
			"value" => "Ketua Tim", 
			"label" => "Ketua Tim", 
		),
		array(
			"value" => "Anggota Tim", 
			"label" => "Anggota Tim", 
		),
		array(
			"value" => "TU", 
			"label" => "TU", 
		),
		array("value" => "Mitra", "label" => "Mitra"),
		);
		
			public static $jadwal_translok_view_bulan = array(
		array(
			"value" => "1", 
			"label" => "JANUARI", 
		),
		array(
			"value" => "2", 
			"label" => "FEBRUARI", 
		),
		array(
			"value" => "3", 
			"label" => "MARET", 
		),
		array(
			"value" => "4", 
			"label" => "APRIL", 
		),
		array(
			"value" => "5", 
			"label" => "MEI", 
		),
		array(
			"value" => "6", 
			"label" => "JUNI", 
		),
		array(
			"value" => "7", 
			"label" => "JULI", 
		),
		array(
			"value" => "8", 
			"label" => "AGUSTUS", 
		),
		array(
			"value" => "9", 
			"label" => "SEPTEMBER", 
		),
		array(
			"value" => "10", 
			"label" => "OKTOBER", 
		),
		array(
			"value" => "11", 
			"label" => "NOVEMBER", 
		),
		array(
			"value" => "12", 
			"label" => "DESEMBER", 
		),);
		
}