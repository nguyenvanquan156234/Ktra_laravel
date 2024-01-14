<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cập nhật sách</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('books.update', $book->id) }}">
                            @csrf
                            {{-- Sử dụng phương thức PUT --}}

                            <div class="mb-3">
                                <label for="book_name" class="form-label">Tên sách :</label>
                                <input type="text" class="form-control" name="book_name" value="{{ old('book_name', $book->book_name) }}" />
                            </div>

                            <div class="mb-3">
                                <label for="isbn_no" class="form-label">Số ISBN :</label>
                                <input type="text" class="form-control" name="isbn_no" value="{{ old('isbn_no', $book->isbn_no) }}" />
                            </div>

                            <div class="mb-3">
                                <label for="book_price" class="form-label">Giá:</label>
                                <input type="text" class="form-control" name="book_price" value="{{ old('book_price', $book->book_price) }}" />
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</body>
</html>
