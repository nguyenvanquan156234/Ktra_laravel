@extends('layout') {{-- Assuming you have a layout named 'app.blade.php' --}}

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>

<div class="card uper">
    <div class="card-header">
        <h3>Thêm mới</h3>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form method="post" action="{{ route('books.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Tên sách :</label>
                <input type="text" class="form-control" name="book_name" />
            </div>
            <div class="form-group">
                <label for="price">Số ISBN :</label>
                <input type="text" class="form-control" name="isbn_no" />
            </div>
            <div class="form-group">
                <label for="quantity">Giá:</label>
                <input type="text" class="form-control" name="book_price" />
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>
</div>
@endsection
