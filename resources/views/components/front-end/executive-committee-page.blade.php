@extends('layout.master')
@section('title','Executive Committee Page')
@section('content')
@include('components.front-end.compnents.navbar')


<!-- Message From Chairman Hero Section Start -->
<section id="message_chairman_hero_section">
    <div class="container">
        <div class="message_chairman_hero">
            <div class="message_chairman_hero_content">
                <h1>Message Form PSUS Executive
                    Committee</h1>
            </div>
        </div>
    </div>
</section>
<!-- Message From Chairman Hero Section End -->

<!-- PSUS Executive Committee Section Start -->
<section id="psus_executive_committee">
    <div class="container">
        <div class="psus_executive_committee_table">
            <h1 class="psus_executive_committee_title">PSUS Executive Committee</h1>
            <table class="committee_table">
                <thead class="committee_head">
                    <tr class="committee_row">
                        <th class="committee_cell_heading">SL NO</th>
                        <th class="committee_cell_heading">Name & Address</th>
                        <th class="committee_cell_heading">Nationality</th>
                        <th class="committee_cell_heading">Organization</th>
                        <th class="committee_cell_heading">Designation</th>
                    </tr>
                </thead>
                <tbody class="committee_body">
                    <tr class="committee_row">
                        <td class="committee_cell">01</td>
                        <td class="committee_cell">Afroza Khan</td>
                        <td class="committee_cell">Bangladeshi</td>
                        <td class="committee_cell">Protidhwani Somaj Unnayan Sangstha (PSUS)</td>
                        <td class="committee_cell">Chairman</td>
                    </tr>
                    <tr class="committee_row">
                        <td class="committee_cell">02</td>
                        <td class="committee_cell">Md. Jamil Khan</td>
                        <td class="committee_cell">Bangladeshi</td>
                        <td class="committee_cell">Protidhwani Somaj Unnayan Sangstha (PSUS)</td>
                        <td class="committee_cell">Vice-Chairman</td>
                    </tr>
                    <tr class="committee_row">
                        <td class="committee_cell">03</td>
                        <td class="committee_cell">Most Bulbulea Zannat</td>
                        <td class="committee_cell">Bangladeshi</td>
                        <td class="committee_cell">Protidhwani Somaj Unnayan Sangstha (PSUS)</td>
                        <td class="committee_cell">Cashier</td>
                    </tr>
                    <tr class="committee_row">
                        <td class="committee_cell">04</td>
                        <td class="committee_cell">Md. Abdul Haque</td>
                        <td class="committee_cell">Bangladeshi</td>
                        <td class="committee_cell">Protidhwani Somaj Unnayan Sangstha (PSUS)</td>
                        <td class="committee_cell">Executive Director</td>
                    </tr>
                    <tr class="committee_row">
                        <td class="committee_cell">05</td>
                        <td class="committee_cell">A K M Fazlul Haque</td>
                        <td class="committee_cell">Bangladeshi</td>
                        <td class="committee_cell">Protidhwani Somaj Unnayan Sangstha (PSUS)</td>
                        <td class="committee_cell">Executive Member</td>
                    </tr>
                    <tr class="committee_row">
                        <td class="committee_cell">06</td>
                        <td class="committee_cell">Md Aktaruzzaman</td>
                        <td class="committee_cell">Bangladeshi</td>
                        <td class="committee_cell">Protidhwani Somaj Unnayan Sangstha (PSUS)</td>
                        <td class="committee_cell">Executive Member</td>
                    </tr>
                    <tr class="committee_row">
                        <td class="committee_cell">07</td>
                        <td class="committee_cell">Md. Shafiqul Islam</td>
                        <td class="committee_cell">Bangladeshi</td>
                        <td class="committee_cell">Protidhwani Somaj Unnayan Sangstha (PSUS)</td>
                        <td class="committee_cell">Executive Member</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- PSUS Executive Committee Section End -->

<!-- Subscription Start -->
<div id="subscription_items" style="background:#85a947;">
    <div class="container">
        <div class="subscription_bar_item">
            <div class="subscription_bar">
                <div class="subscription_bar_img">
                    <a href="./index.html"><img src="{{asset('front-end/assets/img/footer-logo.png')}}" alt=""></a>
                </div>
                <div class="input_container">
                    <input type="email" placeholder="psus.pabna@yahoo.com" id="email" class="professional_input">
                    <a onclick="subscribe()" class="professional_button" href="">Subscribe</a>
                </div>
                <div class="social_wrapper">
                    <div class="social">
                        <a href=""><i class="fa-brands fa-facebook facebook_icon"></i></a>
                        <a href=""><i class="fa-brands fa-square-x-twitter twitter_icon"></i></a>
                        <a href=""><i class="fa-brands fa-instagram instagram_icon"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin linkedin_icon"></i></a>
                        <a href=""><i class="fa-brands fa-youtube youtube_icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscription_under_line">
    </div>
</div>
<!-- Duplicate Section Start -->
<div id="subscription_items_1" style="background: #85a947;">
    <div class="container">
        <div class="subscription_bar_item_1">
            <div class="subscription_bar_1">
                <div class="subscription_bar_img_1">
                    <img src="{{asset('front-end/assets/img/footer-logo.png')}}" alt="">
                </div>
                <div class="input_container_1">
                    <input type="email" placeholder="psus.pabna@yahoo.com" id="email" class="professional_input_1">
                    <a onclick="subscribe()" class="professional_button_1" href="">Subscribe</a>
                </div>
                <div class="social_wrapper_1">
                    <div class="social_1">
                        <a href=""><i class="fa-brands fa-facebook facebook_icon_1"></i></a>
                        <a href=""><i class="fa-brands fa-square-x-twitter twitter_icon_1"></i></a>
                        <a href=""><i class="fa-brands fa-instagram instagram_icon_1"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin linkedin_icon_1"></i></a>
                        <a href=""><i class="fa-brands fa-youtube youtube_icon_1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscription_under_line_1">
    </div>
</div>
<!-- Duplicate Section End -->
<!-- Subscription End -->

@include('components.front-end.compnents.footer')

@endsection