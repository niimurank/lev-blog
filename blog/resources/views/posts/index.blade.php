<!DOCTYPE html>
<html>
<head>
    <title>ブログの名前</title>
    <link rel="stylesheet" href="/index.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<head>
<body>
    <h2 class="text-center">ブログの名前</h2>
    <div class="container">
    @foreach ($posts as $post)
	    <div class="card m-5">
	    	<h4 class="text-center card-header">{{$post->title}}</h4>
	    	<div class="card-body">
	            <p class="card-text">{{$post->body}}</p4>
	                <div class="text-end">
	                    <a href="/posts/{{ $post->id}}" class="btn btn-primary">
	                        <button type="button" class="btn btn-primary">詳細</button>
	                    </a>
	                </div>
	        </div>
	    </div>
	    @endforeach
	    
	    <div class="paginate">
	    	{{ $posts->links() }}
	    </div>
    </div>
</body>
</html>
