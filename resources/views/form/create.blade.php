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
          <div class="col-md-12">
             <label for="gender" class= "col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
          <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="radio" name="gander" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
         <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gander" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
            </div>
          <div class="form-group">  
               
          <input type="file" name="image">

          </div>  
<br/>  


<div class="form-group">      
<label>Hobby you Like</label>
        <input type="checkbox" name="hobbies[]" value="Playing"> Playing <br/>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading <br/>
        <input type="checkbox" name="hobbies[]" value="Writing"> Writing <br/>
        <input type="checkbox" name="hobbies[]" value="Listening"> listening <br/>
        <input type="checkbox" name="hobbies[]" value="Drawing"> Drawing <br/>
 </div> 

 <div class="form-group">      
              <label for="address">Address:</label>  
              <input type="text" class="form-control" name="address"/>  
          </div>  
 
<div class="form-group">      
              <label for="state">State:</label>  
              <input type="text" class="form-control" name="state"/>  
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
