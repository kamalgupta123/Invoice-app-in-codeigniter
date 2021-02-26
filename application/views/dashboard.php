</head>  
<body>
<section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title" style="color:#fefeff !important;">Dashboard</h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
</section>  
<div class="white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Welcome <span class="text-success"><?php echo $this->session->userdata('user'); ?></span>
                            &nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;
                            <a href="<?php echo base_url("Login/logout") ?>"><span class="text-primary">Click here to logout</span></a> 
                            <hr>
                            <div class="row">
                                <div class="col-lg-2"><button class="btn btn-warning btn-lg btn-block"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Create Invoice</button></div>
                                <div class="col-lg-3"><button class="btn btn-danger btn-lg btn-block"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Delivery Challan</button></div>
                                <div class="col-lg-3"><button class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Create Credit Note</button></div>
                                <div class="col-lg-3"><button class="btn btn-light "><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Estimates/Quotations/Proposal Etc</button></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="jumbotron">
                                        <div class="card">
                                            <!-- chart -->
                                            <div id="gst_chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="jumbotron">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h5><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Recent Clients</h5>
                                                <table class="table table-striped table-bordered table-hover table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Invoice Number</th>
                                                            <th>Total Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1TBRE1234567</td>
                                                            <td>100.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1TCVC1234567</td>
                                                            <td>100.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1TCVC1234567</td>
                                                            <td>100.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="jumbotron">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h5>Unpaid Invoices</h5>
                                                <table class="table table-striped table-bordered table-hover table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Client Name</th>
                                                            <th>Invoice</th>
                                                            <th>Amount Due</th>
                                                            <th>Reminder</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><h6>Robert Ford</h6></td>
                                                            <td>1TBRE1234567</td>
                                                            <td>100.00</td>
                                                            <td><button class="btn btn-info">SEND</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td><h6>Robert Ford</h6></td>
                                                            <td>1TBRE1234567</td>
                                                            <td>100.00</td>
                                                            <td><button class="btn btn-info">SEND</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td><h6>Robert Ford</h6></td>
                                                            <td>1TBRE1234567</td>
                                                            <td>100.00</td>
                                                            <td><button class="btn btn-info">SEND</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td><h6>Robert Ford</h6></td>
                                                            <td>1TBRE1234567</td>
                                                            <td>100.00</td>
                                                            <td><button class="btn btn-info">SEND</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6"><button class="btn btn-primary btn-lg btn-block">Export to Accounting Software</button></div>
                                <div class="col-lg-6"><button class="btn btn-danger btn-lg btn-block">Create Jason for GSTR-1</button></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="jumbotron">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h5>Review Purchased and Outstanding Payments</h5>
                                                <table class="table table-striped table-bordered table-hover table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Vendor</th>
                                                            <th>Payment Due</th>
                                                            <th>Invoices Due</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><h6>Robert Ford</h6></td>
                                                            <td>200.00</td>
                                                            <td>1TBRE1234567</td>
                                                            <td><button class="btn btn-info">CLEAR</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td><h6>Robert Ford</h6></td>
                                                            <td>200.00</td>
                                                            <td>1TBRE1234567</td>
                                                            <td><button class="btn btn-info">CLEAR</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td><h6>Robert Ford</h6></td>
                                                            <td>200.00</td>
                                                            <td>1TBRE1234567</td>
                                                            <td><button class="btn btn-info">CLEAR</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td><h6>Robert Ford</h6></td>
                                                            <td>200.00</td>
                                                            <td>1TBRE1234567</td>
                                                            <td><button class="btn btn-info">CLEAR</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<br><br>
