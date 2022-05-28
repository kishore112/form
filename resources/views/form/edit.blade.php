
<x-app-layout>
<x-slot name="header">
</x-slot>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<h1>Edit Form</h1>

<div class="container">
<form method="post" action="{{ route('form.update',['id' => $form->id]) }}" 
class="form-horizontal" enctype="multipart/form-data">  
   @csrf   
  
   <input name="_method" type="hidden" value="PUT">
          <div class="form-group">      
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $form->name }}"/>  
          </div>  
          <div class="form-group">      
              <label for="mobile">Mobile:</label>
              <input type="text" class="form-control" name="mobile"  value="{{ $form->mobile }}"/>  
          </div> 
<div class="form-group">      
<label for="first_name">Email:</label> 
              <input type="text" class="form-control" name="email" value="{{$form->email}}"/>  
          </div>  
          <div class="col-md-12">
             <label for="gender" class= "col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
          <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="radio" name="gander" value="1">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
         <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gander" value="2">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
            </div>
          <div class="form-group">  
               
          <input type="file" name="image">

          </div>  
<br/>  


<div class="form-group">      
<label>Hobby you Like</label>
        <input type="checkbox" name="hobbies[]" value="Playing" {{ in_array('Playing', $hobbies) ? 'checked' : '' }}">Playing <br/>
        <input type="checkbox" name="hobbies[]" value="reading" {{ in_array('Reading', $hobbies) ? 'checked' : '' }}" > Reading <br/>
        <input type="checkbox" name="hobbies[]" value="writing" {{ in_array('Writing', $hobbies) ? 'checked' : '' }}" >Writing  <br/>
        <input type="checkbox" name="hobbies[]" value="listening" {{ in_array('Listening', $hobbies) ? 'checked' : '' }}" >listening  <br/>
        <input type="checkbox" name="hobbies[]" value="drawing" {{ in_array('drawing', $hobbies) ? 'checked' : '' }}" >Drawing  <br/>
 </div> 

 <div class="form-group">      
              <label for="address">Address:</label>  
              <input type="text" class="form-control" name="address" value="{{ $form->address }}"/>  
          </div>  
 
<div class="form-group">      
              <label for="state">State:</label>  
              <input type="text" class="form-control" name="state" value="{{$form->state}}"/>  
          </div>  
 

<div class="form-group">      
              <label for="city">City:</label> 
              <input type="text" class="form-control" name="city" value="{{$form->city}}">  
          </div>  


<div class="form-group">      
              <label for="degree">Degree:</label>  
 <input type="text" class="form-control" name="degree" value="{{$form->degree}}">
          </div>  
<input type="submit" class="btn-btn-success" value="Update">
 
</form>  

</div>

</body>
</html>
</x-app-layout>
