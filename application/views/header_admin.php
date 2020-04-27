<!-- Entete-->

<header class="masthead" style="height: auto; min-height: auto; padding-top: 10rem">
    <?php
    $message = $this->session->flashdata('message');
    if ($message == "wrong") { ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                    <button type="button" class="close font__size-18" data-dismiss="alert">
                        <span aria-hidden="true"><a href="#">
                                <i class="fa fa-times greencross"></i>
                            </a></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <i class="start-icon far fa-check-circle faa-tada animated"></i>
                    <strong class="font__weight-semibold">Informations non valables!</strong>
                    Veillez verifier les informations entrées
                </div>
            </div>
        </div>
    <?php } ?>
    <?php
    if ($message == "update_succes") { ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                    <button type="button" class="close font__size-18" data-dismiss="alert">
                        <span aria-hidden="true"><a href="#">
                                <i class="fa fa-times greencross"></i>
                            </a></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <i class="start-icon far fa-check-circle faa-tada animated"></i>
                    <strong class="font__weight-semibold">Certification avec succès</strong>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php
    if ($message == "archive_succes") { ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                    <button type="button" class="close font__size-18" data-dismiss="alert">
                        <span aria-hidden="true"><a href="#">
                                <i class="fa fa-times greencross"></i>
                            </a></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <i class="start-icon far fa-check-circle faa-tada animated"></i>
                    <strong class="font__weight-semibold">Archivage avec succès</strong>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php
    $message = $this->session->flashdata('message');
    if ($message == "succes") { ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                    <button type="button" class="close font__size-18" data-dismiss="alert">
                        <span aria-hidden="true"><a href="#">
                                <i class="fa fa-times greencross"></i>
                            </a></span>
                        <span class="sr-only">Close</span>
                    </button>
                    <i class="start-icon far fa-check-circle faa-tada animated"></i>
                    <strong class="font__weight-semibold">Bienvenue
                        <?php echo $this->session->userdata('user_name') ?>
                    </strong>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">
                    Bienvenue dans la partie <br><span style="color: #f4623a">Administration</span><br>
                </h1>
                <hr class="divider my-4" />
            </div>
        </div>
    </div>
</header>