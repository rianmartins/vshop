<!--brands-->
  <div class="brands">
    <div class="container">
    <h3>Conheça nossas lojas!</h3>

        @foreach($lojas as $index => $loja)

          @if($index == 0)
            <div class="brands-agile">
          @endif

          <div class="col-md-2 w3layouts-brand">
            <div class="brands-w3l">
              <p><a href="#"><img style="height: 100%; width: 100%" src="{{$loja->logo_link}}"></img></a></p>
            </div>
          </div>

          @if($index == 5)
            {{$index = 0}}
                <div class="clearfix"></div>
              </div>
          @endif

        @endforeach

      <div class="clearfix"></div>
    </div>

    </div>
  </div>
<!--//brands-->
