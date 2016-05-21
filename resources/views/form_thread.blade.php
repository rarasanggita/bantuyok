<!-- app/views/duck-form.blade.php -->
<!doctype html>
<html>
<head>
    <title>THREAD</title>

    <!-- load bootstrap -->
    @section('referensi')
        @include('layout.css')
    @show
    <style>
        body    { padding-bottom:40px; padding-top:40px; }
    </style>
</head>
<body class="container">

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">

        <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span>REGISTER YOURSELF</h1>
        </div>

        @if ($errors->has())
            <div class="alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
    @endif

    <!-- FORM STARTS HERE -->
        <form method="POST" action="for,_thread" novalidate>
            <div class="form-group @if ($errors->has('email')) has-error @endif">
                <label for="title">Judul</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="What's the title?">
            <!-- @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif     -->
            </div>

            <div class="form-group @if ($errors->has('email')) has-error @endif">
                <label for="school_name">Nama Sekolah</label>
                <input type="text" id="school_name" class="form-control" name="school_name" placeholder="What's your username?">
            <!-- @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif     -->
            </div>

            <div class="form-group @if ($errors->has('email')) has-error @endif">
                <label for="phone">Telepon</label>
                <input type="text" id="phone" class="form-control" name="phone" placeholder="+6281703123456">
            <!-- @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif    -->
            </div>

            <div class="form-group @if ($errors->has('email')) has-error @endif">
                <label for="content">Keterangan</label>
                <input type="text" id="content" class="form-control" name="content" placeholder="keterangan">
            <!-- @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif    -->
            </div>

            <div class="form-group @if ($errors->has('email')) has-error @endif">
                <label for="date">Tanggal</label>
                <input type="date" id="date" class="form-control" name="date">
            <!-- @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif -->
            </div>

            <div class="form-group @if ($errors->has('email')) has-error @endif">
                <label for="date">Password</label>
                <input type="date" id="date" class="form-control" name="date">
            <!-- @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif -->
            </div>


            <button type="submit" class="btn btn-success">Sign!</button>

        </form>

    </div>
</div>

</body>
</html>