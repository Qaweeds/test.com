<div class="container" class="mt-10">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="create-tags.php" role="button">Create</a>
    </div>
    <table  class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th colspan="2">Action</th>
            </tr>
        @foreach($list as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['title'] }}</td>
                <td>{{ $item['slug'] }}</td>
                <td>{{ $item['created_at'] }}</td>
                <td>{{ $item['updated_at'] }}</td>
                <td><a href="update-tags.php?id={{ $item['id'] }}">Update</a></td>
                <td><a href="delete-tags.php?id={{ $item['id'] }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</div>

