@extends('admin.flashcards.parent')

@section('main')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div align="right">
        <a href="{{ route('admin.flashcard.index') }}" class="btn btn-secondary" style="margin-bottom: 10px;
        background-color: seagreen">Back</a>
    </div>
    <form method="post" action="{{ route('admin.flashcard.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" style="font-weight: bold">Word</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="word" placeholder="Input text">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label" style="font-weight: bold">Select Profile Image</label>
            <div class="col-sm-10">
                <input type="file" name="upload_path">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" style="font-weight: bold">Type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="type_id" placeholder="Input Text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" style="font-weight: bold">CreatedBy</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="created_by" placeholder="Input Text">
            </div>
        </div>
        <div class="form-group row" style="margin-left: 16%">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
@endsection
