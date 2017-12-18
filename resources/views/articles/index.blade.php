<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.5 Pagination Example</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="relative/path/to/your/javascript.js"></script>
</head>
<body>


<div class="container">

     <div class="pull-center">
                 <a class="btn btn-success" href="{{ url('/articles/create') }}"> Create New article</a>
            </div>
    <h2>Articles</h2>
    @if(session()->has('delete'))
   <center> <div class="alert alert-success">
        {{ session()->get('delete') }}
    </div></center>
@endif
 @if(session()->has('update'))
   <center> <div class="alert alert-success">
        {{ session()->get('update') }}
    </div></center>
@endif
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
            @foreach($articles as $values)
                <tr>
                    <td>{{ ++$i }} </td>
                    <td>{{ $values->title }}</td>
                    <td>{{ $values->body }}</td>
              <td> <a class="btn btn-info"  href="{{ url('articles/edit',$values->id) }}" > edit </a></td>
              <td> <a class="btn btn-danger"  href="{{ URL::to('articles/delete',$values->id) }}"  onclick="return confirmt('Are You want delete the articles')" > Delete </a> </td>
                             </tr>
            @endforeach
     </table>
  </div>
</body>
</html>

<script type="text/javascript" src="{{asset('/assets/plugin/jquery.validate.js')}}"></script>