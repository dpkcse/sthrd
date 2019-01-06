<?php include('partials/head.php'); ?>
<div id="wrapper">
    <!-- NAV START HERE -->
    <!-- NAV START HERE -->
    <?php include('partials/nav.php'); ?>
    <!-- NAV END HERE -->
    <!-- NAV END HERE -->
    <div id="page-wrapper" class="gray-bg dashbard-1">

        <div class="content-top">
			<!--banner-->	
            <div class="banner">
                <h2>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
                <span><?php echo $title; ?></span>
                </h2>
            </div>

            <div class="grid-form">
                <!---->
                <div class="grid-form1">
                    <h3><?php echo $title; ?> Form</h3>
                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                        <form action="<?php echo base_url(); ?>index.php/Admin/mission_vision_save" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label for="txtarea1" class="col-sm-2 control-label">Mission Enter Here</label>
                                    <div class="col-sm-8"><textarea name="mision" id="txtarea1" cols="50" rows="4" class="form-control1" required></textarea></div>
                                </div>
                                <div class="form-group">
                                    <label for="txtarea2" class="col-sm-2 control-label">Vision Enter Here</label>
                                    <div class="col-sm-8"><textarea name="vision" id="txtarea2" cols="50" rows="4" class="form-control1" required></textarea></div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <input type="submit" name="submit" class="btn-primary btn" value="Submit"/>
                                            <span class="btn-default btn">Cancel</span>
                                            <span class="btn-inverse btn">Reset</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="grid-form1">
                    <h3><?php echo $title; ?> Detail</h3>
                    <div class="table-responsive">
                        <h4>Mission</h4>
                        <?php if(COUNT($program_text) > 0){ ?>
                            <p><?php echo $program_text[0]->mnv_mission; ?></p>   
                            <div style="margin-top: 10px;"></div>
                            <a href="<?php echo $program_text[0]->id; ?>"><button class="btn btn-danger btn-xs" data-title="Delete">Delete</button></a> 
                        <?php } ?>
                        <div style="margin-top: 10px;"></div>
                        <h4>Vision</h4>
                        <?php if(COUNT($program_text) > 0){ ?>
                            <p><?php echo $program_text[0]->mnv_vision; ?></p>   
                            <div style="margin-top: 10px;"></div>
                            <a href="<?php echo $program_text[0]->id; ?>"><button class="btn btn-danger btn-xs" data-title="Delete">Delete</button></a> 
                        <?php } ?>
                    </div>
                </div>
            </div>
            
            <?php include('partials/copy.php'); ?>
            <div class="clearfix"></div>
        </div>
                    
        <div class="clearfix"> </div>
    </div>
</div>
<!---->
<?php include('partials/foot.php') ?>

