<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>3 Columns Chat  - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    body {
        background-image: url("https://s-media-cache-ak0.pinimg.com/236x/ff/d2/65/ffd265ce7dcc0719877217fab0ea1504.jpg");
        background-repeat: repeat;
      }
      .chat-head {
        background: #1abc9c;
        color: white;
        font-weight: bold;
        padding: 2vh 1vh;
      }
      .contact-body {
          background: #fff;
          overflow-y: auto;
      }
      .contact-body-search {
        padding: 3% 1%;
        background: #fff;
      }
      .contact-body-list {
        background: #fff;
        overflow-y: auto;
      }
      .chat-body {
        background: #fff;
        overflow-y: auto;
      }
      .chat-send-body {
        padding: 5% 5%;
        background: #bdc3c7;
      }
      .img-avatar {
          width:auto;
      }
      /*chat*/
      .you-chat {
        position: relative;
        background: #1abc9c;
        height: 10vh;
        padding: 5% 6%;
        margin-bottom: 20px;
        color: white;
        -webkit-border-radius: 12;
        -moz-border-radius: 12;
        border-radius: 12px;
      }
      .you-chat:after {
        right: 100%;
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(136, 183, 213, 0);
        border-right-color: #1abc9c;
        border-width: 8px;
        margin-top: -18px;
      }
      /*chat*/
      .me-chat {
        position: relative;
        background: #bdc3c7;
        height: 10vh;
        padding: 5% 6%;
        margin-bottom: 20px;
        color: black;
        -webkit-border-radius: 12;
        -moz-border-radius: 12;
        border-radius: 12px;
        text-align: right;
      }
      .me-chat:after {
        left: 100%;
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(136, 183, 213, 0);
        border-left-color: #bdc3c7;
        border-width: 8px;
        margin-top: -18px;
      }
      @media (max-width: 767px) {
        .chat-head {
          height: 15vh;
        }
        .contact-body {
          height: 85vh;
        }
        .contact-body-search {
          height: 10vh;
        }
        .contact-body-list {
          height: 75vh;
        }
        .chat-body {
          height: 72vh;
        }
        .chat-send-body {
          height: 13vh;
        }
        .img-avatar {
            height:10vh;
            width:auto;
        }
      }
      @media (min-width: 768px) and (max-width: 991px) {
        .chat-head {
          height: 15vh;
        }
        .contact-body {
            height: 85vh;
        }
        .contact-body-search {
          height: 10vh;
        }
        .contact-body-list {
          height: 75vh;
        }
        .chat-body {
          height: 72vh;
        }
        .chat-send-body {
          height: 13vh;
        }
        .img-avatar {
            height:6vh;
            width:auto;
        }
      }
      @media (min-width: 992px) and (max-width: 1199px) {
        .chat-head {
          height: 10vh;
        }
        .contact-body {
            height: 90vh;
        }
        .contact-body-search {
          height: 13vh;
        }
        .contact-body-list {
          height: 77vh;
        }
        .chat-body {
          height: 65vh;
        }
        .chat-send-body {
          height: 15vh;
        }
        .img-avatar {
            height:6vh;
            width:auto;
        }
      }
      @media (min-width: 1200px) {
        .chat-head {
          height: 10vh;
        }
        .contact-body {
            height: 75vh;
        }
        .contact-body-search {
          height: 8vh;
        }
        .contact-body-list {
          height: 67vh;
        }
        .chat-body {
          height: 60vh;
        }
        .chat-send-body {
          height: 15vh;
        }
        .img-avatar {
            height:6vh;
            width:auto;
        }
      }        </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
<div class="container">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="row" style="padding:1px;">
            <div class="chat-head">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <button class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Friend</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                    <button class="btn btn-success"><i class="fa fa-bars"></i></button>
                </div>
            </div>
            <div class="container-fluid" style="background: white;">
              <div class="row-fluid contact-body-search">                
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                      <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row contact-body-list">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 2</h4>
                    <p class="list-group-item-text"><i>On the way kesono</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">User 1</h4>
                    <p class="list-group-item-text"><i>Lagi sibuk nih</i></p>
                  </a>
                </div>
              </div>                
            </div>
        </div>        
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="row" style="padding:1px;">
            <div class="chat-head">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                    <img class="img-circle img-avatar" src="http://www.likecool.com/Gear/Pic/One%20Trippy%20Profile%20Pic/One-Trippy-Profile-Pic.jpg"/>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                    <h5><b>Mas Nganu</b><br/><span style="font-size: 12px;"><i>Busy</i></span></h4>
                </div>
            </div>
            <div class="container-fluid chat-body" style="padding: 8%">
                <div class="you-chat">
                    Hey human!
                </div>
                <div class="me-chat">
                    Are We human? or are We dancer?
                </div>
            </div>
            <div class="container-fluid chat-send-body">
                <div class="form-group">
                  <input class="form-control input" type="text" placeholder="Type here">
                  <div class="row-fluid text-right" style="margin-top: 2%;">
                    <button class="btn btn-sm btn-success"><i class="fa fa-camera"></i></button>
                    <button class="btn btn-sm btn-success">Send</button>
                  </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="row" style="padding:1px;">
            <div class="chat-head">
                <div class="col-lg-12 col-sm-12">
                  <h5><b>Detail Information</b></h5>
                </div>                
            </div>
            <div class="container-fluid contact-body">
                <div class="row" style="padding:4%;">
                  <div class="row-fluid" style="background: #95a5a6; height: 12vh; width: auto;">
                    
                  </div>
                  <div class="row-fluid text-center" style="position: absolute; z-index: 1; margin: -10% 35%;">
                      <img class="img-circle" src="http://www.likecool.com/Gear/Pic/One%20Trippy%20Profile%20Pic/One-Trippy-Profile-Pic.jpg" style="height: 80px;" />
                  </div>
                  <div class="row-fluid text-center" style="padding:4%; border: 1px solid #bdc3c7;">
                      <h4 style="margin-top: 12%;">Mas Nganu</h4>
                      <p><i class="fa fa-map-marker" style="color: #e74c3c;"></i>  Jakarta, ID</p>
                      <button class="btn btn-success btn-sm"><i class="fa fa-plus"></i>  Follow</button>
                  </div>
                </div>
            </div>
        </div>        
    </div>
</div>	<script type="text/javascript">
		</script>
</body>
</html>

