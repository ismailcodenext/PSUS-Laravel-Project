<div class="main-content" id="myModal">
    <div class="page-content">
          <!-- Create Product Modal Start -->
          <section id="createProduct" class="financemodal">
            <div class="modal-content">
              <a class="close-btn closes">
                <i class="fa-solid fa-xmark"></i>
              </a>
              <h2 class="heading">Add New Company Info</h2>
              <div id="popup-modal">
                <form id="signup" onsubmit="return Save(event)">
                    <div class="row">
                        <div class="col">
                            <div class="mb-2">
                                <div class="upload-profile">
                                    <div class="item">
                                        <div class="img-box">
                                            <img id="newImg"  src="{{asset('back-end/assets/icons/upload-img.svg')}}" alt="">
                                        </div>
                                        <div class="profile-wrapper">
                                            <label class="custom-file-input-wrapper">
                                                <input type="file" id="CompanyInfoImg" oninput="newImg.src=window.URL.createObjectURL(this.files[0])" class="custom-file-input" aria-label="Upload Photo" />
                                            </label>
                                            <p>PNG, JPEG, or GIF (up to 1 MB)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-row">
                                <input type="text" placeholder="Company Info Email *" id="CompanyInfoEmail" required />
                            </div>
                            <div class="form-row">
                                <input type="text" placeholder="Company Info Address *" id="CompanyInfoAddress" required />
                            </div>
                            <div class="form-row">
                                <input type="text" placeholder="Company Info Mobile *" id="CompanyInfoMobile" required />
                            </div>
                            <div class="form-row">
                                    <textarea name="address_details" id="CompanyInfoDescription" cols="30" rows="10"
                                        placeholder="Company Info Description *"></textarea>
                                </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-row">
                                <input type="text" placeholder="Company Info fb_link *" id="CompanyInfofb_link" required />
                            </div>
                            <div class="form-row">
                                <input type="text" placeholder="Company Info insta_link *" id="CompanyInfoinsta_link" required />
                            </div>
                            <div class="form-row">
                                <input type="text" placeholder="Company Info twitter_link *" id="CompanyInfotwitter_link" required />
                            </div>
                            <div class="form-row">
                                <input type="text" placeholder="Company Info linkedin_link *" id="CompanyInfolinkedin_link" required />
                            </div>
                            <div class="form-row">
                                <input type="text" placeholder="Company Info youtube_link *" id="CompanyInfoyoutube_link" required />
                            </div>
                            </div>
                    </div>
                    <div class="actions">
                        <button type="submit" class="btn-save">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </section>
          <!-- Create Product Modal End -->
    </div>
</div>


<script>
    async function Save(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    try {
        let CompanyInfoEmail = document.getElementById('CompanyInfoEmail').value;
        let CompanyInfoAddress = document.getElementById('CompanyInfoAddress').value;
        let CompanyInfoMobile = document.getElementById('CompanyInfoMobile').value;
        let CompanyInfofb_link = document.getElementById('CompanyInfofb_link').value;
        let CompanyInfoinsta_link = document.getElementById('CompanyInfoinsta_link').value;
        let CompanyInfotwitter_link = document.getElementById('CompanyInfotwitter_link').value;
        let CompanyInfolinkedin_link = document.getElementById('CompanyInfolinkedin_link').value;
        let CompanyInfoyoutube_link = document.getElementById('CompanyInfoyoutube_link').value;
        let CompanyInfoDescription = document.getElementById('CompanyInfoDescription').value;


        let imgInput = document.getElementById('CompanyInfoImg');
        let imgFile = imgInput.files[0];

        // Validation
        if (CompanyInfoEmail.length === 0) {
            errorToast("Company Info Email Required !");
            return; // Exit the function if validation fails
        } else if (CompanyInfoAddress.length === 0) {
            errorToast("Company Info Address Required !");
            return;
        } else if (CompanyInfoMobile.length === 0) {
            errorToast("Company Info Mobile Required !");
            return;
        } else if (CompanyInfofb_link.length === 0) {
            errorToast("Company Info fb_link Required !");
            return;
        } else if (CompanyInfoinsta_link.length === 0) {
            errorToast("Company Info insta_link Required !");
            return;
        } else if (CompanyInfotwitter_link.length === 0) {
            errorToast("Company Info twitter_link Required !");
            return;
        } else if (CompanyInfolinkedin_link.length === 0) {
            errorToast("Company Info linkedin_link Required !");
            return;
        } else if (CompanyInfoyoutube_link.length === 0) {
            errorToast("Company Info youtube_link Required !");
            return;
        } else if (CompanyInfoDescription.length === 0) {
            errorToast("Company Info Description Required !");
            return;
        }
        else {
            // Creating form data for submission
            let formData = new FormData();
            formData.append('email', CompanyInfoEmail);
            formData.append('address', CompanyInfoAddress);
            formData.append('mobile', CompanyInfoMobile);
            formData.append('fb_link', CompanyInfofb_link);
            formData.append('insta_link', CompanyInfoinsta_link);
            formData.append('twitter_link', CompanyInfotwitter_link);
            formData.append('linkedin_link', CompanyInfolinkedin_link);
            formData.append('youtube_link', CompanyInfoyoutube_link);
            formData.append('description', CompanyInfoDescription);
            formData.append('img_url', imgFile); // Append image file

            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    ...HeaderToken().headers
                }
            };

            // Sending the form data to the server
            let res = await axios.post("/api/company-info-create", formData, config);

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


function closeModal(modal) {
    modal.style.display = 'none';
}

</script>
