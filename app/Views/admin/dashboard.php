<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Admin Panel</title>

        <style>
            .media-body {
                margin-left: 20px;
            }
        </style>
    </head>

    <body>

        <div class="container">
            <h1 class="text-center mt-4">ADMIN PANEL</h1>
            <div class="row mt-4 justify-content-around">
                <div class="card shadow p-3 mb-4 bg-light rounded">
                    <div class="media d-flex align-items-center">
                        <i class="fa fa-users fa-4x me-3 text-primary"></i>
                        <div class="media-body">
                            <h2 class="m-0"><?php echo $countUsers; ?></h2>
                            <p class="text-muted mb-0">Total User/s</p>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-3 mb-4 bg-light rounded">
                    <div class="media d-flex align-items-center">
                        <i class="fa fa-shopping-cart fa-4x me-3 text-primary"></i>
                        <div class="media-body">
                            <h2 class="m-0"><?php echo $countOrders; ?></h2>
                            <p class="text-muted mb-0">Total Order/s</p>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-3 mb-4 bg-light rounded">
                    <div class="media d-flex align-items-center">
                        <i class="fa fa-spinner fa-4x me-3 text-primary"></i>
                        <div class="media-body">
                            <h2 class="m-0"><?php echo $countPendingOrders; ?></h2>
                            <p class="text-muted mb-0">Total Pending Order/s</p>
                        </div>
                    </div>
                </div>
                <div class="card shadow p-3 mb-4 bg-light rounded">
                    <div class="media d-flex align-items-center">
                        <i class="fa fa-check-circle fa-4x me-3 text-success"></i>
                        <div class="media-body">
                            <h2 class="m-0"><?php echo $countDeliveredOrders; ?></h2>
                            <p class="text-muted mb-0">Delivered Order/s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>