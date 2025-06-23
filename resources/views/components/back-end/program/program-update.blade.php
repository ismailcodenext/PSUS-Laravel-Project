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
            <h2 class="heading">Program Update</h2>
            <div id="popup-modal">
                <form id="signup" onsubmit="return Save(event)">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-2">
                                <div class="upload-profile">
                                    <div class="item">
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-center mt-3">
                                                <!-- Old Image Preview -->
                                                <img class="w-25 me-3" id="oldImg" src="{{ asset('images/default.jpg') }}" />
                                                <div>
                                                    <input oninput="updatePreview(this)" type="file" class="form-control"
                                                        id="ProgramImg" accept="image/*" required>
                                                    <input class="d-none" id="updateID">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Program Title -->
                            <div class="row">
                                <div class="col">
                                    <div class="form-row col-12">
                                        <label for="ProgramTitle">Program Title *</label>
                                        <input type="text" placeholder="Program Title *" id="ProgramTitle" required />
                                    </div>

                                    <!-- Program Description -->
                                    <div class="form-row col-12">
                                        <label for="ProgramDescription">Program Description *</label>
                                        <textarea id="ProgramDescription" cols="30" rows="10" placeholder="Enter Program Description" required></textarea>
                                    </div>

                                    <!-- Program Photos -->
                                    <div class="form-row col-12">
                                        <label for="PhotosImage">Program Photos *</label>
                                        <input type="file" id="PhotosImage" multiple accept="image/*" required />
                                    </div>

                                    <!-- Program Category -->
                                    <div class="form-row col-12">
                                        <label for="Program_Category_id">Program Category *</label>
                                        <select id="Program_Category_id" name="ProgramCategory" required>
                                            <option value="">Select Category</option>
                                            <option value="1">Category 1</option>
                                            <option value="2">Category 2</option>
                                            <option value="3">Category 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="actions">
                                <button type="submit" class="btn-save">Submit</button>
                            </div>
                        </div>
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
            const fileURL = window.URL.createObjectURL(input.files[0]);
            oldImg.src = fileURL; // Set the new file URL
            oldImg.onload = function() {
                console.log("Image loaded successfully");
            };
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
            let res = await axios.post("/api/program-by-id", {
                id: id.toString()
            }, HeaderToken());
            hideLoader();

            // Populate the form with the fetched data
            let data = res.data.rows;
            document.getElementById('UpdateProgramTitle').value = data.title;
            document.getElementById('UpdateProgramDescription').value = data.description;
            document.getElementById('UpdatePhotosImage').value = data.photos;
            document.getElementById('Update_Program_Category_id').value = data.program_category_id;
            updatePreview(document.getElementById('UpdateProgramImage'), data.featured_img);
            openModal(document.getElementById('exampleModal'));

        } catch (e) {
            unauthorized(e.response.status);
        }
    }


    // Update Brand Script
    async function Update() {
        try {
            let UpdateProgramTitle = document.getElementById('UpdateProgramTitle').value;
            let UpdateProgramDescription = document.getElementById('UpdateProgramDescription').value;
            let UpdatePhotosImage = document.getElementById('UpdatePhotosImage').value;
            let Update_Program_Category_id = document.getElementById('Update_Program_Category_id').value;
            let UpdateProgramImage = document.getElementById('UpdateProgramImage').files[0];
            let updateID = document.getElementById('updateID').value;

            // Validate required fields

            // Prepare form data
            let formData = new FormData();
            formData.append('id', updateID);
            formData.append('title', UpdateProgramTitle);
            formData.append('description', UpdateProgramDescription);
            formData.append('photos', UpdatePhotosImage);
            formData.append('program_category_id', Update_Program_Category_id);

            // Append the image if it exists
            if (UpdateProgramImage) {
                formData.append('img', UpdateProgramImage);
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
            let res = await axios.post("/api/program-update", formData, config);
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