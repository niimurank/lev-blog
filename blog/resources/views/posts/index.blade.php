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
        {{ $post->links() }}
    </div>
</body>
</html>
