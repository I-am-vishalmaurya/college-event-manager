<?php
include '../includes/joiners_header.php';
include '../includes/joiners_navbar.php';
?>
<div class="d-sm-flex align-items-center justify-content-between my-4">
    <h1 class="h3 mb-0 text-gray-800">Account details</h1>
</div>
<div class="container">
    <div class="row my-4">
        <div class="col-2 my-5 update__profile__pic">
            <img src="../profile_placeholder.png" alt="" class="account__image">
            <div class="image__placeholder">
            <label class="-label" for="file">
                <i class='bx bxs-camera'></i>
                <span>Change Image</span>
            </label>
            <input id="file" type="file" onchange="loadFile(event)" style="display: none;" />
            </div>
        </div>
    </div>
</div>
<?php

include '../includes/joiners_footer.php';
?>