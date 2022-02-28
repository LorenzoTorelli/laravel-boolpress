@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Commands</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <form action="{{route('tags.store')}}" method="post">
                    @csrf

                    <th>n.</th>
                    <th><input type="text" class="form-control @error('title') is-invalid  @enderror" id="title" name="title" placeholder="inserisci nome nuova categoria....">
                        @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror</th>
                    <td></td>
                    <td>
                        <button class="btn btn-success" type="submit" >Save</button></td>
                    </tr>
                </form>
            @foreach ($tags as $tag)
                <tr>
                    <th>{{$tag->id}}</th>
                    <td>{{$tag->title}}</td>
                    <td>{{$tag->slug}}</td>

                    <td>
                        <form action="{{route('tags.destroy', $tag->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit" >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>
@endsection