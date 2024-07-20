<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Data</title>
</head>

<body>
    <h1>Data Produk</h1>

    <table border="1" width="100%" cellpadding="5">
        <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Username</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Alamat</th>
            <th scope="col">Ongkir</th>
            <th scope="col">Status</th>
        </tr>

        <?php
        $no = 1;
        foreach ($buy as $index => $item) :
        ?>
            <tr>
                <td><?php echo $index + 1 ?></td>
                <td><?php echo $item['username'] ?></td>
                <td><?php echo number_to_currency($item['total_harga'], 'IDR') ?></td>
                <td><?php echo $item['alamat'] ?></td>
                <td><?php echo number_to_currency($item['ongkir'], 'IDR') ?></td>
                <td><?php echo $item['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p>Downloaded on <?= date("Y-m-d H:i:s") ?></p>
</body>

</html>