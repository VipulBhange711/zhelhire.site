
<style>


/* CSS */
.button-92 {
  --c: #fff;
  /* text color */
  background: linear-gradient(to right, #ee9ca7, #ffdde1) var(--_p,100%)/300% no-repeat,
    #004dff;
  /* background color */
  color: #0000;
  border: none;
  transform: perspective(500px) rotateY(calc(20deg*var(--_i,-1)));
  text-shadow: calc(var(--_i,-1)* 0.08em) -.01em 0   var(--c),
    calc(var(--_i,-1)*-0.08em)  .01em 2px #0004;
  outline-offset: .1em;
  transition: 0.3s;
}

.button-92:hover,
.button-92:focus-visible {
  --_p: 0%;
  --_i: 1;
}

.button-92:active {
  text-shadow: none;
  color: var(--c);
  box-shadow: inset 0 0 9e9q #0005;
  transition: 0s;
}

.button-92 {
  font-weight: bold;
  font-size: 2rem;
  margin: 0;
  cursor: pointer;
  padding: .1em .3em;
}
</style>

<header class="header-area header-sticky">
    

<div class="container">

    <div class="row">

        <div class="col-12">

            <nav class="main-nav">

                <!-- ***** Logo Start ***** -->

                <a href="{{route('home')}}" class="logo">

                    <img src="assets/images/templatemo-eduwell.png" alt="Zhelhire Logo">



                </a>

                <!-- ***** Logo End ***** -->

                <!-- ***** Menu Start ***** -->

                <ul class="nav">

                    <li ><a href="{{ route('home') }}" class="active">Home</a></li>

                    <li ><a href="{{ route('services') }}">Services</a></li>

                    <li ><a href="{{ route('viewCourses') }}">Courses</a></li>

                    <li class="has-sub">

                        <a href="javascript:void(0)">Pages</a>

                        <ul class="sub-menu">

                            <li><a href="{{ route('home') }}">Home</a></li>

                            <li><a href="{{ route('about') }}">About Us</a></li>

                            <li><a href="{{ route('services') }}">Our Services</a></li>

                            <li><a href="{{ route('contact') }}">Contact Us</a></li>

                        </ul>

                    </li>

                    <!-- <li ><a href="{{ route('home') }}#testimonials">Testimonials</a> -->

                    </li>

                    <li ><a href="{{ route('home') }}#contact-section">Contact Us</a>

                    
                    <li class=""><a  href="{{ route('login') }}">Login</a>

                    </li>



                    </li>



                </ul>



                <a class='menu-trigger'>

                    <span>Menu</span>

                </a>

                <!-- ***** Menu End ***** -->

            </nav>

        </div>

    </div>

</div>

</header>