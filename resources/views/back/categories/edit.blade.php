@extends('layout_back')
@section('content')

    @section('title', 'Add a new category')

    <div class="container">

        <form method="POST" action="{{ route('categories.update', $id) }}" >

            @csrf
            @method('PUT')

            <div class="mb-3">
                <input value="{{ $categorie->name }}" name="name" type="text" class="form-control" placeholder="add category">
                <input value="{{ $id }}" name="idcategorie" type="hidden">
            </div>

            <div class="mb-3">
                <br>
                <textarea name="description" placeholder="a description" class="form-control" id="description" rows="3">
                    {{ $categorie->description }}
                </textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>

        </form>

    </div>

@endsection
