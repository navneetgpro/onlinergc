<style>label{display: block;}.error{color: #ed2a26 !important;}</style>
<!-- Body Start -->
<div class="wrapper">
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-book-alt"></i> Category</h2>
            </div>
        </div>
        <div class="card">
            <div class="row p-4">
                <div class="col-md-6">
                    <form id="formid">
                        <h3>Category Form</h3>
                        <div class="group-form">
                            <label>Name*</label>
                            <input class="_dlor1" type="text" name="title" maxlength="150" placeholder="Enter Category Name" required>
                            <label id="title-error" class="error"></label>
                        </div>
                        <div class="group-form">
                            <label>Banner Image</label>
                            <input class="_dlor1" type="file" name="banner_img" >
                            <label id="banner_img-error" style="margin-bottom:0px;" class="error"></label>
                        </div>
                        <button class="_145d1 ajaxform" data-control="c/addnewcat" data-form="formid">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                <div class="table-responsive">
                        <table class="table ucp-table" id="dataserver">
                            <thead class="thead-s">
                                <tr>
                                    <th scope="col">Sn No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sn=0; foreach ($categories as $category) { $sn++; ?>
                                <tr>
                                    <td class="text-center"><?=$sn?>.</td>
                                    <td class="cell-ta"><?=$category['title']?></td>
                                    <td class="text-center">
                                        <a href="#"  target="_blank">View</a>
                                        <a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php } if(count($categories)==0){
                                    echo "<tr>
                                        <td colspan=6><center>No records found</center></td>
                                    </tr>";
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
