<html>
<head>
  <meta charset="utf-8" />
  <title>Actualizar Vehiculo</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function() {
    $('#contact').click(function() {
      $('#contactForm').fadeToggle();
    })
    $(document).mouseup(function (e) {
      var container = $("#contactForm");
  
      if (!container.is(e.target)
          && container.has(e.target).length === 0)
      {
          container.fadeOut();
      }
    });
  });
  
  </script>
  <style>
    @import "https://fonts.googleapis.com/css?family=Poppins";
        * {
        box-sizing: border-box;
        }
        body {
        margin: 0;
        padding: 0;
        background: #333;
        font-family: Poppins;
        text-transform: uppercase;
        font-size: 11px;
        background: #0f0c29; /* fallback for old browsers */
        background: -webkit-linear-gradient(
            to right,
            #24243e,
            #302b63,
            #0f0c29
        ); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(
            to right,
            #24243e,
            #302b63,
            #0f0c29
        ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        h1 {
        margin: 0;
        }
        #contact {
        margin: 4em auto;
        width: 100px;
        height: 30px;
        line-height: 30px;
        font-weight: 700;
        text-align: center;
        cursor: pointer;
        border: 1px solid white;
        }

        #contact:hover {
        background: #000000;
        }
        #contact:active {
        background: #444;
        }

        #contactForm {
        display: none;

        border: 6px solid 3324be;
        padding: 2em;
        width: 400px;
        text-align: center;
        background: #fff;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        border-radius: 16px;
        }

        input,
        textarea {
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
        border-radius: 15px;
        }
        textarea {
        height: 80px;
        resize: none;
        }

        .formBtn {
        outline: 0;
        background: #3324be;
        width: 140px;
        height: 30px;
        border: 0;
        color: #ffffff;
        font-size: 1.2em;
        border-radius: 15px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
        }
        .button {
            border: 0;
            outline: none;
            border-radius: 15px;
            padding: 5px 0;
            font-size: 15px;
            font-weight: 300;
            letter-spacing: 0.1em;
            background: #3324be;
        cursor: pointer;
            color: #fff;
            transition: all 0.5s ease;
            -webkit-appearance: none;
        }
        .button:hover, .button:focus {
            background: #000000;
        }
        .button-block {
            display: block;
            width: 100%;
        }
  </style>
</head>
<body>
  <div id="contact" class="formBtn">Actualizar</div>
  <div id="contactForm">
    <h1 style="margin-bottom: 10px;">Actualizar Vehiculo</h1>
    <form action="<?= base_url('factualizarV'); ?>" method="POST">
        <input type="number" hidden name="vehiculos_id" value="<?=$vehiculos['vehiculos_id'] ?>">
        <label for="exampleInputEmail1">Placa</label>
        <input type="text" class="form-control" id="vehiculos_placa" name="vehiculos_placa" value="<?= $vehiculos['vehiculos_placa'] ?>" required aria-describedby="emailHelp">
        <label for="exampleInputEmail1">Marca</label>
        <input type="text" class="form-control" id="vehiculos_marca" name="vehiculos_marca" value="<?= $vehiculos['vehiculos_marca']?>" required aria-describedby="emailHelp">
        <label for="exampleInputEmail1">Serial</label>
        <input type="text" class="form-control" id="vehiculos_serial" name="vehiculos_serial" value="<?= $vehiculos['vehiculos_serial']?>" required aria-describedby="emailHelp">
        <label for="exampleInputEmail1">Color</label>
        <input type="text" class="form-control" id="vehiculos_color" name="vehiculos_color" value="<?= $vehiculos['vehiculos_color']?>" required aria-describedby="emailHelp">
        <button type="submit" class="button button-block">Actualizar</button>
        <button type="button" class="button button-block" onclick="window.location.href='<?php echo base_url('vehiculopg'); ?>'">Volver</button>
    </form>
  </div>
</body>
</html>
