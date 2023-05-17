@extends('admin.layouts.app')
@section('title', 'Roles')
@section('content')
    <div class="card">

        @if (session('message'))
            <h1 class="text-primary">{{ session('message') }}</h1>
        @endif


        <h1>
            Role list
        </h1>
        <div>
            <a href="{{ route('roles.create') }}" class="btn btn-primary">Create</a>

        </div>
        <div>
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>DisplayName</th>
                    <th>Action</th>
                </tr>

                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>

                        <td>{{ $role->display_name }}</td>
                        <td>
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Edit</a>

<<<<<<< HEAD
                            <form action="{{ route('roles.destroy', $role->id) }}" id="form-delete{{ $role->id }} "
=======
                            <form action="{{ route('roles.destroy', $role->id) }}" id="form-delete{{ $role->id }}"
>>>>>>> crud_user
                                method="post">
                                @csrf
                                @method('delete')

                            </form>

                            <button class="btn btn-delete btn-danger" data-id={{ $role->id }}>Delete</button>

                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $roles->links() }}
        </div>

    </div>

@endsection
<<<<<<< HEAD

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(() => {
            $(document).on('click', '.btn-delete', function(e) {
                e.preventDefault();

                let id = $(this).data('id');
                if (confirm('delete it')) {
                    $(`#form-delete${id}`).submit();
                }
            })

        })
    </script>
@endsection
=======
>>>>>>> crud_user
