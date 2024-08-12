<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid min-vh-100 d-flex align-items-center" style="background: linear-gradient(to bottom right, #fc2c77, #6c4079);">
        <div class="row justify-content-center w-100">
            <div class="col-md-6">
                <div class="card shadow" style="border-radius: 25px; width: 70%; margin-left: 15%;">
                    <div class="card-body" style="padding: 25px;">
                        @if(session('success'))
                        <div class="alert alert-success" style="text-align: center;" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <h2 class="card-title text-center mb-4">Registration Form</h2>
                        <form action="/create" method="POST">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50" value="{{ old('firstname')}}" required>
                                    @error('firstname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50" value="{{ old('lastname')}}" required>
                                    @error('lastname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" minlength="6" maxlength="20" value="{{ old('username')}}" required>
                                    @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" maxlength="100" value="{{ old('address')}}" required>
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="birth_date" class="form-label">Birth Date</label>
                                    <input type="text" class="form-control" id="birth_date" name="birth_date" placeholder="yyyy-mm-dd" value="{{ old('birth_date')}}" required>
                                    @error('birth_date')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label class="form-label">Sex</label>
                                    <div class="d-flex">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" checked="checked" name="sex" id="male" value="Male">
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" id="female" value="Female">
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                    </div>
                                    @error('sex')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label for="phone_number" class="form-label">Mobile No.</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="(0998XXXXXX OR 0999XXXXXX OR 0920XXXXXX)" value="{{ old('phone_number')}}" required>
                                @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col mb-3">
                                <label for="telephone_number" class="form-label">Tel No.</label>
                                <input type="text" class="form-control" id="telephone_number" name="telephone_number" pattern="[0-9]+" value="{{ old('telephone_number')}}" required>
                                @error('telephone_number')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="url" class="form-control" id="website" name="website" value="{{ old('website')}}" required>
                                    @error('website')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}" required>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" minlength="6" maxlength="20" value="{{ old('password')}}" required>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col mb-3">
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" minlength="6" maxlength="20" value="{{ old('confirm_password')}}" required>
                                    @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center mb-3" style="border-radius: 25px;">
                                <button type="submit" class="btn btn-primary btn-lg shadow-sm" style="background-color: #273ea5; border: none;">Submit</button>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('persons.info') }}" style="text-decoration: none;">View All Registered</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
