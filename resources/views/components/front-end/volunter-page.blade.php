    @extends('layout.master')
    @section('title','Volunteer Page')
    @section('content')
    @include('components.front-end.compnents.navbar')

    <!-- About Hero Section Start -->
    <section id="about_hero_section">
        <div class="container">
            <div class="about_hero">
                <div class="about_hero_content">
                    <h1>Volunteer</h1>
                    <div class="about_hero_btn">
                        <a href="{{url('/')}}">Home</a>
                        <a href="">Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Hero Section End -->

    <!-- Volunteer Section Start -->
    <section id="volunteer_section">
        <div class="container">
            <div class="volunteer_form_wrapper">
                <h1 class="volunteer_from_heading">Volunteer Registration Form</h1>
                <form id="volunteerForm" onsubmit="return volunterFormSave(event)">

                    <div class="form_section form-row two-col">
                        <div class="form_group">
                            <label class="form_label">Full Name</label>
                            <input type="text" class="form-control" id="FirstName" placeholder="Enter your name" required />
                        </div>
                        <div class="form_group">
                            <label class="form_label">Email *</label>
                            <input type="email" class="form-control" id="Email" placeholder="Enter your email" />
                        </div>
                    </div>

                    <div class="form_section form-row two-col">
                        <div class="form_group">
                            <label class="form_label">Phone</label>
                            <input type="tel" class="form-control" id="PhoneNumber" placeholder="Enter your phone number" />
                        </div>
                        <div class="form_group">
                            <label class="form_label">Date of Birth</label>
                            <input type="date" class="form-control" id="DateOfBirth" />
                        </div>
                    </div>

                    <div class="form_section form-row two-col">
                        <div class="form_group">
                            <label class="form_label">Password *</label>
                            <input type="password" id="Password" class="form-control" placeholder="Create password"
                                required />
                        </div>
                        <div class="form_group">
                            <label class="form_label">Confirm Password *</label>
                            <input type="password" id="ConfirmPassword" class="form-control"
                                placeholder="Confirm password"  />
                            <div class="error" id="password_error"></div>
                        </div>
                    </div>

                    <div class="form_section">
                        <div class="form_group">
                            <label class="form_label">Gender</label>
                            <select class="form-control" id="Gender" required>
                                <option value="">-- Select Gender --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form_section">
                        <label class="form_label">Permanent Address</label>
                        <div class="form-row four-col">
                            <input type="text" class="form-control" id="Village" placeholder="Village" />
                            <input type="text" class="form-control" id="Union" placeholder="Union" />
                            <input type="text" class="form-control" id="Upazilla" placeholder="Upazilla" />
                            <input type="text" class="form-control" id="District" placeholder="District" />
                        </div>
                    </div>

                    <div class="form_section">
                        <div class="form_group">
                            <label class="form_label">Present Address</label>
                            <input type="text" class="form-control" id="PresentAddress" />
                        </div>
                    </div>

                    <div class="form_section form-row two-col">
                        <div class="form_group">
                            <label class="form_label">Educational Qualification</label>
                            <input type="text" class="form-control" id="EducationalQualification" />
                        </div>
                        <div class="form_group">
                            <label class="form_label">Job Description</label>
                            <input type="text" class="form-control" id="JobDescription" />
                        </div>
                    </div>

                    <div class="form_section">
                        <div class="form_group">
                            <label class="form_label">Past Volunteering Experience (If Any)</label>
                            <textarea rows="3" class="form-control" id="VolunteeringExperience"></textarea>
                        </div>
                        <div class="form_group">
                            <label class="form_label">Co-Curricular Activities (If Any)</label>
                            <textarea rows="3" class="form-control" id="CurricularActivities"></textarea>
                        </div>
                    </div>

                    <div class="form_section form-row two-col">
                        <div class="form_group">
                            <label class="form_label">NID / Birth Certificate</label>
                            <input type="file" class="form-control" id="BirthCertificate" />
                        </div>
                        <div class="form_group">
                            <label class="form_label">Photo</label>
                            <input type="file" id="VolunterPhoto" class="form-control" />
                        </div>
                    </div>

                    <div class="form_section">
                        <div class="form_group">
                            <label class="form_label">Suggestions to improve AMAN's humanitarian activities</label>
                            <textarea rows="4" class="form-control" id="humanitarianactivities" placeholder="Share your ideas..."></textarea>
                        </div>
                    </div>

                    <div class="form_section">
                        <div class="checkbox-group">
                            <input type="checkbox" required />
                            <label class="form_label">I confirm the information provided here is correct</label>
                        </div>
                    </div>

                    <div class="form_footer">
                        <a href="#" class="btn_save btn_link">Save as Draft</a>
                        <button type="submit" class="btn-save btn_submit btn_link">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Volunteer Section End -->


    @include('components.front-end.compnents.footer')
    @endsection