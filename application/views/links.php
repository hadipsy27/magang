<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-archive"></i> Social Links Management
       
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Social Links</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addProduct" action="<?php echo base_url() ?>Product/editProductSave" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="name">Facebook</label>
                                        <input type="text" class="form-control required" value="" id="fb" name="fb" maxlength="128">
                                        <input type="hidden" value="" name="id" id="id" />
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="name">Twitter</label>
                                        <input type="text" class="form-control required" value="" id="tw" name="tw" maxlength="128">
                                    
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="name">Instagram</label>
                                        <input type="text" class="form-control required" value="" id="ig" name="ig" maxlength="128">
                                       
                                    </div>
                                    
                                </div>
                            </div>

                         
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                  </div>
            </div>
            
        </div>    
    </section>
    
</div>
