<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Application Form</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <form action="" method="">
                <fieldset>
                    <div class="container-fluid">
                        <div class="row">
                            <legend>Fil-out Information</legend>
                            <small id="infoHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>

                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="example. Del Castillo">
                                        <label for="floatingInput">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="example. Coreen">
                                        <label for="floatingInput">First Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="example. Alonzo">
                                        <label for="floatingInput">Middle Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="Age" name="Age" placeholder="example. 29">
                                        <label for="floatingInput">Age</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="maritalstatus" name="maritalstatus">
                                            <option value="0" selected disabled>Select Marital Status</option>
                                            <option value="1">Single</option>
                                            <option value="2">Married</option>
                                            <option value="3">Separated</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="example. 09998765544">
                                        <label for="floatingInput">Mobile Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="emailaddress" name="emailaddress" placeholder="example. coreendc@gmail.com">
                                        <label for="floatingInput">Email Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="fblink" name="fblink" placeholder="example. facebook.com/coreendc">
                                        <label for="floatingInput">Facebook Profile link</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 py-3 bg-warning-subtle">
                                    <h5 class="mb-3">Please read:</h5>
                                    <ul>
                                        
                                        <li class="my-3">
                                            Please attach at least 3 best photos of yourself, at least 1 full body photo and at least 1 portrait photo. You can attach a maximum of 6 photos of yourself below.
                                        </li>
                                        <li class="my-3">
                                            Please do not send pictures of family or friends. I want it to be a single picture of you only.
                                        </li>
                                        <li class="my-3">
                                            All information will be used for your IAC application only.
                                        </li>
                                        <li class="my-3">
                                            Please upload photos as JPG or PNG files only and less than 5 megabytes in size.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid pt-3">
                            <h5>Upload Photos</h5>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group w-100">
                                    <label for="formFile" class="form-label mt-4">Photo no. 1</label>
                                    <input class="form-control" type="file" id="photo1" name="file[]">
                                    </div>
                                    <div class="form-group w-100">
                                    <label for="formFile" class="form-label mt-4">Photo no. 2</label>
                                    <input class="form-control" type="file" id="photo2" name="file[]">
                                    </div>
                                    <div class="form-group w-100">
                                    <label for="formFile" class="form-label mt-4">Photo no. 3</label>
                                    <input class="form-control" type="file" id="photo3" name="file[]">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group w-100">
                                    <label for="formFile" class="form-label mt-4">Photo no. 4</label>
                                    <input class="form-control" type="file" id="photo4" name="file[]">
                                    </div>
                                    <div class="form-group w-100">
                                    <label for="formFile" class="form-label mt-4">Photo no. 5</label>
                                    <input class="form-control" type="file" id="photo5" name="file[]">
                                    </div>
                                    <div class="form-group w-100">
                                    <label for="formFile" class="form-label mt-4">Photo no. 6</label>
                                    <input class="form-control" type="file" id="photo6" name="file[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid my-3">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <button class="btn btn-lg btn-primary px-5 py-3">SUBMIT APPLICATION</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>