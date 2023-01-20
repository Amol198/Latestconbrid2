
<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"></h1>
            </div>

        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $individuals;?></h3>
                        <h5>Individuals</h5>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href='<?=base_url(index_page()."admin/Dashboard/individuals/")?>' class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                   <h3><?php echo $companies;?></h3>
                        <h5>Companies</h5>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href='<?=base_url(index_page()."admin/Dashboard/companies/")?>' class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $customers;?></h3>
                        <h5>Customers</h5>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href='<?=base_url(index_page()."admin/Dashboard/customers/")?>' class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $job_post;?></h3>
                        <h5>Job Post</h5>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href='<?=base_url(index_page()."admin/Dashboard/job_post/")?>' class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>


    </div>
</section>

</div>
