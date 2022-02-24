@extends('../layouts/default',['title'=>'Create a new movie'])

@section('content')
<form action="{{ action('MovieController@store') }}" method="post">
    @csrf
    <div>
        <label for="">Title</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="">Year</label>
        <input type="number" name="year">
    </div>
    <div>
        <input type="submit" value="save">
    </div>
</form>
@endsection
