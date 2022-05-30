<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
<<<<<<< HEAD
      
=======

        
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
             @csrf
             @method('DELETE')
             <button type="submit">delete</button> 
        
        </form>
        

>>>>>>> 9255c91e220c84b129bdf305dd6d05c9d0051593
        <p class="create">[<a href='/posts/create'>create</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>

                    <p class='body'>{{ $post->body }}</p>
                </div>
                      
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
             @csrf
             @method('DELETE')
             <button type='button' onclick="deletePost({{ $post->id }})">delete</button>

        </form>
          
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>

<<<<<<< HEAD
=======
        
>>>>>>> 9255c91e220c84b129bdf305dd6d05c9d0051593
        <script>
        function deletePost(id){
            "use strict";
            if(confirm("消去すると復元できません。\n本当に消去しますか？")){
               document.getElementById('form_'+id).submit();
            }
        }
        </script>

    </body>
</html>