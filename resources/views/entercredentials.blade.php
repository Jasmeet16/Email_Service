<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Send Mails</title>
        <style>    
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        :root {
        --success-color: #2ecc71;
        --error-color: #e74c3c;
        }

        * {
        box-sizing: border-box;
        }


        body {
        background-color: #222831;
        font-family: 'Open Sans', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
        }
        label{
            color: red;
            opacity: 1;
        }
        .container {
        background-color: #eeeded;
        border-radius: 5px;
        box-shadow: 0 2px 10px #86aba1;
        width: 70%;
        }

        h1 {
        text-align: center;
        }

        .form {
        padding: 30px 40px;
        }

        .form-control {
        margin-bottom: 5px;
        padding-bottom: 5px;
        position: relative;
        }

        .form-control label {
        color: rgb(100, 100, 100);
        display: block;
        margin-bottom: 5px;
        }

        .form-control input {
        font-family: inherit;
        border: 2px solid #f0f0f0;
        background-color: #ffffff;
        border-radius: 4px;
        display: block;
        height: 2.5rem;
        width: 100%;
        padding: 10px;
        font-size: 14px;
        overflow: auto; 
        margin-bottom: 15px;
        }
        .form-control textarea {
        font-family: inherit;
        border: 2px solid #f0f0f0;
        background-color: #ffffff;
        color: #222831;
        border-radius: 4px;
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 14px;
        resize: none;
        }

        ::placeholder {
            color: rgb(143, 142, 142);
            opacity: 0.6; 
        }
        .form-control input:focus {
        outline: 0;
        border-color: #777;
        }
      
        .form-control small {
        color: var(--error-color);
        position: absolute;
        bottom: 0;
        left: 0;
        /* visibility: hidden; */
        }


        .form button {
        cursor: pointer;
        background-color: #2d3238;
        border: 2px solid #86aba1;
        border-radius: 4px;
        color: #fff;
        display: block;
        font-size: 25px;
        padding: 10px;
        margin-top: 20px;
        width: 100%;
        }
    .form button:hover {
        cursor: pointer;
        border: 2px solid #2d3238;
        background-color: #86aba1;
        color:#222831;
    }
</style>
</head>
    <body>
        <div class="container">
            <h1> Enter the required feilds </h1>
            <form class="form" action="{{ route('send.email') }}" method="post">
               @csrf
               <div class="form-control">
                  <label for="input"> Full Name </label>
                  <input type="text" placeholder="Enter your name here" name="name">
                  @error('name')
                  <small>Name feild cannot be empty</small>
                  @enderror
               </div>
               <div class="form-control">
                  <label for="input" > Email </label>
                  <input type="text" placeholder="Enter your email here" name="email" >
                  @error('email')
                  <small>Enter a valid email</small>
                  @enderror
               </div>
               <div class="form-control">
                  <label for="input" > Subject </label>
                  <input type="text" name="subject" style="height: 4rem" placeholder="Subject:">
                  @error('subject')
                  <small>This feild cannot be empty</small>
                  @enderror
               </div>
               <div class="form-control">
                  <label for="textarea" > Body </label>
                  <textarea type="text" rows="8" name="body">
                  </textarea>
                  @error('body')
                  <small>This feild cannot be empty</small>
                  @enderror
               </div>
               <button type="submit" class="form-submit" id="form-submit">Send Email</button>
            </form>
         </div>
          
            
    </body>
</html>