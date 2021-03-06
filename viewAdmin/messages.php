<?php
require_once('../controller/UserController.php');
$controller = new UserController();
$list = $controller->getMessages($controller->conn);
?>
<?php include('../include/sidemenu.php'); ?>
</div>
<!-- /col-3 -->
<div class="col-sm-9">

    <!-- column 2 -->
    <a href="#"><strong><i class="fa fa-wrench" aria-hidden="true"></i> Gérer les messages des utilisateurs</strong></a>
    <hr>

    <div class="row">

        <!--/col-->
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>sujet</th>
                        <th>contenu</th>
                        <th>id utilisateur</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($list as $l) { ?>
                        <tr>
                            <td><?php echo $l['id']; ?></td>
                            <td><?php echo $l['sujet']; ?></td>
                            <td><?php echo $l['contenu']; ?></td>
                            <td><?php echo $l['id_user']; ?></td>
                            <td>
                                <a href="<?php echo "../controller/UserController.php?id=52&id_message=" . $l['id']; ?>"><i
                                            class="fa fa-trash" aria-hidden="true"></i> </a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/col-span-6-->

    </div>
    <!--/row-->
</div>
<!--/col-span-9-->
</div>
</div>
<!-- /Main -->

<footer class="text-center">Copyright © 2017 ACTULYOUM Inc. All Rights Reserved</footer>

<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->
<!-- script references -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>