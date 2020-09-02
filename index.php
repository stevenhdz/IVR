<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>

<body onload="main();">
    
<br>
<!-- Button trigger modal -->
<div class="container">
  <div class="row">
    <div class="col-fix">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        Llamar
      </button>
    </div>  
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div>
            <div class="bg bg-secondary clearfix">
                <button type="button" class="btn btn-primary float-left">IVR</button>
                <button type="button" class="btn btn-danger float-right" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
      </div>
      <div class="modal-body">        
              <div class="text-center">
              <?php echo '<p>IVR</p>'; ?>
              </div>


          <center>
            <table class="table-fix">
              <tbody>
                  <textarea id="resultado" name="resultado" rows="1" disabled></textarea>
                <tr>
                  <td>
                     <button id="uno" type="button" class="btn btn-primary
                    rounded-circle btn-lg">1</button>
                  </td>
                  <td>
                     <button id="dos" type="button" class="btn btn-primary
                    rounded-circle btn-lg">2</button>
                  </td>
                  <td>
                    <button id="tres" type="button" class="btn btn-primary
                    rounded-circle btn-lg">3</button>
                  <td>
                </tr>
                <tr>
                  <td>
                     <button id="cuatro" type="button" class="btn btn-primary
                    rounded-circle btn-lg">4</button>
                  </td>
                  <td>
                    <button id="cinco" type="button" class="btn btn-primary
                    rounded-circle btn-lg">5</button>
                  </td>
                  <td>
                    <button id="seis" type="button" class="btn btn-primary
                    rounded-circle btn-lg">6</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button id="siete" type="button" class="btn btn-primary
                    rounded-circle btn-lg">7</button>
                  </td>
                  <td>
                    <button id="ocho" type="button" class="btn btn-primary
                    rounded-circle btn-lg">8</button>
                  </td>
                  <td>
                    <button id="nueve" type="button" class="btn btn-primary 
                    rounded-circle btn-lg">9</button>
                  </td>
                </tr>
                <tr>
                    <td>
                    <button id="asterisco" type="button" class="btn btn-primary 
                    rounded-circle btn-lg">*</button>
                    </td>
                    <td>
                     <button id="cero" type="button" class="btn btn-primary 
                    rounded-circle btn-lg">0</button>
                      </td>
                    <td>
                    <button id="numeral" type="button" class="btn btn-primary 
                    rounded-circle btn-lg">#</button>
                    </td>
                    </tr>
              </tbody>
            </table>
          </center>          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">
        <i class="fa fa-phone" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">
        <i class="fa fa-phone" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div>
</div>



<script src="JS/FuncionIngresar.js"></script>
<script src="JS/jquery.js"></script>
<script src="JS/script.js"></script>
<script src="JS/popper.js"></script>

<!--propiedad propia-->


  

</html>
<!--
  https://getbootstrap.com/
  https://mdbootstrap.com/
  https://fontawesome.com/v4.7.0/icons/
-->





