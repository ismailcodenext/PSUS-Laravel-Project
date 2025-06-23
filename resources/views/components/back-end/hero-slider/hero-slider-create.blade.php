<div class="main-content" id="myModal">
    <div class="page-content">
          <!-- Create Product Modal Start -->
          <section id="createProduct" class="financemodal">
            <div class="modal-content">
              <a class="close-btn closes">
                <i class="fa-solid fa-xmark"></i>
              </a>
              <h2 class="heading">Add New Slider</h2>
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
                                                <input type="file" id="HeroSliderImg" oninput="newImg.src=window.URL.createObjectURL(this.files[0])" class="custom-file-input" aria-label="Upload Photo" />
                                            </label>
                                            <p>PNG, JPEG, or GIF (up to 1 MB)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-row">
                                <input type="text" placeholder="Hero Slider Title *" id="HeroSliderTitle" required />
                            </div>
                            <div class="col">
                                <div class="form-row">
                                    <textarea name="address_details" id="HeroSliderDescription" cols="30" rows="10"
                                        placeholder="Enter Slider Description *"></textarea>
                                </div>

                            </div>
                            <div class="form-row">
                                <label class="country">
                                    <select name="status" id="HeroSliderStatus" required>
                                        <option value="">Select Status</option>
                                        <option value="Active">Active</option>
                                        <option value="InActive">Inactive</option>
                                    </select>
                                </label>
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
        let HeroSliderTitle = document.getElementById('HeroSliderTitle').value;
        let HeroSliderDescription = document.getElementById('HeroSliderDescription').value;
        let HeroSliderStatus = document.getElementById('HeroSliderStatus').value;

        let imgInput = document.getElementById('HeroSliderImg');
        let imgFile = imgInput.files[0];

        // Validation
        if (HeroSliderTitle.length === 0) {
            errorToast("Slider Title Required !");
            return; // Exit the function if validation fails
        } else if (HeroSliderDescription.length === 0) {
            errorToast("Slider Description Required !");
            return;
        }else if (HeroSliderStatus.length === 0) {
            errorToast("Slider Status Required !");
            return;
        }
        else {
            // Creating form data for submission
            let formData = new FormData();
            formData.append('title', HeroSliderTitle);
            formData.append('discription', HeroSliderDescription);
            formData.append('status', HeroSliderStatus);
            formData.append('img_url', imgFile); // Append image file

            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    ...HeaderToken().headers
                }
            };

            // Sending the form data to the server
            let res = await axios.post("/api/hero-slider-create", formData, config);

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
