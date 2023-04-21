<!DOCTYPE html>
<html>
    <head>
        <title>ブログの名前</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <h2 class="title">ブログの名前</h2>
        <div class="container">
            <div class="">
                <h4 class="header">{{$post->title}}</h4>
                <p class="art">{{$post->body}}</p>
                <a href=" {{ url('/posts') }}">
                    <button type="button">投稿一覧へ戻る</button>
                </a>
            </div>
        </div>
    </body>
</html>