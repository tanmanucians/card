@extends('admin.flashcards.parent')
@section('content')
    <h3 align="center">FlashCards</h3>
<div align="right">
    <a href="{{ route('admin.flashcard.create') }}" class="btn btn-success btn-sm" style="margin-bottom: 10px;
        margin-right: 130px">Add</a>
</div>
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    <div class="container">
    <table class="table table-bordered table-striped">
        <tr style="text-align: center">
            <th width="5%">#</th>
            <th width="20%">Image</th>
            <th width="43%">Word</th>
            <th width="10%">Type_id</th>
            <th width="40%">Action</th>
        </tr>
        @foreach($flashcards as $flashcard)
            <tr style="text-align: center">
                <td>{{ $flashcard->id }}</td>
                <td>
                    @if ($flashcard->upload_path)
                        <img src="/images/{{ $flashcard->upload_path }}" class="img-thumbnail" width="75" />
                    @endif
                </td>
                <td>{{ $flashcard->word }}</td>
                <td>{{ $flashcard->type_id }}</td>
                <td>
                    <form action="" method="post">
                        <a href="" class="btn btn-primary">Show</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
{!! $flashcards->links() !!}
@endsection
