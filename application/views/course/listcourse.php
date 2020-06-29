<!-- Body Start -->
<div class="wrapper">
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-video"></i> Course</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mt-10">
                    <div class="card_dash1">
                        <div class="card_dash_left1">
                            <i class="uil uil-award"></i>
                            <h1>Add New course</h1>
                        </div>
                        <div class="card_dash_right1">
                            <button class="create_btn_dash"
                                onclick="window.location.href = '<?=base_url('c/addcourse')?>';">Add
                                Course</button>
                        </div>
                    </div>
                    <div class="table-cerificate">
                        <div class="table-responsive">
                            <table class="table ucp-table" id="dataserver">
                                <thead class="thead-s">
                                    <tr>
                                        <th scope="col">Sn No.</th>
                                        <th scope="col">Teacher Name</th>
                                        <th scope="col">Course Title</th>
                                        <th scope="col">Sale Price</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Add Video</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sn=0; foreach ($courses as $course){ $sn++; ?>
                                    <tr>
                                        <td class="text-center"><?=$sn?>.</td>
                                        <td class="cell-ta"><?='teacher name'?></td>
                                        <td class="cell-ta"><?=$course['course_title']?></td>
                                        <td class="cell-ta">Rs <?=$course['sale_price']?></td>
                                        <td class="cell-ta"><?=$course['created_at']?></td>
                                        <td class="cell-ta"><a target="_blank" href="<?=base_url('c/addvideo/'.$course['id'])?>">Add new Video</a></td>
                                        <td class="text-center">
                                            <a href="#" target="_blank">View</a>
                                            <a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <?php } if(count($courses)==0){
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
</div>