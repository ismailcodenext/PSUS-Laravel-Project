<div class="main-content" id="myModal">
    <div class="page-content">
        <!-- Create Product Modal Start -->
        <section id="createProduct" class="financemodal">
            <div class="modal-content">
                <a class="close-btn closes">
                    <i class="fa-solid fa-xmark"></i>
                </a>
                <h2 class="heading">Add New Program Category</h2>
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
                                                    <input type="file" id="ProgramCategoryImg" oninput="newImg.src=window.URL.createObjectURL(this.files[0])" class="custom-file-input" aria-label="Upload Photo" />
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
                                    <input type="text" placeholder="Program Category Name*" id="ProgramCategoryName" required />
                                </div>
                                <div class="form-row">
                                    <label class="country">
                                        <select name="status" id="ProgramCategoryStatus" required>
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
            let ProgramCategoryName = document.getElementById('ProgramCategoryName').value;
            let ProgramCategoryStatus = document.getElementById('ProgramCategoryStatus').value;

            let imgInput = document.getElementById('ProgramCategoryImg');
            let imgFile = imgInput.files[0];

            // Validation
            if (ProgramCategoryName.length === 0) {
                errorToast("Program Category Name Required !");
                return; // Exit the function if validation fails
            } else if (ProgramCategoryStatus.length === 0) {
                errorToast("Program Category Status Required !");
                return;
            } else {
                // Creating form data for submission
                let formData = new FormData();
                formData.append('name', ProgramCategoryName);
                formData.append('status', ProgramCategoryStatus);
                formData.append('img_url', imgFile); // Append image file

                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        ...HeaderToken().headers
                    }
                };

                // Sending the form data to the server
                let res = await axios.post("/api/program-category-create", formData, config);

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