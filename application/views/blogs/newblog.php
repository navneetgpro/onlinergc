<style>label{display: block;}.error{color: #ed2a26 !important;}</style>
<!-- Body Start -->
<div class="wrapper">
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-clipboard-alt"></i> New Blog</h2>
            </div>
        </div>
        <div class="card">
            <div class="row p-4">
                <div class="col-md-12 mb-4">
                    <form id="formid">
                        <h3>Add New Blog</h3>
                        <div class="form-row">
                            <div class="col-md-6">
                            <div class="group-form">
                                <label>Subcategory*</label>
                                <select class="_dlor1" name="subcat_id" >
                                    <?php foreach ($subcategories as $subcat) { ?>
                                    <option value="<?=$subcat['id']?>"><?=$subcat['subcat_name']?></option>
                                    <?php } ?>
                                </select>
                                <label id="subcat_id-error" style="margin-bottom:0px;" class="error"></label>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="group-form">
                                <label>Title*</label>
                                <input class="_dlor1" type="text" name="blog_title" maxlength="150" placeholder="Enter Blog Title here" required>
                                <label id="blog_title-error" style="margin-bottom:0px;" class="error"></label>
                            </div>
                            </div>
                        </div>
                        <div class="group-form">
                            <label>Youtube Video</label>
                            <input class="_dlor1" type="text" name="youtube_video" maxlength="150" placeholder="Enter Video URL">
                            <label id="youtube_video-error" style="margin-bottom:0px;" class="error"></label>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>Thumbnail</label>
                                    <input class="_dlor1" type="file" name="thumbnail" >
                                    <label id="thumbnail-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group-form">
                                    <label>PDF</label>
                                    <input class="_dlor1" type="file" name="pdf" >
                                    <label id="pdf-error" style="margin-bottom:0px;" class="error"></label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="group-form">
                            <label>Blog Details</label>
                            <textarea style="width:100%" name="blog_details" cols="30" rows="10"></textarea>
                            <label id="blog_details-error" style="margin-bottom:0px;" class="error"></label>
                        </div>
                        <button class="_145d1 ajaxform" data-control="blog/addnew_blog" data-form="formid">Submit</button>
                    </form>
                </div>
                <div class="col-md-12">
                <div class="table-responsive">
                        <table class="table ucp-table" id="dataserver">
                            <thead class="thead-s">
                                <tr>
                                    <th scope="col">Sn No.</th>
                                    <th scope="col">Subcategory</th>
                                    <th scope="col">Titile</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sn=0; foreach ($listblogs as $blog){ $sn++; ?>
                                <tr>
                                    <td class="text-center"><?=$sn?>.</td>
                                    <td class="cell-ta"><?=$blog['subcat_name']?></td>
                                    <td class="cell-ta"><?=$blog['blog_title']?></td>
                                    <td class="cell-ta"><?=$blog['timestamp']?></td>
                                    <td class="text-center">
                                        <a href="#"  target="_blank">View</a>
                                        <a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
