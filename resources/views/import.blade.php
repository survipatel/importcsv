
</form>
<!DOCTYPE html>
<html>
<head>
    <title>import excel file</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>


<p>{{ session('status') }}</p>
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            UI Design
        </div>
        <div class="card-body">

<form method="POST" action="{{ url("import") }}" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
    <label for="file" class="control-label"> Excel File: </label>

    <input id="file" type="file" class="form-control" name="file" required>

    @if ($errors->has('file'))
        <span class="help-block">
        <strong>{{ $errors->first('file') }}</strong>
        </span>
    @endif

</div>

<p><button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-check"></i> Submit</button></p>

</form>
        </div>
    </div>
</div>
   
</body>
</html>