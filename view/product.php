<section class="working-panel">
    <div class="container-fluid">
        <h1 class="display-4">Welcome to dashboard</h1>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <h4 class="font-weight-light"><i class="fas fa-dolly"></i> All category</h4>
                        <hr>
                        <h5>
                            <b>33333</b>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h4 class="font-weight-light"><i class="fas fa-dolly-flatbed"></i> All Brand</h4>
                        <hr>
                        <h5>
                            <b>33333</b>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h4 class="font-weight-light"><i class="fas fa-users"></i> All user</h4>
                        <hr>
                        <h5>
                            <b>33333</b>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h4 class="font-weight-light"><i class="fas fa-truck"></i> All order</h4>
                        <hr>
                        <h5>
                            <b>33333</b>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- all order table -->
        <div class="all-order mt-5">
            <h2>New orders</h2>
            <hr>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="text-white bg-success">
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Control</th>
                    </tr>
                </thead>
                <?php
                foreach ($kq as $pro) {
                    if ($pro['visible'] == 1) {
                        $visible = "Đang kích khoạt";
                    } else
                        $visible = "Ngưng kích hoạt";
                    echo '
                            <tbody>
                            <tr>
                                <th scope="row">' . $pro['id'] . '</th>
                                <td>' . $pro['name_dm'] . '</td>
                                <td>' . $pro['name'] . '</td>
                                <td><span class="badge badge-danger">' . $visible . '</span></td>
                                <input type="checkbox" id="edit" hidden />
                                <td> <a class="badge badge-secondary" href="admin.php?act=updateform&id=' . $dm['id'] . '"><label class="close-p" for="edit">Sửa</label></a>  | <a class="badge badge-danger" href="admin.php?act=deldm&id=' . $dm['id'] . '"> Xóa</a></td>
                            </tr>
                            
                        </tbody>';
                    $i++;
                }
                ?>
            </table>
            <label class="blur" for="edit"></label>
            <div class="order-page">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <form class="change-p container col-6 shadow-lg p-3 mb-5 bg-white rounded" method="post">
                <h2 class="text-white bg-info text-center py-2 text-uppercase">Change product</h2>
                <div class="form-group">
                    <label for="">Name Product</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-warning">update</button>
                    <button type="button" class="btn btn-danger"><label class="close-p" for="edit">Close</label></button>
                </div>
            </form>
        </div>
    </div>
</section>
</div>
<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.menu-btn').click(function() {
            $('.sidebar-admin').css({
                'width': '70px',
            });
            $('.text-link').hide();
            $('.close-btn').show();
            $('.menu-btn').hide();
        });
        $('.close-btn').click(function() {
            $('.sidebar-admin').css({
                'width': '300px',
            });
            $('.text-link').show();
            $('.close-btn').hide();
            $('.menu-btn').show();
        })
    });
        // var popbox = document.querySelector('.close-p');
        // popbox.onclick = function() {
        //     document.querySelector('#edit').checked;
        // }
        
    // document.getElementById("linkbox").onclick = function () {
    //     popbox.style.display = "block";
    // };

    // ???.onclick = function () {
    //     popbox.style.display = "none";
    // };
</script>
</body>

</html>