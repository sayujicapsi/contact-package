<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Contact Page us at any time</h1>
    @if (session('success'))
    <div class="alert alert-success">

        {{ session('success') }}
    </div>
    @endif


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif


    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        Name
        <input type="text" name="name" id="name" value="">
        Contact
        <input type="number" name="contact" id="contact" value="">
        Message
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>
