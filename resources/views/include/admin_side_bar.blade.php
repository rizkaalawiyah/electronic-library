
<div class="col-sm-3 col-md-3">
    <div class="panel-group" id="accordion">
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

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a  href="{{url('/user/profile')}}"><span class="glyphicon glyphicon-user">
                            </span>  {{Auth::User()->name}}</a>
                    </h4>
                </div>
            </div>

        @endif


        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-th-list">
                            </span>  Content</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-list text-success"></span><a href="{{url('/book/categories')}}"> Show Categories</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-book text-info"></span><a href="{{url('/upload_book')}}"> Upload Books</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-book text-success"></span><a href="{{url('/index')}}"> Show Books</a>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


