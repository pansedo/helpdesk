
@include('Includes.header')
@include('Includes.menu')

<!--  PAPER WRAP -->
  <div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">
      @yield('content')

      @include('Includes.footer')

      @yield('footerTambahan')
    </div>
  </div>
  <!--  END OF PAPER WRAP -->
</body>
</html>
