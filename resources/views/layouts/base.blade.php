<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
	
	@section('styles')
	    <link href="{{ asset('/css/modern-business.css ')}}" rel="stylesheet">
	@show

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" id="picture">
      <div class="container">
        <a class="navbar-brand" href="{{asset('/')}}">Start Bootstrap</a>		
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" data-name='About' data-body='text1' data-color='#4b78bb' href="{{asset('/about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-name='Services' data-body='text2' data-color='#9786bd' href="{{asset('/services')}}">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-name='Contact' data-body='text3' data-color='#296635' href="{{asset('/contact')}}">Contact</a>			  
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-name='Товары' data-body='text4' data-color='#2a456e' href="{{asset('categories')}}">
                Товары
              </a>             
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-name='Blog' data-body='text5' data-color='#7c2d1b' href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="{{asset('/blog-home-1')}}">Blog Home 1</a>
                <a class="dropdown-item" href="{{asset('/blog-home-2')}}">Blog Home 2</a>
                <a class="dropdown-item" href="{{asset('/blog-post')}}">Blog Post</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-name='Other Pages' data-body='text6' data-color='#d44f68' href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other Pages
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="{{asset('/full-width')}}">Full Width Page</a>
                <a class="dropdown-item" href="{{asset('/sidebar')}}">Sidebar Page</a>
                <a class="dropdown-item" href="{{asset('/faq')}}">FAQ</a>
                <a class="dropdown-item" href="{{asset('/404')}}">404</a>
                <a class="dropdown-item" href="{{asset('/pricing')}}">Pricing Table</a>
              </div>
            </li>
          </ul>
		  <ul class="navbar-nav ml-auto">
		                    <li class="nav-item">
                                <a class="nav-link" href="{{ asset('basket/all') }}">Корзина</a>
                            </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
        </div>
      </div>
    </nav>
	
    <!-- блок после меню -->
	<div class="formenu"> 
		<div id='name'></div>
	    <div id='body'></div>
	</div>
      @yield("content")

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
@section('scripts')
<script src="{{asset('js/main.js')}}"></script>
@show
  </body>

</html>
