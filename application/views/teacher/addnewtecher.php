<style>label{display: block;}.error{color: #ed2a26 !important;}</style>
<!-- Body Start -->
<div class="wrapper">
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-award"></i> New Teacher</h2>
            </div>
        </div>
        <div class="card">
            <div class="row p-4">
                <div class="col-md-12 mb-4">
                    <form id="formid">
                        <h3>Add New Teacher</h3>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Name*</label>
                                    <input class="_dlor1" type="text" name="full_name" maxlength="100" placeholder="Enter Full name here" required>
                                    <label id="full_name-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Bio</label>
                                    <input class="_dlor1" type="text" name="bio" maxlength="50" placeholder="Enter teacher bio here" >
                                    <label id="bio-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Cantact*</label>
                                    <input class="_dlor1" type="number" name="contact_no" placeholder="Enter mobile here" required>
                                    <label id="contact_no-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Email</label>
                                    <input class="_dlor1" type="email" name="email" maxlength="100" placeholder="Enter email here" >
                                    <label id="email-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Profile Picture</label>
                                    <input class="_dlor1" type="file" name="profile_picture" >
                                    <label id="profile_picture-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                &nbsp;
                            </div>
                        </div>
                        
                        <div class="group-form">
                            <label>Teaching Experience</label>
                            <textarea style="width:100%" name="experience" cols="30" rows="4"></textarea>
                            <label id="experience-error" style="margin-bottom:0px;" class="error"></label>
                        </div>
                        <button class="_145d1 ajaxform" data-control="t/addnew_teacher" data-form="formid">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
