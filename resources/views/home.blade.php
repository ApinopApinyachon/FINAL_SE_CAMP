<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="table">
            <table class="table">
                <h1 class="">ตาราง</h1>
                <form action="{{ url('/home') }}" method="POST">
                    @csrf
                    <input type="text" class=" " placeholder="title" name = "title">
                    <input type="text" placeholder="des" name="des">
                    <button class="btn btn-primary" type="submit">สร้าง TODO </button>
                </form>
                {{--  <button class="btn btn-primary" onclick="alert()">สร้างรายการTodo</button>  --}}
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($todo_lists !== null)
                        @foreach ($todo_lists as $index => $todo_list)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $todo_list->td_name }}</td>
                                <td>
                                    @if ($todo_list->td_status === 0)
                                        ยังไม่ได้ทำ
                                    @else
                                        เสร็จสิ้น
                                    @endif
                                </td>
                                <td class="d-flex gap-2" style="cursor: pointer; ">
                                    <div>
                                        <a href='{{ url('/home/add') }}'>✅</a>
                                    </div>
                                    <div>
                                        <a href='{{ url('/home/edit/$todo_list->td_id </a>') }}'>🖊️</a>
                                    </div>
                                    <div>
                                        <a href='{{ url('/home') }}'>🗑️</a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <p>แกไม่ได้ส่งข้อมูลมา</p>
                    @endif
                </tbody>
            </table>
        </div>

    </div>
</body>

<style>

</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

{{--  <script>
    const alert = () => {
        Swal.fire({
            title: "ใส่อะไรก็ใส่ไปเถอะ",
            html: '<input id="title" placeholder ="หัวข้อ" class="swal2-input">' +
                '<input id="des" placeholder ="คำอธิบาย" class="swal2-input">',

            showCancelButton: true,
            confirmButtonText: "สร้าง",
            showLoaderOnConfirm: true,
            preConfirm: async () => {
                try {
                    //ดึงค่า
                    const title = document.getElementById("title").value;
                    const des = document.getElementById("des").value;
                    //ส่ง req
                    const response = await fetch('/todo', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            title,
                            des
                        })
                    });

                } catch (error) {
                    Swal.showValidationMessage(`
                  Request failed: ${error}
                `);
                }
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: "success",
                    title: `สำเร็จ`,
                });
            }
        });
    }
</script>  --}}

</html>
