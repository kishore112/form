<x-app-layout>
<x-slot name="header">
</x-slot>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<h1>New Form</h1>
<div class="container">
<form method="post" action=" {{route('form.store')}}" enctype="multipart/form-data">  
   @csrf     
          <div class="form-group">      
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>  
          </div>  
          <div class="form-group">      
              <label for="mobile">Mobile:</label>
              <input type="text" class="form-control" name="mobile"/>  
          </div> 
              <div class="form-group">      
               <label for="first_name">Email:</label> 
              <input type="text" class="form-control" name="email"/>  
          </div>  
          <div class="form-group">
             <label for="gender" class= "col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
          <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="radio" name="gander" value="M">
                                <label class="form-check-label" for="male">Male</label>
                                                        <input class="form-check-input" type="radio" name="gander" value="F">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
            </div>
          <div class="form-group">  
               
          <input type="file" name="image" id="image">

          </div>  
<br/>  


<div class="form-group">      
<label>Hobby you Like</label>
        <input type="checkbox" name="hobbies[]" value="Playing"> Playing <br/>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading <br/>
        <input type="checkbox" name="hobbies[]" value="Writing"> writing <br/>
        <input type="checkbox" name="hobbies[]" value="listening"> listening <br/>
        <input type="checkbox" name="hobbies[]" value="Drawing"> Drawing <br/>
 </div> 

 <div class="form-group">      
              <label for="address">Address:</label>  
            <textarea class="form-control" name="address" id="address"> </textarea> 
          </div>  
 
<div class="form-group">      
              <label for="state">State:</label>  
              <select id="state" required="" name="state" class="form-control">
                   <option value="Tamil Nadu" @if (old('state') == "Tamil Nadu") {{ 'selected' }} @endif>Tamil Nadu</option>
                    <option value="Delhi" @if (old('state') == "DelhiF") {{ 'selected' }} @endif>Delhi</option>
                    <option value="Gujarat" @if (old('state') == "Gujarat") {{ 'selected' }} @endif>Gujarat</option>
                    <option value="Kerela" @if (old('state') == "F") {{ 'selected' }} @endif>Kerela</option>
                    </select>
          </div>  
 
          <div class="form-group">      
              <label for="city">City:</label>  
            <input type="text" class="form-control" name="city"/>
          </div> 
 


<div class="form-group">      
              <label for="degree">Degree:</label>  
 <input type="text" class="form-control" name="degree"/>
          </div>  
<input type="submit" class="btn-btn-success" value="Submit">
 
</form>  

</div>
</body>
</html>
</x-app-layout>
