<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<section id="cart" class="cart-Page">
    <div class="container mt-5">
        <div class="section-header">
            <h2>Keranjang Anda</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-success table-striped">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($cart as $c) : ?>
                            <tr class="text-left">
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $c['nama']; ?></td>
                                <td>Rp.<?= $c['harga']; ?></td>
                                <td><?= $c['jumlah']; ?></td>
                                <td><a href="<?= base_url() ?>/del/<?= $c['id_cart']; ?>"
                                        class="btn btn-danger">Hapus</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="checkout" class="btn btn-primary">Checkout</a>
                </div>
            </div>
        </div>
    </div>

</section>
<?= $this->endSection(); ?>