@section('header')
<html>
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Course Rank USAC - @yield('title')</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@section('view_scripts')
Html::script('javascripts/bootstrap.min.js') !!}

@endsection

<style>

.detailBox {
    width:320px;
    border:1px solid #bbb;
    margin:50px;
}
.titleBox {
    background-color:#fdfdfd;
    padding:10px;
}
.titleBox label{
  color:#444;
  margin:0;
  display:inline-block;
}

.commentBox {
    padding:10px;
    border-top:1px dotted #bbb;
}
.commentBox .form-group:first-child, .actionBox .form-group:first-child {
    width:80%;
}
.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
    width:18%;
}
.actionBox .form-group * {
    width:100%;
}
.taskDescription {
    margin-top:10px 0;
}
.commentList {
    padding:0;
    list-style:none;
    max-height:200px;
    overflow:auto;
}
.commentList li {
    margin:0;
    margin-top:10px;
}
.commentList li > div {
    display:table-cell;
}
.commenterImage {
    width:30px;
    margin-right:5px;
    /* height:100%; */
    float:left;
}
.commenterImage img {
    width:100%;
    border-radius:50%;
}
.commentText p {
    margin:0;
}
.sub-text {
    color:#aaa;
    font-family:verdana;
    font-size:11px;
}
.actionBox {
    border-top:1px dotted #bbb;
    padding:10px;
}
</style>
</head>
<body>
        
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="{{url('/')}}">Course Rank USAC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/topcatedraticos')}}">Top Catedraticos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/catedraticos')}}">Catedraticos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/posts')}}">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/myposts')}}">My Posts</a>
          </li>

        </ul>
      </div>
    </nav>     
        <!--================End Menu Area =================-->


    @yield('contenido')




        <!--================Footer Area =================-->
        <footer class="footer_area">
            
        </footer>
        @push('scripts')
          <script src="javascripts/bootstrap.min.js"></script>
        @endpush
    </body>
</html>

