@extends('admin/adminlayout')
@section('content')
<div class="container">
    <div class="row pb-5">
        <div class="col-md-8 order-md-1">
        @include('flashmessages')
            <h1 class="h3 mb-4 text-gray-800">ADD Vacancy</h1>
            <form action="{{route('vacancycreate')}}" method="post">
            @csrf
                <input type="hidden" name="vacancy_id" value="<?php if (isset($vacancy['vacancy_id'])) echo $vacancy['vacancy_id']  ?>">
                <div class="mb-4 field-required">
                    <label for="class_display_name">Position</label>
                    <input type="text" value="" class="form-control" id="class_display_name" placeholder="Eg: Receptionist" name="v_position" required>
                </div>
                <div class="mb-4 field-required">
                    <label for="v_description">Description</label>
                    <textarea name="v_description" placeholder="...." class="form-control" id="v_description" cols="30" rows="5" required></textarea>
                </div>
                <div class="mb-4 field-required">
                    <label for="v_type">Vacancy Type</label>
                    <select class="custom-select d-block w-100" name="v_type" id="v_type" required>
                        <option value="permanent">Permanent</option>;
                        <option value="temporary">Temporary</option>;
                    </select>
                </div>
                <div class="mb-4 field-required">
                    <label for="v_start_date">Contract Start Date</label>
                    <input type="date" value="" class="form-control" name="v_start_date" id="v_start_date" required>
                </div>
                <div class="mb-4">
                    <label for="v_end_date">Contract End Date</label>
                    <input type="date" value="" class="form-control" name="v_end_date" id="v_end_date">
                    <small>For temporary vacancy</small>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Vacancy</button>
            </form>
        </div>
    </div>
</div>
@endsection
