<style>
  #exampleModal .modal-dialog {
    max-width: 40%;
    height: auto;
  }
</style>

<!-- Action Button Edit Modal -->
<section class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close-btn close" data-bs-dismiss="modal" aria-label="Close">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <h2 class="heading">Mission Vision Update</h2>
      <div id="popup-modal">
        <form id="updateMissionVisionForm">
          <div class="row">
            <div class="col-12">
              <div class="mb-2">
                <div class="upload-profile">
                  <div class="item">
                    <div class="col-md-12">
                      <div class="d-flex align-items-center mt-3">
                        <img class="w-25 me-3" id="oldImg" src="{{ asset('images/default.jpg') }}" />
                        <div>
                          <input type="file" class="form-control" id="UpdateMissionVisionImage" onchange="updatePreview(this)">
                          <input type="hidden" id="updateID">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-row col-12">
                <label>Update Mission Title *</label>
                <input type="text" placeholder="Update Mission Vision Title *" id="UpdateMissionTitle" required />
              </div>
              <div class="form-row col-12">
                <label>Update Mission Description *</label>
                <input type="text" placeholder="Update Mission Description *" id="UpdateMission_Desc" required />
              </div>
              <div class="form-row col-12">
                <label>Update Vision Title *</label>
                <input type="text" placeholder="Update Vision Title *" id="UpdateVisionTitle" required />
              </div>
              <div class="form-row col-12">
                <label>Update Vision Description *</label>
                <input type="text" placeholder="Update Vision Description *" id="UpdateVision_Desc" required />
              </div>
              <div class="form-row col-12">
                <label>Hero Slider Status *</label>
                <select class="status-select" id="UpdateMissionVisionStatus">
                  <option disabled selected>Select brand status</option>
                  <option value="Active">Active</option>
                  <option value="InActive">Inactive</option>
                </select>
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
  function updatePreview(input) {
    const oldImg = document.getElementById('oldImg');
    if (input.files && input.files[0]) {
      oldImg.src = window.URL.createObjectURL(input.files[0]);
    } else {
      oldImg.src = "{{ asset('images/default.jpg') }}";
    }
  }

  async function FillUpUpdateForm(id) {
    try {
      document.getElementById('updateID').value = id;
      showLoader();

      let res = await axios.post("/api/mission-vision-by-id", {
        id: id.toString()
      }, HeaderToken());
      hideLoader();

      let data = res.data.rows;
      document.getElementById('UpdateMissionTitle').value = data.misson_title;
      document.getElementById('UpdateMission_Desc').value = data.misson_desc;
      document.getElementById('UpdateVisionTitle').value = data.visions_title;
      document.getElementById('UpdateVision_Desc').value = data.visions_desc;
      document.getElementById('UpdateMissionVisionStatus').value = data.status;

      document.getElementById('oldImg').src = data.img_url ? data.img_url : "{{ asset('images/default.jpg') }}";
      openModal(document.getElementById('exampleModal'));

    } catch (e) {
      unauthorized(e.response.status);
    }
  }

  async function Update() {
    try {

      let UpdateMissionTitle = document.getElementById('UpdateMissionTitle').value;
      let UpdateMission_Desc = document.getElementById('UpdateMission_Desc').value;
      let UpdateVisionTitle = document.getElementById('UpdateVisionTitle').value;
      let UpdateVision_Desc = document.getElementById('UpdateVision_Desc').value;
      let UpdateMissionVisionStatus = document.getElementById('UpdateMissionVisionStatus').value;
      let UpdateMissionVisionImage = document.getElementById('UpdateMissionVisionImage').files[0];
      let updateID = document.getElementById('updateID').value;

      if (!UpdateMissionTitle || !UpdateMission_Desc || !UpdateVisionTitle || !UpdateVision_Desc || !UpdateMissionVisionStatus) {
        errorToast("All fields are required!");
        return;
      }

      let formData = new FormData();
      formData.append('id', updateID);
      formData.append('misson_title', UpdateMissionTitle);
      formData.append('misson_desc', UpdateMission_Desc);
      formData.append('visions_title', UpdateVisionTitle);
      formData.append('visions_desc', UpdateVision_Desc);
      formData.append('status', UpdateMissionVisionStatus);

      if (UpdateMissionVisionImage) {
        formData.append('img', UpdateMissionVisionImage);
      }

      const config = {
        headers: {
          'content-type': 'multipart/form-data',
          ...HeaderToken().headers
        }
      };

      showLoader();
      let res = await axios.post("/api/mission-vision-update", formData, config);
      hideLoader();

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