<!DOCTYPE html>
<html>
<head>
    <title>sample application</title>
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
             <th>images</th>
             <th>writer</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
            @foreach($articles as $values)
                <tr>
                    <td>{{ ++$i }} </td>
                    <td>{{ $values->title }}</td>
                    <td>{{ $values->body }}</td>

        <td><img src="{{ asset('/asset/upload/'. $values->or_image)  }}" style="width: 50px; height: 50px;" /></td>
                      <td>{{ $values->writer }}</td>

              <td> <a class="btn btn-info"  href="{{ url('articles/edit',$values->id) }}" > edit </a></td>
              <td> <a class="btn btn-danger"  href="{{ URL::to('articles/delete',$values->id) }}"  onclick="return confirmt('Are You want delete the articles')" > Delete </a> </td>
                             </tr>
            @endforeach
     </table>
  </div>
</body>
</html>

