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
   aria-hidden="true"
 >
   <div class="modal-dialog">
     <div class="modal-content">
       <button
         type="button"
         class="close-btn close"
         data-bs-dismiss="modal"
         aria-label="Close"
       >
         <i class="fa-solid fa-xmark"></i>
       </button>
       <h2 class="heading">Hero Slider Update</h2>
       <div id="popup-modal">
         <form>
           <div class="row">
             <div class="col-12">
               <div class="mb-2">
                 <div class="upload-profile">
                   <div class="item">
                   <div class="col-md-12">
                   <div class="d-flex align-items-center mt-3">
                                            <img class="w-25 me-3" id="oldImg"
                                                 src="{{ asset('images/default.jpg') }}" />
                                            <div>
                                                <input oninput="updatePreview(this)" type="file" class="form-control"
                                                       id="UpdateHeroSliderImage">
                                                <input class="d-none" id="updateID">
                                            </div>
                                        </div>
                                    </div>
                   </div>
                 </div>
               </div>

               <div class="form-row col-12">
                 <label for="">Update Hero Slider Title *</label>
                 <input type="text" placeholder="Update Hero Slider Title *" id="UpdateHeroSliderTitle" required />
               </div>
               <div class="form-row col-12">
                 <label for="">Update Hero Slider Description *</label>
                 <input type="text" placeholder="Update Hero Slider Description *" id="UpdateHeroSliderDescription" required />
               </div>
               <div class="form-row col-12">
                 <label for="">Hero Slider Status *</label>
                 <select class="status-select" id="UpdateHeroSliderStatus">
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
    async function updatePreview(input, imageUrl) {
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
            // Set the brand id in the hidden input
            document.getElementById('updateID').value = id;
            showLoader();

            // Fetch the brand data by ID
            let res = await axios.post("/api/hero-slider-by-id", {
                id: id.toString()
            }, HeaderToken());
            hideLoader();

            // Populate the form with the fetched data
            let data = res.data.rows;
            document.getElementById('UpdateHeroSliderTitle').value = data.title;
            document.getElementById('UpdateHeroSliderDescription').value = data.discription;
            document.getElementById('UpdateHeroSliderStatus').value = data.status;
            updatePreview(document.getElementById('UpdateHeroSliderImage'), data.img_url);
            openModal(document.getElementById('exampleModal'));

        } catch (e) {
            unauthorized(e.response.status);
        }
    }


    // Update Brand Script
    async function Update() {
        try {
            let UpdateHeroSliderTitle = document.getElementById('UpdateHeroSliderTitle').value;
            let UpdateHeroSliderDescription = document.getElementById('UpdateHeroSliderDescription').value;
            let UpdateHeroSliderImage = document.getElementById('UpdateHeroSliderImage').files[0];
            let UpdateHeroSliderStatus = document.getElementById('UpdateHeroSliderStatus').value;
            let updateID = document.getElementById('updateID').value;

            // Validate required fields
       
            // Prepare form data
            let formData = new FormData();
            formData.append('id', updateID);
            formData.append('title', UpdateHeroSliderTitle);
            formData.append('discription', UpdateHeroSliderDescription);
            formData.append('status', UpdateHeroSliderStatus);

            // Append the image if it exists
            if (UpdateHeroSliderImage) {
                formData.append('img', UpdateHeroSliderImage);
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
            let res = await axios.post("/api/hero-slider-update", formData, config);
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
