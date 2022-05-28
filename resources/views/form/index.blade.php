
<x-app-layout>
<x-slot name="header">
</x-slot>
<!DOCTYPE html>
<head></head>
<body>
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Form </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('form.create') }}"> Create New Form</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Degree</th>
            <th>State</th>
            <th>City</th>
            <th>Hobbies</th>
            <th>Image</th>
            <th>Action</th>
                   </tr>
        @foreach ($form as $frm)
        <tr>
        
            <td>{{ $frm->name }}</td>
            <td>{{ $frm->email }}</td>
            <td>{{ $frm->mobile }}</td>
            <td>{{ $frm->address }}</td>
            <td>{{ $frm->gender }}</td>
            <td>{{ $frm->degree }}</td>
            <td>{{ $frm->state }}</td>
            <td>{{ $frm->city }}</td>
           
            <td>@php
    $values = explode(",",$frm->hobbies);
@endphp

@if(in_array("$frm->hobbies", $values)) 
    {{ strtoupper($frm->hobbies) }}                          
@endif </td>
           
            <td><img src={{ url('public/storage/.$frm->image')}}></td>
              <td>  <form action="{{ route('form.destroy',$frm->id) }}" method="post">
              @csrf
        {{ method_field('DELETE') }}
        
        <a class="btn btn-primary" href="{{ route('form.edit',$frm->id) }}">Edit</a>
                
        
        <button type="submit" class="btn btn-danger">Delete</button>
       <i class="fas fa-trash fa-lg text-danger"></i>
       </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>
</body>
</html>
</x-app-layout>
