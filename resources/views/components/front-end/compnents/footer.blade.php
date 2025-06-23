<!-- Footer Section Start -->
<footer id="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer_items">
                    <div class="footer_about_PSUS">
                        <h3 class="footer_about_PSUS_title">About PSUS</h3>
                        <p class="footer_about_PSUS_description" id="footer_about_description"></p>
                    </div>

                    <div class="footer_about_PSUS_call_icon_text_all_item">
                        <div class="footer_about_PSUS_call_icon_text">
                            <div class="footer_about_PSUS_call_icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="footer_about_PSUS_call_text">
                                <a href="" id="footer_about_call"></a>
                            </div>
                        </div>
                        <div class="footer_about_PSUS_sms_icon_text">
                            <div class="footer_about_PSUS_sms_icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="footer_about_PSUS_sms_text">
                                <a href="" id="footer_about_email"></a>
                            </div>
                        </div>
                        <div class="footer_about_PSUS_sms_icon_text">
                            <div class="footer_about_PSUS_sms_icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="footer_about_PSUS_sms_text">
                                <a href="#" id="company_address">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer_items">
                    <div class="footer_about_us">
                        <h3 class="footer_about_us_title">About Us</h3>
                        <div class="footer_about_list">
                            <a href="./index.html">
                                <li>Who Are We</li>
                            </a>
                            <a href="">
                                <li>Careers</li>
                            </a>
                            <a href="">
                                <li>Policy & Governance</li>
                            </a>
                            <a href="">
                                <li>Volunteer</li>
                            </a>
                            <a href="./contact-us.html">
                                <li>Contact Us</li>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer_items">
                    <div class="footer_recent_news">
                        <h3 class="footer_recent_news_title">Recent news</h3>
                        <div class="footer_recent_news_card">
                            <img src="{{asset("front-end/assets/img/home/footer-card-img.jpg")}}" alt="Helping Refugees">
                            <a href="" class="footer_recent_news_heading">Winter Clothes Program</a>
                            <a href="" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- CopyRight Section Start -->
<section id="copyright_section">
    <div class="under_line">
        <div class="container">
            <div class=" copyright_items">
                <div class="copyright_item">
                    <p>© <span class="psus_name">PSUS</span> | 2025 - All Right Reserved</p>
                </div>
                <div class="copyright_item_developed">
                    <p>Developed By <span><a href="https://www.codenextit.com/">CodeNext IT</a></span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CopyRight Section End -->


<!-- Company Info Fotter Start -->


<script>
    async function CompanyFotterInfoData() {
        try {
            const response = await axios.get("/api/company-info-Data");
            const data = response.data.data;

            document.getElementById('footer_about_description').innerHTML = data.description;
            document.getElementById('footer_about_call').innerHTML = data.mobile;
            document.getElementById('footer_about_call').href = 'tel:' + data.mobile;
            document.getElementById('footer_about_email').innerHTML = data.email;
            document.getElementById('footer_about_email').href = 'mailto:' + data.email;
            document.getElementById('company_address').innerHTML = data.address;
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }

    // Fetch data when the page loads
    CompanyFotterInfoData();
</script>

<!-- Company Info Fotter End -->