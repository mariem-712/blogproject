

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
    <base href="/public">
    @include('admin.css')
    <style>
        form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="file"] {
    margin-bottom: 10px;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

h1 {
    text-align: center;
    font-size: 30px;
    color:white;
    font-weight: bold;
    padding: 30px;
}
    </style>
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <h1>Update Post</h1>
        <form action="{{ url('update_post',$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title" value="{{ $post->title }}">
            </div>

            <div>
                <label>Description</label>
                <textarea name="description" value="{{ $post->description }}"></textarea>
                
            </div>

            <div>
                <label>Update Image</label>
                <input type="file" name="image">
            </div>

            <div>
                
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
       
        @include('admin.footer')
      </div>
    </div>
    <!-- JavaScript files-->
    
  </body>
</html>
