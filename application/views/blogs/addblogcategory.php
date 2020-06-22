<!-- Body Start -->
<div class="wrapper">
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-award"></i> Category</h2>
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
                        </div>
                        <button class="_145d1 ajaxform" data-control="blog/addnewcat" data-form="formid">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                <div class="table-responsive">
                        <table class="table ucp-table" id="dataserver">
                            <thead class="thead-s">
                                <tr>
                                    <th scope="col">Item No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#dataserver').DataTable({
        "processing": true,
        "serverSide": true,
        "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
        "dom" : 'lBfrtip',
        "buttons" : ['copy', 'csv', 'excel', 'print'],
        "order": [],
        "scrollX": true,
        "ajax": { "url": "<?=base_url('blog/catlistjson')?>", "type": "POST","data":{device:"web"} }
    });
});
</script>