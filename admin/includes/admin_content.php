<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>
            <?php
            $found_user = User::find_user_by_id(1);

            $user = User::instantiation($found_user);
 
            $user = new Storie();
            // echo $user->username . '<br/>';
            // echo $user->first_name . '<br/>';
            // echo $user->last_name . '<br/>';
            // echo $user->password . '<br/>';

            ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->