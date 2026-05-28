<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafeteria Login</title>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    /* Minimal custom CSS for specific project colors */
    body {
      background-color: #FBF5DD !important;
    }
    .login-card {
      background-color: #E7E1B1;
      max-width: 450px;
    }
    .btn-custom {
      background-color: #0D530E;
      border: none;
    }
    .btn-custom:hover {
      background-color: #306D29;
    }
    .text-custom {
      color: #0D530E;
    }
    .text-secondary-custom {
      color: #306D29;
    }
  </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100 p-3">


  <form 
    id="loginForm"
    action="index.php" 
    method="POST"
    class="login-card p-5 rounded-4 shadow-lg w-100 needs-validation"
    novalidate
  >

    <h1 class="text-center fw-bold mb-5 text-custom">
      Cafeteria
    </h1>

    <!-- Email -->
    <div class="mb-4">
      <label for="email" class="form-label fw-semibold text-secondary-custom">Email Address</label>
      <input 
        type="email"
        id="email"
        name="email"
        class="form-control form-control-lg border-2"
        placeholder="name@gmail.com"
        required
      >
      <!-- Bootstrap Native Feedback -->
      <div class="invalid-feedback">
        Please enter a valid email address.
      </div>
    </div>

    <!-- Password -->
    <div class="mb-4">
      <label for="password" class="form-label fw-semibold text-secondary-custom">Password</label>
      <input 
        type="password"
        id="password"
        name="password"
        class="form-control form-control-lg border-2"
        placeholder="Enter your password"
        minlength="6"
        required
      >
      <!-- Bootstrap Native Feedback -->
      <div class="invalid-feedback">
        Password must be at least 6 characters.
      </div>
    </div>

    <!-- Button -->
    <button 
      type="submit"
      class="btn btn-custom w-100 btn-lg text-white fw-bold mt-2 shadow-sm"
    >
      Login
    </button>

    <!-- Forget Password -->
    <div class="text-center mt-4">
      <a 
        href="forget.php"
        class="text-decoration-none fw-bold text-secondary-custom"
      >
        Forget Password?
      </a>
    </div>

  </form>

  <script src="login.js"></script>

</body>
</html>