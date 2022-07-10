<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>

<section id="new-arrivals" class="new-arrivals">
    <div class="container">
        <div class="section-header">
            <h2>Etalase Toko</h2>
        </div>
        <div class="new-arrivals-content">
            <div class="row">
                <?php foreach ($barang as $e) : ?>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="assets/images/collection/<?= $e['img']; ?>" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="new-arrivals-content"></div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a id="beli" href="<?= base_url() ?>/add/<?= $e['id']; ?>">Tambah Ke
                                        Keranjang</a>
                                </p>
                            </div>
                        </div>
                        <h4 id="nm-brg"><a><?= $e['nm_brg']; ?></a></h4>
                        <p id="hrg-brg" class="arrival-product-price">Rp.<?= $e['hrg_brg']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>