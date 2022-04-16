<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('administrator/css/login.css') }}">
    <title>ADMIN LOGIN</title>
</head>
<body>

  <div class="login-wrapper">

    <form method="POST" action="{{ route('login') }}" class="form">
      @csrf
        
      <h2>PRIJAVA</h2>

      <div class="input-group">
        <input type="text" name="email" id="Email" required>
        <label for="Email">Email adresa</label>
      </div>
  
      <div class="input-group">
        <input type="password" name="password" id="loginPassword" required>
        <label for="LoginPassword">Lozinka</label>
      </div>

      <input type="submit" value="Prijavi se" class="submit-button">

    </form>

  </div>
    
</body>
</html>