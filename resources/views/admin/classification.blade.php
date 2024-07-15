@extends('admin/adminlayout')
@section('content')
<div class="container">
    <div class="row pb-5">
        <div class="col-md-8 order-md-1">
            <?php
            if (isset($_GET['msg'])) {
                echo '<div class="alert alert-' . $_GET['type'] . ' alert-dismissible fade show" role="alert">' . $_GET['msg'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }
            ?>
            <h1 class="h3 mb-4 text-gray-800">Animal Classification</h1>
            <form action="{{route('classificationcreate')}}" method="post">
                @csrf
                <input type="hidden" name="class_id" value="">
                <div class="mb-4 field-required">
                    <label for="class_display_name">Classification Display Name</label>
                    <input type="text" value="" class="form-control" id="class_display_name" placeholder="Eg: Mammals" name="class_display_name" required>
                </div>
                <div class="mb-4 field-required">
                    <label for="class_table_name">Classification Table Name</label>
                    <input type="text" value="" class="form-control" id="class_table_name" placeholder="Eg: mammals" name="class_table_name" required>
                </div>
                <!-- <hr class="mb-3"> -->
              
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit"><?= isset($_GET['class_id']) ? "Edit" : "Add"  ?> Classification</button>
            </form>
        </div>
    </div>
</div>
@endsection
