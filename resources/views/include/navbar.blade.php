<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('css/index.css')}}">
    <title>e-library</title>
    <style type="text/css">
     

    </style>
        <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  </head>
  <body >

   <div class="navbar fixed-top" data-reactid="9">
  <div class="_0 _3j _2n _11 _3x _5f" data-reactid="10">
    <div class="Nags" data-reactid="11">
    </div>
    <div class="_0 _3j _2n _2 _i" data-reactid="21">
      <div class="_0 _3j _2n _11 _3x _2 _3f _6p _7w _h" data-reactid="22">
        <div class="_0 _3j _2n _11 _3x _2 _2w _h" style="height:56px;" data-reactid="23">
          <div class="_0 _3j _2n" data-reactid="24">
            <div data-reactid="25">
              <div class="_0 _3j _2n _2f" data-reactid="26">
                <div aria-label="Home" class="_0 _3j _2n" data-reactid="27">
                  <a class="dangerouslyDisableFocusStyle" href="{{url('/index')}}" rel="" data-reactid="28">
                    <div class="_0 _3j _2n _54" style="background-color:transparent;height:48px;width:48px;" data-reactid="29">
                      <div class="_0 _3j _2n _2 _2w _36 _6p _6q _i" style="height:48px;width:48px;" data-reactid="30"><svg class="_rt _5c _ru _25" height="28" width="28" viewBox="0 0 24 24" aria-hidden="true" aria-label="" role="img" data-reactid="31"><title data-reactid="32"></title><img src="{{url('img/logo.png')}}"></svg></div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="_0 _3j _2n _3f _7w" data-reactid="34">
            <div class="SearchFormInReact" data-reactid="35">
              <div role="search" class="_0 _3j _2n _11 _3x _5h" style="border-radius:4px;" data-reactid="36">
                <div class="_0 _3j _2n _2" data-reactid="37">
                  <div class="_0 _3j _2n _2 _2f _3f" data-reactid="38">
                    <div class="_0 _3j _2n _2 _2f _2w _3f" style="height:40px;" data-reactid="39">
                      <div class="_0 _3j _2n _2 _2h _2j _2m _2w _7w search" style="height:100%;" data-reactid="40"><svg class="_rt _5i _ru _25" height="20" width="20" viewBox="0 0 24 24" aria-hidden="true" aria-label="" role="img" data-reactid="41"><title data-reactid="42"></title><path d="M10.00,16.00 C6.69,16.00 4.00,13.31 4.00,10.00 C4.00,6.69 6.69,4.00 10.00,4.00 C13.31,4.00 16.00,6.69 16.00,10.00 C16.00,13.31 13.31,16.00 10.00,16.00 M23.12,18.88 L18.86,14.62 C19.59,13.24 20.00,11.67 20.00,10.00 C20.00,4.48 15.52,0.00 10.00,0.00 C4.48,0.00 0.00,4.48 0.00,10.00 C0.00,15.52 4.48,20.00 10.00,20.00 C11.67,20.00 13.24,19.59 14.62,18.86 L18.88,23.12 C20.05,24.29 21.95,24.29 23.12,23.12 C24.29,21.95 24.29,20.05 23.12,18.88" data-reactid="43"></path></svg></div>
                      <div
                        class="_0 _3j _2n" style="width:100%;height:100%;" data-reactid="44"><input type="text" autocomplete="off" aria-autocomplete="false" aria-describedby="searchBoxAccessibleText" class="SearchBoxInput" data-test-id="SearchBoxInput" name="q" placeholder="Search" value="" data-reactid="45"></div>
                    <!-- react-text: 47 -->
                    <!-- /react-text -->
                  </div>
                  <div class="_0 _3j _2n _2h _2m" style="width: 100%; top: calc(100% + 4px);">
                    <!-- react-empty: 1099 -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



  


      

          <dropdown>
            <input id="toggle2" type="checkbox">
            <label for="toggle2" class="animate"><img src
              ="{{route('pic',['pic'=>Auth::user()->pic])}}" width="40" height="30" class="rounded-circle img-thumbnail"><i class="fa fa-angle-down ml-2"></i></label>
            <ul class="animate">
              <li class="animate" ><a href="{{url('user/profile')}}"  style="color: white">Hi!     
        @if(!Auth::User())
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Users</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="{{route('register')}}">Register</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="{{route('login')}}">Login</a>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

            @else
                {{Auth::User()->name}}

        @endif
      </a></li>
              <li class="animate"><a href="{{url('user/setting')}} "  style="color: white">Account Setting</a></li>
              <li class="animate">
                        <form action="{{url('logout')}}" method="POST">               
                          {{ csrf_field() }}              
                          <button style="color: white; background-color: #ff4000; border-color: #ff4000;">Sign Out</button>             
                        </form>   
                                    
              </li>
            </ul>
          </dropdown>


                  <div class="_0 _3j _2n _2f" data-reactid="57">
          <div class="_0 _3j _2n _2f _6q" data-reactid="58">
          </div>
        </div>

    </div>
  </div>
  <div class="_0 _3j _2n" data-reactid="103"></div>
  <hr class="_vp _25 _4z _p3" data-reactid="104">
</div>
</div>
</div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>