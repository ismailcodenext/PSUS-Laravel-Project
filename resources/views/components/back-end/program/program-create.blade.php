<div class="main-content" id="myModal">
    <div class="page-content">
        <!-- Create Product Modal Start -->
        <section id="createProduct" class="financemodal">
            <div class="modal-content">
                <a class="close-btn closes">
                    <i class="fa-solid fa-xmark"></i>
                </a>
                <h2 class="heading">Add New Program</h2>
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
                                                    <input type="file" id="ProgramImg" oninput="newImg.src=window.URL.createObjectURL(this.files[0])" class="custom-file-input" aria-label="Upload Photo" />
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
                                    <input type="text" placeholder="Program Title *" id="ProgramTitle" required />
                                </div>
                                <div class="col">
                                    <div class="form-row">
                                        <textarea name="address_details" id="ProgramDescription" cols="30" rows="10"
                                            placeholder="Enter Program Description *"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <input type="file" id="PhotosImage" accept="image/*" multiple />
                                </div>
                                <div class="form-row">
                                    <label for="ProgramCategory">Program Category</label>
                                    <select id="ProgramCategoryDataShow" name="ProgramCategory" required>
                                    </select>
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
    ProgramCategoryData();
    async function ProgramCategoryData() {
        try {
            let res = await axios.get("/api/program-category-list", HeaderToken());
            let optionsHtml = res.data.ProgramCategoryData.map(ProgramCategory => `<option value="${ProgramCategory.id}">${ProgramCategory.name}</option>`).join('');
            $("#ProgramCategoryDataShow").html(`<option value="none" selected>Select Program Category</option>` + optionsHtml);
        } catch (error) {
            console.error("Error fetching Program Category:", error);
        }
    }
</script>



<script>
    async function Save(event) {
        event.preventDefault(); // Prevent default form submission

        try {
            let ProgramTitle = document.getElementById('ProgramTitle').value;
            let ProgramDescription = document.getElementById('ProgramDescription').value;
            let Program_Category_id = document.getElementById('Program_Category_id').value;

            let imgInput = document.getElementById('ProgramImg');
            let imgFile = imgInput.files[0];

            let photosInput = document.getElementById('PhotosImage');
            let photosFiles = photosInput.files;
            let photosArray = [];

            for (let i = 0; i < photosFiles.length; i++) {
                photosArray.push(photosFiles[i].name); // Store filenames
            }

            // Validation
            if (!ProgramTitle) {
                errorToast("Program Title Required !");
                return;
            }
            if (!ProgramDescription) {
                errorToast("Program Description Required !");
                return;
            }
            if (photosArray.length === 0) {
                errorToast("At least one photo is required!");
                return;
            }
            if (!ProgramCategoryDataShow) {
                errorToast("Program Category Required !");
                return;
            }

            // Creating form data for submission
            let formData = new FormData();
            formData.append('title', ProgramTitle);
            formData.append('description', ProgramDescription);
            formData.append('program_category_id', ProgramCategoryDataShow);
            formData.append('featured_img', imgFile); // Append main image
            formData.append('photos', JSON.stringify(photosArray)); // Convert to JSON

            // Append actual image files
            for (let i = 0; i < photosFiles.length; i++) {
                formData.append('photos_files[]', photosFiles[i]);
            }

            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    ...HeaderToken().headers
                }
            };

            let res = await axios.post("/api/program-create", formData, config);

            if (res.data['status'] === "success") {
                successToast(res.data['message']);
                document.getElementById("signup").reset();
                closeModal();
                setTimeout(() => location.reload(), 500);
            } else {
                errorToast(res.data['message']);
            }
        } catch (e) {
            unauthorized(e.response?.status || "Unknown Error");
        }
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }
</script>