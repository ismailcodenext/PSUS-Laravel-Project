<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet" />

<style>
  #exampleModal .modal-dialog {
    max-width: 80%;
    height: auto;
  }
</style>

<!-- Modal Start -->
<section class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close-btn close" data-bs-dismiss="modal" aria-label="Close">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <h2 class="heading">Home About Update</h2>
      <div id="popup-modal">
        <form onsubmit="return false;">
          <div class="row">
            <div class="col-12">
              <!-- Image preview and input -->
              <div class="mb-2">
                <div class="upload-profile">
                  <div class="d-flex align-items-center mt-3">
                    <img class="w-25 me-3" id="oldImg" src="{{ asset('images/default.jpg') }}" />
                    <div>
                      <input type="file" class="form-control" id="UpdateHomeAboutImage" oninput="updatePreview(this)" />
                      <input class="d-none" id="updateID" />
                    </div>
                  </div>
                </div>
              </div>

              <!-- Title -->
              <div class="form-row col-12">
                <label>Update Home About Title *</label>
                <input type="text" id="UpdateHomeAboutTitle_1" placeholder="Update Home About Title-1 *" required />
              </div>

              <!-- Title Description -->
              <div class="form-row col-12">
                <label>Update Home About Description *</label>
                <textarea id="UpdateHomeAboutTitle_1_Desc" placeholder="Enter About Title Description *"></textarea>
              </div>

              <!-- Short Content -->
              <div class="form-row col-12">
                <label>Update Short Content *</label>
                <textarea id="UpdateHomeAboutShortDescription" placeholder="Enter About Short Content *"></textarea>
              </div>

              <!-- Long Content (with Summernote) -->
              <div class="form-row col-12">
                <label>Update Long Content *</label>
                <textarea id="UpdateHomeAboutLongDescription" placeholder="Enter About Long Content *"></textarea>
              </div>
            </div>
          </div>

          <!-- Submit -->
          <div class="actions">
            <button type="button" onclick="Update()" class="btn-save">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- JS Dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

<script>
  $(document).ready(function () {
    setTimeout(() => {
      $('#UpdateHomeAboutShortDescription').summernote({
        placeholder: 'Update Home About Short Description *',
        height: 300
      });
      $('#UpdateHomeAboutLongDescription').summernote({
        placeholder: 'Enter Long Content *',
        height: 300,
        popover: {
          image: [
            ['custom', ['replaceImage']],
            ['resize', ['resizeFull', 'resizeHalf', 'resizeQuarter']],
            ['float', ['floatLeft', 'floatRight', 'floatNone']],
            ['remove', ['removeMedia']]
          ]
        },
        buttons: {
          replaceImage: function (context) {
            const ui = $.summernote.ui;
            const button = ui.button({
              contents: '<i class="note-icon-picture"></i> Replace',
              tooltip: 'Replace Image',
              click: function () {
                const $img = $(context.invoke('restoreTarget'));
                if (!$img || $img.length === 0) {
                  alert("No image selected");
                  return;
                }

                const fileInput = $('<input type="file" accept="image/*" style="display:none">');
                $('body').append(fileInput);

                fileInput.on('change', function () {
                  const file = this.files[0];
                  if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                      const newImg = $('<img>')
                        .attr('src', e.target.result)
                        .attr('style', $img.attr('style'))
                        .attr('class', $img.attr('class'));
                      $img.replaceWith(newImg);
                    };
                    reader.readAsDataURL(file);
                  }
                  fileInput.remove();
                });

                fileInput.click();
              }
            });
            return button.render();
          }
        }
      });
    }, 300);
  });

  function updatePreview(input, imageUrl = null) {
    const oldImg = document.getElementById('oldImg');
    if (input.files && input.files[0]) {
      oldImg.src = URL.createObjectURL(input.files[0]);
    } else if (imageUrl) {
      oldImg.src = imageUrl;
    } else {
      oldImg.src = "{{ asset('images/default.jpg') }}";
    }
  }

  async function FillUpUpdateForm(id) {
    try {
      document.getElementById('updateID').value = id;
      showLoader();
      let res = await axios.post("/api/home-about-by-id", { id: id }, HeaderToken());
      hideLoader();
      let data = res.data.rows;

      document.getElementById('UpdateHomeAboutTitle_1').value = data.title_1;
      document.getElementById('UpdateHomeAboutTitle_1_Desc').value = data.title_1_desc;
      $('#UpdateHomeAboutShortDescription').summernote('code', data.short_content);
      $('#UpdateHomeAboutLongDescription').summernote('code', data.long_content);
      updatePreview(document.getElementById('UpdateHomeAboutImage'), `/${data.img_url}`);

      openModal(document.getElementById('exampleModal'));
    } catch (e) {
      unauthorized(e.response.status);
    }
  }

  async function Update() {
    try {
      const id = document.getElementById('updateID').value;
      const title_1 = document.getElementById('UpdateHomeAboutTitle_1').value;
      const title_1_desc = document.getElementById('UpdateHomeAboutTitle_1_Desc').value;
      const short_content = document.getElementById('UpdateHomeAboutShortDescription').value;
      const long_content = $('#UpdateHomeAboutLongDescription').summernote('code');
      const img = document.getElementById('UpdateHomeAboutImage').files[0];

      let formData = new FormData();
      formData.append('id', id);
      formData.append('title_1', title_1);
      formData.append('title_1_desc', title_1_desc);
      formData.append('short_content', short_content);
      formData.append('long_content', long_content);
      if (img) formData.append('img', img);

      const config = {
        headers: {
          'Content-Type': 'multipart/form-data',
          ...HeaderToken().headers
        }
      };

      showLoader();
      let res = await axios.post("/api/home-about-update", formData, config);
      hideLoader();

      if (res.data.status === "success") {
        successToast(res.data.message);
        closeModal(document.getElementById('exampleModal'));
        await getList(); // reload updated list
      } else {
        errorToast(res.data.message);
      }
    } catch (e) {
      unauthorized(e.response.status);
    }
  }
</script>
