<!doctype html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="data:image/png;base64,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" type="image/icon" sizes="30x30">
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
            <div class="col-sm-6 mx-auto text-center mt-4" style="color: #173f5f;font-weight: 600;font-size: 35px;font-family: 'Permanent Marker', cursive;">
                <span>ROBOT MANIA</span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mx-auto text-center">
                <img src="https://media0.giphy.com/media/1ZDDyAaAA82ywDiyKs/giphy.gif">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mx-auto text-center">
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
            <div class="col-sm-6 mx-auto text-center mt-2">
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
                <img src="https://st.depositphotos.com/1097037/1822/v/950/depositphotos_18222861-stock-illustration-cute-cartoon-robot.jpg" alt="avatar" class="rounded-circle img-responsive">
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