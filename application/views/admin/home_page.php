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
                    <h3>Slider Image</h3>
                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                            <form action="<?php echo base_url(); ?>index.php/Admin/home_page_save" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="head_one" class="col-sm-2 control-label">Heading 1</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="head_one" class="form-control1" id="head_one" placeholder="Default Input" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="head_two" class="col-sm-2 control-label">Heading 2</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="head_two" class="form-control1" id="head_two" placeholder="Default Input" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputFile" class="col-sm-2 control-label">Image Browse</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control1" name="inputFile" id="inputFile" accept=".png, .jpg, .jpeg" required>
                                        <p class="help-block">Image size Max. width: 1600PX Height: 500PX</p>
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
                    <h3>Slider Image Detail</h3>
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>SL.</th>
                                <th>Heading 1</th>
                                <th>Heading 2</th>
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
                                    <td><?php echo $item->head_one; ?></td>
                                    <td><?php echo $item->head_two; ?></td>
                                    <td><img src="<?php echo base_url(); ?>upload/<?php echo $item->image; ?>" style="width:100%; min-height:auto; max-height:50px; border-radius:14px;"></td>
                                    <td><a href="<?php echo base_url(); ?>index.php/Admin/delete_data/cbsc_slider/<?php echo $item->id; ?>"><button class="btn btn-danger btn-xs" data-title="Delete">Delete</button></a></td>
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

