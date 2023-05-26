<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <!-- Your HTML content -->
    <title></title>
</head>
<body>
<div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Student registeration</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('buddhas.create') }}">Create student</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>S.No</th>
                    <th>Video</th>
                    <th>Title</th>
                    <th width="280px">Action</th>
                </tr>
                
                @foreach ($buddhas as $budda)
                <tr>
                    <td>{{ $budda->id }}</td>
                    <td>{{ $budda->video }}</td>
                    <td>{{ $budda->title }}</td>
                  
                    <td>
                    <form action="{{ route('buddhas.destroy', $budda->id) }}" method="POST" style="display: inline-block;">
                        <a href="{{ route('buddhas.edit', $budda->id) }}" class="fas fa-edit-icon">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-icon" onclick="return confirm('Are you sure you want to delete this student?');">
                        <i class="fas fa-trash"></i>
                        </button>
                    </form>

                    </td>
                </tr>
                @endforeach
            </table>
            {!! $buddhas->links() !!}
    
            
</body>
</html>