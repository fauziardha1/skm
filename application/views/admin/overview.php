        <?php $this->load->view('_partials/head.php'); 

         $this->load->view('_partials/sidebar.php'); 

         $this->load->view('_partials/navbar.php'); ?>

        <!-- //  $this->load->view('_partials/content.php'); -->

        <a href="<?= base_url('pdf') ?>" target="_blank" class="btn btn-primary mx-5">Test PDF</a>
        
        <?php
         $this->load->view('_partials/footer.php'); 

         $this->load->view('_partials/scrollTop.php'); 

         $this->load->view('_partials/logoutModal.php');  

        $this->load->view('_partials/script.php');?>