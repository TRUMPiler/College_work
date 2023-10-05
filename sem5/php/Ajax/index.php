<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>document</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script> 

    </head>
    <body>
  
        <form  method="POST" id="sample_form">
            <div class="form-group">
                <label for="name">name</label>
            <input type="text" name="name" id="name">
           
            </div>
            <div class="form-group">
            <label for="">email</label>
            <input type="text" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="">age</label>
            <input type="text" id="age" name="age">
            </div>
            <button type="submit">Submit</button>
            <script>
        $("#sample_form").validate({
            rules:{
                name:{
                    'required':true,
                },
                'email':{
                    'required':true,
                    'email':true,
                },
                'age':
                        {
                            'required':true,
                            'number':true,
                            'min':18,
                        }
            },
            messages:
                    {
                        'name':
                        {
                            required:"please enter the field",
                            
                        },
                        'email':
                        {
                            required:"please enter the field",
                            email:"please enter proper email",
                        },
                        'age':
                        {
                            required:"enter your age",
                            number:"enter your age in numbers (eg:12)",
                            min:"minimum age is 18",
                        }
                        
                    }
        })
    </script>
        </form>
    </body>
   
</html>
