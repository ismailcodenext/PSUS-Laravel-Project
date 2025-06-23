<div class="main-content" id="myModal">
    <div class="page-content">
        <!-- Create Product Modal Start -->
        <section id="createProduct" class="financemodal">
            <div class="modal-content">
                <a class="close-btn closes">
                    <i class="fa-solid fa-xmark"></i>
                </a>
                <h2 class="heading">Add New Menu</h2>
                <div id="popup-modal">
                    <form id="signup" onsubmit="return Save(event)">
                        <div class="row">
                            <div class="col">
                                <div class="form-row">
                                    <input type="text" placeholder="Menu Name *" id="MenuName" required />
                                </div>
                                <div class="form-row">
                                    <input type="text" placeholder="Menu Url *" id="MenuURL" required />
                                </div>
                                <div class="form-row">
                                    <label class="country">
                                        <select name="status" id="SelectStatus" required>
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
        event.preventDefault(); // Stop form from submitting and reloading the page
        try {
            let MenuName = document.getElementById('MenuName').value;
            let MenuURL = document.getElementById('MenuURL').value;
            let SelectStatus = document.getElementById('SelectStatus').value;


            if (MenuName.length === 0) {
                errorToast("Menu Name Required!");
                return false;
            } 
            
           else if (MenuURL.length === 0) {
                errorToast("Menu URL Required!");
                return false;
            } 
            
            
            else if (SelectStatus === '' || SelectStatus === 'Select Status') {
                errorToast("Status Required!");
                return false;
            } else {
                let formData = new FormData();
                formData.append('menu_name', MenuName);
                formData.append('menu_url', MenuURL);
                formData.append('status', SelectStatus);

                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        ...HeaderToken().headers
                    }
                };

                let res = await axios.post("/api/menu-create", formData, config);

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
