@include('userset.layout')

<body class="ms-3 me-3">
    <h1 class="text-center">Users all data..</h1>
    <h3 class="text-danger text-center">Current User: {{$usercount}}</h3>
    <div class="d-flex justify-content-between ms2">
        <div>
            <a href="{{route('adduser')}}" class="btn btn-info ms-2">Add User</a>
        </div>
        <div>
            <form method="GET" class="d-flex align-items-center mb-3">
                <label class="me-2 fw-bold">Show:</label>
                <select name="per_page" class="form-select w-auto" onchange="this.form.submit()">
                    {{-- <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option> --}}
                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                    <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                </select>
            </form>
        </div>
    </div>

    @if ($users->isNotEmpty())

        <table class="table table-stripped table-hover p-2 ms-2 table-border me-2 cursor-pointer">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action(View/Update/Delete)</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ ucfirst($user->first_name) . ' ' . ucfirst($user->last_name) }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td><a href="{{route('showuser',$user->id)}}" class="btn btn-secondary ms-2">View</a>
                        <a href="{{route('edituser',$user->id)}}" class="btn btn-warning ms-2">Update</a>
                        <form action="{{route('userdelete',$user->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ms-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>

    @else
        <p>No User Found..</p>
    @endif


    <div class="d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-5') }}
    </div>

</body>

</html>
