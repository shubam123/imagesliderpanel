@extends('layouts.app')

@section('content')
<style type="text/css">
.add_btn{
    margin-left: 20px;
}
table{
    margin-left: auto;
    margin-right: auto;
}
th,td{
    text-align: center;
}
td{
    padding: 20px;
}

    
</style>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div>
                <a href="/uploadfile">
                    <button type="button" class="btn btn btn-success add_btn" aria-label="Left Align">
                      <span class="glyphicon glyphicon-plus glyphicon-align-left" aria-hidden="true"></span>
                      Add image
                    </button>
                </a>
                </div>

                <br /><br />

                <div id="image_cont">
                <table border="2px">
                    <thead>
                        <tr >
                            <th>S. no.</th>
                            <th>Image</th>
                            <th>Url</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($imgs as $img)
                    <!-- single item-->
                        <tr>
                            <td>
                                {{ $img->id }}
                            </td>
                            <td>
                                <img src="uploads/{{ $img->name}}" alt="profile Pic" height="200" width="200">
                            </td>
                            <td>
                                {{ $img->url }}
                            </td>
                            <td>
                                <a href="delImg/{{ $img->id}}"><button>Delete</button></a>
                            </td>
                            <td>
                                <a href="editImg/{{ $img->id}}"><button>Edit</button></a>
                            </td>
                        </tr>
                    <!-- single item ends-->
                    @endforeach

                    </tbody>


                </table>
                <br /><br />

                </div>
                

            </div>
        </div>
    </div>
</div>
@endsection
