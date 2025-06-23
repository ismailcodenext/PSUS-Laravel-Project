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
      <h2 class="heading">Home About Update</h2>
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
                            id="UpdateHomeAboutImage">
                          <input class="d-none" id="updateID">
                        </div>
                      </div>
                                
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-row col-12">
                <label for="">Update Home About Title *</label>
                <input type="text" placeholder="Update Home About Title-1 *" id="UpdateHomeAboutTitle_1" required />
              </div>
              <div class="form-row col-12">
                <label for="">Update Home About Title *</label>
                <input type="text" placeholder="Update Home About Title-1 Description *" id="UpdateHomeAboutTitle_1_Desc" required />
              </div>
              <div class="form-row col-12">
                <label for="">Update Home About Title *</label>
                <input type="text" placeholder="Update Home About Title-2 *" id="UpdateHomeAboutTitle_2" required />
              </div>
              <div class="form-row col-12">
                <label for="">Update Home About Description *</label>
                <input type="text" placeholder="Update Home About Title-2 Description *" id="UpdateHomeAboutTitle_2_Desc" required />
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
      let res = await axios.post("/api/home-about-by-id", {
        id: id.toString()
      }, HeaderToken());
      hideLoader();

      // Populate the form with the fetched data
      let data = res.data.rows;
      document.getElementById('UpdateHomeAboutTitle_1').value = data.title_1;
      document.getElementById('UpdateHomeAboutTitle_1_Desc').value = data.title_1_desc;
      document.getElementById('UpdateHomeAboutTitle_2').value = data.title_2;
      document.getElementById('UpdateHomeAboutTitle_2_Desc').value = data.title_2_desc;
      updatePreview(document.getElementById('UpdateHomeAboutImage'), data.img_url);
      openModal(document.getElementById('exampleModal'));

    } catch (e) {
      unauthorized(e.response.status);
    }
  }



  // Update Function
  async function Update() {
    try {
      // Collect form data
      let UpdateHomeAboutTitle_1 = document.getElementById('UpdateHomeAboutTitle_1').value;
      let UpdateHomeAboutTitle_1_Desc = document.getElementById('UpdateHomeAboutTitle_1_Desc').value;
      let UpdateHomeAboutTitle_2 = document.getElementById('UpdateHomeAboutTitle_2').value;
      let UpdateHomeAboutTitle_2_Desc = document.getElementById('UpdateHomeAboutTitle_2_Desc').value;
      let UpdateHomeAboutImage = document.getElementById('UpdateHomeAboutImage').files[0];
      let updateID = document.getElementById('updateID').value;

      let formData = new FormData();
      formData.append('id', updateID);
      formData.append('title_1', UpdateHomeAboutTitle_1);
      formData.append('title_1_desc', UpdateHomeAboutTitle_1_Desc);
      formData.append('title_2', UpdateHomeAboutTitle_2);
      formData.append('title_2_desc', UpdateHomeAboutTitle_2_Desc);

      if (UpdateHomeAboutImage) {
        formData.append('img', UpdateHomeAboutImage);
      }

      const config = {
        headers: {
          'content-type': 'multipart/form-data',
          ...HeaderToken().headers
        }
      };

      showLoader(); // Show loader when submitting

      let res = await axios.post("/api/home-about-update", formData, config);
      hideLoader(); // Hide loader after request completion

      if (res.data.status === "success") {
        successToast(res.data.message); // Show success message
        const updatemodal1 = document.getElementById('exampleModal');
        closeModal(updatemodal1); // Close modal after update
        await getList(); // Refresh the brand list
      } else {
        errorToast(res.data.message); // Show error message if update failed
      }

    } catch (e) {
      unauthorized(e.response.status); // Handle unauthorized or other errors
    }
  }
</script>