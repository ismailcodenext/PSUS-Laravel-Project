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
            <h2 class="heading">Program Category Update</h2>
            <div id="popup-modal">
                <form>
                    <div class="row">
                        <div class="col-12">

                            <div class="row">
                                <div class="col">
                                    <div class="form-row col-12">
                                        <label for="">Update Program Category *</label>
                                        <input type="text" placeholder="Update Title *" id="UpdateProgramCategoryName" required />
                                    </div>
                                    <div class="form-row col-12">
                                        <label for="">Program Category Status *</label>
                                        <select class="status-select" id="UpdateProgramCategoryStatus">
                                            <option disabled selected>Select brand status</option>
                                            <option value="Active">Active</option>
                                            <option value="InActive">Inactive</option>
                                        </select>
                                        <input class="d-none" id="updateID">
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
    async function FillUpUpdateForm(id) {
        try {
            // Set the brand id in the hidden input
            document.getElementById('updateID').value = id;
            showLoader();

            // Fetch the brand data by ID
            let res = await axios.post("/api/program-category-by-id", {
                id: id.toString()
            }, HeaderToken());
            hideLoader();

            // Populate the form with the fetched data
            let data = res.data.rows;
            document.getElementById('UpdateProgramCategoryName').value = data.name;
            document.getElementById('UpdateProgramCategoryStatus').value = data.status;
            updatePreview(document.getElementById('UpdateProgramCategoryImage'), data.img_url);
            openModal(document.getElementById('exampleModal'));

        } catch (e) {
            unauthorized(e.response.status);
        }
    }


    // Update Brand Script
    async function Update() {
        try {
            let UpdateProgramCategoryName = document.getElementById('UpdateProgramCategoryName').value;
            let UpdateProgramCategoryStatus = document.getElementById('UpdateProgramCategoryStatus').value;
            let updateID = document.getElementById('updateID').value;

            // Validate required fields

            // Prepare form data
            let formData = new FormData();
            formData.append('id', updateID);
            formData.append('name', UpdateProgramCategoryName);
            formData.append('status', UpdateProgramCategoryStatus);

            // Set the request configuration with headers
            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    ...HeaderToken().headers // Add authorization headers
                }
            };

            showLoader(); // Show loader when submitting

            // Make the request to update the brand
            let res = await axios.post("/api/program-category-update", formData, config);
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