<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <?php if(isset($css_file)){ echo view($css_file);} ?> 
    <title><?= $title; ?></title>
</head>
<body>
<!-- Section-1 ----------------------------------------------------------------------------->
<section class="container-fluid p-0" id="section_1">
    <div class="d-flex flex-column">
        <div>
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Techno-logi</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav mr-auto"></div>
                        <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>

                        </ul>
                    </div>
                </nav>
            </header>
        </div>
        <div class="container-fluid text-center heading">
            <h1>Testing H1</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima provident explicabo assumenda, dolore soluta voluptatum id omnis nemo aperiam repellendus. Magnam, eligendi eveniet? Qui maxime blanditiis ipsum, debitis rerum reiciendis tempora beatae.</p>
            <button class="btn btn1 btn-primary">Learn more</button>
            <button class="btn btn2 btn-danger">Download</button>
        </div>
        <div class="p-2">
            <div class="card">
                <div class="card-header">
                    Barengan yuuk..
                    <span class="fa fa-plus float-right"></span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item barengan bg-light">
                        <div class="brg berangkat">
                            <div class="waktu">24 Juli 2020 - 03:00</div>
                            <div class="rute">AUH - CGK</div>
                        </div>
                        <p></p>
                        <div class="brg orang">
                            <div class="nama">Fulan bin Fulan <br> 0568458522</div>
                            <div class="action"><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash"></i></div>
                        </div>
                    </li>
                    <li class="list-group-item barengan">
                        <div class="brg berangkat">
                            <div class="waktu">26 Juli 2020 - 10:00</div>
                            <div class="rute">AUH - DXB</div>
                        </div>
                        <p></p>
                        <div class="brg orang">
                            <div class="nama">Manusia bin Fulan <br> 0560058522</div>
                            <div class="action"><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash"></i></div>
                        </div>
                    </li>
                    <li class="list-group-item barengan bg-light">
                        <div class="brg berangkat">
                            <div class="waktu">29 Juli 2020 - 17:30</div>
                            <div class="rute">DXB - CGK</div>
                        </div>
                        <p></p>
                        <div class="brg orang">
                            <div class="nama">Orang bin Fulan <br> 0568412422</div>
                            <div class="action"><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash"></i></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
    </div> 
</section>
<!-- Section-table ----------------------------------------------------------------------------->
<section id="mhz" class="container-fluid">
    <div class="appbar">
    <div style="flex-grow:1;"><i class="fa fa-bars"></i></div>
    <div style="flex-grow:5;">Menu Title title</div>
    <div ><i class="fa fa-trash" style="color: #999"></i></div>
    </div>
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
</section>

<!-- Section-2 ----------------------------------------------------------------------------->
<section id="section2" class="container-fluid">
    <div class="d-flex flex-column text-center features">
        <div><h1>Features</h1></div>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos blanditiis ullam voluptate architecto quae laborum reprehenderit quia aliquid tenetur distinctio.</p>
        </div>
        <div class="d-sm-flex">
            <div class="flex-fill">
                <div class="progress-1">
                    <div class="caption">60%</div>
                    <div class="progress" style="height: 5px">
                        <div class="progress-bar progress-curcle" role="progress-bar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="pro-detail caption">
                        <i class="fas fa-code px-3"></i>Typography
                    </p>
                </div>
                <div class="progress-2">
                    <div class="caption">85%</div>
                    <div class="progress" style="height: 5px">
                        <div class="progress-bar progress-curcle" role="progress-bar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="pro-detail caption">
                        <i class="fas fa-code px-3"></i>Typography
                    </p>
                </div>
                <div class="progress-3">
                    <div class="caption">72%</div>
                    <div class="progress" style="height: 5px">
                        <div class="progress-bar progress-curcle" role="progress-bar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="pro-detail caption">
                        <i class="fas fa-code px-3"></i>Typography
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section-3 ----------------------------------------------------------------------------->
<section id="section-3" class="container-fluid p-0">
    <div class="d-flex flex-column text-center projects">
        <div class="1">
            <h1>Projects</h1>
        </div>
        <div class="1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, magni maxime neque repudiandae quia incidunt! Necessitatibus ipsa dignissimos quae molestiae.</p>
        </div>
        <div class="images">
            <div class="d-sm-flex flex-row">
                <div class="flex-fill">
                    <img src="image-1" alt="">
                </div>
                <div class="flex-fill">
                    <img src="image-2" alt="">
                </div>
                <div class="flex-fill">
                    <img src="image-3" alt="">
                </div>
            </div>
        </div>
    </div>
</section>



    <?php if(isset($view_file)){ echo view($view_file);} ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<?php if(isset($js_file)){ echo view($js_file);} ?>      
</body>
</html>