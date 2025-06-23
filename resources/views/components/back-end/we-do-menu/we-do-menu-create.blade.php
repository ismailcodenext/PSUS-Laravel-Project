<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet" />

<!-- Modal HTML -->
<div class="main-content" id="myModal">
  <div class="page-content">
    <!-- Create Product Modal Start -->
    <section id="createProduct" class="financemodal">
      <div class="modal-content">
        <a class="close-btn closes">
          <i class="fa-solid fa-xmark"></i>
        </a>
        <h2 class="heading">Add New We Do</h2>
        <div id="popup-modal">
          <form id="signup" onsubmit="return Save(event)">
                  <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <div class="upload-profile">
                                        <div class="item">
                                            <div class="img-box">
                                                <img id="newImg" src="{{asset('back-end/assets/icons/upload-img.svg')}}" alt="">
                                            </div>
                                            <div class="profile-wrapper">
                                                <label class="custom-file-input-wrapper">
                                                    <input type="file" id="WeDoImg" oninput="newImg.src=window.URL.createObjectURL(this.files[0])" class="custom-file-input" aria-label="Upload Photo" />
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
                  <input type="text" placeholder="We Do Short Title *" id="WeDoShortTitle" required />
                </div>
              
              </div>
              <div class="col-lg-6">
                
                <div class="form-row">
                  <input type="text" placeholder="We Do Long Title *" id="WeDoLongTitle" />
                </div>
              </div>
              <div class="col">
                <div class="form-row">
                  <textarea name="short_description" placeholder="Enter We Do Short Description *" id="WeDoShortDescription"></textarea>
                </div>
                <div class="form-row">
                  <textarea id="WeDoContentDescription"></textarea>
                </div>
                <div class="form-row">
                  <label class="country">
                    <select name="status" id="WeDoStatus" required>
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

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<!-- Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- Summernote Init after page load -->
<script>
  $(document).ready(function () {
    setTimeout(() => {
      $('#WeDoContentDescription').summernote({
        placeholder: 'Enter We Do Description *',
        height: 300
      });
    }, 300); // give time for modal to fully render if dynamically shown
  });
</script>

<!-- Save Function -->
<script>
  async function Save(event) {
    event.preventDefault();

    try {
      let WeDoShortTitle = document.getElementById('WeDoShortTitle').value;
      let WeDoLongTitle = document.getElementById('WeDoLongTitle').value;
      let WeDoShortDescription = document.getElementById('WeDoShortDescription').value;
      let WeDoDescription = $('#WeDoContentDescription').summernote('code');
      let WeDoStatus = document.getElementById('WeDoStatus').value;

        let imgInput = document.getElementById('WeDoImg');
            let imgFile = imgInput.files[0];

      if (WeDoShortTitle.trim() === "") {
        errorToast("We Do Short Title Required!");
        return;
      }

      if (WeDoLongTitle.trim() === "") {
        errorToast("We Do Long Title Required!");
        return;
      }

      if (WeDoStatus.trim() === "") {
        errorToast("We Do Status Required!");
        return;
      }

      let formData = new FormData();
      formData.append('img_url', imgFile); // Append image file
      formData.append('short_title', WeDoShortTitle);
      formData.append('long_title', WeDoLongTitle);
      formData.append('short_description', WeDoShortDescription);
      formData.append('content', WeDoDescription);
      formData.append('status', WeDoStatus);

      const config = {
        headers: {
          'Content-Type': 'multipart/form-data',
          ...HeaderToken().headers
        }
      };

      let res = await axios.post("/api/we-do-page-create", formData, config);

      if (res.data['status'] === "success") {
        successToast(res.data['message']);
        document.getElementById("signup").reset();
        $('#WeDoContentDescription').summernote('reset');
        closeModal(document.getElementById('myModal'));
        setTimeout(() => location.reload(), 500);
      } else {
        errorToast(res.data['message']);
      }
    } catch (e) {
      unauthorized(e.response.status);
    }
  }

  function closeModal(modal) {
    modal.style.display = 'none';
  }
</script>

