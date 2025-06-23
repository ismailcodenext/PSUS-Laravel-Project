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
<!-- 
    <script>
        async function volunterFormSave(event) {
            event.preventDefault(); // Prevent the default form submission behavior

            try {
                let FirstName = document.getElementById('FirstName').value;
                let Email = document.getElementById('Email').value;
                let PhoneNumber = document.getElementById('PhoneNumber').value;
                let DateOfBirth = document.getElementById('DateOfBirth').value;
                let Password = document.getElementById('Password').value;
                let ConfirmPassword = document.getElementById('ConfirmPassword').value;
                let Gender = document.getElementById('Gender').value;
                let Village = document.getElementById('Village').value;
                let Union = document.getElementById('Union').value;
                let Upazilla = document.getElementById('Upazilla').value;
                let District = document.getElementById('District').value;
                let PresentAddress = document.getElementById('PresentAddress').value;
                let EducationalQualification = document.getElementById('EducationalQualification').value;
                let JobDescription = document.getElementById('JobDescription').value;
                let VolunteeringExperience = document.getElementById('VolunteeringExperience').value;
                let CurricularActivities = document.getElementById('CurricularActivities').value;
                let BirthCertificate = document.getElementById('BirthCertificate').value;
                let VolunterPhoto = document.getElementById('VolunterPhoto').value;
                let humanitarianactivities = document.getElementById('humanitarianactivities').value;

                let imgInput = document.getElementById('VolunterPhoto');
                let imgFile = imgInput.files[0];

                // Validation
                if (FirstName.length === 0) {
                    errorToast("First Name Required !");
                    return; // Exit the function if validation fails
                } else if (PhoneNumber.length === 0) {
                    errorToast("Phone Number Required !");
                    return;
                } else {
                    // Creating form data for submission
                    let formData = new FormData();
                    formData.append('first_name', FirstName);
                    formData.append('email', Email);
                    formData.append('phone', PhoneNumber);
                    formData.append('date_of_birth', DateOfBirth);
                    formData.append('password', Password);
                    formData.append('confirm_password', ConfirmPassword);
                    formData.append('gender', Gender);
                    formData.append('village', Village);
                    formData.append('union', Union);
                    formData.append('upazilla', Upazilla);
                    formData.append('district', District);
                    formData.append('present_address', PresentAddress);
                    formData.append('educational_qualification', EducationalQualification);
                    formData.append('job_description', JobDescription);
                    formData.append('past_volunteering_experience', VolunteeringExperience);
                    formData.append('nid_birth_certificate', CurricularActivities);
                    formData.append('photo', BirthCertificate);
                    formData.append('humanitarian_activities', VolunterPhoto);
                    formData.append('message_name', humanitarianactivities);
                    formData.append('img_url', imgFile); // Append image file

                    const config = {
                        headers: {
                            'content-type': 'multipart/form-data',
                            ...HeaderToken().headers
                        }
                    };

                    // Sending the form data to the server
                    let res = await axios.post("/api/volunteer-registration", formData, config);

                    if (res.data['status'] === "success") {
                        successToast(res.data['message']);
                        document.getElementById("signup").reset();
                        const modal = document.getElementById('myModal');
                        closeModal(modal);
                        setTimeout(() => {
                            location.reload();
                        }, 500);
                    } else {
                        errorToast(res.data['message']);
                    }
                }
            } catch (e) {
                unauthorized(e.response.status);
            }
        }
    </script> -->

    <script>
    async function volunterFormSave(event) {
        event.preventDefault();

        try {
            let form = document.getElementById('volunteerForm');
            let formData = new FormData();

            formData.append('first_name', document.getElementById('FirstName').value);
            formData.append('email', document.getElementById('Email').value);
            formData.append('phone', document.getElementById('PhoneNumber').value);
            formData.append('date_of_birth', document.getElementById('DateOfBirth').value);
            formData.append('password', document.getElementById('Password').value);
            formData.append('confirm_password', document.getElementById('ConfirmPassword').value);
            formData.append('gender', document.getElementById('Gender').value);
            formData.append('village', document.getElementById('Village').value);
            formData.append('union', document.getElementById('Union').value);
            formData.append('upazilla', document.getElementById('Upazilla').value);
            formData.append('district', document.getElementById('District').value);
            formData.append('present_address', document.getElementById('PresentAddress').value);
            formData.append('educational_qualification', document.getElementById('EducationalQualification').value);
            formData.append('job_description', document.getElementById('JobDescription').value);
            formData.append('past_volunteering_experience', document.getElementById('VolunteeringExperience').value);
            formData.append('curricular_activities', document.getElementById('CurricularActivities').value);
            formData.append('humanitarian_activities', document.getElementById('humanitarianactivities').value);

            let nidFile = document.getElementById('BirthCertificate').files[0];
            if (nidFile) formData.append('nid_birth_certificate', nidFile);

            let photoFile = document.getElementById('VolunterPhoto').files[0];
            if (photoFile) formData.append('photo', photoFile);

            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            };

            let res = await axios.post("/api/volunteer-registration", formData, config);

            if (res.data.status === "success") {
                successToast(res.data.message);
                document.getElementById("volunteerForm").reset();
            } else {
                errorToast(res.data.message);
            }
        } catch (e) {
            if (e.response && e.response.status === 422) {
                errorToast("Validation failed. Please check the input.");
            } else {
                errorToast("Something went wrong. Please try again.");
            }
        }
    }
</script>



    @include('components.front-end.compnents.footer')
    @endsection