<style>label{display: block;}.error{color: #ed2a26 !important;}</style>
<!-- Body Start -->
<div class="wrapper">
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-video"></i> Add Course</h2>
            </div>
        </div>
        <div class="card">
            <div class="row p-4">
                <div class="col-md-12 mb-4">
                    <form id="formid">
                        <h3>Add New Course</h3>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Subcategory*</label>
                                    <select class="_dlor1" name="subcat_id" >
                                        <?php foreach ($subcategories as $subcat) { ?>
                                        <option value="<?=$subcat['id']?>"><?=$subcat['subcategory']?></option>
                                        <?php } ?>
                                    </select>
                                    <label id="subcat_id-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Course Title*</label>
                                    <input class="_dlor1" type="text" name="course_title" maxlength="100" placeholder="Enter Course Title here" required>
                                    <label id="course_title-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Sale Price*</label>
                                    <input class="_dlor1" type="number" name="sale_price" placeholder="Enter Sale Price here" required>
                                    <label id="sale_price-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Actual Price</label>
                                    <input class="_dlor1" type="number" name="actual_price" maxlength="100" placeholder="Enter Actual Price here" >
                                    <label id="actual_price-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Thumbnail Image</label>
                                    <input class="_dlor1" type="file" name="banner_img" >
                                    <label id="banner_img-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Demo Video</label>
                                    <input class="_dlor1" type="text" name="demo_video" maxlength="100" placeholder="Enter Demo video here" >
                                    <label id="email-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="col-md-3">
                                <h3>Search Tags</h3>
                                <table id="searchtag" width="100%">
                                    <thead>
                                        <tr>
                                            <td align="right"><input name="searchtag[]" type="text" placeholder="Enter Tag here"></td>
                                            <td align="left"><button type="button" class="ml-2" id="addnewtag">Add new</button></td>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="group-form">
                            <label>Description</label>
                            <textarea style="width:100%" name="description" cols="30" placeholder="Enter Short Description of course here..." rows="4"></textarea>
                            <label id="description-error" style="margin-bottom:0px;" class="error"></label>
                        </div>
                        <button class="_145d1 ajaxform" data-control="c/addnew_course" data-form="formid">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click','#deltag',function(){
        const el = this;
        $(el).closest('tr').css({'background':'#ff6347','box-shadow':'3px 4px 20px 0px #fbd5d5'}).fadeOut(150, function () {
            $(this).remove();
        });
    });
    $(document).on('click','#addnewtag',function(){
        $('#searchtag tr:last').after(`
            <tr>
                <td align="right"><input name="searchtag[]" type="text" placeholder="Enter Tag here"></td>
                <td align="left"><button type="button" class="ml-2" id="deltag">&nbsp;X&nbsp;</button></td>
            </tr>
        `);
    })
</script>