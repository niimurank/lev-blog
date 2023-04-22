<!DOCTYPE html>
<html>
    <head>
        <title>ブログの名前</title>
        <link rel="stylesheet" href="/index.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <h2 class="text-center">ブログの名前</h2>
        <div class="container">
            <div class="card m-5">
                <h4 class="card-header text-center">{{$post->title}}</h4>
                <p class="card-body">{{$post->body}}</p>
            </div>
            <div class="text-start">
                <a href=" {{ url('/posts') }}">
                    <button type="button" class="btn btn-primary justify-right" >投稿一覧へ戻る</button>
                </a>
            </div>
        </div>
    </body>