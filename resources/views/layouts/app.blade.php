<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>

    
 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
  

    <!-- Styles-->
  
   

 
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/bootstrap-responsve.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/matrix-style.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/matrix-media.css') }}"/>
<link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/jquery.gritter.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    <div id="app">
      

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">Matrix Admin</a></h1>
  </div>
  <!--close-Header-part--> 
  


  
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="divider"></li>
               <li><a href="#"><i class="icon-user"></i> Profile</a></li>
               <li class="divider"></li>
            <li> <a href="#" > <i class="icon icon-envelope"></i> 
                   <span class="text">Messages</span>
                    <span class="label label-important">5</span>
                    </a>
                </li> 
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
         </ul>

      </li>
     
      </ul>
  </div>
  <!--close-top-Header-menu-->



  <!--start-top-serch
<div id="search">

    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
  </div>
  -->
  <!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="javascript:ajaxLoad('{{ route('home')}}')" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li  ><a href="javascript:ajaxLoad('{{ route('home') }}')"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
     
      <li ><a href="javascript:ajaxLoad('{{ route('user.index') }}')"><i class="icon icon-user"></i> <span>Users</span></a></li>
      <li ><a href="javascript:ajaxLoad('{{ route('pharmacie.index') }}')"><i class="icon icon-group"></i> <span>Nos Clients Pharmacie</span></a></li>

     
      
      
     
    </ul>
  </div>
  <!--sidebar-menu-->



  <!--main-container-part-->
    <!--breadcrumbs-->
     
   
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> 
            <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
      </div>
    
        @yield('content')
        
      
      <div class="loading"></div>
       
</div>
<!--end-main-container-part-->




        <!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
  </div>
  
  <!--end-Footer-part-->
    </div>
  


    <script src="{{ asset('js/excanvas.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.ui.custom.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.flot.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.peity.min.js') }}" ></script> 
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script> 
    <script src="{{ asset('js/matrix.js') }}"></script> 
    <script src="{{ asset('js/matrix.dashboard.js') }}"></script> 
    <script src="{{ asset('js/jquery.gritter.min.js') }}"></script> 
    <script src="{{ asset('js/matrix.interface.js') }}"></script> 
    <script src="{{ asset('js/matrix.chat.js') }}"></script> 
    <script src="{{ asset('js/jquery.validate.js') }}"></script> 
    <script src="{{ asset('js/matrix.form_validation.js') }}"></script> 
    <script src="{{ asset('js/jquery.wizard.js') }}"></script> 
    <script src="{{ asset('js/jquery.uniform.js') }}"></script> 
    <script src="{{ asset('js/select2.min.js') }}"></script> 
    <script src="{{ asset('js/matrix.popover.js') }}"></script> 
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script> 
    <script src="{{ asset('js/matrix.tables.js') }}"></script> 
    
    <script type="text/javascript">
      // This function is called from the pop-up menus to transfer to
      // a different page. Ignore if the value returned is a null string:
      function goPage (newURL) {
    
          // if url is empty, skip the menu dividers and reset the menu selection to default
          if (newURL != "") {
          
              // if url is "-", it is this page -- reset the menu:
              if (newURL == "-" ) {
                  resetMenu();            
              } 
              // else, send page to designated URL            
              else {  
                document.location.href = newURL;
              }
          }
      }
    
    // resets the menu selection upon entry to this page:
    function resetMenu() {
       document.gomenu.selector.selectedIndex = 2;
    }
    </script>
    <script>
        function ajaxLoad(filename, content) {
            content = typeof content !== 'undefined' ? content : 'chnage-data';
            $('.loading').show();
            $.ajax({
                type: "GET",
                url: filename,
                contentType: false,
                success: function (data) {
                    $("#" + content).html(data);
                    $('.loading').hide();
                },
                error: function (xhr, status, error) {
                    alert(xhr.responseText);
                }
            });
        }



   
    </script>

    </body>
</html>
