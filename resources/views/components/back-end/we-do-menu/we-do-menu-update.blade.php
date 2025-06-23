<!-- Include Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet" />

<style>
    #exampleModal .modal-dialog {
        max-width: 80%;
        height: auto;
    }
</style>

<!-- Action Button Edit Modal Start -->
<section class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close-btn close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <h2 class="heading">We Do Update</h2>
            <div id="popup-modal">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-2">
                                <div class="upload-profile">
                                    <div class="item">
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-center mt-3">
                                                <img class="w-25 me-3" id="oldImg" src="{{ asset('images/default.jpg') }}" />
                                                <div>
                                                    <input oninput="updatePreview(this)" type="file" class="form-control" id="UpdateWeDoImage">
                                                    <input class="d-none" id="updateID">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-row col-lg-6">
                                    <label>Short Title *</label>
                                    <input type="text" placeholder="Update Short Title *" id="UpdateWeDoShortTitle" />
                                </div>
                                <div class="form-row col-lg-6">
                                    <label>Long Title *</label>
                                    <input type="text" placeholder="Update Long Title *" id="UpdateWeDoLongTitle" />
                                </div>
                                <div class="col">
                                    <div class="form-row col-12">
                                        <label>We Do Small Description *</label>
                                        <textarea id="UpdateWeDoDescription"></textarea>
                                    </div>
                                    <div class="form-row col-12">
                                        <label>We Do Content *</label>
                                        <textarea id="UpdateWeDoContent"></textarea>
                                    </div>
                                    <div class="form-row col-12">
                                        <label>We Do Status *</label>
                                        <select class="status-select" id="UpdateWeDoStatus">
                                            <option disabled selected>Select status</option>
                                            <option value="Active">Active</option>
                                            <option value="InActive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="actions">
                                <button onclick="Update()" class="btn-save" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Include jQuery, Axios, and Summernote JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

<script>
    $(document).ready(function () {
        setTimeout(() => {
            $('#UpdateWeDoContent').summernote({
                placeholder: 'Enter We Do Content *',
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

                        // Create the button
                        const button = ui.button({
                            contents: '<i class="note-icon-picture"></i> Replace',
                            tooltip: 'Replace Image',
                            click: function () {
                                // Use context.invoke to get current image
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
</script>

<script>
    // $(document).ready(function () {
    //     setTimeout(() => {
    //         $('#UpdateWeDoContent').summernote({
    //             placeholder: 'Enter We Do Content *',
    //             height: 300
    //         });
         
    //     }, 300);
    // });


    function updatePreview(input, imageUrl = null) {
        const oldImg = document.getElementById('oldImg');
        if (input.files && input.files[0]) {
            oldImg.src = window.URL.createObjectURL(input.files[0]);
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
            let res = await axios.post("/api/we-do-page-by-id", { id: id }, HeaderToken());
            hideLoader();

            let data = res.data.rows;
            document.getElementById('UpdateWeDoShortTitle').value = data.short_title;
            document.getElementById('UpdateWeDoLongTitle').value = data.long_title;
            document.getElementById('UpdateWeDoDescription').value = data.short_description;
            $('#UpdateWeDoContent').summernote('code', data.content);
            document.getElementById('UpdateWeDoStatus').value = data.status;
            updatePreview(document.getElementById('UpdateWeDoImage'), '/' + data.img_url);

            openModal(document.getElementById('exampleModal'));
        } catch (e) {
            unauthorized(e.response.status);
        }
    }

    async function Update() {
        try {
            let id = document.getElementById('updateID').value;
            let short_title = document.getElementById('UpdateWeDoShortTitle').value;
            let long_title = document.getElementById('UpdateWeDoLongTitle').value;
            let short_description = $('#UpdateWeDoDescription').summernote('code');
            let content = $('#UpdateWeDoContent').summernote('code');
            let status = document.getElementById('UpdateWeDoStatus').value;
            let image = document.getElementById('UpdateWeDoImage').files[0];

            let formData = new FormData();
            formData.append('id', id);
            formData.append('short_title', short_title);
            formData.append('long_title', long_title);
            formData.append('short_description', short_description);
            formData.append('content', content);
            formData.append('status', status);
            if (image) formData.append('img', image);

            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    ...HeaderToken().headers
                }
            };

            showLoader();
            let res = await axios.post("/api/we-do-page-update", formData, config);
            hideLoader();

            if (res.data.status === "success") {
                successToast(res.data.message);
                closeModal(document.getElementById('exampleModal'));
                              closeModal(document.getElementById('exampleModal'));
        setTimeout(() => location.reload(), 500);
                await getList(); // Refresh list
            } else {
                errorToast(res.data.message);
            }
        } catch (e) {
            unauthorized(e.response.status);
        }
    }
</script>
