@extends('layout.master')
@section('title','Contact Page')
@section('content')
@include('components.front-end.compnents.navbar')

<!-- Contact Hero Section Start -->
<section id="contact_hero_section">
    <div class="container">
        <div class="contact_hero">
            <div class="contact_hero_content">
                <h1>Contact</h1>
                <div class="contact_hero_btn">
                    <a href="./index.html">Home</a>
                    <a href="">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Hero Section End -->

<!-- Contact Section Start -->
<section id="contact_section_items">
    <div class="container">
        <div class="contact_section_item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_section_item_img">
                        <img src="{{asset('front-end/assets/img/contact-us/page-hero-img.jpg')}}" alt="Sample Image">
                    </div>
                </div>
                <div class="col-lg-6">
                      @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                    <div class="contact_section_items">
                        <div class="contact_section_form_item">
                            <h2 class="contact_section_form_heading">WELCOME TO PSUS FORM</h2>
                          
                            <form action="{{ route('contact.send') }}" method="POST">
                                @csrf
                                <div class="contact_section_form_grid">
                                    <div class="contact_section_form_row_category">
                                        <input type="text" name="first_name" placeholder="First" required>
                                        <input type="text" name="last_name" placeholder="Last">
                                    </div>
                                    <div class="contact_section_form_row_category">
                                        <input type="email" name="email" placeholder="Email">
                                        <input type="number" name="mobile" placeholder="Phone" required>
                                    </div>
                                    <div class="contact_section_form_row_category">
                                        <input type="text" name="city" placeholder="City">
                                        <input type="text" name="region" placeholder="Region">
                                    </div>
                                    <textarea class="contact_section_form_textarea"
                                        name="description" placeholder="Enter your message here..."></textarea>
                                </div>
                                <div class="contact_us_submit_btn">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Contact Section Map Start -->
<section id="contact_section_map_items">
    <div class="container">
        <div class="contact_section_map_iframe">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29211.915849290053!2d90.345884!3d23.765578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1003292f1b7%3A0x95c9031f71bd1ba3!2sAMAN%20(Association%20for%20Mass%20Advancement%20Network)!5e0!3m2!1sen!2sbd!4v1736682988624!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- Contact Section Map End -->

@include('components.front-end.compnents.footer')

@endsection