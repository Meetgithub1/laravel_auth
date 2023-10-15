<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Auth</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-6 col-sm-12 mx-auto">
        @include('admin.message')
        <h2 class="text-center">Administrative Panel</h2>
        <form action="{{ route('admin.authenticate') }}" method="post">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email</label>
            <input type="text" name="email" value="{{ old('email') }}" id="form2Example1"
              class="form-control @error('email') is-invalid @enderror" />

            @error('email')
            {{-- <p class="text-danger">{{ $message }}</p> --}}
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" name="password" id="form2Example2" class="form-control" />
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary btn-block mb-4 d-block">Login</button>
          <a href="#!" class="text-decoration-none">I Forgot My Password?</a>
        </form>
      </div>
    </div>
  </div>
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>