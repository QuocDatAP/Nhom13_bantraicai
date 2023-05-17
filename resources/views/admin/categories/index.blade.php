@extends('admin.layouts.app')
@section('title', 'Category')
@section('content')
    <div class="card">

        @if (session('message'))
            <h1 class="text-primary">{{ session('message') }}</h1>
        @endif


        <h1>
            Category list
        </h1>
        <div>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Create</a>

        </div>
        <div>
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Parent Name</th>
                    <th>Action</th>
                </tr>

                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>

                        <td>{{ $item->parent_name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $item->id) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('categories.destroy', $item->id) }}"
                                id="form-delete{{ $item->id }}" method="post">
                                @csrf
                                @method('delete')

                            </form>

                            <button class="btn btn-delete btn-danger" data-id={{ $item->id }}>Delete</button>

                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $categories->links() }}
        </div>

    </div>

@endsection

@section('script')

    <script>

    </script>
@endsection
