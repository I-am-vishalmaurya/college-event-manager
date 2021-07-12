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
        <div class="col-10">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php

include '../includes/joiners_footer.php';
?>