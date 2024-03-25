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

            <form action="{{ url("/home/edit/$todo->td_id") }}" method="POST">
                @csrf
                <label for="">No.{{ $todo->td_id }}</label>
                <label for="" >Name</label>
                <input type="text" name="editName" value="{{ $todo->td_name }}">
                <label for="">Des</label>
                <input type="text" name="editDes"value="{{ $todo->td_des }}">
                <button class="btn btn-primary" type="submit">แก้ไข</button>
            </form>
            {{--  <a href="{{ url("/home/edit/$todo_list->td_id") }}" class="btn btn-secondary">กลับ</a>  --}}

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
