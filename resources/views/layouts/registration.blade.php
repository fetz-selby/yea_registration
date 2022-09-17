<!DOCTYPE html>

<html lang="en">

@include('includes.head')

<body>
    
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        @yield('includes.sidebar')
        
        @yield('includes.navbar')
        
        @yield('content')

       

        <div class="footer">
            <div class="copyright">
                2006 - {{ date("Y") }} - © <a href="https://yea.gov.gh">Youth Employment Agency</a>
            </div>
        </div>

    </div>
    
@include('includes.scripts')

</body>

</html>