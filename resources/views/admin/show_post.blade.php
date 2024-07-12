

<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <style>
        h1 {
    text-align: center;
    font-size: 30px;
    color:white;
    font-weight: bold;
    padding: 30px;
}
    </style>
    <style>
         .table-container {
            display: flex;
            justify-content: center;
        }
        table {
            width: 80%;
            border-collapse: collapse;
         
        }
    
        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: center;
        }
    
        th {
            background-color:transparent;
        }
    
        tr:nth-child(even) {
            background-color: transparent;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
       <h1>All Posts</h1>
       <div class="table-container">
        <table style="align:center">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Writer</th>
                <th>Status</th>
                <th>User</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Accept</th>
                <th>Reject</th>
            </tr>
@foreach ($post as $post )
            <tr>
                <td> {{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->post_status }}</td>
                <td>{{ $post->usertype }}</td>
                <td>
                    <img src="postimage/{{ $post->image }}" style="max-height: 60px">
                    </td>
                <td><a href="{{ url('delete_post',$post->id) }}" class="btn btn-danger">Delete</a></td>
                <td><a href="{{ url('edit_page',$post->id) }}" class="btn btn-success">Edit</a></td>
                <td><a href="{{ url('accept_post',$post->id) }}" class="btn btn-info">Accept</a></td>
                <td><a href="{{ url('reject_post',$post->id) }}" class="btn btn-primary">Reject</a></td>

            </tr>
@endforeach
        </table>
    </div>
        @include('admin.footer')
      </div>
    </div>
    <!-- JavaScript files-->
    
  </body>
</html>
