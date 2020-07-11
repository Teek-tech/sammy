<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
    <title>Sammy Badaki Consult | Testimonials</title>
</head>
<body>
    @include('layouts.topnav')
    <section class="ftco-section testimony-section">
        <div class="img img-bg border" style="background-image: url(images/bg_4.jpg);"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Happy Clients</h2>
            </div>
            </div>
            <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap py-4">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                            <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                            <div class="pl-3">
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>


    <section class="testimonial-form-section ftco-animate">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="ftco-animate py-5 px-2 mb-3">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong> {{session('success')}}
                          </div>
						@endif
                        <h1 class="mb-3" style="text-align: center">We'd love to hear from you</h1>
                        <h4 style="text-align: center;">Share your experience with us</h4>
                        <form action="{{route('goodwill')}}" method="POST" id="" name="" class="contactForm">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="name">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" id="name" placeholder="First Name & Last Name">
                                    </div>
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label class="label" for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="#">Message</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message">{{old('message')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn new-btn">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>





      @include('layouts.contactForm')
		
		

      @include('layouts.footer')
</body>
</html>