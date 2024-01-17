<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@include("fragment.subview")

    {{ $name }}
    {{ $age }}
    {{-- $age --}}
    {!! $sex !!}

    @if ($name == "Carlos")
        tu nombres es carlos
    @else
        tu nombre no es carlos
    @endif

    @foreach ($posts as $a)
        <p> {{$a}} </p>
    @endforeach

    @forelse ($posts as $a)
        <p> *{{$a}} </p>
    @empty
        no tienes numeros
    @endforelse

</body>
<script>
    //alert("ola mi rey")
</script>
</html>