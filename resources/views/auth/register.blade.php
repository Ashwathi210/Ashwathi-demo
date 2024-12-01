
@extends('layout.head')
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">

                      <form action="{{ route('store.user') }}" method="POST">
                          @csrf

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                              <input type="text" name="name" >
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                              <div class="col-md-6">
                                <input type="text" name="phone_number">
                                  @if ($errors->has('phone_number'))
                                      <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Email</label>
                              <div class="col-md-6">
                                <div><input type="email" name="email"></div>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                              <div><input type="password" name="password" ></div>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Role</label>
                            <div class="col-md-6">
                                <select name="role">
                                    <option value="" selected >Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->role }}">{{ $role->role }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
</main>

@endsection


