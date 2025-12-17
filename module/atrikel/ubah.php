<?php
$id = $_GET['id'];

$res = $db->query("SELECT * FROM users WHERE id=$id");
$row = $res->fetch_assoc();

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

    if ($db->update('users', $data, "id=$id")) {
        echo "<div style='color:green'>Data berhasil diupdate</div>";
    }
}

$hobi = explode(",", $row['hobi']);
?>

<h2>Ubah Data</h2>

<form method="POST">
<table>
<tr><td>Nama</td><td><input type="text" name="nama" value="<?= $row['nama']; ?>"></td></tr>
<tr><td>Email</td><td><input type="text" name="email" value="<?= $row['email']; ?>"></td></tr>
<tr><td>Password</td><td><input type="password" name="pass" value="<?= $row['pass']; ?>"></td></tr>

<tr>
<td>Jenis Kelamin</td>
<td>
    <label><input type="radio" name="jenis_kelamin" value="L" <?= ($row['jenis_kelamin']=='L')?'checked':''; ?>> Laki-laki</label>
    <label><input type="radio" name="jenis_kelamin" value="P" <?= ($row['jenis_kelamin']=='P')?'checked':''; ?>> Perempuan</label>
</td>
</tr>

<tr>
<td>Agama</td>
<td>
<select name="agama">
    <?php
    $ops = ['Islam','Kristen','Hindu','Budha'];
    foreach ($ops as $a) {
        $sel = $row['agama']==$a ? "selected" : "";
        echo "<option $sel>$a</option>";
    }
    ?>
</select>
</td>
</tr>

<tr>
<td>Hobi</td>
<td>
    <label><input type="checkbox" name="hobi[]" value="Membaca" <?= in_array('Membaca',$hobi)?'checked':'' ?>> Membaca</label>
    <label><input type="checkbox" name="hobi[]" value="Coding" <?= in_array('Coding',$hobi)?'checked':'' ?>> Coding</label>
    <label><input type="checkbox" name="hobi[]" value="Traveling" <?= in_array('Traveling',$hobi)?'checked':'' ?>> Traveling</label>
</td>
</tr>

<tr><td>Alamat</td><td><textarea name="alamat"><?= $row['alamat']; ?></textarea></td></tr>

<tr><td></td><td><input type="submit" value="Update"></td></tr>
</table>
</form>
