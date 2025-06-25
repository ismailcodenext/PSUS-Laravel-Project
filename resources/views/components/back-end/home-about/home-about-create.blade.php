<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet" />
<style>
    .financemodal .modal-content {
        width: 50% !important;
        height: auto;
    }
</style>
<div class="main-content" id="myModal">
    <div class="page-content">
          <!-- Create Product Modal Start -->
          <section id="createProduct" class="financemodal">
            <div class="modal-content">
              <a class="close-btn closes">
                <i class="fa-solid fa-xmark"></i>
              </a>
              <h2 class="heading">Add New About</h2>
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
                                                <input type="file" id="HomeAboutImg" oninput="newImg.src=window.URL.createObjectURL(this.files[0])" class="custom-file-input" aria-label="Upload Photo" />
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
                                <input type="text" placeholder="Home About Title *" id="HomeAboutTitle_1" required />
                            </div>
                            <div class="form-row">
                                    <textarea name="address_details" id="HomeAboutDescription_1" cols="30" rows="10"
                                        placeholder="Enter About Description *"></textarea>
                                </div>
                            <div class="col">
                            <div class="form-row">
                                    <textarea name="address_details" id="HomeAboutShortContent" cols="30" rows="10"
                                        placeholder="Enter About Short Content *"></textarea>
                            </div>
                                <div class="form-row">
                                    <textarea name="address_details" id="HomeAboutLongContent" cols="30" rows="10"
                                        placeholder="Enter About Long Content *"></textarea>
                                </div>

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
      $('#HomeAboutShortContent').summernote({
        placeholder: 'Enter Home About Short Content *',
        height: 100
      });
      $('#HomeAboutLongContent').summernote({
        placeholder: 'Enter Home About Long Content *',
        height: 100
      });
    }, 300); // give time for modal to fully render if dynamically shown
  });
</script>

<script>
    async function Save(event) {

    try {
        let HomeAboutTitle_1 = document.getElementById('HomeAboutTitle_1').value;
        let HomeAboutDescription_1 = document.getElementById('HomeAboutDescription_1').value;
      let HomeAboutShortContent = $('#HomeAboutShortContent').summernote('code');
      let HomeAboutLongContent = $('#HomeAboutLongContent').summernote('code');

        let imgInput = document.getElementById('HomeAboutImg');
        let imgFile = imgInput.files[0];

        // Validation
        if (HomeAboutTitle_1.length === 0) {
            errorToast("About Title Required !");
            return; // Exit the function if validation fails
        } else if (HomeAboutDescription_1.length === 0) {
            errorToast("About Description Required !");
            return;
        }
        else {
            // Creating form data for submission
            let formData = new FormData();
            formData.append('title_1', HomeAboutTitle_1);
            formData.append('title_1_desc', HomeAboutDescription_1);
            formData.append('short_content', HomeAboutShortContent);
            formData.append('long_content', HomeAboutLongContent);
            formData.append('img_url', imgFile); // Append image file

            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    ...HeaderToken().headers
                }
            };

            // Sending the form data to the server
            let res = await axios.post("/api/home-about-create", formData, config);

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
