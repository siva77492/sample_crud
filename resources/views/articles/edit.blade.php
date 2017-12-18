<!DOCTYPE html>
<html>
<head>
    <title>new</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

   <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                   
            </div>
            <div class="pull-right">
               <a class="btn btn-success" href="{{ url('/') }}">Back To Home</a>
            </div>
        </div>
    </div>
@if(session()->has('update'))
    <div class="alert alert-success">
        {{ session()->get('update') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <div class="row" style="margin: 0px 0px 40px 0px !important;">
                <form method="post" action="{{url('articles/update')}}">
          {{csrf_field()}}
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Adding airtel</h3>
                            </div>
                            <input type="hidden" name="id" value="{{$id}}">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">title</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $article->title }}" name="title" class="form-control" id="inputEmail3" placeholder="title"   data-validation="length alphanumeric" data-validation-length="min10" 
                                        data-validation-error-msg="pls enter min length 10 characters">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">body</label>
                                    <div class="col-sm-10">
                                        <input type="body" value="{{ $article->body }}" name ="body" class="form-control" id="inputEmail3" placeholder="body"
                                        data-validation="length alphanumeric" data-validation-length="min25"
                                        data-validation-error-msg="pls enter min length 25 characters"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body --> 
                        <div class="box-footer">
                            <div class="col-sm-10"></div>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>

</body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'en'
  });
</script>
