<style>label{display: block;}.error{color: #ed2a26 !important;}</style>
<!-- Body Start -->
<div class="wrapper">
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-video"></i> Add Video</h2>
            </div>
        </div>
        <div class="card">
            <div class="row p-4">
                <div class="col-md-12 mb-4">
                    <form id="formid">
                        <h3>Add New Video</h3>
                        <input type="hidden" name="course_id" value=<?=$id?>>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Subcategory*</label>
                                    <select class="_dlor1" name="cat_id" >
                                        <?php $categories = ['1']; foreach ($categories as $cat) { ?>
                                        <option value="<?=1?>"><?='cat'?></option>
                                        <?php } ?>
                                    </select>
                                    <label id="cat_id-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Subcategory*</label>
                                    <select class="_dlor1" name="subcat_id" >
                                        <?php $subcategories = ['1']; foreach ($subcategories as $subcat) { ?>
                                        <option value="<?=1?>"><?='subcat'?></option>
                                        <?php } ?>
                                    </select>
                                    <label id="subcat_id-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Video url*</label>
                                    <input class="_dlor1" type="text" name="video_url" maxlength="100" placeholder="Enter Video url here" required>
                                    <label id="video_url-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                        </div>
                        <button class="_145d1 ajaxform" data-control="c/addnew_video" data-form="formid">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>