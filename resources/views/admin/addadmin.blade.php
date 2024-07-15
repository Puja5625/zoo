@extends('admin/adminlayout')
@section('content')

<div class="container">
    <div class="row pb-5">
        <div class="col-md-8 order-md-1">
        @include('flashmessages')
            <h1 class="h3 mb-4 text-gray-800"><?= isset($_GET['account_id']) ? "Edit" : "Add"  ?> User Account</h1>
            <form action="{{route('admincreate')}}" method="post">
            @csrf
                <input type="hidden" name="admin_id" value="<?php if (isset($account['admin_id'])) echo $account['admin_id']  ?>">
                <div class="mb-4 field-required">
                    <label for="class_display_name">Full Name</label>
                    <input type="text" value="" class="form-control" id="class_display_name" placeholder="" name="admin_name" required>
                </div>

                <div class="mb-4 field-required">
                    <label for="admin_email">Email</label>
                    <input type="email" value="" class="form-control" id="admin_email" placeholder="" name="admin_email" required>
                </div>



                    <div class="mb-4 field-required">
                        <label for="v_start_date">Password</label>
                        <input type="password" value="" class="form-control" name="admin_pass" id="v_start_date" required>
                    </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit"><?= isset($_GET['account_id']) ? "Edit" : "Add"  ?> Account</button>
            </form>
        </div>
    </div>
</div>

@endsection
