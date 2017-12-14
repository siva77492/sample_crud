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
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    
    <div class="row" style="margin: 0px 0px 40px 0px !important;">
                <form method="post" action="{{url('/articles/insert/')}}">
          {{csrf_field()}}
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Adding airtel</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">body</label>
                                    <div class="col-sm-10">
                                        <input type="body"  name ="body" class="form-control" id="inputEmail3" placeholder="body">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Author</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="title">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">published Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="title">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Book Rate </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="title">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Book weight</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Printing By </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="title">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-10"></div>
                            <button type="submit" class="btn btn-info">Add</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>

</body>
</html>