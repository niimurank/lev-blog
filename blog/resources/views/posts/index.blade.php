<!DOCTYPE html>
<html>
<head>
    <title>ブログの名前</title>
<head>
<body>
    <h2 class="title">ブログの名前</h2>
    <div>
        <div>
	    @foreach ($post as $post1)
            <h4 class="header1">{{$post1->title}}</h4>
	    <p class="art1">{{$post1->body}}</p>
            @endforeach
        </div>
        <div>
            <h4 class="header2">見出し2</h4>
            <p class="art2">内容</p>
        </div>
    </div>
</body>
</html>
