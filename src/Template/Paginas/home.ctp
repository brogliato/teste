<section class="banner">
    <div class="banner-desc">
        <h1>
            Dúvidas
        </h1>
        <p>
            <b>
                Listamos aqui algumas suvidas frequentes
            </b>
            caso a sua dúvida não esteja aqui você pode entrar em contato conosco 
            <a href="#" class="banner-link">clicando aqui</a>
        </p>
    </div>
</section>
<section class="duvidas">
    <div class="container-2">
        <?php foreach (range(0, 9) as $i) : ?>
            <?= $this->element('duvidas', [
                'i' => $i,
            ]) ?>
        <?php endforeach ?>
    </div>
</section>