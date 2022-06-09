<html>
  <head>
    <title>Compiler</title>

    <meta charset='utf-8'>
    <meta name = "description" content = "Hi~ This is my personal web.">
    <meta name = "author" content = "Yumeow Chou">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel = "stylesheet" type = "text/css" href = "{{mix('css/frame.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/newjs.js')}}"></script>


    <style>
      @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap');
    </style>
  </head>

  <body style="background-color:#cda581;">
    <div class="greet">
      <h1 >This is my online python compiler!</h1>
    </div>

    <div>
      <div >
        <div>
          <nav style="color: #b8d3ed; ">
            <ul class="flex-nav" style="font-family: 'Oswald', sans-serif;">
              <a href="https://yumeow0122.github.io/index.html">Home</a>
              <a href="https://yumeow0122.github.io/project.html">Projects</a>
              <a href="https://yumeow0122.github.io/code.html">Code</a>
              <a href="https://yumeow0122.github.io/ndhu.html">NDHU</a>
            </ul>
          </nav>
        </div>                
      </div>
    </div>

    <div class="wrapper">
      <div class="block" align="center">
        <div class="left">
          @csrf 
          <p>your result</p>
          <textarea id="code" name="code" rows=20 cols=40>
          </textarea>    
          <br>      
          <button class="btn">compile</button>
        </div>

        <div class="right">
          <p>your result</p>
          <textarea id="result" name="result" rows=20 cols=40>
          </textarea>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="media">
        <!--FB and IG iocon resource: Vecteezy.com-->
        <a href="https://www.facebook.com/profile.php?id=100003522019305"><img src="{{ asset('image/fb.png') }}" alt="" /></a>
        <a href="https://www.instagram.com/yumeow_0122/"><img src="{{ asset('image/ig.png') }}" alt="" /></a>
        <a href="https://github.com/yumeow0122"><img src="{{ asset('image/github.png') }}" alt="" /></a>
        <p>Copyright © 2022 Yumeow Chou.</p>
      </div>
    </footer>

    </body>
</html>
