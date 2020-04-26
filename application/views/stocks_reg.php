<?php $this->load->view('head'); ?>

<body id="page-top">
    <!-- Navigation-->
    <?php $this->load->view('nav'); ?>
    <?php $this->load->view('header_reg'); ?>

    <section class="page-section bg-dark" id="contact" style="padding-top: 10px">
        <div style="padding: 26px">
            <div class="pcss3t pcss3t-effect-scale pcss3t-theme-1">
                <?php
                $i = 0;
                foreach ($departements as $dep) {
                    $i++ ?>
                    <input type="radio" <?php if($i == 1){ ?> checked <?php } ?> name="pcss3t" id="tab<?php echo $i ?>" class="tab-content-<?php echo $i ?>">
                    <label for="tab<?php echo $i ?>"><?php echo $dep->nomdepartement ?></label>
                <?php } ?>
                <ul>
                    <?php
                    $i = 0; 
                    foreach ($departements as $dep) {
                        $j = 0; ?>
                        <li class="tab-content tab-content-<?php echo ++$i;
                                                            if ($i != 1) { ?> typography <?php } ?> ">
                            <div class="container">
                                <div class="row">
                                    <?php foreach ($promoteurs as $promoteur) { ?>
                                        <?php if ($promoteur->id_departement == $dep->codedepartement) { $j++?>
                                            <div class="col-md-3">
                                                <div class="contact-box center-version">
                                                    <a href="#profile.html">
                                                        <img alt="image" class="img-circle"
                                                             src="<?php echo base_url() ?>/assets/img/profiles/<?php echo $promoteur->photo ?>">
                                                        <h3 class="m-b-xs"><strong style="color: #f4623a"><?php echo $promoteur->prom_init ?></strong></h3>
                                                        <h6 style="color: #343a40"><i class="fa fa-map-marked"></i> Localité</h6>
                                                        <h5 style="color: #f4623a"><?php echo $promoteur->codeqrt ?></h5>
                                                        <h6 style="color: #343a40"><i class="fas fa-bookmark"></i> Capacité de production</h6>
                                                        <h5 style="color: #f4623a"><?php echo $promoteur->cap_prod ?></h5>
                                                        <h6 style="color: #343a40"><i class="fas fa-comment-dollar"></i> Prix unitaire</h6>
                                                        <h5 style="color: #f4623a"><?php echo $promoteur->prix ?></h5>
                                                    </a>
                                                    <div class="contact-box-footer">
                                                        <div class="m-t-xs btn-group">
                                                            <a class="btn btn-xs btn-white font-weight-bolder ">
                                                                <i class="fa fa-phone"></i>
                                                                <?php echo $promoteur->num_tel ?>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php if ($j == 0) { ?>
                                        <h1>Pas de Distributeur disponible dans ce département. <br>
                                            Si vous en connaissez un, demandez lui de publier son stock par ici.
                                        </h1>
                                    <?php } ?>
                                </div>
                            </div>
                        </li>

                    <?php } ?>
                    <li class="tab-content tab-content-last typography">

                    </li>
                </ul>
            </div>

        </div>
    </section>
    <?php $this->load->view('footer'); ?>
</body>

</html>