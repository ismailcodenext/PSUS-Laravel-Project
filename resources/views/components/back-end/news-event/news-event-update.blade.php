<style>
  #exampleModal .modal-dialog {
    max-width: 40%;
    height: auto;
  }
  .preview-img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 5px;
    margin-right: 5px;
  }
</style>

<!-- Action Button Edit Modal-2 Start -->
<section class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close-btn close" data-bs-dismiss="modal" aria-label="Close">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <h2 class="heading">News Event Update</h2>
      <div id="popup-modal">
        <form>
          <div class="row">
            <div class="col-12">
              <!-- Banner Image Upload -->
              <div class="mb-2">
                <div class="upload-profile">
                  <div class="item">
                    <div class="col-md-12">
                      <div class="d-flex align-items-center mt-3">
                        <img class="w-25 me-3" id="previewBannerImg" src="{{ asset('images/default.jpg') }}" />
                        <div>
                          <input oninput="previewSingleImage(this, 'previewBannerImg')" type="file" class="form-control" id="UpdateNewsEventBannerImg">
                          <input type="hidden" class="d-none" id="updateID">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Multiple Images Upload -->
              <div class="mb-2 mt-3">
                <div class="upload-profile">
                  <div class="item">
                    <div class="col-md-12">
                      <div class="d-flex align-items-center mt-3">
                        <div>
                          <input oninput="previewMultipleImages(this, 'multiImagePreview')" multiple type="file" class="form-control" id="UpdateNewsEventImg">
                          <div class="d-flex gap-2 flex-wrap mt-2" id="multiImagePreview"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Text Inputs -->
              <div class="form-row col-12">
                <label for="">News Event Title</label>
                <input type="text" placeholder="Update News Event Title *" id="UpdateNewsEventTitle" required />
              </div>
              <div class="form-row col-12">
                <label for="">News Event Description *</label>
                <textarea id="UpdateNewsEventDescription" cols="30" rows="10" placeholder="Enter News Description *"></textarea>
              </div>
              <div class="form-row col-12">
                <label for="">News Event Status *</label>
                <select class="status-select" id="UpdateNewsEventStatus">
                  <option value="">Select Status</option>
                  <option value="Active">Active</option>
                  <option value="InActive">Inactive</option>
                </select>
              </div>
            </div>
          </div>

          <div class="actions">
            <button onclick="Update()" type="button" class="btn-save">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  async function FillUpUpdateForm(id) {
  try {
    document.getElementById('updateID').value = id;
    showLoader();

    let res = await axios.post("/api/news-event-by-id", {
      id: id
    }, HeaderToken());

    hideLoader();
    let data = res.data.rows;

    // Set form values
    document.getElementById('UpdateNewsEventTitle').value = data.event_heading;
    document.getElementById('UpdateNewsEventDescription').value = data.event_description;
    document.getElementById('UpdateNewsEventStatus').value = data.status;

    // Set banner image
    document.getElementById('previewBannerImg').src = '/' + encodeURI(data.banner_image);

    // Clear previous images
    let imageContainer = document.getElementById('multiImagePreview');
    imageContainer.innerHTML = '';

    // Handle multiple images
    if (typeof data.img_url === 'string' && data.img_url !== '') {
      let cleanedString = data.img_url
        .replace(/&quot;/g, '')
        .replace(/"/g, '')
        .replace(/[\[\];]/g, '')
        .trim();

      let imageUrls = cleanedString
        .split(',')
        .map(url => url.trim())
        .filter(url => url !== '');

      console.log("Parsed image URLs:", imageUrls);

      imageUrls.forEach(path => {
        let img = document.createElement('img');
        img.src = '/' + encodeURI(path); // Properly encoded
        img.className = 'preview-img';
        img.onerror = () => console.error(`Image failed to load: ${img.src}`);
        imageContainer.appendChild(img);
      });
    }

    openModal(document.getElementById('exampleModal'));
  } catch (e) {
    unauthorized(e.response?.status || 500);
  }
}


  async function Update() {
    try {
      let formData = new FormData();
      formData.append('id', document.getElementById('updateID').value);
      formData.append('event_heading', document.getElementById('UpdateNewsEventTitle').value);
      formData.append('event_description', document.getElementById('UpdateNewsEventDescription').value);
      formData.append('status', document.getElementById('UpdateNewsEventStatus').value);

      const bannerFile = document.getElementById('UpdateNewsEventBannerImg').files[0];
      const imgFiles = document.getElementById('UpdateNewsEventImg').files;

      if (bannerFile) formData.append('banner_image', bannerFile);
      for (let i = 0; i < imgFiles.length; i++) {
        formData.append('img[]', imgFiles[i]);
      }

      showLoader();
      const res = await axios.post("/api/news-event-update", formData, {
        headers: {
          'Content-Type': 'multipart/form-data',
          ...HeaderToken().headers
        }
      });
      hideLoader();

if (res.data.status === "success") {
  successToast(res.data.message);
  closeModal(document.getElementById('exampleModal'));
  await getList();
  // reload page if you want full refresh:
  location.reload();
} else {
  errorToast(res.data.message);
}

    } catch (e) {
      unauthorized(e.response.status);
    }
  }

  function previewSingleImage(input, imgID) {
    const file = input.files[0];
    if (file) {
      document.getElementById(imgID).src = URL.createObjectURL(file);
    }
  }

  function previewMultipleImages(input, containerID) {
    const files = input.files;
    const container = document.getElementById(containerID);
    container.innerHTML = '';

    Array.from(files).forEach(file => {
      const img = document.createElement('img');
      img.src = URL.createObjectURL(file);
      img.className = 'preview-img';
      container.appendChild(img);
    });
  }
</script>
