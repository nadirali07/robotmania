<!doctype html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="public/images/favicon.PNG" type="image/icon" sizes="30x30">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script>


    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title>Robot Mania</title>
    <style type="text/css">
    .progress-title {
        font-size: 18px;
        font-weight: 700;
        color: #000;
        margin: 0 0 30px;
    }

    .progress {
        height: 17px;
        background: rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        margin-bottom: 30px;
        overflow: visible;
        position: relative;
    }

    .progress .progress-bar {
        border-radius: 15px;
        box-shadow: none;
        position: relative;
        animation: animate-positive 2s;
    }

    .progress .progress-icon,
    .progress .progress-value {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        line-height: 40px;
        background: #fff;
        border: 7px solid #1f75c4;
        font-size: 15px;
        font-weight: 600;
        color: #1f75c4;
        position: absolute;
        top: -17px;
        right: -25px;
    }

    .progress .progress-icon {
        right: auto;
        left: -25px;
    }

    .progress.orange .progress-icon,
    .progress.orange .progress-value {
        border: 7px solid #f7810e;
        color: #f7810e;
    }

    .progress.pink .progress-icon,
    .progress.pink .progress-value {
        border: 7px solid #f2438f;
        color: #f2438f;
    }

    .progress.green .progress-icon,
    .progress.green .progress-value {
        border: 7px solid #08a061;
        color: #08a061;
    }

    @-webkit-keyframes animate-positive {
        0% {
            width: 0;
        }
    }

    @keyframes animate-positive {
        0% {
            width: 0;
        }
    }

    .plugin {
        box-shadow: inset 0px 0px 15px 3px #3dc21b;
        background: linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
        background-color: #44c767;
        border-radius: 5px;
        border: 3px solid #18ab29;
        display: inline-block;
        cursor: pointer;
        color: #ffffff;
        font-family: Trebuchet MS;
        font-size: 15px;
        font-weight: bold;
        padding: 5px 37px;
        text-decoration: none;
        text-shadow: 0px 0px 8px #2f6627;
    }

    .plugin:hover {
        background: linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
        background-color: #5cbf2a;
    }

    .plugin:active {
        position: relative;
        top: 1px;
    }

    .unplug {
        box-shadow: inset 0px 0px 15px 3px #8a2a21;
        background: linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
        background-color: #c62d1f;
        border-radius: 5px;
        border: 3px solid #d02718;
        display: inline-block;
        cursor: pointer;
        color: #ffffff;
        font-family: Trebuchet MS;
        font-size: 15px;
        font-weight: bold;
        padding: 5px 37px;
        text-decoration: none;
        text-shadow: 0px 0px 8px #810e05;
    }

    .unplug:hover {
        background: linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
        background-color: #f24437;
    }

    .unplug:active {
        position: relative;
        top: 1px;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center mt-4" style="color: #173f5f;font-weight: 600;font-size: 35px;font-family: 'Permanent Marker', cursive;">
                <span>ROBOT MANIA</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <img src="public/images/robo.GIF">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <h3 class="progress-title">Status <span id="status" class="text-warning">Not-Charging</span></h3>
                <div class="progress">
                    <div class="progress-bar bg-warning" id="prog-per" style="width:50%;">
                        <span class="progress-icon"><i class="fas fa-battery-full" id="icon"></i></span>
                        <div class="progress-value"><span id="prog">50</span>%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mx-auto text-center mt-2">
                <button class="unplug" onclick="stop()">Un-Plug</button>
                <button class="plugin" onclick="move()">Plug-In</button>
            </div>
        </div>
    </div>


<a href="" class="btn btn-default btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#modalLoginAvatar" id="md" data-backdrop="static" style="visibility: hidden;">Launch
            Modal Login with Avatar</a>

    <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-gtm-vis-first-on-screen-2340190_1302="15926" data-gtm-vis-total-visible-time-2340190_1302="100" data-gtm-vis-has-fired-2340190_1302="1" style="display: none;" aria-hidden="true">
          <div class="modal-dialog  cascading-modal modal-avatar modal-sm" role="document">
            <!--Content-->
            <div class="modal-content">

              <!--Header-->
              <div class="modal-header">
                <img src="public/images/logo.JPG" alt="avatar" class="rounded-circle img-responsive">
              </div>
              <!--Body-->
              <div class="modal-body text-center mb-1">

                <h5 class="mt-1 mb-2" style="font-family: 'Permanent Marker', cursive;">ROBOT MANIA</h5>
                <span class="mt-1 mb-2" style="font-family: 'Permanent Marker', cursive;">Initialize</span>

                <div class="md-form ml-0 mr-0">
                  <input type="number" id="charging" class="form-control form-control-sm ml-0" oninput="this.value=this.value.replace(/[^0-9]/g,'');" onchange="handleChange(this);">
                  <label data-error="wrong" data-success="right" for="charging" class="ml-0">Enter Charging value(e.g 45..67..)</label>
                  <span id="msg" style="color: red;font-size: 14px;display: none;"></span>
                </div>

                <div class="text-center mt-4">
                  <button class="btn btn-cyan mt-1 waves-effect waves-light" id="letgo">Let's Go <i class="fas fa-sign-in ml-1"></i></button>
                </div>
              </div>

            </div>
            <!--/.Content-->
          </div>
        </div>
    <script type="text/javascript">
    
    var idstop;
    var idstart;

function handleChange(input) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;
  }
    function move() {
      var i = document.getElementById("prog").innerText;
      clearInterval(idstop);
      document.getElementById("status").innerHTML="Charging";
      document.getElementById("status").classList.remove("text-warning");
      document.getElementById("status").classList.add("text-success");

      document.getElementById("prog-per").classList.remove("bg-warning");
      document.getElementById("prog-per").classList.add("bg-success");

      document.getElementById("icon").classList.remove("fa-battery-full");
      document.getElementById("icon").classList.add("fa-charging-station");
      // document.getElementById("prog-per").style.background-color="green";
        if (i >= 0) {
            // i = 1;
            var elem = document.getElementById("prog-per");
            var width = i;
            idstart = setInterval(frame, 800);

            function frame() {
                if (width >= 100 ) {
                    clearInterval(idstart);
                    i = 0;
                    alert("Charging Full");
                    document.getElementById("status").innerHTML="Charging Full, please Un plug...!";
                } else {
                    width++;
                    elem.style.width = width + "%";
                    document.getElementById("prog").innerHTML = width;
                }
            }
        }
    }
    function stop() {
      var i = document.getElementById("prog").innerText;
      clearInterval(idstart);

      document.getElementById("status").innerHTML="Not-Charging";
      document.getElementById("status").classList.add("text-warning");
      document.getElementById("status").classList.remove("text-success");

      document.getElementById("prog-per").classList.add("bg-warning");
      document.getElementById("prog-per").classList.remove("bg-success");

      document.getElementById("icon").classList.add("fa-battery-full");
      document.getElementById("icon").classList.remove("fa-charging-station");
        if (i >= 0) {
            // i = 1;

            var elem = document.getElementById("prog-per");
            var width = i;
            idstop = setInterval(frame, 800);

            function frame() {
                if (width <=0) {
                    clearInterval(idstop);
                    i = 0;
                    alert("Charging Low");
                    document.getElementById("status").innerHTML="Charging low, please plug in...!";
                } else {
                    width--;
                    elem.style.width = width + "%";
                    document.getElementById("prog").innerHTML = width;
                }
            }
        }
    }
    </script>




    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
/* global $ */
$(document).ready(function() {

    $('.progress-value > span').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

   

    
$("#md").trigger('click');
$('#letgo').click(function(event){
    event.preventDefault();
    $('#msg').hide();
    var input = $('#charging').val(); 
            n = Number(input);
            if (!n) { 
                $('#msg').show();
                $('#msg').html('Please enter any number..!'); 
                input.val("0"); 
            } 
            else if (n < 0) { 
                $('#msg').show();
                $('#msg').html('Type number between 0-100'); 
                input.val("0"); 
            } else if (n > 100) {
                $('#msg').show();
                $('#msg').html('Type number between 0-100'); 
                input.val("100"); 
            } else { 
                // $('#msg').show();
                $('#prog').html(n);
                $('#prog-per').css('width',n+'%');
                
                $("#modalLoginAvatar").modal("hide");
                setTimeout(function() {
                    $(".unplug").click();
                }, 500);
            } 


     });

});
</script>

</html>