@extends('layouts.admin')
@section('title', 'Update Blog')
<style>
    #namespan {
        color: red;
        font-size: 15px;
        font-weight: 600;
        margin-top: 5px;
    }

    #namespan_mobile {
        color: red;
        font-size: 15px;
        font-weight: 600;
        margin-top: 5px;
    }

    #namespan_email {
        color: red;
        font-size: 15px;
        font-weight: 600;
        margin-top: 5px;
    }
</style>
@section('content')

    <section class="section">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-dark text-white-all">
                <li class="breadcrumb-item">
                    <a href="{{ route('blogs') }}"><i class="fas fa-home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('blogs') }}"> All blogs</a></li>
            </ol>
        </nav>

        <div class="card" ng-app="products">
            <div class="card-header bg-dark text-white-all">
                <h4>Update  Blog</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('blogs.update',$blogs->id) }}" role="form" class="needs-validation"
                    id="formAddCustomer" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Enter Title" value="{{ $blogs->title }}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="image_url">Change Cover Image</label>
                                            <input type="file" name="image_url" id="image_url" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Description <span class="text-danger">*</span></label>
                                            <textarea name="description" id="description" class="form-control summernote"
                                                placeholder="Enter Short Description" rows="10"
                                                required>{{ $blogs->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Existing Cover Image</label>
                                    <div>
                                        @if($blogs->image_url)
                                        <img src="/storage/images/blogs/{{ $blogs->image_url }}" alt="{{ $blogs->title }}" class="img img-responsive img-thumbnail" width="100%">
                                        @else
                                        <span class="text-danger">No Image Uploaded..</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary update_button"> <i class="fa fa-send"></i>
                                    Update</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>

    </section>

@endsection

@section('extracss')

    <style>
        #category_id+ul.category_div {
            height: 130px;
            overflow-x: auto;
        }

        #section_id {
            height: 155px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 42px !important;
        }
    </style>
@endsection

@section('extrajs')


    <script type="text/javascript">
        let name = document.getElementById("name");
        let mobile = document.getElementById("mobile");
        let email = document.getElementById("email");
        let namespan = document.getElementById("namespan");
        let namespan_mobile = document.getElementById("namespan_mobile");
        let namespan_email = document.getElementById("namespan_email");
        name_val = 0;
        email_val = 0;
        mobile_val = 0;
        console.log(name);
        console.log(mobile);
        console.log(email);
        console.log(namespan);
        console.log(namespan_mobile)




        name.addEventListener("blur", function() {

            let regex = /^[a-zA-Z ]{6,30}$/;
            let regexx = /^[a-zA-Z ]{1,6}$/;

            let str = name.value;
            if (regex.test(str)) {
                console.log(regex.test(str));
                namespan.style.display = "none";
                name.style.border = "2px solid green";
                name_val = 1;
            } else if (regexx.test(str)) {
                namespan.style.display = "block";
                name.style.border = "2px solid red";
                namespan.innerHTML =
                    "Please Enter Maximum 6 Character";
                name_val = 0;

            } else {
                console.log(regex);
                namespan.style.display = "block";
                name.style.border = "2px solid red";
                namespan.style.color = "red";
                namespan.innerHTML =
                    "Please Enter Valid User Name";
                name_val = 0;

            }


        });

        mobile.addEventListener("blur", function() {

            let regex_mobile = /^\d{10}$/;;
            let str = mobile.value;
            if (regex_mobile.test(str)) {
                namespan_mobile.style.display = "none";
                mobile.style.border = "2px solid green";
                mobile_val = 1;

            } else {
                namespan_mobile.style.display = "block";
                mobile.style.border = "2px solid red";
                namespan_mobile.style.color = "red";
                namespan_mobile.innerHTML =
                    "Please Enter 10 Digit Mobile Number";
                mobile_val = 0;

            }
        });


        email.addEventListener("blur", function() {

            let regex_email =
                /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            let str = email.value;
            if (regex_email.test(str)) {
                namespan_email.style.display = "none";
                email.style.border = "2px solid green";
                email_val = 1;

            } else {
                namespan_email.style.display = "block";
                email.style.border = "2px solid red";
                namespan_email.style.color = "red";
                namespan_email.innerHTML =
                    "Please Enter Valid Email Address";
                email_val = 0;

            }
        });
        console.log(email_val && mobile_val && name_val);
        $("#formAddCustomer").submit(function(e) {

            if (email_val == 1 && mobile_val == 1 && name_val == 1) {
                console.log('sended successfully');
                console.log(email_val && mobile_val && name_val);
                console.log(' i m at  sent');


            } else {
                e.preventDefault();
                alert('Please Enter All Fields Properly');
                console.log(email_val && mobile_val && name_val);
                console.log(' i m at not sent');

            }
        });
    </script>
@endsection
