<!-- Main Script JS -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js" defer></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js" defer></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" defer></script>
<script src="<?php echo base_url('assets/js/main.js'); ?>" defer></script>
<script src="<?php echo base_url('assets/js/module/moment.min.js') ?>" defer></script>
<script src="<?= base_url('assets/js/module/nanobar.min.js') ?>" defer></script>
<script src="<?php echo base_url('assets/js/appHome.js'); ?>" defer></script>
<!-- End Main Script JS -->
<div id="customJsNa">
    <!-- User Page Js  -->
    <?php if ($js != '') : ?>
        <script src="<?php echo base_url('assets/js/page/' . $js ?? ''); ?>" defer></script>
    <?php endif; ?>
</div>

<!-- End User Page Js  -->