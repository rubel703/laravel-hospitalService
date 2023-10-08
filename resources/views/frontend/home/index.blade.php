@extends('frontend.master')

@section('title', 'Home')

@section('content')
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                        <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                        < class="mb-4 pr-5">
                        Ensuring good health for all classes of people is our first goal. So you can trust us. Don't
                         Worry!
                        </p>
                        {{-- <div class="btn-container ">
                        <a href="appoinment.html" target="_blank"
                            class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i
                                class="icofont-simple-right ml-2  "></i></a>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>24 Hours Service</span>
                            <h4 class="mb-3">Online Appoinment</h4>
                            <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of
                                family medicine.</p>
                            <a href="appoinment.html" class="btn btn-main btn-round-full">Make a appoinment</a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Timing schedule</span>
                            <h4 class="mb-3">Working Hours</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span>Emegency Cases</span>
                            <h4 class="mb-3">1-800-700-6200</h4>
                            <p>Get ALl time support for emergency.We have introduced the principle of family
                                medicine.Get Conneted with us for any urgency .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/img-1.jpg" alt=""
                            class="img-fluid">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/img-2.jpg" alt=""
                            class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/img-3.jpg" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Personal care <br>& healthy living</h2>
                        <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti
                            ipsum officia dolores repellat laudantium obcaecati neque.</p>

                        <a href="{{ route('service') }}" class="btn btn-main-2 btn-round-full btn-icon">Services<i
                                class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section ">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3">10</span>K
                            <p>Happy People</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3">700</span>+
                            <p>Surgery Comepleted</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3">40</span>+
                            <p>Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3">5</span>
                            <p>Worldwide Branch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section service gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Our's Dedicated Doctors Profile</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>These are our dedicated doctors. Those who sere our patients round the clock moreover their
                            achievement and reputation are spread the country.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($doctor as $doctors)
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="service-item mb-4">
                            <div class="mb-3">
                                <a href="#"><img src="{{ $doctors->image }}" alt="" height="400px"
                                        width="90%" class="ml-4" style="border-radius: 30px"></a>
                            </div>
                            <div>
                                <a href="#">
                                    <h3 class="ml-4">{{ $doctors->name }}</h3>
                                </a>
                            </div>
                            <div>
                                <p class="ml-4">{{ $doctors->designition }}</p>
                            </div>
                            <button class="btn btn-success ml-4" style="border-radius: 30px;"><a
                                    href="#">Details</a></button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section appoinment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="appoinment-content">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/img-3.jpg" alt=""
                            class="img-fluid">
                        <div class="emergency">
                            <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>01824089282</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 ">
                    <div class="appoinment-wrap mt-5 mt-lg-0">
                        <h2 class="mb-2 title-color">Book Appoinment</h2>
                        <p class="mb-4"><br />.</p>
                        @if (Session::get('notification'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('notification') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <form id="#" class="appoinment-form" method="POST"
                            action="{{ route('storeappoinment') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1" name="dept_name">
                                            <option>Choose Department</option>
                                            @foreach ($department as $dept)
                                                <option name="dept_name">{{ $dept->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect2" name="doctor_name">
                                            <option>Select Doctors</option>
                                            @foreach ($doctor as $doctors)
                                                <option name="doctor_name">{{ $doctors->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="date" id="date" type="text" class="form-control"
                                            placeholder="dd/mm/yyyy">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="time" id="time" type="text" class="form-control"
                                            placeholder="Time">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="phone" id="phone" type="Number" class="form-control"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-2 mb-4">
                                <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit"class="btn btn-info">Make Appoinment<i
                                    class="icofont-simple-right ml-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section testimonial-2 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>We served over 1000+ Patients</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Ensuring good health for all classes of people is our first goal</br>So you can trust us. Don't
                            Worry!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 testimonial-wrap-2">
                    <div class="testimonial-block style-2  gray-bg">
                        <i class="icofont-quote-right"></i>

                        <div class="testimonial-thumb">
                            <img src="{{ asset('/') }}/frontend-assets/images/team/img 2.png" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info ">
                            <h4>Amazing service!</h4>
                            <span>Hossain Rubel</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('/') }}/frontend-assets/images/team/test-thumb2.jpg" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Expert doctors!</h4>
                            <span>Mst. Hena</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>

                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('/') }}/frontend-assets/images/team/img-4.jpg" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Good Support!</h4>
                            <span>Alex Jihan</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>

                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('/') }}/frontend-assets/images/team/test-thumb4.jpg" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Nice Environment!</h4>
                            <span>Partho Sarothi</span>
                            <p class="mt-4">
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('/') }}/frontend-assets/images/team/img-6.png" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Modern Service!</h4>
                            <span>David Jonson</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section clients">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>Partners who support us</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>They are our very loyal partners, who have always supported us and are by our side.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row clients-logo">
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/1.png" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/2.png" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/3.png" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/4.png" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/5.png" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/6.png" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/3.png" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/4.png" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="images/about/5.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('/') }}/frontend-assets/images/about/6.png" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
