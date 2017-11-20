<?php $this->load->view('templates/Header');?>
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <h2>Home
                  <?php echo $this->session->userdata('username_admin'); ?> </h2>
                <h1 style="background-image: url(<?php echo base_url ('assets/images/welcome.gif');?>)"/><br><br><br><br><br><br><br><br></h1>

            </p>
            </div>
        </div>
<?php $this->load->view('templates/Footer'); ?>