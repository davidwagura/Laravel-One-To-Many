<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>one to many</title>
</head>
<body>
    <h1>Laravel One To Many Example</h1>

    <h3>All Posts</h3>

    @foreach ($allposts as $post)
        <li>

            {{ $post->post_name }}

            </a>

        </li>
    @endforeach

    <h3>All Comments</h3>

    @foreach ($allcomments as $comment)
        <li>

            {{ $comment->comment }}

            </a>

        </li>
    @endforeach

    <h3>Bellow are comments from Laravel Post whose id is 1</h3>

    @foreach ($commentsFirst as $comment)
        <li>

            {{ $comment->comment }}

            </a>

        </li>
    @endforeach

    <h3>Below are comments from Android Post whose id is 2</h3>

    @foreach ($commentsSecond as $comment)
        <li>

            {{ $comment->comment }}

            </a>

        </li>
    @endforeach
    
</body>
</html>