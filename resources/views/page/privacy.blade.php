@extends('layouts.site')


@section('breadcrumbs')
<!--breadcrumbs start-->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-4">
          <h1>
            {{ $title }}
          </h1>
        </div>
        <div class="col-lg-8 col-sm-8">
          <ol class="breadcrumb pull-right">
            <li>
              <a href="#">
                Home
              </a>
            </li>
            <li>
              <a href="#">
                Pages
              </a>
            </li>
            <li class="active">
              Privacy
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
@endsection

<!--container start-->
@section('content')

	<!-- privacy -->
	<div class="container privacy-terms">
	    <div class="row">
	        <div class="col-md-12">
	            <h3>Introduction</h3>
	            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </p>
	            <p> &nbsp; </p>
	            <h3>Types of info we collect</h3>
	            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </p>
	            <p> &nbsp; </p>
	            <h3>Use of information</h3>
	            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </p>
	            <p> &nbsp; </p>
	            <h3>Children</h3>
	            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </p>
	            <p> &nbsp; </p>
	            <h3>Contact details</h3>
	            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	            </p>
	            <p> &nbsp; </p>
	        </div>
	    </div>

	</div>
	<!--container end-->
	    <script>
        wow = new WOW(
          {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
        )
        wow.init();
    </script>
@endsection
