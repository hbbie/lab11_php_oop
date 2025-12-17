<?php
$form = new Form("", "Simpan");

if ($_POST) {

    $hobi = isset($_POST['hobi']) ? implode(",", $_POST['hobi']) : '';

    $data = [
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'pass' => $_POST['pass'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'agama' => $_POST['agama'],
        'hobi' => $hobi,
        'alamat' => $_POST['alamat']
    ];

    if ($db->insert('users', $data)) {
        echo "<div style='color:green'>Berhasil ditambahkan</div>";
    }
}

$form->addField("nama", "Nama Lengkap");
$form->addField("email", "Email");
$form->addField("pass", "Password", "password");
$form->addField("jenis_kelamin", "Jenis Kelamin", "radio", ['L' => 'Laki-laki', 'P' => 'Perempuan']);
$form->addField("agama", "Agama", "select", ['Islam'=>'Islam','Kristen'=>'Kristen','Hindu'=>'Hindu','Budha'=>'Budha']);
$form->addField("hobi", "Hobi", "checkbox", ['Membaca'=>'Membaca', 'Coding'=>'Coding','Traveling'=>'Traveling']);
$form->addField("alamat", "Alamat", "textarea");

$form->displayForm();
