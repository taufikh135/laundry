<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log In - GoLaundry </title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo2.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container-fluid vh-100 d-flex flex-column align-items-center justify-content-center">
    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <img src="../assets/images/logos/logo2.png" class="img-fluid" alt="GoLaundry Logo" />
        <h3 class="mt-4">GoLaundry: Pakaian Bersih Anda, Hanya dalam Satu Sentuhan!</h3>
      </div>
      <div class="col-md-6 bg-light-primary rounded shadow p-4">
        
          <h4 class="text-center mb-4">Log In</h4>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required /> 
          </div>
          <div class="container text-center">
            <div class="row row-cols-2">
              <div class="col text-start"><a class="text-success" href="index.html">Login Sebagai Admin</a></div>
              <div class="col text-start mb-3"><a class="text-success" href="/forgot password">Forget Password</a></div>
              <div class="col text-start mt-3 mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label bg" for="flexCheckChecked">Remember This Device?</label>
              </div>
          </div>
          <a type="submit" class="btn btn-primary w-100 py-3 " href="/">Log In</a>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>