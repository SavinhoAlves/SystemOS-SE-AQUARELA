
<?php $this->load->view('layout/sidebar'); ?>


<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('os'); ?>">Serviços</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>

        <?php if ($message = $this->session->flashdata('sucesso')): ?>

            <div class="row">

                <div class="col-md-12">

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="far fa-smile-wink"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>

            </div>

        <?php endif; ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">


            <div class="card-body">

                <div class="text-center">

                    <a title="Imprimir serviços" href="<?php echo base_url('os/pdf/' . $ordem_servico->ordem_servico_id); ?>" class="btn btn-dark btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                            <i class="fas fa-print"></i>
                        </span>
                        <span class="text">Imprimir Serviço</span>
                    </a>


                    <a title="Cadastrar novo serviço" href="<?php echo base_url('os/add'); ?>" class="btn btn-success btn-icon-split btn-lg mx-5">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Novo Serviço</span>
                    </a>


                    <a title="Listar ordens de serviços" href="<?php echo base_url('os'); ?>" class="btn btn-info btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                            <i class="fas fa-list-ol"></i>
                        </span>
                        <span class="text">Listar Serviços</span>
                    </a>

                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

