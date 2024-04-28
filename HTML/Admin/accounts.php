<?php
$page = 'Accounts';
include('navigation.php');
include 'header.php'
?>

<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1 fill"></p>
            <p>ACCOUNT MANAGEMENT</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <div class="m-3 d-flex flex-column align-items-center accounts mt-5">
        <img class="account_image" src="../../IMAGES/Icon-2/picpic.jpg">
        <button type="button" class="btn"><i class="fa fa-edit" aria-hidden="true"></i></button>
        <div class="account_container">
            <div class="row g-3 align-items-center my-2 text-end">
                <div class="col-auto">
                    <label class="col-form-label account_label">Username: </label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control account_input">
                </div>
            </div>
            <div class="row g-3 align-items-center mb-2 text-end">
                <div class="col-auto">
                    <label class="col-form-label account_label">Email: </label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control account_input">
                </div>
            </div>
            <div class="row g-3 align-items-center mb-2 text-end">
                <div class="col-auto">
                    <label class="col-form-label account_label">Password: </label>
                </div>
                <div class="col-auto">
                    <input type="password" class="form-control account_input">
                </div>
            </div>
            <div class="text-end me-3">
                <button class="btn btn-secondary w-25">Cancel</button>
                <button class="btn btn-primary w-25">Save</button>
            </div>
        </div>
    </div>

</div>
</div>

<?php include 'footer.php' ?>