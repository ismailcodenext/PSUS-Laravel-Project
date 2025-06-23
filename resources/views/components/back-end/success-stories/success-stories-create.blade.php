<div class="main-content" id="myModal">
    <div class="page-content">
        <!-- Create Product Modal Start -->
        <section id="createProduct" class="financemodal">
            <div class="modal-content">
                <a class="close-btn closes">
                    <i class="fa-solid fa-xmark"></i>
                </a>
                <h2 class="heading">Add New Success Stories</h2>
                <div id="popup-modal">
                    <form id="signup" onsubmit="return Save(event)">
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <div class="upload-profile">
                                        <div class="item">
                                            <div class="img-box">
                                                <!-- Add width and height for better preview -->
                                                <img id="newImg" src="{{ asset('back-end/assets/icons/upload-img.svg') }}" alt="Preview" />
                                            </div>
                                            <div class="profile-wrapper">
                                                <label class="custom-file-input-wrapper">
                                                    <input type="file" id="NewsEventBannerImg" class="custom-file-input" aria-label="Upload Photo" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <div class="upload-profile">
                                        <div class="item">
                                            <!-- Container to show image previews -->
                                            <div class="profile-wrapper">
                                                <label class="custom-file-input-wrapper">
                                                    <input type="file" id="NewsEventImg" multiple class="custom-file-input" aria-label="Upload Photos" />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="img-box" id="previewContainer" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                            <!-- Default placeholder -->
                                            <img src="{{ asset('back-end/assets/icons/upload-img.svg') }}" alt="Default" style="width: 100px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-row">
                                    <input type="text" placeholder="News Event Title *" id="NewsEventTitle" required />
                                </div>
                                <div class="col">
                                    <div class="form-row">
                                        <textarea name="address_details" id="NewsEventDescription" cols="30" rows="10"
                                            placeholder="Enter Slider Description *"></textarea>
                                    </div>


                                </div>
                                <div class="form-row">
                                    <label class="country">
                                        <select name="status" id="NewsEventStatus" required>
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
    // Banner Image Preview
    document.addEventListener("DOMContentLoaded", function () {
        const bannerInput = document.getElementById("NewsEventBannerImg");
        const previewImg = document.getElementById("newImg");

        bannerInput.addEventListener("change", function () {
            if (this.files && this.files[0]) {
                previewImg.src = URL.createObjectURL(this.files[0]);
            }
        });

        // Multiple Image Preview
        const multiImgInput = document.getElementById("NewsEventImg");
        const previewContainer = document.getElementById("previewContainer");

        multiImgInput.addEventListener("change", function () {
            previewContainer.innerHTML = '';

            Array.from(this.files).forEach(file => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const img = document.createElement("img");
                        img.src = e.target.result;
                        img.style.width = "100px";
                        img.style.marginRight = "10px";
                        img.style.objectFit = "cover";
                        img.style.border = "1px solid #ddd";
                        img.style.borderRadius = "5px";
                        previewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        // Close Modal on Close Button Click
        document.querySelectorAll('.close-btn.closes').forEach(btn => {
            btn.addEventListener('click', () => {
                closeModal(document.getElementById('myModal'));
            });
        });
    });

    // Define Modal Close Function
    function closeModal(modalElement) {
        if (modalElement) {
            modalElement.style.display = "none";
        }
    }

    // Save Form Submission
    async function Save(event) {
        event.preventDefault();

        try {
            let NewsEventTitle = document.getElementById('NewsEventTitle').value.trim();
            let NewsEventDescription = document.getElementById('NewsEventDescription').value.trim();
            let NewsEventStatus = document.getElementById('NewsEventStatus').value;

            let imgBannerInput = document.getElementById('NewsEventBannerImg');
            let imgInput = document.getElementById('NewsEventImg');

            if (NewsEventTitle === '') return errorToast("Title Required!");
            if (NewsEventDescription === '') return errorToast("Description Required!");
            if (NewsEventStatus === '') return errorToast("Status Required!");

            let formData = new FormData();
            formData.append('title', NewsEventTitle);
            formData.append('discription', NewsEventDescription);
            formData.append('status', NewsEventStatus);

            if (imgBannerInput.files[0]) {
                formData.append('banner_image', imgBannerInput.files[0]);
            }

            for (let i = 0; i < imgInput.files.length; i++) {
                formData.append('img_url[]', imgInput.files[i]);
            }

            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    ...HeaderToken().headers
                }
            };

            let res = await axios.post("/api/success-stories-create", formData, config);

            if (res.data['status'] === "success") {
                successToast(res.data['message']);
                document.getElementById("signup").reset();
                closeModal(document.getElementById('myModal'));

                // Force reload after short delay
                setTimeout(() => {
                    location.reload();
                }, 500);
            } else {
                errorToast(res.data.message);
            }
        } catch (e) {
            unauthorized(e.response?.status || 500);
        }
    }
</script>
