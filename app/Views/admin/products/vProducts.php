<?= $this->extend('admin/layouts/app'); ?>

<?= $this->section('content') ?>
<div class="container-fluid pb-3">
    <div class="card shadow mb-0" id="cardProduct">
        <div class="card-body">
            <div class="table-responsive">
                <div class="float-right ml-3">
                    <button class="btn btn-sm btn-primary" id="btnAdd" title="Produk Baru">
                        <i class="fas fa-user-plus mr-1"> </i>Baru
                    </button>
                </div>
                <table id="listProducts" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Product</th>
                            <th class="statusField">Active</th>
                            <th class="actionField">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Product</th>
                            <th>Active</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div id="floatButton"></div>
    <div class="card shadow mb-0 d-none" id="cardDemoProducts">
        <div class="card-body">
            <div class="table-responsive">
                <div class="float-left mr-3">
                    <button class="btn btn-sm btn-danger" id="btnBackToProducts" title="Produk Baru">
                        <i class="fas fa-chevron-left mr-2"> </i>Kembali
                    </button>
                </div>
                <div class="float-right ml-3">
                    <button class="btn btn-sm btn-primary" id="btnAddDemo" title="Demo Produk Baru">
                        <i class="fas fa-user-plus mr-1"> </i>Baru
                    </button>
                </div>
                <table id="listDemoProducts" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Link</th>
                            <th id="statusField">Active</th>
                            <th id="actionField">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Active</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalForm" data-backdrop="static" data-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="formInput">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="formBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="<?= base_url('assets/js/page/admin/products.js') ?>" defer></script>
<?= $this->endSection() ?>