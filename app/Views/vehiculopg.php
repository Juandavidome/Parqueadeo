<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oswald:500');
        .back{
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background:url(https://pp.userapi.com/c841122/v841122831/327e/nHt-92F6yc4.jpg) no-repeat top center #efeff1;
        background-size:cover;
        }
        .thx{
        position: fixed;
        left:50%;
        transform:translateX(-50%);
        bottom: 15px;
        }
        nav{
        width: 100%;
        position: fixed;
        top:50px;
        text-align:center;
        }
        nav a{
        font-family: 'Oswald', sans-serif;
        font-weight:500;
        text-transform:uppercase;
        text-decoration:none;
        color:#16151b;
        margin:0 15px;
        font-size:16px;
        letter-spacing:1px;
        position:relative;
        display:inline-block;
        }
        nav a:before{
        content:'';
        position: absolute;
        width: 100%;
        height: 3px;
        background:#16151b;
        top:47%;
        animation:out 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
        }
        nav a:hover:before{
        animation:in 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;

        }
        .button {
                    border: 0;
                    outline: none;
                    border-radius: 15px;
                    padding: 5px 0;
                    font-size: 15px;
                    font-weight: 300;
                    letter-spacing: 0.1em;
                    background: #30142b;
                cursor: pointer;
                    color: #16151b;
                    transition: all 0.5s ease;
                    -webkit-appearance: none;
                }
                .button:hover, .button:focus {
                    background: #000000;
                }
                .button-block {
                    display: block;
                    width: 10%;
                }
        @keyframes in{
        0%{
            width: 0;
            left:0;
            right:auto;
        }
        100%{
            left:0;
            right:auto;
            width: 100%;
        }
        }
        @keyframes out{
        0%{
            width:100%;
            left: auto;
            right: 0;
        }
        100%{
            width: 0;
            left: auto;
            right: 0;
        }
        }
        @keyframes show{
        0%{
            opacity:0;
            transform:translateY(-10px);
        }
        100%{
            opacity:1;
            transform:translateY(0);
        }
        }

        @for $i from 1 through 5 {
        nav a:nth-child(#{$i}){
            animation:show .2s #{$i*0.1+1}s ease 1 both;
        }
        }
        </style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body >
    <nav>
            <a href="<?php echo base_url('welcome_message'); ?>">Inicio</a>
            <a href="<?php echo base_url('conductorpg'); ?>">Registro de Conductores</a>
            <a href="<?php echo base_url('vehiculopg'); ?>">Registro de Autos</a>
          </nav>
	<div class="container"><br> <br>
		<div class="container-fluid">
			<br>
			<table class="table table-borderless">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Placa</th>
						<th scope="col">Marca</th>
						<th scope="col">Serial</th>
						<th scope="col">Color</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($vehiculos as $pac) :
						# code...
					?>
						<tr>
							<th scope="row"> <?= $pac['vehiculos_id'] ?></th>
							<td><?= $pac['vehiculos_placa '] ?></td>
							<td><?= $pac['vehiculos_marca'] ?></td>
							<td><?= $pac['vehiculos_serial'] ?></td>
							<td><?= $pac['vehiculos_color'] ?></td>
							<td><a href="<?php echo base_url('editarV/' . $pac['vehiculos_id']) ?>"><button type="button" class="form-control">Edit</button></a> 
                            <a href="<?php echo base_url('eliminarV/' . $pac['vehiculos_id']) ?>"><button type="button" class="form-control">Borrar</button></a></td>
						</tr>
					<?php endforeach;

					?>
				</tbody>
			</table>

		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>