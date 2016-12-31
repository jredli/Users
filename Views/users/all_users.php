<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 text-center">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td><b>Username<b></td>
                    <td><b>Date registred</b></td>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($this->all_users as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $value['username'] . '</td>';
                    echo '<td>' . $value['reg_date'] . '</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->