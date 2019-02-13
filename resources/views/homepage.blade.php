<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claim your boo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

  {{-- @foreach ($questions as $question)
    @foreach ($question as $individualquestion)
         <li>{{$individualquestion}}</li>
    @endforeach
@endforeach --}}
{{-- <form action="{{url('/status')}}" method="post">
    {{ csrf_field() }}
    @foreach ($questions as $key => $question)
        <input type="radio" value="{{$key}}" name="relationship"> {{$key }}
        @foreach ($questions[$key] as $value => $item)
            @if($value === 0)
                {{$item}} <br>
            @endif
        @endforeach
    @endforeach
    <input type="submit" value="submit">
</form> --}}


</body>
</html>
