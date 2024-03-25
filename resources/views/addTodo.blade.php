<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div>
            <h1>Edit</h1>
            <form action="{{ url('/home') }}" method="POST">
                @csrf
                <input type="text" class=" " placeholder="title" name = "title">
                <input type="text" placeholder="des" name="des">
                <button class="btn btn-primary" type="submit">สร้าง TODO </button>
            </form>
            {{--  <a href="{{ url("/home/edit/$todo_list->td_id") }}" class="btn btn-secondary">กลับ</a>  --}}

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
