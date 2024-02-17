<html>
  <head>
    <!-- <link rel="stylesheet" href="{{ asset('rafic/dist/css/adminlte.css') }}"> -->
    <style media="screen">
      div.success {
        margin: 0 0 1em 0;
        border: none;
      }
      div.success, div.notice, div.error, div.footnotes {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        margin: 8px 23px 0;
        border: 1px solid;
        background-repeat: no-repeat;
        background-position: 10px 50%;
        padding: 10px 10px 10px 10px;
      }
      .success {
        font-size: 18px;
        color: #FFFFFF;
        background-color: #20c997;
      }
    </style>
  </head>
  <body>
    <!-- Handles welcome message after user login -->
    @if (session()->has('message'))
    <div class="success">{!! session('message') !!}
    </div>
    @endif
    <!-- SweetAlert -->
    @if ($message = Session::get('success'))
    <div class="alert-none">
      <p style="border-top: .5px solid #000; border-color: #a2d246; padding-left: 12px; background: #ebf8a4; font-size: 17px; padding-bottom: 13px; padding-top: 9px; margin: 2px" id="successMessage">
        <img src="{{ asset('/admin/icons/status-check.png')}}" style="margin: 0; margin-left: .3em; padding: 0 !important; width: 15px; height: 15px;" class="icon ic_s_success">&nbsp;{{ucfirst($message)}}
      </p>
    </div>
    @endif
    @if($message = Session::get('danger'))
    <div class="mt-3 errorSession small">
      &nbsp;{{ucfirst($message)}}
    </div>
    @endif
    @if($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
      </button>
      &nbsp;{{ucfirst($message)}}
    </div>
    @endif
    <!-- end SweetAlert -->
  </body>
</html>
