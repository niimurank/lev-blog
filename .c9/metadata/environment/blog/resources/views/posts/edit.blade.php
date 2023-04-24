{"filter":false,"title":"edit.blade.php","tooltip":"/blog/resources/views/posts/edit.blade.php","undoManager":{"mark":42,"position":42,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":11},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        <title>ブログの名前</title>","        <link rel=\"stylesheet\" href=\"/index.css\">","        <!-- CSS only -->","        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">","        <!-- JavaScript Bundle with Popper -->","        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>","    </head>","    <body>","        <h2 class=\"text-center\">ブログの名前</h2>","        <div class=\"container\">","            <div class=\"card m-5\">","                <h4 class=\"card-header text-center\">{{$post->title}}</h4>","                <p class=\"card-body\">{{$post->body}}</p>","            </div>","            <div class=\"text-start\">","                <a href=\" {{ url('/posts') }}\">","                    <button type=\"button\" class=\"btn btn-primary justify-right\" >投稿一覧へ戻る</button>","                </a>","            </div>","        </div>","    </body>"],"id":1}],[{"start":{"row":12,"column":8},"end":{"row":22,"column":14},"action":"remove","lines":["<div class=\"container\">","            <div class=\"card m-5\">","                <h4 class=\"card-header text-center\">{{$post->title}}</h4>","                <p class=\"card-body\">{{$post->body}}</p>","            </div>","            <div class=\"text-start\">","                <a href=\" {{ url('/posts') }}\">","                    <button type=\"button\" class=\"btn btn-primary justify-right\" >投稿一覧へ戻る</button>","                </a>","            </div>","        </div>"],"id":2},{"start":{"row":12,"column":8},"end":{"row":38,"column":14},"action":"insert","lines":["        <div class=\"container\">","        <form method=\"POST\" action=\"/posts\">","            @csrf","            <fieldset>","                <label class=\"\">タイトル</label>","                <input type=text class=\"form-control\" name=\"post[title]\" id=\"title\" value=\"{{old('post.title')}}\">","                <p class=\"text-danger fw-bold\">","                    {{ $errors->first('post.title') }}","                </p>","                <label class=\"\">本文</label>","                <textarea class=\"form-control\" name=\"post[body]\" id=\"body\">{{ old('post.body') }}</textarea>","                <p class=\"text-danger fw-bold\">","                    {{ $errors->first('post.body') }}","                </p>","                <div class=\"text-start\">","                    <a href=\"{{ route('posts.index') }}\">","                        <button type=\"button\" class=\"btn btn-primary\">投稿一覧へ戻る</button>","                    </a>","                </div>","                <div class=\"text-end\">","                    <a>","                        <button type=\"submit\" class=\"btn btn-success\">登録</button>","                    </a>","                </div>","            </fieldset>","        </form>","        </div>"]}],[{"start":{"row":12,"column":12},"end":{"row":12,"column":16},"action":"remove","lines":["    "],"id":3},{"start":{"row":12,"column":8},"end":{"row":12,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":17,"column":107},"end":{"row":17,"column":108},"action":"remove","lines":["e"],"id":4},{"start":{"row":17,"column":106},"end":{"row":17,"column":107},"action":"remove","lines":["l"]},{"start":{"row":17,"column":105},"end":{"row":17,"column":106},"action":"remove","lines":["t"]},{"start":{"row":17,"column":104},"end":{"row":17,"column":105},"action":"remove","lines":["i"]},{"start":{"row":17,"column":103},"end":{"row":17,"column":104},"action":"remove","lines":["t"]},{"start":{"row":17,"column":102},"end":{"row":17,"column":103},"action":"remove","lines":["."]},{"start":{"row":17,"column":101},"end":{"row":17,"column":102},"action":"remove","lines":["t"]},{"start":{"row":17,"column":100},"end":{"row":17,"column":101},"action":"remove","lines":["s"]},{"start":{"row":17,"column":99},"end":{"row":17,"column":100},"action":"remove","lines":["o"]},{"start":{"row":17,"column":98},"end":{"row":17,"column":99},"action":"remove","lines":["p"]}],[{"start":{"row":17,"column":98},"end":{"row":17,"column":99},"action":"insert","lines":["p"],"id":5},{"start":{"row":17,"column":99},"end":{"row":17,"column":100},"action":"insert","lines":["o"]},{"start":{"row":17,"column":100},"end":{"row":17,"column":101},"action":"insert","lines":["s"]},{"start":{"row":17,"column":101},"end":{"row":17,"column":102},"action":"insert","lines":["t"]},{"start":{"row":17,"column":102},"end":{"row":17,"column":103},"action":"insert","lines":["-"]}],[{"start":{"row":17,"column":102},"end":{"row":17,"column":103},"action":"remove","lines":["-"],"id":6},{"start":{"row":17,"column":101},"end":{"row":17,"column":102},"action":"remove","lines":["t"]}],[{"start":{"row":17,"column":102},"end":{"row":17,"column":103},"action":"remove","lines":[")"],"id":7},{"start":{"row":17,"column":101},"end":{"row":17,"column":102},"action":"remove","lines":["'"]},{"start":{"row":17,"column":100},"end":{"row":17,"column":101},"action":"remove","lines":["s"]},{"start":{"row":17,"column":99},"end":{"row":17,"column":100},"action":"remove","lines":["o"]},{"start":{"row":17,"column":98},"end":{"row":17,"column":99},"action":"remove","lines":["p"]},{"start":{"row":17,"column":97},"end":{"row":17,"column":98},"action":"remove","lines":["'"]},{"start":{"row":17,"column":96},"end":{"row":17,"column":97},"action":"remove","lines":["("]},{"start":{"row":17,"column":95},"end":{"row":17,"column":96},"action":"remove","lines":["d"]},{"start":{"row":17,"column":94},"end":{"row":17,"column":95},"action":"remove","lines":["l"]},{"start":{"row":17,"column":93},"end":{"row":17,"column":94},"action":"remove","lines":["o"]}],[{"start":{"row":17,"column":93},"end":{"row":17,"column":94},"action":"insert","lines":[" "],"id":8},{"start":{"row":17,"column":94},"end":{"row":17,"column":95},"action":"insert","lines":["p"]},{"start":{"row":17,"column":95},"end":{"row":17,"column":96},"action":"insert","lines":["o"]},{"start":{"row":17,"column":96},"end":{"row":17,"column":97},"action":"insert","lines":["s"]},{"start":{"row":17,"column":97},"end":{"row":17,"column":98},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":97},"end":{"row":17,"column":98},"action":"remove","lines":["t"],"id":9},{"start":{"row":17,"column":96},"end":{"row":17,"column":97},"action":"remove","lines":["s"]},{"start":{"row":17,"column":95},"end":{"row":17,"column":96},"action":"remove","lines":["o"]},{"start":{"row":17,"column":94},"end":{"row":17,"column":95},"action":"remove","lines":["p"]}],[{"start":{"row":17,"column":94},"end":{"row":17,"column":95},"action":"insert","lines":["$"],"id":10},{"start":{"row":17,"column":95},"end":{"row":17,"column":96},"action":"insert","lines":["p"]},{"start":{"row":17,"column":96},"end":{"row":17,"column":97},"action":"insert","lines":["o"]},{"start":{"row":17,"column":97},"end":{"row":17,"column":98},"action":"insert","lines":["s"]},{"start":{"row":17,"column":98},"end":{"row":17,"column":99},"action":"insert","lines":["t"]},{"start":{"row":17,"column":99},"end":{"row":17,"column":100},"action":"insert","lines":["-"]},{"start":{"row":17,"column":100},"end":{"row":17,"column":101},"action":"insert","lines":[">"]}],[{"start":{"row":17,"column":101},"end":{"row":17,"column":102},"action":"insert","lines":["t"],"id":11},{"start":{"row":17,"column":102},"end":{"row":17,"column":103},"action":"insert","lines":["i"]},{"start":{"row":17,"column":103},"end":{"row":17,"column":104},"action":"insert","lines":["t"]},{"start":{"row":17,"column":104},"end":{"row":17,"column":105},"action":"insert","lines":["l"]},{"start":{"row":17,"column":105},"end":{"row":17,"column":106},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":106},"end":{"row":17,"column":107},"action":"insert","lines":[" "],"id":12}],[{"start":{"row":22,"column":93},"end":{"row":22,"column":94},"action":"remove","lines":[")"],"id":13},{"start":{"row":22,"column":92},"end":{"row":22,"column":93},"action":"remove","lines":["'"]},{"start":{"row":22,"column":91},"end":{"row":22,"column":92},"action":"remove","lines":["y"]},{"start":{"row":22,"column":90},"end":{"row":22,"column":91},"action":"remove","lines":["d"]},{"start":{"row":22,"column":89},"end":{"row":22,"column":90},"action":"remove","lines":["o"]},{"start":{"row":22,"column":88},"end":{"row":22,"column":89},"action":"remove","lines":["b"]},{"start":{"row":22,"column":87},"end":{"row":22,"column":88},"action":"remove","lines":["."]},{"start":{"row":22,"column":86},"end":{"row":22,"column":87},"action":"remove","lines":["t"]},{"start":{"row":22,"column":85},"end":{"row":22,"column":86},"action":"remove","lines":["s"]},{"start":{"row":22,"column":84},"end":{"row":22,"column":85},"action":"remove","lines":["o"]},{"start":{"row":22,"column":83},"end":{"row":22,"column":84},"action":"remove","lines":["p"]},{"start":{"row":22,"column":82},"end":{"row":22,"column":83},"action":"remove","lines":["'"]},{"start":{"row":22,"column":81},"end":{"row":22,"column":82},"action":"remove","lines":["("]},{"start":{"row":22,"column":80},"end":{"row":22,"column":81},"action":"remove","lines":["d"]},{"start":{"row":22,"column":79},"end":{"row":22,"column":80},"action":"remove","lines":["l"]},{"start":{"row":22,"column":78},"end":{"row":22,"column":79},"action":"remove","lines":["o"]}],[{"start":{"row":22,"column":78},"end":{"row":22,"column":79},"action":"insert","lines":["$"],"id":14},{"start":{"row":22,"column":79},"end":{"row":22,"column":80},"action":"insert","lines":["p"]},{"start":{"row":22,"column":80},"end":{"row":22,"column":81},"action":"insert","lines":["o"]},{"start":{"row":22,"column":81},"end":{"row":22,"column":82},"action":"insert","lines":["s"]},{"start":{"row":22,"column":82},"end":{"row":22,"column":83},"action":"insert","lines":["t"]},{"start":{"row":22,"column":83},"end":{"row":22,"column":84},"action":"insert","lines":["-"]},{"start":{"row":22,"column":84},"end":{"row":22,"column":85},"action":"insert","lines":["<"]}],[{"start":{"row":22,"column":84},"end":{"row":22,"column":85},"action":"remove","lines":["<"],"id":15}],[{"start":{"row":22,"column":84},"end":{"row":22,"column":85},"action":"insert","lines":[">"],"id":16},{"start":{"row":22,"column":85},"end":{"row":22,"column":86},"action":"insert","lines":["b"]},{"start":{"row":22,"column":86},"end":{"row":22,"column":87},"action":"insert","lines":["o"]},{"start":{"row":22,"column":87},"end":{"row":22,"column":88},"action":"insert","lines":["d"]},{"start":{"row":22,"column":88},"end":{"row":22,"column":89},"action":"insert","lines":["y"]}],[{"start":{"row":25,"column":20},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":26,"column":0},"end":{"row":26,"column":16},"action":"insert","lines":["                "]},{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":["<"]},{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["d"]},{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"insert","lines":["i"]},{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"insert","lines":["v"]}],[{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"insert","lines":[" "],"id":18},{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":["-"]}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"remove","lines":["-"],"id":19}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":["c"],"id":20},{"start":{"row":26,"column":22},"end":{"row":26,"column":23},"action":"insert","lines":["l"]},{"start":{"row":26,"column":23},"end":{"row":26,"column":24},"action":"insert","lines":["a"]},{"start":{"row":26,"column":24},"end":{"row":26,"column":25},"action":"insert","lines":["s"]},{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"insert","lines":["s"]},{"start":{"row":26,"column":26},"end":{"row":26,"column":27},"action":"insert","lines":["="]}],[{"start":{"row":26,"column":27},"end":{"row":26,"column":29},"action":"insert","lines":["\"\""],"id":21}],[{"start":{"row":26,"column":28},"end":{"row":26,"column":29},"action":"insert","lines":["c"],"id":22},{"start":{"row":26,"column":29},"end":{"row":26,"column":30},"action":"insert","lines":["o"]},{"start":{"row":26,"column":30},"end":{"row":26,"column":31},"action":"insert","lines":["l"]}],[{"start":{"row":26,"column":30},"end":{"row":26,"column":31},"action":"remove","lines":["l"],"id":23},{"start":{"row":26,"column":29},"end":{"row":26,"column":30},"action":"remove","lines":["o"]},{"start":{"row":26,"column":28},"end":{"row":26,"column":29},"action":"remove","lines":["c"]}],[{"start":{"row":26,"column":28},"end":{"row":26,"column":29},"action":"insert","lines":["r"],"id":24},{"start":{"row":26,"column":29},"end":{"row":26,"column":30},"action":"insert","lines":["o"]},{"start":{"row":26,"column":30},"end":{"row":26,"column":31},"action":"insert","lines":["w"]}],[{"start":{"row":26,"column":32},"end":{"row":26,"column":39},"action":"insert","lines":["></div>"],"id":25}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"remove","lines":["<"],"id":26},{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"remove","lines":["/"]},{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"remove","lines":["d"]},{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"remove","lines":["i"]},{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"remove","lines":["v"]}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"remove","lines":[">"],"id":27}],[{"start":{"row":36,"column":22},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":28},{"start":{"row":37,"column":0},"end":{"row":37,"column":16},"action":"insert","lines":["                "]},{"start":{"row":37,"column":16},"end":{"row":37,"column":17},"action":"insert","lines":["<"]},{"start":{"row":37,"column":17},"end":{"row":37,"column":18},"action":"insert","lines":["/"]},{"start":{"row":37,"column":18},"end":{"row":37,"column":19},"action":"insert","lines":["d"]},{"start":{"row":37,"column":19},"end":{"row":37,"column":20},"action":"insert","lines":["i"]},{"start":{"row":37,"column":20},"end":{"row":37,"column":21},"action":"insert","lines":["v"]}],[{"start":{"row":37,"column":21},"end":{"row":37,"column":22},"action":"insert","lines":[">"],"id":29}],[{"start":{"row":36,"column":16},"end":{"row":36,"column":17},"action":"insert","lines":[" "],"id":30},{"start":{"row":36,"column":17},"end":{"row":36,"column":18},"action":"insert","lines":[" "]},{"start":{"row":36,"column":18},"end":{"row":36,"column":19},"action":"insert","lines":[" "]},{"start":{"row":36,"column":19},"end":{"row":36,"column":20},"action":"insert","lines":[" "]}],[{"start":{"row":35,"column":20},"end":{"row":35,"column":21},"action":"insert","lines":[" "],"id":31},{"start":{"row":35,"column":21},"end":{"row":35,"column":22},"action":"insert","lines":[" "]},{"start":{"row":35,"column":22},"end":{"row":35,"column":23},"action":"insert","lines":[" "]},{"start":{"row":35,"column":23},"end":{"row":35,"column":24},"action":"insert","lines":[" "]}],[{"start":{"row":34,"column":24},"end":{"row":34,"column":25},"action":"insert","lines":[" "],"id":32},{"start":{"row":34,"column":25},"end":{"row":34,"column":26},"action":"insert","lines":[" "]},{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"insert","lines":[" "]},{"start":{"row":34,"column":27},"end":{"row":34,"column":28},"action":"insert","lines":[" "]}],[{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"insert","lines":[" "],"id":33},{"start":{"row":33,"column":21},"end":{"row":33,"column":22},"action":"insert","lines":[" "]},{"start":{"row":33,"column":22},"end":{"row":33,"column":23},"action":"insert","lines":[" "]},{"start":{"row":33,"column":23},"end":{"row":33,"column":24},"action":"insert","lines":[" "]}],[{"start":{"row":32,"column":16},"end":{"row":32,"column":17},"action":"insert","lines":[" "],"id":34},{"start":{"row":32,"column":17},"end":{"row":32,"column":18},"action":"insert","lines":[" "]},{"start":{"row":32,"column":18},"end":{"row":32,"column":19},"action":"insert","lines":[" "]},{"start":{"row":32,"column":19},"end":{"row":32,"column":20},"action":"insert","lines":[" "]}],[{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"insert","lines":[" "],"id":35},{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"insert","lines":[" "]},{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"insert","lines":[" "]},{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"insert","lines":[" "]}],[{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"insert","lines":[" "],"id":36},{"start":{"row":30,"column":21},"end":{"row":30,"column":22},"action":"insert","lines":[" "]},{"start":{"row":30,"column":22},"end":{"row":30,"column":23},"action":"insert","lines":[" "]},{"start":{"row":30,"column":23},"end":{"row":30,"column":24},"action":"insert","lines":[" "]}],[{"start":{"row":29,"column":24},"end":{"row":29,"column":25},"action":"insert","lines":[" "],"id":37},{"start":{"row":29,"column":25},"end":{"row":29,"column":26},"action":"insert","lines":[" "]},{"start":{"row":29,"column":26},"end":{"row":29,"column":27},"action":"insert","lines":[" "]},{"start":{"row":29,"column":27},"end":{"row":29,"column":28},"action":"insert","lines":[" "]}],[{"start":{"row":28,"column":20},"end":{"row":28,"column":21},"action":"insert","lines":[" "],"id":38},{"start":{"row":28,"column":21},"end":{"row":28,"column":22},"action":"insert","lines":[" "]},{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"insert","lines":[" "]},{"start":{"row":28,"column":23},"end":{"row":28,"column":24},"action":"insert","lines":[" "]}],[{"start":{"row":27,"column":16},"end":{"row":27,"column":17},"action":"insert","lines":[" "],"id":39},{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"insert","lines":[" "]},{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"insert","lines":[" "]},{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"insert","lines":[" "]}],[{"start":{"row":32,"column":32},"end":{"row":32,"column":33},"action":"insert","lines":["c"],"id":40},{"start":{"row":32,"column":33},"end":{"row":32,"column":34},"action":"insert","lines":["o"]},{"start":{"row":32,"column":34},"end":{"row":32,"column":35},"action":"insert","lines":["l"]}],[{"start":{"row":32,"column":35},"end":{"row":32,"column":36},"action":"insert","lines":[" "],"id":41}],[{"start":{"row":27,"column":32},"end":{"row":27,"column":33},"action":"insert","lines":["c"],"id":42},{"start":{"row":27,"column":33},"end":{"row":27,"column":34},"action":"insert","lines":["o"]},{"start":{"row":27,"column":34},"end":{"row":27,"column":35},"action":"insert","lines":["l"]}],[{"start":{"row":27,"column":35},"end":{"row":27,"column":36},"action":"insert","lines":[" "],"id":43}]]},"ace":{"folds":[],"scrolltop":4.799999999999997,"scrollleft":47.20703125,"selection":{"start":{"row":24,"column":53},"end":{"row":24,"column":53},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1682330819906,"hash":"d6754edd284f31837b5e277745d27044398c57a6"}