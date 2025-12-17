<?php
echo "<h2>Daftar Artikel / Users</h2>";

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $db->query("DELETE FROM users WHERE id=$id");
    echo "<div style='color:green'>Data berhasil dihapus.</div>";
}

$result = $db->query("SELECT * FROM users ORDER BY id DESC");
?>

<a href="/lab11_php_oop/artikel/tambah">+ Tambah Baru</a>

<table border="1" cellpadding="8" cellspacing="0" width="100%">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Hobi</th>
    <th>Aksi</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>

<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['jenis_kelamin']; ?></td>
    <td><?= $row['agama']; ?></td>
    <td><?= $row['hobi']; ?></td>
    <td>
        <a href="/lab11_php_oop/artikel/ubah/<?= $row['id']; ?>">Ubah</a> |
        <a href="/lab11_php_oop/artikel/index?delete=<?= $row['id']; ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
</tr>

<?php endwhile; ?>
</table>
