@extends('layouts.app')

@section('content')

<div class="container">
    <table class="mx-auto">
        <tr class="row">
            <th class="col">Titolo</th>
            <th class="col">Creato il</th>
            <th class="col">Modificato il</th>
            <th class="col">Actions</th>
        </tr>
        @foreach ($posts as $post)
        <tr class="row">
            <td class="col"> {{ $post->title}}</td>
            <td class="col"> {{ $post->created_at}}</td>
            <td class="col"> {{ $post->updated_at}}</td>
            <td class="col"> 
                <a href="{{ route('admin.posts.show', $post)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                
            </td>
        </tr>
            
        @endforeach
    </table>
</div>
    
@endsection