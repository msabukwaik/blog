<html>

<head>

</head>

<body>
    <ul>
        @foreach($lists as $list)
            <li><a href="{{'/tasks/'.$list->id}}">{{$list->body}}</a></li>
        @endforeach
    </ul>
</body>

</html>