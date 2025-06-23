<style>
  #exampleModal .modal-dialog {
    max-width: 40%;
    height: auto;
  }
</style>

<!-- Action Button Edit Modal-2 Start -->
<section
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button
        type="button"
        class="close-btn close"
        data-bs-dismiss="modal"
        aria-label="Close">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <h2 class="heading">Company Info Update</h2>
      <div id="popup-modal">
        <form>
          <div class="row">
            <div class="col-12">
              <div class="mb-2">
                <div class="upload-profile">
                  <div class="item">
                    <div class="col-md-12">
                      <div class="d-flex align-items-center mt-3">
                        <img class="w-25 me-3" id="oldImg"
                          src="{{ asset('images/default.jpg') }}" />
                        <div>
                          <input oninput="updatePreview(this)" type="file" class="form-control"
                            id="UpdateCompanyInfoImage">
                          <input class="d-none" id="updateID">
                        </div>
                      </div>
                                
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-row col-12">
                    <label for="">Update Email *</label>
                    <input type="text" placeholder="Update Email *" id="UpdateCompanyInfoEmail" required />
                  </div>
                  <div class="form-row col-12">
                    <label for="">Update Address *</label>
                    <input type="text" placeholder="Update Address *" id="UpdateCompanyInfoAddress" required />
                  </div>
                  <div class="form-row col-12">
                    <label for="">Update Mobile *</label>
                    <input type="text" placeholder="Update Mobile *" id="UpdateCompanyInfoMobile" required />
                  </div>
                  <div class="form-row col-12">
                    <label for="">Update Description *</label>
                    <textarea name="address_details" id="UpdateCompanyInfodescription" cols="30" rows="10" placeholder="Update Description"></textarea>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-row col-12">
                    <label for="">Update FB-Link *</label>
                    <input type="text" placeholder="Update FB-Link *" id="UpdateCompanyInfofb_link" required />
                  </div>
                  <div class="form-row col-12">
                    <label for="">Update Insta-Link *</label>
                    <input type="text" placeholder="Update Insta-Link *" id="UpdateCompanyInfoinsta_link" required />
                  </div>
                  <div class="form-row col-12">
                    <label for="">Update twitter-Link *</label>
                    <input type="text" placeholder="Update Twitter-Link *" id="UpdateCompanyInfotwitter_link" required />
                  </div>
                  <div class="form-row col-12">
                    <label for="">Update Linkedin-link *</label>
                    <input type="text" placeholder="Update Linkedin-link *" id="UpdateCompanyInfolinkedin_link" required />
                  </div>
                  <div class="form-row col-12">
                    <label for="">Update Youtube-link *</label>
                    <input type="text" placeholder="Update Youtube-link *" id="UpdateCompanyInfoyoutube_link" required />
                  </div>
                </div>
              </div>
              <div class="actions">
                <button onclick="Update()" class="btn-save">Submit</button>
              </div>

        </form>
      </div>
    </div>
  </div>
</section>

<script>
  async function updatePreview(input, imageUrl) {
    const oldImg = document.getElementById('oldImg');

    if (input.files && input.files[0]) {
      oldImg.src = window.URL.createObjectURL(input.files[0]);
    } else if (imageUrl) {
      oldImg.src = imageUrl;
    } else {
      oldImg.src = "{{ asset('images/default.jpg') }}";
    }
  }

  async function FillUpUpdateForm(id) {
    try {
      // Set the brand id in the hidden input
      document.getElementById('updateID').value = id;
      showLoader();

      // Fetch the brand data by ID
      let res = await axios.post("/api/company-info-by-id", {
        id: id.toString()
      }, HeaderToken());
      hideLoader();

      // Populate the form with the fetched data
      let data = res.data.rows;
      document.getElementById('UpdateCompanyInfoEmail').value = data.email;
      document.getElementById('UpdateCompanyInfoAddress').value = data.address;
      document.getElementById('UpdateCompanyInfoMobile').value = data.mobile;
      document.getElementById('UpdateCompanyInfodescription').value = data.description;
      document.getElementById('UpdateCompanyInfofb_link').value = data.fb_link;
      document.getElementById('UpdateCompanyInfoinsta_link').value = data.insta_link;
      document.getElementById('UpdateCompanyInfotwitter_link').value = data.twitter_link;
      document.getElementById('UpdateCompanyInfolinkedin_link').value = data.linkedin_link;
      document.getElementById('UpdateCompanyInfoyoutube_link').value = data.youtube_link;
      updatePreview(document.getElementById('UpdateCompanyInfoImage'), data.img_url);
      openModal(document.getElementById('exampleModal'));

    } catch (e) {
      unauthorized(e.response.status);
    }
  }


  // Update Brand Script
  async function Update() {
    try {
      let UpdateCompanyInfoEmail = document.getElementById('UpdateCompanyInfoEmail').value;
      let UpdateCompanyInfoAddress = document.getElementById('UpdateCompanyInfoAddress').value;
      let UpdateCompanyInfoMobile = document.getElementById('UpdateCompanyInfoMobile').value;
      let UpdateCompanyInfodescription = document.getElementById('UpdateCompanyInfodescription').value;
      let UpdateCompanyInfofb_link = document.getElementById('UpdateCompanyInfofb_link').value;
      let UpdateCompanyInfoinsta_link = document.getElementById('UpdateCompanyInfoinsta_link').value;
      let UpdateCompanyInfotwitter_link = document.getElementById('UpdateCompanyInfotwitter_link').value;
      let UpdateCompanyInfolinkedin_link = document.getElementById('UpdateCompanyInfolinkedin_link').value;
      let UpdateCompanyInfoyoutube_link = document.getElementById('UpdateCompanyInfoyoutube_link').value;
      let UpdateHeroSliderImage = document.getElementById('UpdateCompanyInfoImage').files[0];
      let updateID = document.getElementById('updateID').value;

      // Validate required fields

      // Prepare form data
      let formData = new FormData();
      formData.append('id', updateID);
      formData.append('email', UpdateCompanyInfoEmail);
      formData.append('address', UpdateCompanyInfoAddress);
      formData.append('mobile', UpdateCompanyInfoMobile);
      formData.append('description', UpdateCompanyInfodescription);
      formData.append('fb_link', UpdateCompanyInfofb_link);
      formData.append('insta_link', UpdateCompanyInfoinsta_link);
      formData.append('twitter_link', UpdateCompanyInfotwitter_link);
      formData.append('linkedin_link', UpdateCompanyInfolinkedin_link);
      formData.append('youtube_link', UpdateCompanyInfoyoutube_link);

      // Append the image if it exists
      if (UpdateCompanyInfoImage) {
        formData.append('img', UpdateCompanyInfoImage);
      }

      // Set the request configuration with headers
      const config = {
        headers: {
          'content-type': 'multipart/form-data',
          ...HeaderToken().headers // Add authorization headers
        }
      };

      showLoader(); // Show loader when submitting

      // Make the request to update the brand
      let res = await axios.post("/api/company-info-update", formData, config);
      hideLoader(); // Hide loader after request completion

      if (res.data.status === "success") {
        successToast(res.data.message);
        const updatemodal1 = document.getElementById('exampleModal');
        closeModal(updatemodal1);
        await getList(); // Refresh the brand list
      } else {
        errorToast(res.data.message);
      }

    } catch (e) {
      unauthorized(e.response.status); // Handle unauthorized or other errors
    }
  }
</script>