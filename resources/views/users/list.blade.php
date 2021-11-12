<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<label>
    Show Name
    <input type="checkbox" id="show-name" class="" checked>
</label>
<label>
    Chon mau
    <input type="color" id="color-name">
</label>
<div class="col-12 mt-2">
    <a class="btn btn-success" href="{{ route('users.create') }}">Thêm mới</a>
</div>
<div class="container">
    <h3>Danh sach khach hang</h3>
    <table class="table">
        <tr>
            <td>STT</td>
            <td class="column-name">Name</td>
            <td>Email</td>
            <td>Password</td>
            <td></td>
        </tr>
        @foreach($users as $key => $user)
            <tr class="user-item" id="user-item-{{$user->id}}">
                <td>{{ $key + 1 }}</td>
                <td class="column-name">{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{$user['password']}}</td>
                <td>
                    <a href="{{route('users.delete', $user->id)}}"><button type="submit">Delete</button></a></td>
            </tr>

        @endforeach
    </table>
</div>
<a href="{{route('products.index')}}"><button class="btn btn-primary">Quay lai</button></a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/my.js') }}"></script>
</body>
</html>
