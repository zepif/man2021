<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
    <body>
        <?php require "blocks/header.php" ?>
        <div class="container mt-5">
	    <h3 class="mb-5">Последние проeкты</h3>
		<div class="d-flex flex-wrap">
            <?php
            for ($i = 0; $i < 5; $i++):
	        ?>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Название проeкта</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/<?php echo ($i + 1) ?>.jpeg" class="img-thumbnail">
                            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>9.2.2021</li>
                                <li>Active</li>
                                <li>test_name</li>
                            </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                        </div>
                    </div>
                </div>
		    <?php endfor; ?>
		</div>
        </div>
        <?php require "blocks/footer.php" ?>
    </body>
</html>
