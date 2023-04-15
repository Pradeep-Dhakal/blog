@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-right">
            <!-- <button type="button" class="btn btn-primary">New blog</button> -->
            @hasrole('user')
            <a href="{{ route('blogs.create') }}" class="btn btn-primary lg">New blog</a>
            <a href="{{ route('categories.create') }}" class="btn btn-primary lg">New category</a>
            @endhasrole


        </div>

        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
                {{-- @if (is_iterable($blogs)) --}}
                    @foreach (DB::table('blogs')->get() as $blog)
                        <tr>
                            <td>{{ $blog->title }}</td>
                            {{-- <td>hello</td> --}}
                    
                            <td>{{ DB::table('categories')->where('id', $blog->category_id)->value('name') }}</td>

                            <td>{{ $blog->content }}</td>
                            <td>
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                @hasrole('admin')
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                                </form>
                                @endhasrole
                            </td>
                        </tr>
                    @endforeach
                {{-- @endif --}}

            </tbody>
        </table>

    </div>
@endsection
