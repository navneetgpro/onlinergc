<!-- Body Start -->
<div class="wrapper">
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-award"></i> Teacher Master</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mt-10">
                    <div class="card_dash1">
                        <div class="card_dash_left1">
                            <i class="uil uil-award"></i>
                            <h1>Add New Teacher</h1>
                        </div>
                        <div class="card_dash_right1">
                            <button class="create_btn_dash"
                                onclick="window.location.href = '<?=base_url('t/addnewtecher')?>';">New
                                Teacher</button>
                        </div>
                    </div>
                    <div class="table-cerificate">
                        <div class="table-responsive">
                            <table class="table ucp-table" id="dataserver">
                                <thead class="thead-s">
                                    <tr>
                                        <th scope="col">Sn No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sn=0; foreach ($teachers as $teacher){ $sn++; ?>
                                    <tr>
                                        <td class="text-center"><?=$sn?>.</td>
                                        <td class="cell-ta"><?=$teacher['full_name']?></td>
                                        <td class="cell-ta"><?=$teacher['contact_no']?></td>
                                        <td class="cell-ta"><?=$teacher['email']?></td>
                                        <td class="cell-ta"><?=$teacher['timestamp']?></td>
                                        <td class="text-center">
                                            <a href="#"  target="_blank">View</a>
                                            <a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <?php } if(count($teachers)==0){
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