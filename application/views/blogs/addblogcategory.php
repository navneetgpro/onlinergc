<!-- Body Start -->
<div class="wrapper">
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-clipboard-alt"></i> Category</h2>
            </div>
        </div>
        <div class="card">
            <div class="row p-4">
                <div class="col-md-6">
                    <form id="formid">
                        <h3>Category Form</h3>
                        <div class="group-form">
                            <label>Name*</label>
                            <input class="_dlor1" type="text" name="category_name" maxlength="150" placeholder="Enter Category Name" required>
                            <label id="category_name-error" class="error"></label>
                        </div>
                        <button class="_145d1 ajaxform" data-control="blog/addnewcat" data-form="formid">Submit</button>
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
                                    <td class="cell-ta"><?=$category['category_name']?></td>
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
