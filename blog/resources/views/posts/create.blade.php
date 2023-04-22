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
        <h2 class="title text-center">ブログの名前</h2>
        <div class="container">
        <form>
        @csrf
            <fieldset>
                <label class="">タイトル</label>
                <input type=text class="form-control" name="title" id="title">
                <label class="">本文</label>
                <textarea class="form-control" name="body" id="body"></textarea>
                <div class="text-start">
                    <a href=" {{ url('/posts') }}">
                        <button type="button" class="btn btn-primary">投稿一覧へ戻る</button>
                    </a>
                </div>
                <div class="text-end">
                    <a href="">
                        <button type="submit" class="btn btn-success">登録</button>
                    </a>
                </div>
            </fieldset>
        </form>
        </div>
    </body>
</html>