<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            form {
                width: 400px;     
            }

        </style>
    </head>
    <body>
        <div class="container">

            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="{{ route('main') }}" class="nav-link">Загрузка файла</a></li>
                    <li class="nav-item"><a href="{{ route('table') }}" class="nav-link">Загруженные данные</a></li>
                    <li class="nav-item"><a href="{{ route('delete') }}" class="nav-link">Удалить данные</a></li>
                </ul>
            </header>
            @if (\Session::has('success'))
            <div class="alert alert-primary" role="alert">
                {!! \Session::get('success') !!}
            </div>
            @endif
            <div class="text-center">
                
                <form action="{{ url('save_file') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Выберите CSV файл</label>
                        <input class="form-control" type="file" id="formFile" name="inputFile">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
                    </div>
                </form>
            
            </div>
        </div>
    </body>
</html>
