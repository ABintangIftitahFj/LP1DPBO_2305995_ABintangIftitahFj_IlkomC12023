<?php
require_once 'Petshop.php';

$list = [];
$list[] = new Petshop('1234', 'maxieCat', 'makanan', '100000', 'catFood.jpg');
$list[] = new Petshop('1221', 'Alpo', 'makanan', '100000', 'alpo.jpg');
$list[] = new Petshop('1455', 'catLitter', 'pasirKucing', '100000', 'catLitter.jpg');

echo "chavali petshop";
?>

<form action="index.php" method="get">
    <input type="text" name="search" placeholder="Search Petshop">
    <button type="submit">Search</button>
</form>

<?php
if (isset($_GET['search'])) {
    $keyword = $_GET['search'];
    $result = [];
    foreach ($list as $petshop) {
        if (stripos($petshop->getName(), $keyword) !== false) {
            $result[] = $petshop;
        }
    }
    $list = $result;
}
?>

<br>
<table border="1" style="border-collapse: collapse; width: 50%;">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Picture</th>
    </tr>
    <?php foreach ($list as $petshop): ?>
        <tr>
            <td><?php echo $petshop->getId(); ?></td>
            <td><?php echo $petshop->getName(); ?></td>
            <td><?php echo $petshop->getCategory(); ?></td>
            <td><?php echo $petshop->getPrice(); ?></td>
            <td><img src="images/<?php echo $petshop->getPicture(); ?>" alt="<?php echo $petshop->getName(); ?>" width="100" height="100"></td>
        </tr>
    <?php endforeach; ?>
</table>

<br>

<?php
echo 'Total Petshop: ' . count($list);
?>

<!-- Tambah Data -->
<?php
echo 'Berhasil menambahkan data';
$list[] = new Petshop('1234', 'maxieCat', 'makanan', '100000', 'catFood.jpg');
$list[] = new Petshop('1221', 'Alpo', 'makanan', '100000', 'alpo.jpg');
$list[] = new Petshop('1455', 'catLitter', 'pasirKucing', '100000', 'catLitter.jpg');
?>

<br>

<table border="1" style="border-collapse: collapse; width: 50%;">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Picture</th>
    </tr>
    <?php foreach ($list as $petshop): ?>
    <?php 
        // var_dump($petshop->getPicture()); ?>  <!-- Tambahkan ini -->
    <tr>
        <td><?php echo $petshop->getId(); ?></td>
        <td><?php echo $petshop->getName(); ?></td>
        <td><?php echo $petshop->getCategory(); ?></td>
        <td><?php echo $petshop->getPrice(); ?></td>
        <td><img src="images/<?php echo $petshop->getPicture(); ?>" alt="<?php echo $petshop->getName(); ?>" width="100" height="100"></td>
    </tr>
<?php endforeach; ?>

</table>

<br>

<!-- Hapus Data -->
<?php
if (!empty($list)) {
    echo $list[0]->getName() . ' berhasil dihapus';
    array_splice($list, 0, 1);
}
?>

<br><br>

<table border="1" style="border-collapse: collapse; width: 50%;">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Picture</th>
    </tr>
    <?php foreach ($list as $petshop): ?>
    <?php 
        // var_dump($petshop->getPicture()); ?>  Tambahkan ini
    <tr>
        <td><?php echo $petshop->getId(); ?></td>
        <td><?php echo $petshop->getName(); ?></td>
        <td><?php echo $petshop->getCategory(); ?></td>
        <td><?php echo $petshop->getPrice(); ?></td>
        <td><img src="images/<?php echo $petshop->getPicture(); ?>" alt="<?php echo $petshop->getName(); ?>" width="100" height="100"></td>
    </tr>
<?php endforeach; ?>

</table>

<br>

<!-- Edit Data -->
<?php
if (!empty($list)) {
    echo 'Berhasil mengedit data';
    $list[0]->setName('maxieCat');
    $list[0]->setCategory('makanan');
    $list[0]->setPrice('100000');
}
?>

<br>

<table border="1" style="border-collapse: collapse; width: 50%;">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Picture</th>
    </tr>
    <?php foreach ($list as $petshop): ?>
    <?php 
        // var_dump($petshop->getPicture()); ?>  <!-- Tambahkan ini -->
    <tr>
        <td><?php echo $petshop->getId(); ?></td>
        <td><?php echo $petshop->getName(); ?></td>
        <td><?php echo $petshop->getCategory(); ?></td>
        <td><?php echo $petshop->getPrice(); ?></td>
        <td><img src="images/<?php echo $petshop->getPicture(); ?>" alt="<?php echo $petshop->getName(); ?>" width="100" height="100"></td>
    </tr>
<?php endforeach; ?>
</table>
