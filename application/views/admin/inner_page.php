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
                <div class="grid-form1">
                    <h3>Inner Page Image</h3>
                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                            <form action="<?php echo base_url(); ?>index.php/Admin/inner_page_save" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="page_name" class="col-sm-2 control-label">Page Name</label>
                                    <div class="col-sm-8">
                                    <select name="page_name" class="form-control1" id="page_name" required>
                                        <option value="wwa">WHO WE ARE</option>
                                        <option value="mission">Mission</option>
                                        <option value="vision">Vision</option>
                                        <option value="approach">Approach</option>
                                        <option value="expertise">Expertise</option>
                                        <option value="facilities">Facilities</option>
                                        <option value="media">Methods and Media</option>
                                        <option value="specialty">Specialty</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputFile" class="col-sm-2 control-label">Image Browse</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control1" name="inputFile" id="inputFile" accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" required>
                                        <p class="help-block">Image size Min. width: 548PX Height: 249PX</p>
                                    </div>
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
                    <h3>Inner Page Image Detail</h3>
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>SL.</th>
                                <th>Page Name</th>
                                <th style="width:15%;">Image</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                            <?php if(COUNT($allImg) > 0){
                                $i = 0;
                                foreach($allImg as $item) {
                            ?>
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $item->page_name; ?></td>
                                    <td><img src="<?php echo base_url(); ?>upload/<?php echo $item->image; ?>" style="width:100%; min-height:auto; max-height:50px; border-radius:14px;"></td>
                                    <td><a href="<?php echo base_url(); ?>index.php/Admin/delete_data/cbsc_inner_img/<?php echo $item->id; ?>"><button class="btn btn-danger btn-xs" data-title="Delete">Delete</button></a></td>
                                </tr>
                            <?php
                                }
                            } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include('partials/copy.php'); ?>          
        <div class="clearfix"> </div>
    </div>
</div>
<!---->
<?php include('partials/foot.php') ?>

