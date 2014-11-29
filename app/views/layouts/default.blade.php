<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PriceSeeker | Find Anything Everywhere</title>
  

  {{ HTML::style('css/normalize.css'); }}
  {{ HTML::style('css/bootstrap.min.css'); }}
  {{ HTML::style('css/bootstrap-theme.min.css'); }}
  <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
  
  {{ HTML::style('css/main.css'); }}
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <header>
    <a id="logo" href="{{ URL::to('') }}">
      <h1>PriceSeeker</h1>
      <h2>Find Anything Everywhere</h2>
    </a>
  </header>


  <div class="container" id="wrapper"> 

    @yield('content')

  </div>

  <footer>
    <p>Copyright &copy; 2014 PriceSeeker Co., Ltd. All rights reserved.</p>
  </footer>

  {{ HTML::script('js/jquery-1.11.1.min.js'); }}
  {{ HTML::script('js/bootstrap.min.js'); }}
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  -->
</body>

</html>

